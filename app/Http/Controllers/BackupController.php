<?php

namespace App\Http\Controllers;
use App\Models\Classroom;
use App\Models\Lesson;
use App\Models\Notification;
use App\Models\Timetable;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
class BackupController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $auth = Auth::user()->auth;
            if($auth != 1) abort('404');
            return $next($request);
        });

//        setlocale(LC_ALL, 'tr_TR.UTF-8', 'tr_TR', 'tr', 'turkish');
    }
    public function index()
    {
        $backups = glob('backups/' . "*.sql");
        $foldersize = 0;
        foreach ($backups as $backup){
            $foldersize += filesize($backup);
        }
        $Users=User::get();
        $notify = new \stdClass();
        $notify->content = Notification::orderBy('created_at','desc')->get();
        $notify->count = count(Notification::get());
        $backups=glob('backups/*.sql');
        return view("system.backup", [
            'users_list'=>$Users,
            'backups'=>$backups,
            'foldersize'=>$foldersize,
            'notify'=>$notify,
        ]);
    }

    public function restore(Request $request)
    {
        DB::unprepared("SET FOREIGN_KEY_CHECKS = 0;");
        Lesson::truncate();
        Classroom::truncate();
        Timetable::truncate();
        Notification::truncate();
        $file= 'backups/'.$request->get('file');
        $sql = file_get_contents($file);
        DB::unprepared($sql);
        DB::unprepared("SET FOREIGN_KEY_CHECKS = 1;");

        return redirect(route('backup'));
    }

    public function upload(Request $request)
    {
        $request->validate([
            'backup' => 'required|max:2048',
        ]);
        $request->backup->move(public_path('/backups'), $request->file('backup')->getClientOriginalName());
        return redirect()->back()->withErrors(['upload'=>'success']);
    }

    public function download(Request $request)
    {
        $file= 'backups/'.$request->get('file');
        return response()->download($file);
    }

    public function delete(Request $request)
    {
        $file= 'backups/'.$request->get('file');
        unlink($file);
        return redirect(route('backup'));
    }

    public function backup()
    {
        $mysqlHostName      = env('DB_HOST');
        $mysqlUserName      = env('DB_USERNAME');
        $mysqlPassword      = env('DB_PASSWORD');
        $DbName             = env('DB_DATABASE');
        $backup_name        = "mybackup.sql";
        $tables             = array("classroom","lesson","timetable","notification"); //here your tables...

        $connect = new \PDO("mysql:host=$mysqlHostName;dbname=$DbName;charset=utf8", "$mysqlUserName", "$mysqlPassword",array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
        $get_all_table_query = "SHOW TABLES";
        $statement = $connect->prepare($get_all_table_query);
        $statement->execute();
        $result = $statement->fetchAll();


        $output = '';
        foreach($tables as $table)
        {
//            $show_table_query = "SHOW CREATE TABLE " . $table . "";
//            $statement = $connect->prepare($show_table_query);
//            $statement->execute();
//            $show_table_result = $statement->fetchAll();
//
//            foreach($show_table_result as $show_table_row)
//            {
//                $output .= "\n\n" . $show_table_row["Create Table"] . ";\n\n";
//            }
            $select_query = "SELECT * FROM " . $table . "";
            $statement = $connect->prepare($select_query);
            $statement->execute();
            $total_row = $statement->rowCount();

            for($count=0; $count<$total_row; $count++)
            {
                $single_result = $statement->fetch(\PDO::FETCH_ASSOC);
                $table_column_array = array_keys($single_result);
                $table_value_array = array_values($single_result);
                $output .= "\nINSERT INTO $table (";
                $output .= "" . implode(", ", $table_column_array) . ") VALUES (";
                $output .= "'" . implode("','", $table_value_array) . "');\n";
            }
        }
        $file_name = 'yedek_' . date('d-M-Y_H-i-s') . '.sql';
//        $file_handle = fopen($file_name, 'w+');
//        fwrite($file_handle, $output);
//        fclose($file_handle);
//        header('Content-Description: File Transfer');
//        header('Content-Type: application/octet-stream');
//        header('Content-Disposition: attachment; filename=' . basename($file_name));
//        header('Content-Transfer-Encoding: binary');
//        header('Expires: 0');
//        header('Cache-Control: must-revalidate');
//        header('Pragma: public');
//        header('Content-Length: ' . filesize($file_name));
//        ob_clean();
//        flush();
        file_put_contents('backups/'.$file_name, $output);
//        unlink($file_name);
        return redirect()->back();
    }

}

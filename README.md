# Class Management

Class Management sistemi kısaca üniversite ortamında fakülte yöneticilerinin kullanabileceği ve fakülte sınıflarına ders
atamalarını yapabileceği, çakışan dersleri kontrol edebileceği bir yönetim sistemidir.

>Aktif domain: [class.webremium.com]()

`Laravel Debugbar : Açık`

`Öğretmenler Modülü : Aktif`

`Sınıf Modülü : Aktif`

`Dersler Modülü : Yapım Aşamasında`

`Sınıf Zaman Tablosu: Yapım Aşamasında`

`Sistem Yedekleme: Aktif`

`Hızlı Arama: Yapım Aşamasında`

`Kullanım Klavuzu ve Dökümantasyon: Oluşturulmadı`

### Takım

Takım 4 kişiden oluşur, bunlar;

* Baran Arda
* Mehmet Baysal
* Enis Göktaş
* Doğacan Usta

## Versiyon Geçmişi


#### v0.2
* Ana sayfa gereksiz HTML kaldırıldı
* Header linkleri düzenlendi 
  * Hızlı Sistem yedekleme linki eklendi
  * Duyurular placeholder düzeltildi
* Versiyon notları sayfası düzenlendi
* Sistem Yedekleri Aktifleştirildi
  * Sadece sınıflar için yedek alınabilir
  * Sistem yedekleri sayfasında butonlar aktifleştirildi
    * Yedek al butonu
    * Yedeği indir butonu
    * Yedek sil
    * Yedeği geri yükle
  * Yedekleme verileri aktif (Yedek boyutları, tarih, yedek sayısı vb.)
* Sistem subdomain üzerinde çalışacak şekilde yeniden yapılandırıldı.
  * .htaccess dosyaları düzenlendi.

#### v0.1.0
* Remote Host Fix (Subdomain problemi)
* JS routes fix
* Yedekleme sistemi klasörü belirlendi (/public/backups)
* Yedekleme sistemi dosya listelemesi düzeltildi
* İbrahim Erşan yönetici olarak eklendi
* 


#### v0.0.8

* DB migration (Local)
* Modeller Eklendi
  * Classroom Model
  * User Model
* Route'lar controllerlara çevirildi
* Auth Eklendi
* Header linkleri düzenlendi
* Controllerlar eklendi
  * ClassroomController
  * UserController

 
#### v0.0.6

* Route'lar controllerlara çevirildi
* Footer düzenlendi
* Header linkleri düzenlendi
* Controllerlar eklendi
  * BackupController
  * InformationController
  * ModulesController
  * VersionController
* Viewlar eklendi
  * Version Notları

#### v0.0.5

* Header düzenlendi
  * Rotalar Eklendi
  * İkonlar Düzenlendi
* Toolbar search toggle hale getirildi
* Yeni rotalar eklendi (Eklenen viewlara ait rotalar)
* Viewlar eklendi
  * information
    * Panel Hakkında
    * Öğretmen Duyuruları
  * modules
    * Ders Modülü
    * Öğretmen Modülü
    * Sınıf Modülü
    * TimeTable modülü
  * System
    * Sistem Yedekleme modülü

#### v0.0.2
* Config dosyaları ve composer güncellendi
* Assets klasörü yüklendi
* Route ayarlamaları yapıldı
* Toolbar Search düzenlendi
* Viewlar eklendi
  * Base model
  * Master model
  * Giriş model
  * Dashboard model
  * Layoutlar 
    * Footer Layout
    * Head Layout
    * Header Layout
    * js Layout
    * Toolbar Layout
* Controllerlar eklendi
  * Dashboard Controller


#### v0.0.1

* Initial Commit
* Laravel Debugbar Installed

### Yapım Aşamasında Olanlar

- Dersler Modülü
- Öğretmen Duyuruları
- Full Timetable sayfası (CSS JS sorunları bulunuyor yapım aşamasında)

### License

The Class Management is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

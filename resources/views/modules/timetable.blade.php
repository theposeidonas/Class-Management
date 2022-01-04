@extends("../master")

@section('title', 'Tüm Sınıf Tablosu')
@section('description', 'Tüm sınıfların olduğu zaman tablosu, kullanıcıların tüm sınıfları ve onlara ait dersleri görebilmesi için oluşturulmuş tablo.')
<!--end::Head-->
<!--begin::Body-->
@section('post')
    <!--begin::Post-->
    <div class="content flex-row-fluid" id="kt_content">
        <!--begin::FAQ-->
        <div class="card">
            <!--begin::Card body-->
            <div class="card-body p-lg-20">
                <!--begin::Intro-->
                <div class="mb-20">
                    <!--begin::Title-->
                    <h1 class="fs-2x text-gray-800 w-bolder mb-6">Tüm Sınıf Tablosu</h1>
                    <!--end::Title-->
                    <!--begin::Text-->
                    <p class="fw-bold fs-4 text-gray-600 mb-2">Tüm sınıflara ait haftalık tablo aşağıdadır. İstediğiniz
                        zamana tıklayarak o saatteki tüm dersleri ve sınıfları görebilirsiniz.</p>
                    <!--end::Text-->
                </div>
                <!--end::Intro-->
                <!--begin::TimeTable-->

                <div class="cd-schedule loading">
                    <div class="timeline d-none">
                        <ul>
                            <li><span>09:00</span></li>
                            <li><span>10:00</span></li>
                            <li><span>11:00</span></li>
                            <li><span>12:00</span></li>
                            <li><span>13:00</span></li>
                            <li><span>14:00</span></li>
                            <li><span>15:00</span></li>
                            <li><span>16:00</span></li>
                            <li><span>17:00</span></li>
                            <li><span>18:00</span></li>
                        </ul>
                    </div> <!-- .timeline -->

                    <div class="events">
                        <ul class="wrap">
                            <li class="events-group" style="list-style-type: none">
                                <div class="top-info"><span>Pazartesi</span></div>
                                <ul>

                                    @for($i= 9; $i<19; $i++)
                                    <li class="single-event" data-start="{{ $i }}:00" data-end="{{ $i+1 }}:00"
                                        data-content="{{ $i }}pzt" data-event="event-2">
                                        <a href="#0">
                                            <em class="event-name">Tüm Dersler</em>
                                            <div class="d-none event-info">Bugünün Saatin Dersleri<br><br>
                                                @foreach($timetable_list[0] as $today)
                                                    @if($today->time == $i)
                                                Ders Kodu: {{ $today->lesson_name }}<br>
                                                Öğretmen:  {{ $today->name }}<br>
                                                Sınıf:  {{ $today->classroom_name }}<br>
                                                Başlangıç Saati: {{ Carbon::parse($today->time)->format('h:i') }}<br>
                                                Bitiş Saati: {{ Carbon::parse($today->time_end)->format('h:i') }}<br><br>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </a>
                                    </li>
                                    @endfor


                                </ul>
                            </li>

                            <li class="events-group" style="list-style-type: none">
                                <div class="top-info"><span>Salı</span></div>

                                <ul>
                                    @for($i= 9; $i<19; $i++)
                                        <li class="single-event" data-start="{{ $i }}:00" data-end="{{ $i+1 }}:00"
                                            data-content="event-abs-circuit" data-event="event-1">
                                            <a href="#0">
                                                <em class="event-name">Tüm Dersler</em>
                                                <div class="d-none event-info">Bugünün Saatin Dersleri<br><br>
                                                    @foreach($timetable_list[1] as $today)
                                                        @if($today->time == $i)
                                                            Ders Kodu: {{ $today->lesson_name }}<br>
                                                            Öğretmen:  {{ $today->name }}<br>
                                                            Sınıf:  {{ $today->classroom_name }}<br>
                                                            Başlangıç Saati: {{ Carbon::parse($today->time)->format('h:i') }}<br>
                                                            Bitiş Saati: {{ Carbon::parse($today->time_end)->format('h:i') }}<br><br>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </a>

                                        </li>
                                    @endfor

                                </ul>
                            </li>

                            <li class="events-group" style="list-style-type: none">
                                <div class="top-info"><span>Çarşamba</span></div>

                                <ul>
                                    @for($i= 9; $i<19; $i++)
                                        <li class="single-event" data-start="{{ $i }}:00" data-end="{{ $i+1 }}:00"
                                            data-content="event-abs-circuit" data-event="event-3">
                                            <a href="#0">
                                                <em class="event-name">Tüm Dersler</em>
                                                <div class="d-none event-info">Bugünün Saatin Dersleri<br><br>
                                                    @foreach($timetable_list[2] as $today)
                                                        @if($today->time == $i)
                                                            Ders Kodu: {{ $today->lesson_name }}<br>
                                                            Öğretmen:  {{ $today->name }}<br>
                                                            Sınıf:  {{ $today->classroom_name }}<br>
                                                            Başlangıç Saati: {{ Carbon::parse($today->time)->format('h:i') }}<br>
                                                            Bitiş Saati: {{ Carbon::parse($today->time_end)->format('h:i') }}<br><br>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </a>

                                        </li>
                                    @endfor

                                </ul>
                            </li>

                            <li class="events-group" style="list-style-type: none">
                                <div class="top-info" ><span>Perşembe</span></div>

                                <ul>
                                    @for($i= 9; $i<19; $i++)
                                        <li class="single-event" data-start="{{ $i }}:00" data-end="{{ $i+1 }}:00"
                                            data-content="event-abs-circuit" data-event="event-4">
                                            <a href="#0">
                                                <em class="event-name">Tüm Dersler</em>
                                                <div class="d-none event-info">Bugünün Saatin Dersleri<br><br>
                                                    @foreach($timetable_list[3] as $today)
                                                        @if($today->time == $i)
                                                            Ders Kodu: {{ $today->lesson_name }}<br>
                                                            Öğretmen:  {{ $today->name }}<br>
                                                            Sınıf:  {{ $today->classroom_name }}<br>
                                                            Başlangıç Saati: {{ Carbon::parse($today->time)->format('h:i') }}<br>
                                                            Bitiş Saati: {{ Carbon::parse($today->time_end)->format('h:i') }}<br><br>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </a>

                                        </li>
                                    @endfor

                                </ul>
                            </li>

                            <li class="events-group" style="list-style-type: none">
                                <div class="top-info" ><span>Cuma</span></div>

                                <ul>
                                    @for($i= 9; $i<19; $i++)
                                        <li class="single-event" data-start="{{ $i }}:00" data-end="{{ $i+1 }}:00"
                                            data-content="event-abs-circuit" data-event="event-1">
                                            <a href="#0">
                                                <em class="event-name">Tüm Dersler</em>
                                                <div class="d-none event-info">Bugünün Saatin Dersleri<br><br>
                                                    @foreach($timetable_list[4] as $today)
                                                        @if($today->time == $i)
                                                            Ders Kodu: {{ $today->lesson_name }}<br>
                                                            Öğretmen:  {{ $today->name }}<br>
                                                            Sınıf:  {{ $today->classroom_name }}<br>
                                                            Başlangıç Saati: {{ Carbon::parse($today->time)->format('h:i') }}<br>
                                                            Bitiş Saati: {{ Carbon::parse($today->time_end)->format('h:i') }}<br><br>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </a>

                                        </li>
                                    @endfor


                                </ul>
                            </li>

                        </ul>
                    </div>

                    <div class="event-modal">
                        <header class="header">
                            <div class="content">
                                <span class="event-date"></span>
                                <h3 class="event-name"></h3>
                            </div>

                            <div class="header-bg"></div>
                        </header>

                        <div class="body">
                            <div class="event-info p-10"></div>
                            <div class="body-bg"></div>
                        </div>

                        <a href="#0" class="close"></a>
                    </div>

                    <div class="cover-layer"></div>
                </div> <!-- .cd-schedule -->

                <!--end::TimeTable-->


            </div>
            <!--end::Card body-->
        </div>
        <!--end::FAQ-->
    </div>
    <!--end::Post-->
@endsection

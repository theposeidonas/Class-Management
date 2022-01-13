@extends("../master")

@section('title', 'Sınıf: '.$classroom->title)
@section('description', 'Sınıfın detay sayfası')
<!--end::Head-->
<!--begin::Body-->
@section('post')


    <!--begin::Post-->
    <div class="content flex-row-fluid" id="kt_content">
        <!--begin::Layout-->
        <div class="d-flex flex-column flex-xl-row">
            <!--begin::Sidebar-->
            <div class="flex-column flex-lg-row-auto w-100 w-xl-350px mb-10">
                <!--begin::Card-->
                <div class="card mb-5 mb-xl-8">
                    <!--begin::Card body-->
                    <div class="card-body">
                        <!--begin::Summary-->
                        <!--begin::User Info-->
                        <div class="d-flex flex-center flex-column py-5">
                            <!--begin::Avatar-->
                            <h3>Sınıf Yetkilisi</h3>
                            <div class="symbol symbol-100px symbol-circle mb-7">
                                <img src="/assets/media/avatars/{{ $profile->avatar }}" alt="{{ $profile->name }}">
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Name-->
                            <a href="#" class="fs-3 text-gray-800 text-hover-primary fw-bolder mb-3">{{ $profile->name }}</a>
                            <!--end::Name-->
                            <!--begin::Position-->
                            <div class="mb-9">
                                <!--begin::Badge-->
                                <div class="badge badge-lg badge-light-primary d-inline">@if($profile->auth==1) Yönetici @else Öğretmen @endif</div>
                                <!--begin::Badge-->
                            </div>
                            <!--end::Position-->
                            <!--begin::Info-->
                            <!--begin::Info heading-->
                            <div class="fw-bolder mb-3">Detaylar
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="Kullanıcının tüm detayları, sahip olduğu ders sayısı vs."></i></div>
                            <!--end::Info heading-->
                            <div class="d-flex flex-wrap flex-center">
                                <!--begin::Stats-->
                                <div class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3">
                                    <div class="fs-4 fw-bolder text-gray-700">
                                        <span class="w-75px">5 Ders</span>
                                    </div>

                                </div>
                                <!--end::Stats-->

                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::User Info-->
                        <!--end::Summary-->
                        <!--begin::Details toggle-->
                        <div class="d-flex flex-stack fs-4 py-3">
                            <div class="fw-bolder rotate collapsible" data-bs-toggle="collapse" href="#kt_user_view_details" role="button" aria-expanded="false" aria-controls="kt_user_view_details">Detaylar
                                <span class="ms-2 rotate-180">
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
													<span class="svg-icon svg-icon-3">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
															<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black"></path>
														</svg>
													</span>
                                    <!--end::Svg Icon-->
												</span></div>
                        </div>
                        <!--end::Details toggle-->
                        <div class="separator"></div>
                        <!--begin::Details content-->
                        <div id="kt_user_view_details" class="collapse show">
                            <div class="pb-5 fs-6">
                                <!--begin::Details item-->
                                <div class="fw-bolder mt-5">Hesap ID</div>
                                <div class="text-gray-600">{{ $profile->id }}</div>
                                <!--begin::Details item-->
                                <!--begin::Details item-->
                                <div class="fw-bolder mt-5">E-Posta</div>
                                <div class="text-gray-600">
                                    <a href="mailto:{{ $profile->email }}" class="text-gray-600 text-hover-primary">{{ $profile->email }}</a>
                                </div>
                                <!--begin::Details item-->
                                <!--begin::Details item-->
                                <div class="fw-bolder mt-5">Fakülte</div>
                                <div class="text-gray-600">{{ $profile->faculty }}</div>
                                <!--begin::Details item-->
                                <!--begin::Details item-->
                                <div class="fw-bolder mt-5">Son Giriş</div>
                                <div class="text-gray-600">@if($profile->last_login != NULL)
                                        {{ Carbon::parse($profile->last_login)->diffForHumans(Carbon::now()) }}
                                    @else
                                        Hiç Giriş Yapmadı
                                    @endif</div>
                                <!--begin::Details item-->
                                <!--begin::Details item-->
                                <div class="fw-bolder mt-5">Son Giriş IP</div>
                                <div class="text-gray-600">{{ $profile->last_login_ip }}</div>
                                <!--begin::Details item-->
                            </div>
                        </div>
                        <!--end::Details content-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->

            </div>
            <!--end::Sidebar-->
            <!--begin::Content-->
            <div class="flex-lg-row-fluid ms-lg-15">
                <!--begin:::Tabs-->
                <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mb-8">
                    <!--begin:::Tab item-->
                    <li class="nav-item">
                        <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_user_view_overview_tab">Sınıf Detayları</a>
                    </li>
                    <!--end:::Tab item-->

                </ul>
                <!--end:::Tabs-->
            @if(isset($errors) and $errors->first()=='success')
                <!--begin::Alert-->
                    <div class="alert alert-dismissible bg-light-success border border-success d-flex flex-column flex-sm-row p-5 mb-10">
                        <!--begin::Icon-->
                        <span class="svg-icon svg-icon-2hx svg-icon-success me-4 mb-5 mb-sm-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black"/>
<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black"/>
</svg></span>
                        <!--end::Icon-->

                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column pe-0 pe-sm-10">
                            <!--begin::Title-->
                            <h5 class="mb-1">Başarılı!</h5>
                            <!--end::Title-->
                            <!--begin::Content-->
                            <span>İşleminiz başarı ile tamamlandı...</span>
                            <!--end::Content-->
                        </div>
                        <!--end::Wrapper-->

                        <!--begin::Close-->
                        <button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
                            <i class="bi bi-x fs-1 text-success"></i>
                        </button>
                        <!--end::Close-->
                    </div>
                    <!--end::Alert-->
            @elseif(isset($errors) and $errors->first()=='fail')
                <!--begin::Alert-->
                    <div class="alert alert-dismissible bg-light-warning border border-primary d-flex flex-column flex-sm-row p-5 mb-10">
                        <!--begin::Icon-->
                        <span class="svg-icon svg-icon-2hx svg-icon-warning me-4 mb-5 mb-sm-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="black"/>
<rect x="9" y="13.0283" width="7.3536" height="1.2256" rx="0.6128" transform="rotate(-45 9 13.0283)" fill="black"/>
<rect x="9.86664" y="7.93359" width="7.3536" height="1.2256" rx="0.6128" transform="rotate(45 9.86664 7.93359)" fill="black"/>
</svg></span>
                        <!--end::Icon-->

                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column pe-0 pe-sm-10">
                            <!--begin::Title-->
                            <h5 class="mb-1">Hata</h5>
                            <!--end::Title-->
                            <!--begin::Content-->
                            <span>Lütfen daha sonra tekrar deneyin...</span>
                            <!--end::Content-->
                        </div>
                        <!--end::Wrapper-->

                        <!--begin::Close-->
                        <button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
                            <i class="bi bi-x fs-1 text-warning"></i>
                        </button>
                        <!--end::Close-->
                    </div>
                    <!--end::Alert-->

            @endif
            <!--begin:::Tab content-->
                <div class="tab-content" id="myTabContent">
                    <!--begin:::Tab pane-->
                    <div class="tab-pane fade show active" id="kt_user_view_overview_tab" role="tabpanel">
                        <!--begin::Card-->
                        <div class="card card-flush mb-6 mb-xl-9">
                            <!--begin::Card header-->
                            <div class="card-header mt-6">
                                <!--begin::Card title-->
                                <div class="card-title flex-column">
                                    <h2 class="mb-1">{{ $classroom->title }} Sınıf İçeriği</h2>
                                    <div class="fs-6 fw-bold text-muted">Sınıfın envanter içeriği</div>
                                </div>
                                <!--end::Card title-->

                            </div>
                            <!--end::Card header-->

                            <!--begin::Card body-->
                            <div class="card-body p-9 pt-4">
                                <div>
                                    <p class="fs-6 fw-bold ">Açıklama : {{ $classroom->description }}<br>Fakülte : {{ $classroom->faculty }}<br>Kapasite : {{ $classroom->capacity }} Kişi</p>
                                </div>
                                <!--begin::Input-->
                                <div class="row">
                                    <div class="col-md-6">
                                        <label
                                            class="form-check form-switch form-check-custom form-check-solid m-5">
                                            <input class="form-check-input" type="checkbox"
                                                   value="1" disabled @if($spec->blackboard==1) checked @endif name="blackboard"/>
                                            <span class="form-check-label fw-bold">Kara Tahta</span>
                                        </label>
                                        <label
                                            class="form-check form-switch form-check-custom form-check-solid m-5">
                                            <input class="form-check-input" type="checkbox"
                                                   value="1" disabled @if($spec->special_seats==1) checked @endif name="special_seats"/>
                                            <span class="form-check-label fw-bold">Özellikli Koltuk</span>
                                        </label>
                                        <label
                                            class="form-check form-switch form-check-custom form-check-solid m-5">
                                            <input class="form-check-input" type="checkbox"
                                                   value="1" disabled @if($spec->proffessor_chair==1) checked @endif name="proffessor_chair"/>
                                            <span class="form-check-label fw-bold">Profesör Kürsüsü</span>
                                        </label>
                                        <label
                                            class="form-check form-switch form-check-custom form-check-solid m-5">
                                            <input class="form-check-input" type="checkbox"
                                                   value="1" disabled @if($spec->projector==1) checked @endif name="projector" />
                                            <span
                                                class="form-check-label fw-bold">Projektör</span>
                                        </label>
                                        <label
                                            class="form-check form-switch form-check-custom form-check-solid m-5">
                                            <input class="form-check-input" type="checkbox"
                                                   value="1" disabled @if($spec->smartboard==1) checked @endif name="smartboard" />
                                            <span class="form-check-label fw-bold">Akıllı Tahta</span>
                                        </label>
                                    </div>
                                    <div class="col-md-6">

                                        <label
                                            class="form-check form-switch form-check-custom form-check-solid m-5">
                                            <input class="form-check-input" type="checkbox"
                                                   value="1" disabled @if($spec->internet==1) checked @endif name="internet"/>
                                            <span
                                                class="form-check-label fw-bold">İnternet</span>
                                        </label>
                                        <label
                                            class="form-check form-switch form-check-custom form-check-solid m-5">
                                            <input class="form-check-input" type="checkbox"
                                                   value="1" disabled @if($spec->pc==1) checked @endif name="pc"/>
                                            <span class="form-check-label fw-bold">PC</span>
                                        </label>
                                        <label
                                            class="form-check form-switch form-check-custom form-check-solid m-5">
                                            <input class="form-check-input" type="checkbox"
                                                   value="1" disabled @if($spec->webcam==1) checked @endif name="webcam"/>
                                            <span
                                                class="form-check-label fw-bold">Webcam</span>
                                        </label>
                                        <label
                                            class="form-check form-switch form-check-custom form-check-solid m-5">
                                            <input class="form-check-input" type="checkbox"
                                                   value="1" disabled @if($spec->speakers==1) checked @endif name="speakers"/>
                                            <span class="form-check-label fw-bold">Hoparlör Sistemi</span>
                                        </label>
                                        <label
                                            class="form-check form-switch form-check-custom form-check-solid m-5">
                                            <input class="form-check-input" type="checkbox"
                                                   value="1" disabled @if($spec->ac==1) checked @endif name="ac"/>
                                            <span
                                                class="form-check-label fw-bold">Klima</span>
                                        </label>
                                    </div>
                                </div>
                                <!--end::Input-->
                                <!--begin::Dates-->
                                <ul class="nav nav-pills d-flex flex-nowrap hover-scroll-x py-2">
                                    <!--begin::Date-->
                                    <li class="nav-item me-2">
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-160px me-2 py-4 btn-active-primary active" data-bs-toggle="tab" href="#kt_schedule_day_0">
                                            <span class="fs-6 fw-boldest">Pazartesi</span>
                                        </a>
                                    </li>
                                    <!--end::Date-->
                                    <!--begin::Date-->
                                    <li class="nav-item me-2">
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-160px me-2 py-4 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_1">
                                            <span class="fs-6 fw-boldest">Salı</span>
                                        </a>
                                    </li>
                                    <!--end::Date-->
                                    <!--begin::Date-->
                                    <li class="nav-item me-2">
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-160px me-2 py-4 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_2">
                                            <span class="fs-6 fw-boldest">Çarşamba</span>
                                        </a>
                                    </li>
                                    <!--end::Date-->
                                    <!--begin::Date-->
                                    <li class="nav-item me-2">
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-160px me-2 py-4 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_3">
                                            <span class="fs-6 fw-boldest">Perşembe</span>
                                        </a>
                                    </li>
                                    <!--end::Date-->
                                    <!--begin::Date-->
                                    <li class="nav-item me-2">
                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-160px me-2 py-4 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_4">
                                            <span class="fs-6 fw-boldest">Cuma</span>
                                        </a>
                                    </li>
                                    <!--end::Date-->

                                </ul>
                                <!--end::Dates-->
                                <!--begin::Tab Content-->
                                <div class="tab-content">



                                    <!--begin::Day-->
                                    <div id="kt_schedule_day_0" class="tab-pane fade show active">
                                    @foreach($timetable_list[0] as $day)
                                        <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-bold ms-5">
                                                    <!--begin::Time-->
                                                    <div class="fs-7 mb-1"><span class="fs-7 text-muted">Saat: </span>{{ Carbon::parse($day->time)->format('h:i') }} - {{ Carbon::parse($day->time_end)->format('h:i') }}</div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="fs-5 fw-bolder text-dark text-hover-primary mb-2">{{ $day->lesson_name }}</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="fs-7 text-muted">Öğretmen:
                                                        <a href="{{ route('user',[$day->user_id]) }}"> {{ $day->name }} </a></div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                @if(auth()->user()->id == $day->user_id) <a href="{{ route('delete-from-timetable',['id'=>$day->id]) }}" class="btn btn-light bnt-active-light-primary btn-sm">Sil</a> @endif
                                            </div>
                                            <!--end::Time-->
                                        @endforeach
                                    </div>
                                    <!--end::Day-->
                                    <!--begin::Day-->
                                    <div id="kt_schedule_day_1" class="tab-pane fade show">
                                    @foreach($timetable_list[1] as $day)
                                        <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-bold ms-5">
                                                    <!--begin::Time-->
                                                    <div class="fs-7 mb-1"><span class="fs-7 text-muted">Saat: </span>{{ Carbon::parse($day->time)->format('h:i') }} - {{ Carbon::parse($day->time_end)->format('h:i') }}</div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="fs-5 fw-bolder text-dark text-hover-primary mb-2">{{ $day->lesson_name }}</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="fs-7 text-muted">Öğretmen:
                                                        <a href="{{ route('user',[$day->user_id]) }}"> {{ $day->name }} </a></div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
@if(auth()->user()->id == $day->user_id) <a href="{{ route('delete-from-timetable',['id'=>$day->id]) }}" class="btn btn-light bnt-active-light-primary btn-sm">Sil</a> @endif
                                            </div>
                                            <!--end::Time-->
                                        @endforeach
                                    </div>
                                    <!--end::Day-->
                                    <!--begin::Day-->
                                    <div id="kt_schedule_day_2" class="tab-pane fade show">
                                    @foreach($timetable_list[2] as $day)
                                        <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-bold ms-5">
                                                    <!--begin::Time-->
                                                    <div class="fs-7 mb-1"><span class="fs-7 text-muted">Saat: </span>{{ Carbon::parse($day->time)->format('h:i') }} - {{ Carbon::parse($day->time_end)->format('h:i') }}</div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="fs-5 fw-bolder text-dark text-hover-primary mb-2">{{ $day->lesson_name }}</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="fs-7 text-muted">Öğretmen:
                                                        <a href="{{ route('user',[$day->user_id]) }}"> {{ $day->name }} </a></div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
@if(auth()->user()->id == $day->user_id) <a href="{{ route('delete-from-timetable',['id'=>$day->id]) }}" class="btn btn-light bnt-active-light-primary btn-sm">Sil</a> @endif
                                            </div>
                                            <!--end::Time-->
                                        @endforeach
                                    </div>
                                    <!--end::Day-->
                                    <!--begin::Day-->
                                    <div id="kt_schedule_day_3" class="tab-pane fade show">
                                    @foreach($timetable_list[3] as $day)
                                        <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-bold ms-5">
                                                    <!--begin::Time-->
                                                    <div class="fs-7 mb-1"><span class="fs-7 text-muted">Saat: </span>{{ Carbon::parse($day->time)->format('h:i') }} - {{ Carbon::parse($day->time_end)->format('h:i') }}</div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="fs-5 fw-bolder text-dark text-hover-primary mb-2">{{ $day->lesson_name }}</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="fs-7 text-muted">Öğretmen:
                                                        <a href="{{ route('user',[$day->user_id]) }}"> {{ $day->name }} </a></div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
@if(auth()->user()->id == $day->user_id) <a href="{{ route('delete-from-timetable',['id'=>$day->id]) }}" class="btn btn-light bnt-active-light-primary btn-sm">Sil</a> @endif
                                            </div>
                                            <!--end::Time-->
                                        @endforeach
                                    </div>
                                    <!--end::Day-->
                                    <!--begin::Day-->
                                    <div id="kt_schedule_day_4" class="tab-pane fade show">
                                    @foreach($timetable_list[4] as $day)
                                        <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-bold ms-5">
                                                    <!--begin::Time-->
                                                    <div class="fs-7 mb-1"><span class="fs-7 text-muted">Saat: </span>{{ Carbon::parse($day->time)->format('h:i') }} - {{ Carbon::parse($day->time_end)->format('h:i') }}</div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="fs-5 fw-bolder text-dark text-hover-primary mb-2">{{ $day->lesson_name }}</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="fs-7 text-muted">Öğretmen:
                                                        <a href="{{ route('user',[$day->user_id]) }}"> {{ $day->name }} </a></div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
@if(auth()->user()->id == $day->user_id) <a href="{{ route('delete-from-timetable',['id'=>$day->id]) }}" class="btn btn-light bnt-active-light-primary btn-sm">Sil</a> @endif
                                            </div>
                                            <!--end::Time-->
                                        @endforeach
                                    </div>
                                    <!--end::Day-->



                                </div>
                                <!--end::Tab Content-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->

                    </div>
                    <!--end:::Tab pane-->
                </div>
                <!--end:::Tab content-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Layout-->

        <!--end::Modals-->
    </div>
    <!--end::Post-->

@endsection

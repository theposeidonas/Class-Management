<!DOCTYPE html>
<html lang="tr">
<!--begin::Head-->
<head>
    @section('title','Ders Planlama')
    @section('description','Timetable Ekleme sayfası')
  @include('layouts.head')

</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" class="dark-mode page-auth">
<!--begin::Main-->
<div class="d-flex flex-column flex-root">
    <!--begin::Authentication - Multi-steps-->
    <div class="d-flex flex-column flex-lg-row flex-column-fluid stepper stepper-pills stepper-column" id="kt_create_account_stepper">
        <!--begin::Aside-->
        <div class="d-flex flex-column flex-lg-row-auto min-w-300px w-xl-500px bg-lighten shadow-sm">
            <!--begin::Wrapper-->
            <div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-500px scroll-y">
                <!--begin::Header-->
                <div class="d-flex flex-row-fluid flex-column align-items-center pt-lg-20">
                    <!--begin::Logo-->
                    <a href="{{ route('dashboard') }}" class="my-10 my-lg-20">
                        <img alt="Logo" src="/assets/media/logos/logo-light.png" class="h-25px">
                    </a>
                    <!--end::Logo-->
                    <!--begin::Nav-->
                    <div class="stepper-nav">
                        <!--begin::Step 1-->
                        <div class="stepper-item current" data-kt-stepper-element="nav">
                            <!--begin::Line-->
                            <div class="stepper-line w-35px"></div>
                            <!--end::Line-->
                            <!--begin::Icon-->
                            <div class="stepper-icon rounded-circle w-35px h-35px">
                                <i class="stepper-check fas fa-check"></i>
                                <span class="stepper-number">1</span>
                            </div>
                            <!--end::Icon-->
                            <!--begin::Label-->
                            <div class="stepper-label">
                                <h3 class="stepper-title">Planlama Tipi</h3>
                                <div class="stepper-desc fw-bold">Aradığınız Sınıf Detayları</div>
                            </div>
                            <!--end::Label-->
                        </div>
                        <!--end::Step 1-->
                        <!--begin::Step 2-->
                        <div class="stepper-item" data-kt-stepper-element="nav">
                            <!--begin::Line-->
                            <div class="stepper-line rounded-circle w-35px"></div>
                            <!--end::Line-->
                            <!--begin::Icon-->
                            <div class="stepper-icon rounded-circle w-35px h-35px">
                                <i class="stepper-check fas fa-check"></i>
                                <span class="stepper-number">2</span>
                            </div>
                            <!--end::Icon-->
                            <!--begin::Label-->
                            <div class="stepper-label">
                                <h3 class="stepper-title">Ders Bilgileri</h3>
                                <div class="stepper-desc fw-bold">Ekleyeceğiniz dersin bilgileri</div>
                            </div>
                            <!--end::Label-->
                        </div>
                        <!--end::Step 2-->
                        <!--begin::Step 3-->
                        <div class="stepper-item" data-kt-stepper-element="nav">
                            <!--begin::Line-->
                            <div class="stepper-line w-35px"></div>
                            <!--end::Line-->
                            <!--begin::Icon-->
                            <div class="stepper-icon rounded-circle w-35px h-35px">
                                <i class="stepper-check fas fa-check"></i>
                                <span class="stepper-number">3</span>
                            </div>
                            <!--end::Icon-->
                            <!--begin::Label-->
                            <div class="stepper-label">
                                <h3 class="stepper-title">Sınıf ve Saat Seçimi</h3>
                                <div class="stepper-desc fw-bold">Filtrelerinize göre çıkan sınıfların ve zamanların seçimi</div>
                            </div>
                            <!--end::Label-->
                        </div>
                        <!--end::Step 3-->
                        <!--begin::Step 4-->
                        <div class="stepper-item" data-kt-stepper-element="nav">
                            <!--begin::Line-->
                            <div class="stepper-line w-35px"></div>
                            <!--end::Line-->
                            <!--begin::Icon-->
                            <div class="stepper-icon rounded-circle w-35px h-35px">
                                <i class="stepper-check fas fa-check"></i>
                                <span class="stepper-number">4</span>
                            </div>
                            <!--end::Icon-->
                            <!--begin::Label-->
                            <div class="stepper-label">
                                <h3 class="stepper-title">Gözden Geçir</h3>
                                <div class="stepper-desc fw-bold">Seçiminizi ve planınızı gözden geçirin</div>
                            </div>
                            <!--end::Label-->
                        </div>
                        <!--end::Step 4-->
                        <!--begin::Step 5-->
                        <div class="stepper-item" data-kt-stepper-element="nav">
                            <!--begin::Line-->
                            <div class="stepper-line w-35px"></div>
                            <!--end::Line-->
                            <!--begin::Icon-->
                            <div class="stepper-icon rounded-circle w-35px h-35px">
                                <i class="stepper-check fas fa-check"></i>
                                <span class="stepper-number">5</span>
                            </div>
                            <!--end::Icon-->
                            <!--begin::Label-->
                            <div class="stepper-label">
                                <h3 class="stepper-title">Tamamlandı</h3>
                                <div class="stepper-desc fw-bold">Ders saatleriniz programda yer alacak!</div>
                            </div>
                            <!--end::Label-->
                        </div>
                        <!--end::Step 5-->
                    </div>
                    <!--end::Nav-->
                </div>
                <!--end::Header-->
                <!--begin::Illustration-->
                <div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-125px min-h-lg-250px mh-250px" style="background-image: url(/assets/media/illustrations/dozzy-1/17-dark.png"></div>
                <!--end::Illustration-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--begin::Aside-->
        <!--begin::Body-->
        <div class="d-flex flex-column flex-lg-row-fluid py-10">
            <!--begin::Content-->
            <div class="d-flex flex-center flex-column flex-column-fluid">
                <!--begin::Wrapper-->
                <div class="w-lg-700px p-10 p-lg-15 mx-auto">
                    <!--begin::Form-->
                    <form class="my-auto pb-5" novalidate="novalidate" id="kt_create_account_form" action="{{ route('addtotimetablenew') }}">
                        <!--begin::Step 1-->
                        <div class="current" data-kt-stepper-element="content">
                            <!--begin::Wrapper-->
                            <div class="w-100">
                                <!--begin::Heading-->
                                <div class="pb-10 pb-lg-15">
                                    <!--begin::Title-->
                                    <h2 class="fw-bolder d-flex align-items-center text-dark">Seçeceğiniz Sınıf
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Ekleyeceğiniz dersin sınıfını kendi fakültenizde mi diğer fakültelerde mi olacağını seçin"></i></h2>
                                    <!--end::Title-->
                                    <!--begin::Notice-->
                                    <div class="text-muted fw-bold fs-6">Eğer yardıma ihtiyacınız varsa, lütfen
                                        <a href="#" class="link-primary fw-bolder">Kullanım Kılavuzuna</a> gözatın.</div>
                                    <!--end::Notice-->
                                </div>
                                <!--end::Heading-->
                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="row">
                                        <!--begin::Col-->
                                        <div class="col-lg-6">
                                            <!--begin::Option-->
                                            <input type="radio" class="btn-check" name="faculty_type" value="personal" checked="checked" id="kt_create_account_form_account_type_personal">
                                            <label class="btn btn-outline btn-outline-dashed btn-outline-default p-7 d-flex align-items-center mb-10" for="kt_create_account_form_account_type_personal">
                                                <!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
                                                <span class="svg-icon svg-icon-3x me-5">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z" fill="black"/>
<rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4" fill="black"/>
</svg>
														</span>
                                                <!--end::Svg Icon-->
                                                <!--begin::Info-->
                                                <span class="d-block fw-bold text-start">
															<span class="text-dark fw-bolder d-block fs-4 mb-2">Kendi Fakültem</span>
															<span class="text-muted fw-bold fs-6">Kendi fakültenize ait sınıflardan seçim yapın.</span>
														</span>
                                                <!--end::Info-->
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-lg-6">
                                            <!--begin::Option-->
                                            <input type="radio" class="btn-check" name="faculty_type" value="other" id="kt_create_account_form_account_type_corporate">
                                            <label class="btn btn-outline btn-outline-dashed btn-outline-default p-7 d-flex align-items-center" for="kt_create_account_form_account_type_corporate">
                                                <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
                                                <span class="svg-icon svg-icon-3x me-5">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M16.0173 9H15.3945C14.2833 9 13.263 9.61425 12.7431 10.5963L12.154 11.7091C12.0645 11.8781 12.1072 12.0868 12.2559 12.2071L12.6402 12.5183C13.2631 13.0225 13.7556 13.6691 14.0764 14.4035L14.2321 14.7601C14.2957 14.9058 14.4396 15 14.5987 15H18.6747C19.7297 15 20.4057 13.8774 19.912 12.945L18.6686 10.5963C18.1487 9.61425 17.1285 9 16.0173 9Z" fill="black"/>
<rect opacity="0.3" x="14" y="4" width="4" height="4" rx="2" fill="black"/>
<path d="M4.65486 14.8559C5.40389 13.1224 7.11161 12 9 12C10.8884 12 12.5961 13.1224 13.3451 14.8559L14.793 18.2067C15.3636 19.5271 14.3955 21 12.9571 21H5.04292C3.60453 21 2.63644 19.5271 3.20698 18.2067L4.65486 14.8559Z" fill="black"/>
<rect opacity="0.3" x="6" y="5" width="6" height="6" rx="3" fill="black"/>
</svg>
														</span>
                                                <!--end::Svg Icon-->
                                                <!--begin::Info-->
                                                <span class="d-block fw-bold text-start">
															<span class="text-dark fw-bolder d-block fs-4 mb-2">Diğer Fakülteler</span>
															<span class="text-muted fw-bold fs-6">Diğer fakültelere ait sınıflardan seçim yapın.</span>
														</span>
                                                <!--end::Info-->
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Step 1-->
                        <!--begin::Step 2-->
                        <div class="m-0" data-kt-stepper-element="content">
                            <!--begin::Wrapper-->
                            <div class="w-100">
                                <!--begin::Heading-->
                                <div class="pb-10 pb-lg-15">
                                    <!--begin::Title-->
                                    <h2 class="fw-bolder text-dark">Ders Bilgileri</h2>
                                    <!--end::Title-->
                                    <!--begin::Notice-->
                                    <div class="text-muted fw-bold fs-6">Eğer yardıma ihtiyacınız varsa, lütfen
                                        <a href="#" class="link-primary fw-bolder">Kullanım Kılavuzuna</a> gözatın.</div>
                                    <!--end::Notice-->
                                </div>
                                <!--end::Heading-->
                                <!--begin::Input group-->
                                <div class="mb-10 fv-row">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center form-label mb-3">Kişi Sayısı
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Ekleyeceğiniz derste kaç kişi bulunuyor ise ona göre seçim yapın."></i></label>
                                    <!--end::Label-->
                                    <!--begin::Row-->
                                    <div class="row mb-2" data-kt-buttons="true">
                                        <!--begin::Col-->
                                        <div class="col">
                                            <!--begin::Option-->
                                            <label class="btn btn-outline btn-outline-dashed btn-outline-default w-100 p-4">
                                                <input type="radio" class="btn-check" name="capacity" value="1-1">
                                                <span class="fw-bolder fs-3">1-1</span>
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col">
                                            <!--begin::Option-->
                                            <label class="btn btn-outline btn-outline-dashed btn-outline-default w-100 p-4 active">
                                                <input type="radio" class="btn-check" name="capacity" checked="checked" value="2-20">
                                                <span class="fw-bolder fs-3">2-20</span>
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col">
                                            <!--begin::Option-->
                                            <label class="btn btn-outline btn-outline-dashed btn-outline-default w-100 p-4">
                                                <input type="radio" class="btn-check" name="capacity" value="20-50">
                                                <span class="fw-bolder fs-3">20-50</span>
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col">
                                            <!--begin::Option-->
                                            <label class="btn btn-outline btn-outline-dashed btn-outline-default w-100 p-4">
                                                <input type="radio" class="btn-check" name="capacity" value="50-1000">
                                                <span class="fw-bolder fs-3">50+</span>
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                    <!--begin::Hint-->
                                    <div class="form-text">Seçiminize göre sınıflar listelenecektir...</div>
                                    <!--end::Hint-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10 fv-row">
                                    <!--begin::Label-->
                                    <label class="form-label mb-3 required">Ders Seçimi</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->

                                    <select class="form-select form-select-solid fw-bolder" data-kt-select2="true"
                                            data-placeholder="Seç"
                                           data-hide-search="true" id="lesson">
                                        @foreach($lessons as $lesson)
                                            <option value="{{ $lesson->id }}">{{ $lesson->title }}</option>
                                        @endforeach
                                    </select>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-0 fv-row">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center form-label mb-5">Sınıf Özellikleri
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Seçtiğiniz özelliklere göre sınıflar listelenecektir."></i></label>
                                    <div class="form-text">Sadece gerekli özellikleri etkinleştirin. Farketmiyorsa etkinleştirmeyin.</div>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label
                                                class="form-check form-switch form-check-custom form-check-solid m-5 ">
                                                <input class="form-check-input blackboard" type="checkbox"
                                                       value="1" name="blackboard"/>
                                                <span class="form-check-label fw-bold">Kara Tahta</span>
                                            </label>
                                            <label
                                                class="form-check form-switch form-check-custom form-check-solid m-5">
                                                <input class="form-check-input special_seats" type="checkbox"
                                                       value="1" name="special_seats"/>
                                                <span class="form-check-label fw-bold">Özellikli Koltuk</span>
                                            </label>
                                            <label
                                                class="form-check form-switch form-check-custom form-check-solid m-5">
                                                <input class="form-check-input proffessor_chair" type="checkbox"
                                                       value="1" name="proffessor_chair"/>
                                                <span class="form-check-label fw-bold">Profesör Kürsüsü</span>
                                            </label>
                                            <label
                                                class="form-check form-switch form-check-custom form-check-solid m-5">
                                                <input class="form-check-input projector" type="checkbox"
                                                       value="1" name="projector" />
                                                <span
                                                    class="form-check-label fw-bold">Projektör</span>
                                            </label>
                                            <label
                                                class="form-check form-switch form-check-custom form-check-solid m-5">
                                                <input class="form-check-input smartboard" type="checkbox"
                                                       value="1" name="smartboard" />
                                                <span class="form-check-label fw-bold">Akıllı Tahta</span>
                                            </label>
                                        </div>
                                        <div class="col-md-6">

                                            <label
                                                class="form-check form-switch form-check-custom form-check-solid m-5">
                                                <input class="form-check-input internet" type="checkbox"
                                                       value="1" name="internet"/>
                                                <span
                                                    class="form-check-label fw-bold">İnternet</span>
                                            </label>
                                            <label
                                                class="form-check form-switch form-check-custom form-check-solid m-5">
                                                <input class="form-check-input pc" type="checkbox"
                                                       value="1" name="pc"/>
                                                <span class="form-check-label fw-bold">PC</span>
                                            </label>
                                            <label
                                                class="form-check form-switch form-check-custom form-check-solid m-5">
                                                <input class="form-check-input webcam" type="checkbox"
                                                       value="1" name="webcam"/>
                                                <span
                                                    class="form-check-label fw-bold">Webcam</span>
                                            </label>
                                            <label
                                                class="form-check form-switch form-check-custom form-check-solid m-5">
                                                <input class="form-check-input speakers" type="checkbox"
                                                       value="1" name="speakers"/>
                                                <span class="form-check-label fw-bold">Hoparlör Sistemi</span>
                                            </label>
                                            <label
                                                class="form-check form-switch form-check-custom form-check-solid m-5">
                                                <input class="form-check-input air_con" type="checkbox"
                                                       value="1" name="air_con"/>
                                                <span
                                                    class="form-check-label fw-bold">Klima</span>
                                            </label>
                                        </div>
                                    </div>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Step 2-->
                        <!--begin::Step 3-->
                        <div class="m-0" data-kt-stepper-element="content">
                            <!--begin::Wrapper-->
                            <div class="w-100">
                                <!--begin::Heading-->
                                <div class="pb-10 pb-lg-12">
                                    <!--begin::Title-->
                                    <h2 class="fw-bolder text-dark">Sınıf ve Saat Seçimi</h2>
                                    <!--end::Title-->
                                    <!--begin::Notice-->
                                    <div class="text-muted fw-bold fs-6">Önceki yaptığınız seçimlere dayanarak size önerdiğimiz saatler ve sınıfları buradan seçin. Eğer yardıma ihtiyacınız varsa, lütfen <a href="#" class="link-primary fw-bolder">Kullanım Kılavuzuna</a> gözatın.</div>
                                    <!--end::Notice-->
                                </div>
                                <!--end::Heading-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label required">Sınıf Seçimi</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <select class="form-select form-select-solid fw-bolder" data-kt-select2="true"
                                            data-placeholder="Seç"
                                            data-hide-search="true" id="classroom_selectlist" onchange="onclassroomchange()">
                                        <option>Seç</option>

                                    </select>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label required">Ders Günü</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <select class="form-select form-select-solid fw-bolder" data-kt-select2="true"
                                            data-placeholder="Seç"
                                            data-hide-search="true" id="day_selectlist" onchange="onclassroomchange()">
                                            <option value="monday">Pazartesi</option>
                                            <option value="tuesday">Salı</option>
                                            <option value="wednesday">Çarşamba</option>
                                            <option value="thursday">Perşembe</option>
                                            <option value="friday">Cuma</option>
                                    </select>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label required">Ders Başlama saati</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <select class="form-select form-select-solid fw-bolder" id="timestart" data-kt-select2="true"
                                            data-placeholder="Seç"
                                            data-hide-search="true">
                                        @for($i = 9;$i<18;$i++)
                                            <option @if($i == 9) id="time_0{{ $i }}:00:00" @else id="{{'time_'. $i }}:00:00" @endif" value="@if($i == 9) 0{{ $i }}:00 @else {{ $i }}:00 @endif">@if($i == 9) 0{{ $i }}:00 @else {{ $i }}:00 @endif</option>
                                        @endfor
                                    </select>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label required">Ders Bitiş saati</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <select class="form-select form-select-solid fw-bolder" data-kt-select2="true"
                                            data-placeholder="Seç"
                                            data-hide-search="true" id="timeend">
                                        @for($i = 10;$i<19;$i++)
                                            <option id="timeend_{{$i}}:00:00" value="{{ $i }}:00:00">{{ $i }}:00</option>
                                        @endfor
                                    </select>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->

                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Step 3-->
                        <!--begin::Step 4-->
                        <div class="m-0" data-kt-stepper-element="content">
                            <!--begin::Wrapper-->
                            <div class="w-100">
                                <!--begin::Heading-->
                                <div class="pb-10 pb-lg-15">
                                    <!--begin::Title-->
                                    <h2 class="fw-bolder text-dark">Gözden Geçir</h2>
                                    <!--end::Title-->
                                    <!--begin::Notice-->
                                    <div class="text-muted fw-bold fs-6">Seçimlerinizi gözden geçirin.</div>
                                    <!--end::Notice-->
                                </div>
                                <!--end::Heading-->
                                <!--begin::Input group-->
                                <div class="d-flex flex-column mb-7 fv-row">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center fs-4 fw-bold form-label mb-2">
                                        <span>Ders Seçimi: <p id="selected_lesson">MUH101</p></span>


                                    </label>
                                    <!--end::Label--> <!--begin::Label-->
                                    <label class="d-flex align-items-center fs-4 fw-bold form-label mb-2">
                                        <span>Sınıf Seçimi: <p id="selected_class">TP201</p></span>


                                    </label>
                                    <!--end::Label-->
 <!--begin::Label-->
                                    <label class="d-flex align-items-center fs-4 fw-bold form-label mb-2">
                                        <span>Gün Seçimi: <p id="selected_day">Pazartesi</p></span>


                                    </label>
                                    <!--end::Label-->
 <!--begin::Label-->
                                    <label class="d-flex align-items-center fs-4 fw-bold form-label mb-2">
                                        <span>Saatler: <p id="selected_time">09:00 - 10:00</p></span>


                                    </label>
                                    <!--end::Label-->


                                </div>
                                <!--end::Input group-->

                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Step 4-->
                        <!--begin::Step 5-->
                        <div class="m-0" data-kt-stepper-element="content">
                            <!--begin::Wrapper-->
                            <div class="w-100">
                                <!--begin::Heading-->
                                <div class="pb-8 pb-lg-10">
                                    <!--begin::Title-->
                                    <h2 class="fw-bolder text-dark">Tamam!</h2>
                                    <!--end::Title-->

                                <!--end::Heading-->
                                <!--begin::Body-->
                                <div class="mb-0">
                                    <!--begin::Text-->
                                    <div class="fs-6 text-gray-600 mb-5">Eğer yardıma ihtiyacınız varsa lütfen kullanım klavuzuna gözatın</div>
                                    <!--end::Text-->
                                    <!--begin::Alert-->
                                    <!--begin::Notice-->
                                    <div id="success" class="notice d-flex bg-light-success rounded border-success border border-dashed p-6">
                                        <!--begin::Icon-->
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
                                        <span class="svg-icon svg-icon-2tx svg-icon-success me-4">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black"/>
<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black"/>
</svg>
												</span>
                                        <!--end::Svg Icon-->
                                        <!--end::Icon-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-stack flex-grow-1">
                                            <!--begin::Content-->
                                            <div class="fw-bold">
                                                <h4 class="text-gray-900 fw-bolder">Kayıt Eklendi!</h4>
                                                <div class="fs-6 text-gray-700">Kaydınız başarılı şekilde eklendi</div>
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <div id="fail" class="notice d-flex bg-light-warning rounded border-warning border border-dashed p-6">
                                        <!--begin::Icon-->
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
                                        <span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black"></rect>
														<rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="black"></rect>
														<rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="black"></rect>
													</svg>
												</span>
                                        <!--end::Svg Icon-->
                                        <!--end::Icon-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-stack flex-grow-1">
                                            <!--begin::Content-->
                                            <div class="fw-bold">
                                                <h4 class="text-gray-900 fw-bolder">Kayıt eklenemedi!</h4>
                                                <div class="fs-6 text-gray-700">Lütfen bilgileri kontrol ederek tekrar deneyiniz. Saatler uyuşmuyor olabilir.</div>
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Notice-->
                                    <!--end::Alert-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        </div>
                        <!--end::Step 5-->
                        <!--begin::Actions-->
                        <div class="d-flex flex-stack pt-15">
                            <div class="mr-2">
                                <button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
                                    <span class="svg-icon svg-icon-4 me-1">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
												<rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1" fill="black"></rect>
												<path d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z" fill="black"></path>
											</svg>
										</span>
                                    <!--end::Svg Icon-->Geri</button>
                            </div>
                            <div>
                                <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="submit" onclick="sendajaxform()">
											<span class="indicator-label">Tamamla
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
											<span class="svg-icon svg-icon-4 ms-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
													<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black"></rect>
													<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black"></path>
												</svg>
											</span>
                                                <!--end::Svg Icon--></span>
                                    <span class="indicator-progress">Lütfen Bekleyin...
											<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                                <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">Devam
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                    <span class="svg-icon svg-icon-4 ms-1">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
												<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black"></rect>
												<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black"></path>
											</svg>
										</span>
                                    <!--end::Svg Icon--></button>
                            </div>
                        </div>
                        <!--end::Actions-->

                        <input type="text" id="form_user_id" value="{{ auth()->user()->id }}" hidden>

                        </form>
                    <!--end::Form-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Content-->
            <!--begin::Footer-->
            <div class="d-flex flex-center flex-wrap fs-6 p-5 pb-0">
                <!--begin::Links-->
                <div class="d-flex flex-center fw-bold fs-6">
                    <a href="{{ route('dashboard') }}" class="text-muted text-hover-primary px-2" target="_blank">Ana Sayfa</a>
                    <a href="#" class="text-muted text-hover-primary px-2" target="_blank">Yardım</a>

                </div>
                <!--end::Links-->
            </div>
            <!--end::Footer-->
        </div>
        <!--end::Body-->
    </div>
    <!--end::Authentication - Multi-steps-->
</div>
@include('layouts.js')

</body>
<script>
    function sendajaxform()
    {

       var lesson_id = document.getElementById("lesson").value;
        var classroom_id =  document.getElementById("classroom_selectlist").value;
        var day = document.getElementById("day_selectlist").value;
        var time = document.getElementById("timestart").value;
        var time_end = document.getElementById("timeend").value;
        $.ajax({
            type: "POST",
            dataType:'html',
            url : "/addtotimetablenew",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data:{
                lesson_id:lesson_id,
                classroom_id:classroom_id,
                day:day,
                time:time,
                time_end:time_end
            },
            success : function (data) {
                data = JSON.parse(data);
               if(data.success==1){
                document.getElementById('fail').classList.add("d-none");
                document.getElementById('success').classList.remove("d-none");
               }
                else {
                   document.getElementById('success').classList.add("d-none");
                   document.getElementById('fail').classList.remove("d-none");
               }
            }
        });
    }
    function setformdetails()
    {
        document.getElementById('selected_lesson').innerHTML = $("#lesson option:selected").text();
        document.getElementById('selected_class').innerHTML = $("#classroom_selectlist option:selected").text();
        document.getElementById('selected_day').innerHTML = $("#day_selectlist option:selected").text();
        document.getElementById('selected_time').innerHTML = $("#timestart option:selected").text() + ' - ' +$("#timeend option:selected").text();
    }
    function onclassroomchange()
    {
        var classroom_id = document.getElementById("classroom_selectlist").value;
        let temp = window.timetable;
        console.log('Sınıf ID: ', classroom_id);
        var currentclassarray = '';
        temp.forEach(function (element, index){
            if(element[0].classroom_id == classroom_id){
                currentclassarray = element;
            }
        })
        var day = document.getElementById("day_selectlist").value;
        console.log(day);
        var currentdayarray = [];
        if(currentclassarray.length !== 0)
        {currentclassarray.forEach(function (element){
            if(element.day == day){
                currentdayarray.push(element);
            }
        })}
        console.log(currentdayarray);
        if(currentdayarray.length !== 0)
        {
            console.log("Current day array boş değil");
            for (var option of document.getElementById("timestart").options) {
                option.disabled = false;
            }
            for (var option of document.getElementById("timeend").options) {
                option.disabled = false;
            }
            if(Array.isArray(currentdayarray))
            {


            currentdayarray.forEach(function (element) {
                console.log(element);
                document.getElementById("time_"+element.time).disabled = true;
                document.getElementById("timeend_"+element.time_end).disabled = true;
            })
            }
            else
            {
                document.getElementById("time_"+currentdayarray.time).disabled = true;
                document.getElementById("timeend_"+currentdayarray.time_end).disabled = true;
            }
        }
        else {
            console.log("Current day array boş");
            for (var option of document.getElementById("timestart").options) {
                option.disabled = false;
            }
            for (var option of document.getElementById("timeend").options) {
                option.disabled = false;
            }
        }

    }
</script>
<!--end::Body-->
</html>

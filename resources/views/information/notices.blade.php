@extends("../master")

@section('title', 'Öğretmen Duyuruları')
@section('description', 'Öğretmenlerin takip etmesi için yöneticiler tarafından oluşturulmuş duyurular')
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
                    <h1 class="fs-2x text-gray-800 w-bolder mb-6">Duyurular</h1>
                    <!--end::Title-->
                    <!--begin::Text-->
                    <p class="fw-bold fs-4 text-gray-600 mb-2">Öğretmenlerin sistemi takip edebilmesi için yöneticiler tarafından oluşturulmuş tüm duyurular aşağıdadır.</p>
                    <!--end::Text-->
                </div>
                <!--end::Intro-->
                <div class="tab-content">
                    <!--begin::Tab panel-->
                    <div class=" fade show active">
                        <!--begin::Items-->
                        <div>
                            @foreach($notifications as $not)
                            <!--begin::Item-->
                            <div class="d-flex flex-stack py-4">
                                <!--begin::Section-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-55px me-4">
																		<span class="symbol-label bg-light-primary">
																			<!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen044.svg-->
<span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black"/>
<rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="black"/>
<rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="black"/>
</svg></span>
                                                                            <!--end::Svg Icon-->
																		</span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div class="mb-0 me-2">
                                        <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">{{ $not->title }}</a>
                                        <div class="text-gray-600 fs-7 pt-1">{{ $not->content }}</div>
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Label-->
                                <span class="badge badge-light fs-8">{{ Carbon::parse($not->created_at)->diffForHumans(Carbon::now()) }}</span>
                                <!--end::Label-->
                            </div>
                            <!--end::Item-->
                            @endforeach
                        </div>
                        <!--end::Items-->

                    </div>
                    <!--end::Tab panel-->

                </div>


            </div>
            <!--end::Card body-->
        </div>
        <!--end::FAQ-->
    </div>
    <!--end::Post-->
@endsection

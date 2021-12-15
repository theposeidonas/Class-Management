@extends("../master")

@section('title', 'Panel Hakkında')
@section('description', 'Panel Hakkında, yazanlar ve panel kullanım amaçları hakkında oluşturulmuş sayfa.')
<!--end::Head-->
<!--begin::Body-->
@section('post')
    <!--begin::Post-->
    <div class="content flex-row-fluid" id="kt_content">
        <!--begin::About card-->
        <div class="card">
            <!--begin::Body-->
            <div class="card-body p-lg-17">
                <!--begin::About-->
                <div class="mb-18">
                    <!--begin::Wrapper-->
                    <div class="mb-10">
                        <!--begin::Top-->
                        <div class="text-center mb-15">
                            <!--begin::Title-->
                            <h3 class="fs-2hx text-dark mb-5">Panel Hakkında</h3>
                            <!--end::Title-->
                            <!--begin::Text-->
                            <div class="fs-5 text-muted fw-bold">CMS yani Class Management System, Girne Amerikan Üniversitesi Mühendislik Fakültesi için oluşturulmuş bir derslik yönetim sistemidir. Amacı sınıfların ve derslerin çakışmasını önlemek, aynı zamanda hocalara yardımcı olmaktır.</div>
                            <!--end::Text-->
                        </div>
                        <!--end::Top-->
                        <!--begin::Overlay-->
                        <div class="overlay">
                            <!--begin::Image-->
                            <img class="w-100 card-rounded" src="/assets/media/stock/2000x800/1.jpg" alt="">
                            <!--end::Image-->
                            <!--begin::Links-->

                            <!--end::Links-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Description-->
                    <div class="fs-5 fw-bold text-gray-600">
                        <!--begin::Text-->
                        <p class="mb-8">Bu panel yardımı ile fakülte yöneticisi öğretmenleri, sınıfları ve derslikleri atayabilir, öğretmenler kendi sınıflarına derslerini yerleştirebilir ve tüm zaman tablosu otomatik olarak güncellenir. Bu sayede dersler çakışmaz ve sınıflar düzenli dağılmış olur.
                          </p>
                        <!--end::Text-->
                        <!--begin::Text-->
                        <p class="mb-8">Projenin amacı hocalara yardımcı olmak ve fakülte içerisinde
                            <span class="text-gray-800 pe-1">Sınıf & Derslik dağılımlarını</span> doğru ve etkili şekilde yapmaktır.</p>
                        <!--end::Text-->
                        <!--begin::Text-->
                        <p class="mb-8">Dağılımları yaparken öncelik her zaman kolay şekilde ulaşılabilirlik, kolay kullanım ve <span class="text-gray-800 pe-1"> bilgiye anında ulaşmaktır.</span></p>
                        <!--end::Text-->
                        <!--begin::Text-->
                        <p class="mb-17">Fakülte yöneticisi <span class="text-gray-800 pe-1"> Öğretmen & Sınıf & Ders</span> tanımlayabilirken, standart kullanıcı olarak geçen öğretmenler tanımlanan sınıfları ve dersleri yönetebilir. İsterlerse aralarında sınıf alışverişi yapabilirler.</p>
                        <!--end::Text-->
                    </div>
                    <!--end::Description-->
                </div>
                <!--end::About-->
                <!--begin::Team-->
                <div class="mb-18">
                    <!--begin::Heading-->
                    <div class="text-center mb-12">
                        <!--begin::Title-->
                        <h3 class="fs-2hx text-dark mb-5">Proje Takımı</h3>
                        <!--end::Title-->
                        <!--begin::Sub-title-->
                        <div class="fs-5 text-muted fw-bold">Projenin her aşamasında emek veren, efor harcayan ve aynı zamanda kalite için <br> çalışan takım arkadaşları. </div>
                        <!--end::Sub-title=-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Slider-->
                    <div class="tns tns-default mb-10">
                        <!--begin::Wrapper-->
                        <div data-tns="true" data-tns-loop="true" data-tns-swipe-angle="false" data-tns-speed="2000" data-tns-autoplay="true" data-tns-autoplay-timeout="18000" data-tns-controls="true" data-tns-nav="false" data-tns-items="1" data-tns-center="false" data-tns-dots="false" data-tns-prev-button="#kt_team_slider_prev" data-tns-next-button="#kt_team_slider_next" data-tns-responsive="{1200: {items: 3}, 992: {items: 2}}">
                            <!--begin::Item-->
                            <div class="text-center">
                                <!--begin::Photo-->
                                <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('/assets/media/avatars/baran-arda.png')"></div>
                                <!--end::Photo-->
                                <!--begin::Person-->
                                <div class="mb-0">
                                    <!--begin::Name-->
                                    <a href="#" class="text-dark fw-bolder text-hover-primary fs-3">Baran Arda</a>
                                    <!--end::Name-->
                                    <!--begin::Position-->
                                    <div class="text-muted fs-6 fw-bold mt-1">Back End Designer - Takım Lideri</div>
                                    <!--begin::Position-->
                                </div>
                                <!--end::Person-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="text-center">
                                <!--begin::Photo-->
                                <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('/assets/media/avatars/mehmet-baysal.png')"></div>
                                <!--end::Photo-->
                                <!--begin::Person-->
                                <div class="mb-0">
                                    <!--begin::Name-->
                                    <a href="#" class="text-dark fw-bolder text-hover-primary fs-3">Mehmet Baysal</a>
                                    <!--end::Name-->
                                    <!--begin::Position-->
                                    <div class="text-muted fs-6 fw-bold mt-1">Front End Designer</div>
                                    <!--begin::Position-->
                                </div>
                                <!--end::Person-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="text-center">
                                <!--begin::Photo-->
                                <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('/assets/media/avatars/enis-goktas.png')"></div>
                                <!--end::Photo-->
                                <!--begin::Person-->
                                <div class="mb-0">
                                    <!--begin::Name-->
                                    <a href="#" class="text-dark fw-bolder text-hover-primary fs-3">Enis Göktaş</a>
                                    <!--end::Name-->
                                    <!--begin::Position-->
                                    <div class="text-muted fs-6 fw-bold mt-1">Model & Eloquent Designer</div>
                                    <!--begin::Position-->
                                </div>
                                <!--end::Person-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="text-center">
                                <!--begin::Photo-->
                                <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('/assets/media/avatars/dogancan-usta.jpg')"></div>
                                <!--end::Photo-->
                                <!--begin::Person-->
                                <div class="mb-0">
                                    <!--begin::Name-->
                                    <a href="#" class="text-dark fw-bolder text-hover-primary fs-3">Doğancan Usta</a>
                                    <!--end::Name-->
                                    <!--begin::Position-->
                                    <div class="text-muted fs-6 fw-bold mt-1">UX & UI Designer</div>
                                    <!--begin::Position-->
                                </div>
                                <!--end::Person-->
                            </div>
                            <!--end::Item-->

                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Button-->
                        <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_prev">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr074.svg-->
                            <span class="svg-icon svg-icon-3x">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
														<path d="M11.2657 11.4343L15.45 7.25C15.8642 6.83579 15.8642 6.16421 15.45 5.75C15.0358 5.33579 14.3642 5.33579 13.95 5.75L8.40712 11.2929C8.01659 11.6834 8.01659 12.3166 8.40712 12.7071L13.95 18.25C14.3642 18.6642 15.0358 18.6642 15.45 18.25C15.8642 17.8358 15.8642 17.1642 15.45 16.75L11.2657 12.5657C10.9533 12.2533 10.9533 11.7467 11.2657 11.4343Z" fill="black"></path>
													</svg>
												</span>
                            <!--end::Svg Icon-->
                        </button>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_next">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
                            <span class="svg-icon svg-icon-3x">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
														<path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="black"></path>
													</svg>
												</span>
                            <!--end::Svg Icon-->
                        </button>
                        <!--end::Button-->
                    </div>
                    <!--end::Items-->
                </div>
                <!--end::Team-->
                <!--begin::Card-->
                <div class="card bg-light text-center">
                    <!--begin::Body-->
                    <div class="card-body py-12 text-center">

                        <!--begin::Icon-->
                        <a href="#" class="mx-4">
                            <img src="../../assets/media/svg/brand-logos/github.svg" class="h-30px my-2" alt="Github Linki">
                        </a>
                        <!--end::Icon-->

                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::About card-->
    </div>
    <!--end::Post-->
@endsection

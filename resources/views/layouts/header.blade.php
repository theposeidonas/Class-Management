@php($route = Route::currentRouteName())
<div id="kt_header" class="header align-items-stretch" data-kt-sticky="true" data-kt-sticky-name="header"
     data-kt-sticky-offset="{default: '200px', lg: '300px'}">
    <!--begin::Container-->
    <div class="container-xxl d-flex align-items-center">
        <!--begin::Heaeder menu toggle-->
        <div class="d-flex align-items-center d-lg-none ms-n2 me-3" title="Show aside menu">
            <div class="btn btn-icon btn-custom w-30px h-30px w-md-40px h-md-40px" id="kt_header_menu_mobile_toggle">
                <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                <span class="svg-icon svg-icon-2x">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewbox="0 0 24 24" fill="none">
											<path
                                                d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                                                fill="black"></path>
											<path opacity="0.3"
                                                  d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                                                  fill="black"></path>
										</svg>
									</span>
                <!--end::Svg Icon-->
            </div>
        </div>
        <!--end::Heaeder menu toggle-->
        <!--begin::Header Logo-->
        <div class="header-logo me-5 me-md-10 flex-grow-1 flex-lg-grow-0">
            <a href="{{ route('dashboard') }}">
                <img alt="Logo" src="/assets/media/logos/logo-light.png" class="h-15px h-lg-20px logo-default">
                <img alt="Logo" src="/assets/media/logos/logo-default.png" class="h-15px h-lg-20px logo-sticky">
            </a>
        </div>
        <!--end::Header Logo-->
        <!--begin::Wrapper-->
        <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
            <!--begin::Navbar-->
            <div class="d-flex align-items-stretch" id="kt_header_nav">
                <!--begin::Menu wrapper-->
                <div class="header-menu align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="header-menu"
                     data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                     data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start"
                     data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-swapper="true"
                     data-kt-swapper-mode="prepend"
                     data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
                    <!--begin::Menu-->
                    <div
                        class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold my-5 my-lg-0 align-items-stretch"
                        id="#kt_header_menu" data-kt-menu="true">
                        <div data-kt-menu-placement="bottom-start"
                             class="menu-item menu-lg-down-accordion me-lg-1
@if($route=='dashboard') here @endif
">
                            <span class="menu-link py-3">
                                <a style="color: white" href="{{ route('dashboard') }}">
                                    <span class="menu-title">Ana Sayfa</span>
                                </a>
							</span>

                        </div>
                        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                             data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-lg-1
@if($route=='about-panel' or $route=='notices') here @endif
">
												<span class="menu-link py-3">
													<span class="menu-title">Bilgiler</span>
													<span class="menu-arrow d-lg-none"></span>
												</span>
                            <div
                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
                                <div class="menu-item">
                                    <a class="menu-link py-3" href="{{ route('about-panel') }}">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                        <span class="menu-title">Panel Hakkında</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-3" href="{{ route('notices') }}">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                        <span class="menu-title">Öğretmen Duyuruları</span>
                                    </a>
                                </div>


                            </div>
                        </div>

                        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                             data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-lg-1
@if($route=='teachers' or $route=='class' or $route=='timetable' or $route=='classroom') here @endif
">
												<span class="menu-link py-3">
													<span class="menu-title">Modüller</span>
													<span class="menu-arrow d-lg-none"></span>
												</span>

                            <div
                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
                                <div class="menu-item">
                                    <a class="menu-link py-3" href="{{ route('teachers') }}">
															<span class="menu-icon">
																	<!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
																<span class="svg-icon svg-icon-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                         height="24" viewbox="0 0 24 24" fill="none">
																		<path opacity="0.3"
                                                                              d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z"
                                                                              fill="black"></path>
																		<path
                                                                            d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z"
                                                                            fill="black"></path>
																	</svg>
																</span>
                                                                <!--end::Svg Icon-->
															</span>
                                        <span class="menu-title">Öğretmenler</span>
                                    </a>
                                </div>

                                <div class="menu-item">
                                    <a class="menu-link py-3" href="{{ route('classroom') }}">
															<span class="menu-icon">
																<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
																<span class="svg-icon svg-icon-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                         height="25" viewBox="0 0 24 25" fill="none">
<path opacity="0.3"
      d="M8.9 21L7.19999 22.6999C6.79999 23.0999 6.2 23.0999 5.8 22.6999L4.1 21H8.9ZM4 16.0999L2.3 17.8C1.9 18.2 1.9 18.7999 2.3 19.1999L4 20.9V16.0999ZM19.3 9.1999L15.8 5.6999C15.4 5.2999 14.8 5.2999 14.4 5.6999L9 11.0999V21L19.3 10.6999C19.7 10.2999 19.7 9.5999 19.3 9.1999Z"
      fill="black"/>
<path
    d="M21 15V20C21 20.6 20.6 21 20 21H11.8L18.8 14H20C20.6 14 21 14.4 21 15ZM10 21V4C10 3.4 9.6 3 9 3H4C3.4 3 3 3.4 3 4V21C3 21.6 3.4 22 4 22H9C9.6 22 10 21.6 10 21ZM7.5 18.5C7.5 19.1 7.1 19.5 6.5 19.5C5.9 19.5 5.5 19.1 5.5 18.5C5.5 17.9 5.9 17.5 6.5 17.5C7.1 17.5 7.5 17.9 7.5 18.5Z"
    fill="black"/>
</svg>
																</span>
                                                                <!--end::Svg Icon-->
															</span>
                                        <span class="menu-title">Sınıflar</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-3" href="{{ route('class') }}">
															<span class="menu-icon">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen051.svg-->
																<span class="svg-icon svg-icon-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                         height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.3"
                                                                              d="M21 22H14C13.4 22 13 21.6 13 21V3C13 2.4 13.4 2 14 2H21C21.6 2 22 2.4 22 3V21C22 21.6 21.6 22 21 22Z"
                                                                              fill="black"></path>
																		<path
                                                                            d="M10 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H10C10.6 2 11 2.4 11 3V21C11 21.6 10.6 22 10 22Z"
                                                                            fill="black"></path>
																	</svg>
																</span>
                                                                <!--end::Svg Icon-->
															</span>
                                        <span class="menu-title">Dersler</span>
                                    </a>
                                </div>

                                <div class="menu-item">
                                    <a class="menu-link py-3" href="{{ route('timetable') }}">
															<span class="menu-icon">
																<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
																<span class="svg-icon svg-icon-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                         height="24" viewbox="0 0 24 24" fill="none">
																		<path opacity="0.3"
                                                                              d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z"
                                                                              fill="black"></path>
																		<path
                                                                            d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z"
                                                                            fill="black"></path>
																		<path
                                                                            d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z"
                                                                            fill="black"></path>
																	</svg>
																</span>
                                                                <!--end::Svg Icon-->
															</span>
                                        <span class="menu-title">Tüm Sınıf Tablosu</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="menu-item pe-1"><span class="py-3">   |  </span></div>
                        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                             data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-lg-1">
												<span class="menu-link py-3">
													<span class="menu-title">Sistem</span>
													<span class="menu-arrow d-lg-none"></span>
												</span>
                            <div
                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
                                <div class="menu-item">
                                    <a class="menu-link py-3" href="{{ route('backup') }}">
															<span class="menu-icon">
															<!--begin::Svg Icon | path: assets/media/icons/duotune/arrows/arr029.svg-->
<span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                       fill="none">
<path
    d="M14.5 20.7259C14.6 21.2259 14.2 21.826 13.7 21.926C13.2 22.026 12.6 22.0259 12.1 22.0259C9.5 22.0259 6.9 21.0259 5 19.1259C1.4 15.5259 1.09998 9.72592 4.29998 5.82592L5.70001 7.22595C3.30001 10.3259 3.59999 14.8259 6.39999 17.7259C8.19999 19.5259 10.8 20.426 13.4 19.926C13.9 19.826 14.4 20.2259 14.5 20.7259ZM18.4 16.8259L19.8 18.2259C22.9 14.3259 22.7 8.52593 19 4.92593C16.7 2.62593 13.5 1.62594 10.3 2.12594C9.79998 2.22594 9.4 2.72595 9.5 3.22595C9.6 3.72595 10.1 4.12594 10.6 4.02594C13.1 3.62594 15.7 4.42595 17.6 6.22595C20.5 9.22595 20.7 13.7259 18.4 16.8259Z"
    fill="black"/>
<path opacity="0.3"
      d="M2 3.62592H7C7.6 3.62592 8 4.02592 8 4.62592V9.62589L2 3.62592ZM16 14.4259V19.4259C16 20.0259 16.4 20.4259 17 20.4259H22L16 14.4259Z"
      fill="black"/>
</svg></span>
                                                                <!--end::Svg Icon-->
															</span>
                                        <span class="menu-title">Sistem Yedekleme</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-3" href="{{ route('do-backup') }}">
															<span class="menu-icon">
																<!--begin::Svg Icon | path: icons/duotune/layouts/lay009.svg-->
																<span class="svg-icon svg-icon-2">

<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path opacity="0.3"
      d="M5 16C3.3 16 2 14.7 2 13C2 11.3 3.3 10 5 10H5.1C5 9.7 5 9.3 5 9C5 6.2 7.2 4 10 4C11.9 4 13.5 5 14.3 6.5C14.8 6.2 15.4 6 16 6C17.7 6 19 7.3 19 9C19 9.4 18.9 9.7 18.8 10C18.9 10 18.9 10 19 10C20.7 10 22 11.3 22 13C22 14.7 20.7 16 19 16H5ZM8 13.6H16L12.7 10.3C12.3 9.89999 11.7 9.89999 11.3 10.3L8 13.6Z"
      fill="black"/>
<path d="M11 13.6V19C11 19.6 11.4 20 12 20C12.6 20 13 19.6 13 19V13.6H11Z" fill="black"/>
</svg>
																</span>
                                                                <!--end::Svg Icon-->
															</span>
                                        <span class="menu-title">Sistemi Yedekle</span>
                                    </a>
                                </div>


                            </div>
                        </div>

                        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                             data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-lg-1">
												<span class="menu-link py-3">
													<span class="menu-title">Kaynaklar</span>
													<span class="menu-arrow d-lg-none"></span>
												</span>
                            <div
                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
                                <div class="menu-item">
                                    <a class="menu-link py-3" href="#" title="Kapsamlı kullanım kılavuzuna gözatın!"
                                       data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click"
                                       data-bs-placement="right">
															<span class="menu-icon">
																<!--begin::Svg Icon | path: icons/duotune/layouts/lay009.svg-->
																<span class="svg-icon svg-icon-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                         height="24" viewbox="0 0 24 24" fill="none">
																		<path opacity="0.3"
                                                                              d="M20 14H11C10.4 14 10 13.6 10 13V10C10 9.4 10.4 9 11 9H20C20.6 9 21 9.4 21 10V13C21 13.6 20.6 14 20 14ZM21 20V17C21 16.4 20.6 16 20 16H11C10.4 16 10 16.4 10 17V20C10 20.6 10.4 21 11 21H20C20.6 21 21 20.6 21 20Z"
                                                                              fill="black"></path>
																		<path
                                                                            d="M20 7H3C2.4 7 2 6.6 2 6V3C2 2.4 2.4 2 3 2H20C20.6 2 21 2.4 21 3V6C21 6.6 20.6 7 20 7ZM7 9H3C2.4 9 2 9.4 2 10V20C2 20.6 2.4 21 3 21H7C7.6 21 8 20.6 8 20V10C8 9.4 7.6 9 7 9Z"
                                                                            fill="black"></path>
																	</svg>
																</span>
                                                                <!--end::Svg Icon-->
															</span>
                                        <span class="menu-title">Kullanım Kılavuzu</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-3" href="#" title="Tüm dökümantasyona gözatın!"
                                       data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click"
                                       data-bs-placement="right">
															<span class="menu-icon">
																<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
																<span class="svg-icon svg-icon-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                         height="24" viewbox="0 0 24 24" fill="none">
																		<path opacity="0.3"
                                                                              d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
                                                                              fill="black"></path>
																		<path
                                                                            d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
                                                                            fill="black"></path>
																	</svg>
																</span>
                                                                <!--end::Svg Icon-->
															</span>
                                        <span class="menu-title">Dökümantasyon</span>
                                    </a>
                                </div>

                                <div class="menu-item">
                                    <a class="menu-link py-3" href="{{ route('version-notes') }}" title="Versiyon değişikliklere gözatın!"
                                       data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click"
                                       data-bs-placement="right">
															<span class="menu-icon">
																<!--begin::Svg Icon | path: icons/duotune/coding/cod003.svg-->
																<span class="svg-icon svg-icon-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                         height="24" viewbox="0 0 24 24" fill="none">
																		<path
                                                                            d="M16.95 18.9688C16.75 18.9688 16.55 18.8688 16.35 18.7688C15.85 18.4688 15.75 17.8688 16.05 17.3688L19.65 11.9688L16.05 6.56876C15.75 6.06876 15.85 5.46873 16.35 5.16873C16.85 4.86873 17.45 4.96878 17.75 5.46878L21.75 11.4688C21.95 11.7688 21.95 12.2688 21.75 12.5688L17.75 18.5688C17.55 18.7688 17.25 18.9688 16.95 18.9688ZM7.55001 18.7688C8.05001 18.4688 8.15 17.8688 7.85 17.3688L4.25001 11.9688L7.85 6.56876C8.15 6.06876 8.05001 5.46873 7.55001 5.16873C7.05001 4.86873 6.45 4.96878 6.15 5.46878L2.15 11.4688C1.95 11.7688 1.95 12.2688 2.15 12.5688L6.15 18.5688C6.35 18.8688 6.65 18.9688 6.95 18.9688C7.15 18.9688 7.35001 18.8688 7.55001 18.7688Z"
                                                                            fill="black"></path>
																		<path opacity="0.3"
                                                                              d="M10.45 18.9687C10.35 18.9687 10.25 18.9687 10.25 18.9687C9.75 18.8687 9.35 18.2688 9.55 17.7688L12.55 5.76878C12.65 5.26878 13.25 4.8687 13.75 5.0687C14.25 5.1687 14.65 5.76878 14.45 6.26878L11.45 18.2688C11.35 18.6688 10.85 18.9687 10.45 18.9687Z"
                                                                              fill="black"></path>
																	</svg>
																</span>
                                                                <!--end::Svg Icon-->
															</span>
                                        <span class="menu-title">v{{ config('app.version') }} Notları</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Menu-->
                </div>
                <!--end::Menu wrapper-->
            </div>
            <!--end::Navbar-->
            <!--begin::User Alanı-->
            <div class="d-flex align-items-stretch flex-shrink-0">
                <!--begin::Toolbar wrapper-->
                <div class="topbar d-flex align-items-stretch flex-shrink-0">
                    <!--begin::User-->
                    <div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
                        <!--begin::Menu wrapper-->
                        <div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="click"
                             data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                            <img alt="{{ auth()->user()->name }}" src="/assets/media/avatars/{{ auth()->user()->avatar }}">
                        </div>
                        <!--begin::Menu-->
                        <div
                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <div class="menu-content d-flex align-items-center px-3">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-50px me-5">
                                        <img alt="{{ auth()->user()->name }}" src="/assets/media/avatars/{{ auth()->user()->avatar }}">
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Username-->
                                    <div class="d-flex flex-column">
                                        <div class="fw-bolder d-flex align-items-center fs-5">{{ auth()->user()->name }}
                                            <span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">Yönetici</span>
                                        </div>
                                        <a href="#" class="fw-bold text-muted text-hover-primary fs-7">{{ auth()->user()->email }}</a>
                                    </div>
                                    <!--end::Username-->
                                </div>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu separator-->
                            <div class="separator my-2"></div>
                            <!--end::Menu separator-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-5">
                                <a href="{{ route('profile') }}" class="menu-link px-5">Profil</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->

                            <!--end::Menu item-->
                            <!--begin::Menu separator-->
                            <div class="separator my-2"></div>
                            <!--end::Menu separator-->
                            <!--begin::Menu item-->
                        {{--                            <div class="menu-item px-5" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">--}}
                        {{--                                <a href="#" class="menu-link px-5">--}}
                        {{--														<span class="menu-title position-relative">Language--}}
                        {{--														<span class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">English--}}
                        {{--														<img class="w-15px h-15px rounded-1 ms-2" src="../../assets/media/flags/united-states.svg" alt=""></span></span>--}}
                        {{--                                </a>--}}
                        {{--                                <!--begin::Menu sub-->--}}
                        {{--                                <div class="menu-sub menu-sub-dropdown w-175px py-4">--}}
                        {{--                                    <!--begin::Menu item-->--}}
                        {{--                                    <div class="menu-item px-3">--}}
                        {{--                                        <a href="../account/settings.html" class="menu-link d-flex px-5 active">--}}
                        {{--															<span class="symbol symbol-20px me-4">--}}
                        {{--																<img class="rounded-1" src="../../assets/media/flags/united-states.svg" alt="">--}}
                        {{--															</span>English</a>--}}
                        {{--                                    </div>--}}
                        {{--                                    <!--end::Menu item-->--}}
                        {{--                                    <!--begin::Menu item-->--}}
                        {{--                                    <div class="menu-item px-3">--}}
                        {{--                                        <a href="../account/settings.html" class="menu-link d-flex px-5">--}}
                        {{--															<span class="symbol symbol-20px me-4">--}}
                        {{--																<img class="rounded-1" src="../../assets/media/flags/spain.svg" alt="">--}}
                        {{--															</span>Spanish</a>--}}
                        {{--                                    </div>--}}
                        {{--                                    <!--end::Menu item-->--}}
                        {{--                                    <!--begin::Menu item-->--}}
                        {{--                                    <div class="menu-item px-3">--}}
                        {{--                                        <a href="../account/settings.html" class="menu-link d-flex px-5">--}}
                        {{--															<span class="symbol symbol-20px me-4">--}}
                        {{--																<img class="rounded-1" src="../../assets/media/flags/germany.svg" alt="">--}}
                        {{--															</span>German</a>--}}
                        {{--                                    </div>--}}
                        {{--                                    <!--end::Menu item-->--}}
                        {{--                                    <!--begin::Menu item-->--}}
                        {{--                                    <div class="menu-item px-3">--}}
                        {{--                                        <a href="../account/settings.html" class="menu-link d-flex px-5">--}}
                        {{--															<span class="symbol symbol-20px me-4">--}}
                        {{--																<img class="rounded-1" src="../../assets/media/flags/japan.svg" alt="">--}}
                        {{--															</span>Japanese</a>--}}
                        {{--                                    </div>--}}
                        {{--                                    <!--end::Menu item-->--}}
                        {{--                                    <!--begin::Menu item-->--}}
                        {{--                                    <div class="menu-item px-3">--}}
                        {{--                                        <a href="../account/settings.html" class="menu-link d-flex px-5">--}}
                        {{--															<span class="symbol symbol-20px me-4">--}}
                        {{--																<img class="rounded-1" src="../../assets/media/flags/france.svg" alt="">--}}
                        {{--															</span>French</a>--}}
                        {{--                                    </div>--}}
                        {{--                                    <!--end::Menu item-->--}}
                        {{--                                </div>--}}
                        {{--                                <!--end::Menu sub-->--}}
                        {{--                            </div>--}}
                        <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-5">
                                <a href="{{ route('logout_post') }}" class="menu-link px-5">Çıkış Yap</a>
                            </div>
                            <!--end::Menu item-->

                        </div>
                        <!--end::Menu-->
                        <!--end::Menu wrapper-->
                    </div>
                    <!--end::User -->

                </div>
                <!--end::Toolbar wrapper-->
            </div>
            <!--end::User Alanı-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Container-->
</div>

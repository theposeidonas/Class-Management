@extends("../master")

@section('title', 'Ana Sayfa')
@section('description', 'Class Management System ana sayfası. Buradan genel kullanıcı bilgilerine ve diğer şeylere ulaşabilirsiniz.')
<!--end::Head-->
<!--begin::Body-->
@section('post')
    <div class="content flex-row-fluid" id="kt_content">
        <!--begin::Index-->
        <div class="card card-page">
            <!--begin::Card body-->
            <div class="card-body">
                <!--begin::Row-->
                <div class="row gy-5 g-xl-8">
                    <!--begin::Col-->
                    <div class="col-xxl-6">
                        <!--begin::Table Widget 1-->
                        <div class="card card-xxl-stretch">
                            <!--begin::Header-->
                            <div class="card-header border-0 pt-5 pb-3">
                                <!--begin::Card title-->
                                <h3 class="card-title fw-bolder text-gray-800 fs-2">Doluluk Oranları</h3>
                                <!--end::Card title-->

                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body py-0">
                                <!--begin::Table-->
                                <div class="table-responsive">
                                    <table class="table align-middle table-row-bordered table-row-dashed gy-5" id="kt_table_widget_1">
                                        <!--begin::Table body-->
                                        <tbody>
                                        <!--begin::Table row-->
                                        <tr class="text-start text-gray-400 fw-boldest fs-7 text-uppercase">
                                            <th class="min-w-200px px-0">Fakülte</th>
                                            <th class="min-w-125px">Oran</th>
                                        </tr>
                                        <!--end::Table row-->
                                        <!--begin::Table row-->
                                        <tr>
                                            <!--begin::Author=-->
                                            <td class="p-0">
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Logo-->
                                                    <div class="symbol symbol-50px me-2">
																				<span class="symbol-label svg-icon svg-icon-2x svg-icon-primary">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path opacity="0.3" d="M19.0687 17.9688H11.0687C10.4687 17.9688 10.0687 18.3687 10.0687 18.9688V19.9688C10.0687 20.5687 10.4687 20.9688 11.0687 20.9688H19.0687C19.6687 20.9688 20.0687 20.5687 20.0687 19.9688V18.9688C20.0687 18.3687 19.6687 17.9688 19.0687 17.9688Z" fill="black"/>
<path d="M4.06875 17.9688C3.86875 17.9688 3.66874 17.8688 3.46874 17.7688C2.96874 17.4688 2.86875 16.8688 3.16875 16.3688L6.76874 10.9688L3.16875 5.56876C2.86875 5.06876 2.96874 4.46873 3.46874 4.16873C3.96874 3.86873 4.56875 3.96878 4.86875 4.46878L8.86875 10.4688C9.06875 10.7688 9.06875 11.2688 8.86875 11.5688L4.86875 17.5688C4.66875 17.7688 4.36875 17.9688 4.06875 17.9688Z" fill="black"/>
</svg>
																				</span>
                                                    </div>
                                                    <!--end::Logo-->
                                                    <div class="ps-3">
                                                        <a href="{{ route('classroom') }}" class="text-gray-800 fw-boldest fs-5 text-hover-primary mb-1">Bilgisayar Mühendisliği</a>
                                                        <span class="text-gray-400 fw-bold d-block">Bilgisayar Mühendisliği Fakültesi</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <!--end::Author=-->
                                            <!--begin::Progress=-->
                                            <td>
                                                <div class="d-flex flex-column w-100 me-2 mt-2">
                                                    <span class="text-gray-400 me-2 fw-boldest mb-2">{{ $bilgisayar }}%</span>
                                                    <div class="progress bg-light-danger w-100 h-5px">
                                                        <div class="progress-bar bg-danger" role="progressbar" style="width: {{ $bilgisayar }}%"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <!--end::Company=-->

                                        </tr>
                                        <!--end::Table row-->
                                        <!--begin::Table row-->
                                        <tr>
                                            <!--begin::Author=-->
                                            <td class="p-0">
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Logo-->
                                                    <div class="symbol symbol-50px me-2">
																				<span class="symbol-label svg-icon svg-icon-2x svg-icon-primary">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path opacity="0.3" d="M21 13H15V11H21C21.6 11 22 10.6 22 10C22 9.4 21.6 9 21 9H15V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V9H11V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V9H3C2.4 9 2 9.4 2 10C2 10.6 2.4 11 3 11H9V13H3C2.4 13 2 13.4 2 14C2 14.6 2.4 15 3 15H9V21C9 21.6 9.4 22 10 22C10.6 22 11 21.6 11 21V15H13V21C13 21.6 13.4 22 14 22C14.6 22 15 21.6 15 21V15H21C21.6 15 22 14.6 22 14C22 13.4 21.6 13 21 13Z" fill="black"/>
<path d="M16 17H8C7.4 17 7 16.6 7 16V8C7 7.4 7.4 7 8 7H16C16.6 7 17 7.4 17 8V16C17 16.6 16.6 17 16 17ZM14 10H10V14H14V10Z" fill="black"/>
</svg>
																				</span>
                                                    </div>
                                                    <!--end::Logo-->
                                                    <div class="ps-3">
                                                        <a href="{{ route('classroom') }}" class="text-gray-800 fw-boldest fs-5 text-hover-primary mb-1">Elektrik Elektronik</a>
                                                        <span class="text-gray-400 fw-bold d-block">Elektrik Elektronik Mühendisliği Fakültesi</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <!--end::Author=-->
                                            <!--begin::Progress=-->
                                            <td>
                                                <div class="d-flex flex-column w-100 me-2 mt-2">
                                                    <span class="text-gray-400 me-2 fw-boldest mb-2">{{ $elektrik }}%</span>
                                                    <div class="progress bg-light-danger w-100 h-5px">
                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: {{ $elektrik }}%"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <!--end::Company=-->

                                        </tr>
                                        <!--end::Table row-->
                                        <!--begin::Table row-->
                                        <tr>
                                            <!--begin::Author=-->
                                            <td class="p-0">
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Logo-->
                                                    <div class="symbol symbol-50px me-2">
																				<span class="symbol-label svg-icon svg-icon-2x svg-icon-primary">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M20 8H16C15.4 8 15 8.4 15 9V16H10V17C10 17.6 10.4 18 11 18H16C16 16.9 16.9 16 18 16C19.1 16 20 16.9 20 18H21C21.6 18 22 17.6 22 17V13L20 8Z" fill="black"/>
<path opacity="0.3" d="M20 18C20 19.1 19.1 20 18 20C16.9 20 16 19.1 16 18C16 16.9 16.9 16 18 16C19.1 16 20 16.9 20 18ZM15 4C15 3.4 14.6 3 14 3H3C2.4 3 2 3.4 2 4V13C2 13.6 2.4 14 3 14H15V4ZM6 16C4.9 16 4 16.9 4 18C4 19.1 4.9 20 6 20C7.1 20 8 19.1 8 18C8 16.9 7.1 16 6 16Z" fill="black"/>
</svg>
																				</span>
                                                    </div>
                                                    <!--end::Logo-->
                                                    <div class="ps-3">
                                                        <a href="{{ route('classroom') }}" class="text-gray-800 fw-boldest fs-5 text-hover-primary mb-1">Makina Mühendisliği</a>
                                                        <span class="text-gray-400 fw-bold d-block">Makina Mühendisliği</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <!--end::Author=-->
                                            <!--begin::Progress=-->
                                            <td>
                                                <div class="d-flex flex-column w-100 me-2 mt-2">
                                                    <span class="text-gray-400 me-2 fw-boldest mb-2">{{ $makina }}%</span>
                                                    <div class="progress bg-light-danger w-100 h-5px">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: {{ $makina }}%"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <!--end::Company=-->

                                        </tr>
                                        <!--end::Table row-->
                                        <!--begin::Table row-->
                                        <tr>
                                            <!--begin::Author=-->
                                            <td class="p-0">
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Logo-->
                                                    <div class="symbol symbol-50px me-2">
																				<span class="symbol-label svg-icon svg-icon-2x svg-icon-primary">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M11 2.375L2 9.575V20.575C2 21.175 2.4 21.575 3 21.575H9C9.6 21.575 10 21.175 10 20.575V14.575C10 13.975 10.4 13.575 11 13.575H13C13.6 13.575 14 13.975 14 14.575V20.575C14 21.175 14.4 21.575 15 21.575H21C21.6 21.575 22 21.175 22 20.575V9.575L13 2.375C12.4 1.875 11.6 1.875 11 2.375Z" fill="black"/>
</svg>
																				</span>
                                                    </div>
                                                    <!--end::Logo-->
                                                    <div class="ps-3">
                                                        <a href="{{ route('classroom') }}" class="text-gray-800 fw-boldest fs-5 text-hover-primary mb-1">İnşaat Mühendisliği</a>
                                                        <span class="text-gray-400 fw-bold d-block">İnşaat Mühendisliği Fakültesi</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <!--end::Author=-->
                                            <!--begin::Progress=-->
                                            <td>
                                                <div class="d-flex flex-column w-100 me-2 mt-2">
                                                    <span class="text-gray-400 me-2 fw-boldest mb-2">{{ $insaat }}%</span>
                                                    <div class="progress bg-light-danger w-100 h-5px">
                                                        <div class="progress-bar bg-info" role="progressbar" style="width: {{ $insaat }}%"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <!--end::Company=-->

                                        </tr>
                                        <!--end::Table row-->
                                        <!--begin::Table row-->
                                        <tr>
                                            <!--begin::Author=-->
                                            <td class="p-0">
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Logo-->
                                                    <div class="symbol symbol-50px me-2">
																				<span class="symbol-label svg-icon svg-icon-2x svg-icon-primary">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M8.7 4.19995L4 6.30005V18.8999L8.7 16.8V19L3.1 21.5C2.6 21.7 2 21.4 2 20.8V6C2 5.4 2.3 4.89995 2.9 4.69995L8.7 2.09998V4.19995Z" fill="black"/>
<path d="M15.3 19.8L20 17.6999V5.09992L15.3 7.19989V4.99994L20.9 2.49994C21.4 2.29994 22 2.59989 22 3.19989V17.9999C22 18.5999 21.7 19.1 21.1 19.3L15.3 21.8998V19.8Z" fill="black"/>
<path opacity="0.3" d="M15.3 7.19995L20 5.09998V17.7L15.3 19.8V7.19995Z" fill="black"/>
<path opacity="0.3" d="M8.70001 4.19995V2L15.4 5V7.19995L8.70001 4.19995ZM8.70001 16.8V19L15.4 22V19.8L8.70001 16.8Z" fill="black"/>
<path opacity="0.3" d="M8.7 16.8L4 18.8999V6.30005L8.7 4.19995V16.8Z" fill="black"/>
</svg>
																				</span>
                                                    </div>
                                                    <!--end::Logo-->
                                                    <div class="ps-3">
                                                        <a href="{{ route('classroom') }}" class="text-gray-800 fw-boldest fs-5 text-hover-primary mb-1">Jeoloji Mühendisliği</a>
                                                        <span class="text-gray-400 fw-bold d-block">Jeoloji Mühendisliği Fakültesi</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <!--end::Author=-->
                                            <!--begin::Progress=-->
                                            <td>
                                                <div class="d-flex flex-column w-100 me-2 mt-2">
                                                    <span class="text-gray-400 me-2 fw-boldest mb-2">{{ $jeo }}%</span>
                                                    <div class="progress bg-light-danger w-100 h-5px">
                                                        <div class="progress-bar bg-warning" role="progressbar" style="width: {{ $jeo }}%"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <!--end::Company=-->

                                        </tr>
                                        <!--end::Table row-->
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                </div>
                                <!--end::Table-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Table Widget 1-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xxl-6">
                        <!--begin::Row-->
                        <div class="row g-5 g-xl-8">
                            <!--begin::Col-->
                            <div class="col-xxl-6">
                                <!--begin::Mixed Widget 1-->
                                <div class="card card-xxl-stretch-50 mb-xxl-8">
                                    <!--begin::Body-->
                                    <div class="card-body pt-5">
                                        <!--begin::Chart-->
                                        <div id="kt_mixed_widget_1_chart" data-kt-height="250" class="mb-n15" data-kt-value="{{ $timetablepercent }}"></div>
                                        <!--end::Chart-->
                                        <!--begin::Label-->
                                        <span class="badge badge-lg badge-light-warning w-100 text-gray-800 text-start d-flex align-items-center">
															<i class="fas fa-exclamation-circle text-warning me-3 fs-3"></i>Tüm Sınıfların Oranı</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Mixed Widget 1-->
                                <!--begin::Statistics Widget 1-->
                                <div class="card card-xxl-stretch-50 mb-5 mb-xl-8">
                                    <!--begin::Body-->
                                    <div class="card-body d-flex flex-column justify-content-between p-0">
                                        <!--begin::Hidden-->
                                        <div class="d-flex flex-column px-9 pt-5">
                                            <!--begin::Number-->
                                            <div class="text-success fw-boldest fs-2hx">{{ $user_count }}</div>
                                            <!--end::Number-->
                                            <!--begin::Description-->
                                            <span class="text-gray-400 fw-bold fs-6">Aktif Öğretim Görevlisi</span>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Hidden--> <!--begin::Hidden-->
                                        <div class="d-flex flex-column px-9 pt-5">
                                            <!--begin::Number-->
                                            <div class="text-success fw-boldest fs-2hx">{{ $class_count }}</div>
                                            <!--end::Number-->
                                            <!--begin::Description-->
                                            <span class="text-gray-400 fw-bold fs-6">Adet Sınıf</span>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Hidden-->
                                        <!--begin::Hidden-->
                                        <div class="d-flex flex-column px-9 pt-5">
                                            <!--begin::Number-->
                                            <div class="text-success fw-boldest fs-2hx">{{ $lesson_count }}</div>
                                            <!--end::Number-->
                                            <!--begin::Description-->
                                            <span class="text-gray-400 fw-bold fs-6">Adet Ders</span>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Hidden-->
                                        <!--begin::Chart-->
                                        <div style="height: 70px"></div>
                                        <!--end::Chart-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Statistics Widget 1-->

                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xxl-6">

                                <!--begin::Engage widget 1-->
                                <div class="card card-xxl-stretch-50" style="background-color: #1C53E1">
                                    <!--begin::Card body-->
                                    <div class="card-body d-flex align-items-end p-0 pt-10">
                                        <!--begin::Wrapper-->
                                        <div class="flex-grow-1 ps-9 pb-9">
                                            <!--begin::Items-->
                                            <div class="pt-8">
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-3">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr059.svg-->
                                                    <span class="svg-icon svg-icon-3 svg-icon-white me-2">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
																				<path d="M6.8 15.8C7.3 15.7 7.9 16 8 16.5C8.2 17.4 8.99999 18 9.89999 18H17.9C19 18 19.9 17.1 19.9 16V8C19.9 6.9 19 6 17.9 6H9.89999C8.79999 6 7.89999 6.9 7.89999 8V9.4H5.89999V8C5.89999 5.8 7.69999 4 9.89999 4H17.9C20.1 4 21.9 5.8 21.9 8V16C21.9 18.2 20.1 20 17.9 20H9.89999C8.09999 20 6.5 18.8 6 17.1C6 16.5 6.3 16 6.8 15.8Z" fill="black"></path>
																				<path opacity="0.3" d="M12 9.39999H2L6.3 13.7C6.7 14.1 7.3 14.1 7.7 13.7L12 9.39999Z" fill="black"></path>
																			</svg>
																		</span>
                                                    <!--end::Svg Icon-->
                                                    <span class="fw-bolder fs-7 text-white">Öğretmenler</span>
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-3">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr059.svg-->
                                                    <span class="svg-icon svg-icon-3 svg-icon-white me-2">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
																				<path d="M6.8 15.8C7.3 15.7 7.9 16 8 16.5C8.2 17.4 8.99999 18 9.89999 18H17.9C19 18 19.9 17.1 19.9 16V8C19.9 6.9 19 6 17.9 6H9.89999C8.79999 6 7.89999 6.9 7.89999 8V9.4H5.89999V8C5.89999 5.8 7.69999 4 9.89999 4H17.9C20.1 4 21.9 5.8 21.9 8V16C21.9 18.2 20.1 20 17.9 20H9.89999C8.09999 20 6.5 18.8 6 17.1C6 16.5 6.3 16 6.8 15.8Z" fill="black"></path>
																				<path opacity="0.3" d="M12 9.39999H2L6.3 13.7C6.7 14.1 7.3 14.1 7.7 13.7L12 9.39999Z" fill="black"></path>
																			</svg>
																		</span>
                                                    <!--end::Svg Icon-->
                                                    <span class="fw-bolder fs-7 text-white">Sınıflar</span>
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-5">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr059.svg-->
                                                    <span class="svg-icon svg-icon-3 svg-icon-white me-2">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
																				<path d="M6.8 15.8C7.3 15.7 7.9 16 8 16.5C8.2 17.4 8.99999 18 9.89999 18H17.9C19 18 19.9 17.1 19.9 16V8C19.9 6.9 19 6 17.9 6H9.89999C8.79999 6 7.89999 6.9 7.89999 8V9.4H5.89999V8C5.89999 5.8 7.69999 4 9.89999 4H17.9C20.1 4 21.9 5.8 21.9 8V16C21.9 18.2 20.1 20 17.9 20H9.89999C8.09999 20 6.5 18.8 6 17.1C6 16.5 6.3 16 6.8 15.8Z" fill="black"></path>
																				<path opacity="0.3" d="M12 9.39999H2L6.3 13.7C6.7 14.1 7.3 14.1 7.7 13.7L12 9.39999Z" fill="black"></path>
																			</svg>
																		</span>
                                                    <!--end::Svg Icon-->
                                                    <span class="fw-bolder fs-7 text-white">Dersler</span>
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Items-->
                                            <!--begin::Link-->
                                            <a href="{{ route('addtotimetable') }}" class="btn btn-sm btn-success" >Yeni Plan</a>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <img class="mh-200px" alt="" src="../assets/media/svg/illustrations/engage.svg">
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Engage widget 1-->
                                <!--begin::Mixed Widget 2-->
                                <div class="card card-xxl-stretch-50 mt-8 mb-xl-8">
                                    <!--begin::Body-->
                                    <div class="card-body d-flex flex-column justify-content-between p-0">
                                        <!--begin::Hidden-->
                                        <div class="d-flex flex-column px-9 pt-5">
                                            <!--begin::Number-->
                                            <span class="text-primary fw-boldest fs-2hx">{{ count(glob('backups/' . "*.sql")) }}</span>
                                            <!--end::Number-->
                                            <!--begin::Description-->
                                            <span class="text-gray-400 fw-bold fs-6">Yedekleme Dosyası</span>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Hidden--> <!--begin::Hidden-->
                                        <div class="d-flex flex-column px-9 pt-5">
                                            <!--begin::Number-->
                                            <span class="text-primary fw-boldest fs-2hx">{{ round($foldersize/1024/1024 ,3 ) }}MB</span>
                                            <!--end::Number-->
                                            <!--begin::Description-->
                                            <span class="text-gray-400 fw-bold fs-6">Yedek Boyutu</span>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Hidden-->

                                        <!--begin::Chart-->
                                        <div style="height: 175px"></div>
                                        <!--end::Chart-->
                                    </div>
                                </div>
                                <!--end::Mixed Widget 2-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->


            </div>
            <!--end::Card body-->
        </div>
        <!--end::Index-->
    </div>
    <!--end::Post-->
@endsection

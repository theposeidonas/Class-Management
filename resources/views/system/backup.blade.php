@extends("../master")

@section('title', 'Sistem Yedekleme')
@section('description', 'Yöneticiler için oluşturulmuş sistem yedekleri ve yedekleri kontrol etme.')
<!--end::Head-->
<!--begin::Body-->
@section('post')
    @php(setlocale(LC_ALL, 'tr_TR.UTF-8', 'tr_TR', 'tr', 'turkish'))
                <!--begin::Post-->
                <div class="content flex-row-fluid" id="kt_content">
                    <!--begin::Card-->
                    <div class="card card-flush pb-0 bgi-position-y-center bgi-no-repeat mb-10" style="background-size: auto calc(100% + 10rem); background-position-x: 100%; background-image: url('../../../assets/media/illustrations/dozzy-1/4-dark.png')">
                        <!--begin::Card header-->
                        <div class="card-header pt-10">
                            <div class="d-flex align-items-center">
                                <!--begin::Icon-->
                                <div class="symbol symbol-circle me-5">
                                    <div class="symbol-label bg-transparent text-primary border border-secondary border-dashed">
                                        <!--begin::Svg Icon | path: icons/duotune/abstract/abs020.svg-->
                                        <span class="svg-icon svg-icon-2x svg-icon-primary">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
														<path d="M17.302 11.35L12.002 20.55H21.202C21.802 20.55 22.202 19.85 21.902 19.35L17.302 11.35Z" fill="black"></path>
														<path opacity="0.3" d="M12.002 20.55H2.802C2.202 20.55 1.80202 19.85 2.10202 19.35L6.70203 11.45L12.002 20.55ZM11.302 3.45L6.70203 11.35H17.302L12.702 3.45C12.402 2.85 11.602 2.85 11.302 3.45Z" fill="black"></path>
													</svg>
												</span>
                                        <!--end::Svg Icon-->
                                    </div>
                                </div>
                                <!--end::Icon-->
                                <!--begin::Title-->
                                <div class="d-flex flex-column">
                                    <h2 class="mb-1">Yedek Yöneticisi</h2>
                                    <div class="text-muted fw-bolder">
                                        <a href="{{ route('dashboard') }}">CMS</a>
                                        <span class="mx-3">|</span>
                                        <a href="#">Yedek Yöneticisi</a>
                                        <span class="mx-3">|</span>{{ round($foldersize/1024 ,3 ) }} MB
                                        <span class="mx-3">|</span>{{ count(glob('backups' . "*.sql")) }} Yedek</div>
                                </div>
                                <!--end::Title-->
                            </div>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pb-0">
                            <!--begin::Navs-->
                            <div class="d-flex overflow-auto h-55px">
                                <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold flex-nowrap">
                                    <!--begin::Nav item-->
                                    <li class="nav-item">
                                        <a class="nav-link text-active-primary me-6 active" >Yedekler</a>
                                    </li>
                                    <!--end::Nav item-->

                                </ul>
                            </div>
                            <!--begin::Navs-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                    <!--begin::Card-->
                    <div class="card card-flush">
                        <!--begin::Card header-->
                        <div class="card-header pt-8">
                            <div class="card-title">
                                <!--begin::Search-->
                                <div class="d-flex align-items-center position-relative my-1">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                    <span class="svg-icon svg-icon-1 position-absolute ms-6">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
													<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black"></rect>
													<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black"></path>
												</svg>
											</span>
                                    <!--end::Svg Icon-->
                                    <input type="text" data-kt-filemanager-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="Yedeklerde Ara">
                                </div>
                                <!--end::Search-->
                            </div>
                            <!--begin::Card toolbar-->
                            <div class="card-toolbar">


                                <!--begin::Folder Stats-->
                                <div class="badge badge-lg badge-primary m-5">
                                    <span id="kt_file_manager_items_counter">İşleniyor</span>
                                </div>
                                <!--end::Folder Stats-->
                                <!--begin::Toolbar-->
                                <div class="d-flex justify-content-end" data-kt-filemanager-table-toolbar="base">
                                    <!--begin::Back to folders-->
                                    <a href="{{ route('do-backup') }}" class="btn btn-icon btn-light-primary me-3">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
                                        <span class="svg-icon svg-icon-2">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M14.5 20.7259C14.6 21.2259 14.2 21.826 13.7 21.926C13.2 22.026 12.6 22.0259 12.1 22.0259C9.5 22.0259 6.9 21.0259 5 19.1259C1.4 15.5259 1.09998 9.72592 4.29998 5.82592L5.70001 7.22595C3.30001 10.3259 3.59999 14.8259 6.39999 17.7259C8.19999 19.5259 10.8 20.426 13.4 19.926C13.9 19.826 14.4 20.2259 14.5 20.7259ZM18.4 16.8259L19.8 18.2259C22.9 14.3259 22.7 8.52593 19 4.92593C16.7 2.62593 13.5 1.62594 10.3 2.12594C9.79998 2.22594 9.4 2.72595 9.5 3.22595C9.6 3.72595 10.1 4.12594 10.6 4.02594C13.1 3.62594 15.7 4.42595 17.6 6.22595C20.5 9.22595 20.7 13.7259 18.4 16.8259Z" fill="black"/>
<path opacity="0.3" d="M2 3.62592H7C7.6 3.62592 8 4.02592 8 4.62592V9.62589L2 3.62592ZM16 14.4259V19.4259C16 20.0259 16.4 20.4259 17 20.4259H22L16 14.4259Z" fill="black"/>
</svg>
												</span>
                                        <!--end::Svg Icon-->
                                    </a>
                                    <!--end::Back to folders-->
                                    <!--begin::Export-->
                                    <button style="display: none" type="button" class="btn btn-light-primary me-3" id="kt_file_manager_new_folder">
                                        <!--begin::Svg Icon | path: icons/duotune/files/fil013.svg-->
                                        <span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
													<path opacity="0.3" d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z" fill="black"></path>
													<path d="M10.4 3.60001L12 6H21C21.6 6 22 6.4 22 7V19C22 19.6 21.6 20 21 20H3C2.4 20 2 19.6 2 19V4C2 3.4 2.4 3 3 3H9.2C9.7 3 10.2 3.20001 10.4 3.60001ZM16 12H13V9C13 8.4 12.6 8 12 8C11.4 8 11 8.4 11 9V12H8C7.4 12 7 12.4 7 13C7 13.6 7.4 14 8 14H11V17C11 17.6 11.4 18 12 18C12.6 18 13 17.6 13 17V14H16C16.6 14 17 13.6 17 13C17 12.4 16.6 12 16 12Z" fill="black"></path>
													<path opacity="0.3" d="M11 14H8C7.4 14 7 13.6 7 13C7 12.4 7.4 12 8 12H11V14ZM16 12H13V14H16C16.6 14 17 13.6 17 13C17 12.4 16.6 12 16 12Z" fill="black"></path>
												</svg>
											</span>
                                        <!--end::Svg Icon-->New Folder</button>
                                    <!--end::Export-->
                                    <!--begin::Add customer-->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_upload">
                                        <!--begin::Svg Icon | path: icons/duotune/files/fil018.svg-->
                                        <span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
													<path opacity="0.3" d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z" fill="black"></path>
													<path d="M10.4 3.60001L12 6H21C21.6 6 22 6.4 22 7V19C22 19.6 21.6 20 21 20H3C2.4 20 2 19.6 2 19V4C2 3.4 2.4 3 3 3H9.20001C9.70001 3 10.2 3.20001 10.4 3.60001ZM16 11.6L12.7 8.29999C12.3 7.89999 11.7 7.89999 11.3 8.29999L8 11.6H11V17C11 17.6 11.4 18 12 18C12.6 18 13 17.6 13 17V11.6H16Z" fill="black"></path>
													<path opacity="0.3" d="M11 11.6V17C11 17.6 11.4 18 12 18C12.6 18 13 17.6 13 17V11.6H11Z" fill="black"></path>
												</svg>
											</span>
                                        <!--end::Svg Icon-->Yükle</button>
                                    <!--end::Add customer-->

                                </div>
                                <!--end::Toolbar-->
                                <!--begin::Group actions-->
                                <div class="d-flex justify-content-end align-items-center d-none" data-kt-filemanager-table-toolbar="selected">
                                    <div class="fw-bolder me-5">
                                        <span class="me-2" data-kt-filemanager-table-select="selected_count"></span>Seçildi</div>
                                    <button type="button" class="btn btn-danger" data-kt-filemanager-table-select="delete_selected">Seçilenleri Sil</button>
                                </div>
                                <!--end::Group actions-->
                            </div>
                            <!--end::Card toolbar-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body">
                            <!--begin::Table header-->

                            <!--end::Table header-->
                            <!--begin::Table-->
                            <table id="kt_file_manager_list" data-kt-filemanager-table="files" class="table align-middle table-row-dashed fs-6 gy-5">
                                <!--begin::Table head-->
                                <thead>
                                <!--begin::Table row-->
                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                    <th style="display: none" class="w-10px pe-2">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                            <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_file_manager_list .form-check-input" value="1">
                                        </div>
                                    </th>
                                    <th class="min-w-250px">İsim</th>
                                    <th class="min-w-10px">Boyut</th>
                                    <th class="min-w-125px">Yedek Tarihi</th>
                                    <th class="w-125px"></th>
                                </tr>
                                <!--end::Table row-->
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody class="fw-bold text-gray-600">
                                @foreach($backups as $backup)
                                <tr>
                                    <!--begin::Checkbox-->
                                    <td style="display:none;">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1">
                                        </div>
                                    </td>
                                    <!--end::Checkbox-->
                                    <!--begin::Name=-->
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin::Svg Icon | path: icons/duotune/files/fil003.svg-->
                                            <span class="svg-icon svg-icon-2x svg-icon-primary me-4">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM12 17.8C11 17.8 10.2 17.4 9.5 16.8C8.8 16.1 8.5 15.3 8.5 14.3C8.5 13.8 8.6 13.3 8.8 12.9L10 14.1V11.1C10 10.5 9.6 10.1 9 10.1H6L7.3 11.4C6.8 12.3 6.5 13.2 6.5 14.3C6.5 15.8 7.1 17.2 8.1 18.2C9.1 19.2 10.5 19.8 12 19.8C12.6 19.8 13 19.3 13 18.8C13 18.2 12.6 17.8 12 17.8ZM16.7 17.2C17.2 16.3 17.5 15.4 17.5 14.3C17.5 12.8 16.9 11.4 15.9 10.4C14.9 9.39999 13.5 8.79999 12 8.79999C11.4 8.79999 11 9.19999 11 9.79999C11 10.4 11.4 10.8 12 10.8C12.9 10.8 13.8 11.2 14.5 11.8C15.2 12.5 15.5 13.3 15.5 14.3C15.5 14.8 15.4 15.3 15.2 15.7L14 14.5V17.5C14 18.1 14.4 18.5 15 18.5H18L16.7 17.2Z" fill="black"/>
<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black"/>
</svg>
														</span>
                                            <!--end::Svg Icon-->
                                            <a href="#" class="text-gray-800 text-hover-primary">{{ basename($backup) }}</a>
                                        </div>
                                    </td>
                                    <!--end::Name=-->
                                    <!--begin::Size-->
                                    <td>{{ round(filesize($backup) / 1024, 2) }} KB</td>
                                    <!--end::Size-->
                                    <!--begin::Last modified-->
                                    <td>{{ strftime("%e %B %Y %A, %H:%M\n", filemtime($backup)) }}</td>
                                    <!--end::Last modified-->
                                    <!--begin::Actions-->
                                    <td class="text-end" data-kt-filemanager-table="action_dropdown">
                                        <div class="d-flex justify-content-end">
                                            <!--begin::Share link-->
                                            <div class="ms-2">

                                                <a href="{{ route('download-backup', ['file'=>substr($backup, 8)]) }}" class="btn btn-sm btn-icon btn-light btn-active-light-primary">
                                                    <!--begin::Svg Icon | path: icons/duotune/coding/cod007.svg-->
                                                    <span class="svg-icon svg-icon-5 m-0">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path opacity="0.3" d="M19 15C20.7 15 22 13.7 22 12C22 10.3 20.7 9 19 9C18.9 9 18.9 9 18.8 9C18.9 8.7 19 8.3 19 8C19 6.3 17.7 5 16 5C15.4 5 14.8 5.2 14.3 5.5C13.4 4 11.8 3 10 3C7.2 3 5 5.2 5 8C5 8.3 5 8.7 5.1 9H5C3.3 9 2 10.3 2 12C2 13.7 3.3 15 5 15H19Z" fill="black"/>
<path d="M13 17.4V12C13 11.4 12.6 11 12 11C11.4 11 11 11.4 11 12V17.4H13Z" fill="black"/>
<path opacity="0.3" d="M8 17.4H16L12.7 20.7C12.3 21.1 11.7 21.1 11.3 20.7L8 17.4Z" fill="black"/>
</svg>
																</span>
                                                    <!--end::Svg Icon-->
                                                </a>

                                            </div>
                                            <!--end::Share link-->
                                            <!--begin::More-->
                                            <div class="ms-2">
                                                <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen052.svg-->
                                                    <span class="svg-icon svg-icon-5 m-0">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
																		<rect x="10" y="10" width="4" height="4" rx="2" fill="black"></rect>
																		<rect x="17" y="10" width="4" height="4" rx="2" fill="black"></rect>
																		<rect x="3" y="10" width="4" height="4" rx="2" fill="black"></rect>
																	</svg>
																</span>
                                                    <!--end::Svg Icon-->
                                                </button>
                                                <!--begin::Menu-->
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-150px py-4" data-kt-menu="true">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="{{ route('restore', ['file'=>substr($backup, 8)]) }}" class="menu-link px-3">Geri Yükle</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="{{ route('delete', ['file'=>substr($backup, 8)]) }}" class="menu-link text-danger px-3">Sil</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu-->
                                            </div>
                                            <!--end::More-->
                                        </div>
                                    </td>
                                    <!--end::Actions-->
                                </tr>
                                @endforeach

                                </tbody>
                                <!--end::Table body-->
                            </table>
                            <!--end::Table-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                    <!--begin::Upload template-->
                    <table class="d-none">
                        <tr id="kt_file_manager_new_folder_row" data-kt-filemanager-template="upload">
                            <td></td>
                            <td id="kt_file_manager_add_folder_form" class="fv-row">
                                <div class="d-flex align-items-center">
                                    <!--begin::Folder icon-->
                                    <!--begin::Svg Icon | path: icons/duotune/files/fil012.svg-->
                                    <span class="svg-icon svg-icon-2x svg-icon-primary me-4">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
													<path opacity="0.3" d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z" fill="black"></path>
													<path d="M9.2 3H3C2.4 3 2 3.4 2 4V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V7C22 6.4 21.6 6 21 6H12L10.4 3.60001C10.2 3.20001 9.7 3 9.2 3Z" fill="black"></path>
												</svg>
											</span>
                                    <!--end::Svg Icon-->
                                    <!--end::Folder icon-->
                                    <!--begin:Input-->
                                    <input type="text" name="new_folder_name" placeholder="Enter the folder name" class="form-control mw-250px me-3">
                                    <!--end:Input-->
                                    <!--begin:Submit button-->
                                    <button class="btn btn-icon btn-light-primary me-3" id="kt_file_manager_add_folder">
												<span class="indicator-label">
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr085.svg-->
													<span class="svg-icon svg-icon-1">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
															<path d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z" fill="black"></path>
														</svg>
													</span>
                                                    <!--end::Svg Icon-->
												</span>
                                        <span class="indicator-progress">
													<span class="spinner-border spinner-border-sm align-middle"></span>
												</span>
                                    </button>
                                    <!--end:Submit button-->
                                    <!--begin:Cancel button-->
                                    <button class="btn btn-icon btn-light-danger" id="kt_file_manager_cancel_folder">
												<span class="indicator-label">
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
													<span class="svg-icon svg-icon-1">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
															<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="black"></rect>
															<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="black"></rect>
														</svg>
													</span>
                                                    <!--end::Svg Icon-->
												</span>
                                        <span class="indicator-progress">
													<span class="spinner-border spinner-border-sm align-middle"></span>
												</span>
                                    </button>
                                    <!--end:Cancel button-->
                                </div>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                    <!--end::Upload template-->
                    <!--begin::Rename template-->
                    <div class="d-none" data-kt-filemanager-template="rename">
                        <div class="fv-row">
                            <div class="d-flex align-items-center">
                                <span id="kt_file_manager_rename_folder_icon"></span>
                                <input type="text" id="kt_file_manager_rename_input" name="rename_folder_name" placeholder="Enter the new folder name" class="form-control mw-250px me-3" value="">
                                <button class="btn btn-icon btn-light-primary me-3" id="kt_file_manager_rename_folder">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr085.svg-->
                                    <span class="svg-icon svg-icon-1">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
													<path d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z" fill="black"></path>
												</svg>
											</span>
                                    <!--end::Svg Icon-->
                                </button>
                                <button class="btn btn-icon btn-light-danger" id="kt_file_manager_rename_folder_cancel">
											<span class="indicator-label">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
												<span class="svg-icon svg-icon-1">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="black"></rect>
														<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="black"></rect>
													</svg>
												</span>
                                                <!--end::Svg Icon-->
											</span>
                                    <span class="indicator-progress">
												<span class="spinner-border spinner-border-sm align-middle"></span>
											</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!--end::Rename template-->
                    <!--begin::Action template-->
                    <div class="d-none" data-kt-filemanager-template="action">
                        <div class="d-flex justify-content-end">
                            <!--begin::Share link-->
                            <div class="ms-2" data-kt-filemanger-table="copy_link">
                                <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <!--begin::Svg Icon | path: icons/duotune/coding/cod007.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
													<path opacity="0.3" d="M18.4 5.59998C18.7766 5.9772 18.9881 6.48846 18.9881 7.02148C18.9881 7.55451 18.7766 8.06577 18.4 8.44299L14.843 12C14.466 12.377 13.9547 12.5887 13.4215 12.5887C12.8883 12.5887 12.377 12.377 12 12C11.623 11.623 11.4112 11.1117 11.4112 10.5785C11.4112 10.0453 11.623 9.53399 12 9.15698L15.553 5.604C15.9302 5.22741 16.4415 5.01587 16.9745 5.01587C17.5075 5.01587 18.0188 5.22741 18.396 5.604L18.4 5.59998ZM20.528 3.47205C20.0614 3.00535 19.5074 2.63503 18.8977 2.38245C18.288 2.12987 17.6344 1.99988 16.9745 1.99988C16.3145 1.99988 15.661 2.12987 15.0513 2.38245C14.4416 2.63503 13.8876 3.00535 13.421 3.47205L9.86801 7.02502C9.40136 7.49168 9.03118 8.04568 8.77863 8.6554C8.52608 9.26511 8.39609 9.91855 8.39609 10.5785C8.39609 11.2384 8.52608 11.8919 8.77863 12.5016C9.03118 13.1113 9.40136 13.6653 9.86801 14.132C10.3347 14.5986 10.8886 14.9688 11.4984 15.2213C12.1081 15.4739 12.7616 15.6039 13.4215 15.6039C14.0815 15.6039 14.7349 15.4739 15.3446 15.2213C15.9543 14.9688 16.5084 14.5986 16.975 14.132L20.528 10.579C20.9947 10.1124 21.3649 9.55844 21.6175 8.94873C21.8701 8.33902 22.0001 7.68547 22.0001 7.02551C22.0001 6.36555 21.8701 5.71201 21.6175 5.10229C21.3649 4.49258 20.9947 3.93867 20.528 3.47205Z" fill="black"></path>
													<path d="M14.132 9.86804C13.6421 9.37931 13.0561 8.99749 12.411 8.74695L12 9.15698C11.6234 9.53421 11.4119 10.0455 11.4119 10.5785C11.4119 11.1115 11.6234 11.6228 12 12C12.3766 12.3772 12.5881 12.8885 12.5881 13.4215C12.5881 13.9545 12.3766 14.4658 12 14.843L8.44699 18.396C8.06999 18.773 7.55868 18.9849 7.02551 18.9849C6.49235 18.9849 5.98101 18.773 5.604 18.396C5.227 18.019 5.0152 17.5077 5.0152 16.9745C5.0152 16.4413 5.227 15.93 5.604 15.553L8.74701 12.411C8.28705 11.233 8.28705 9.92498 8.74701 8.74695C8.10159 8.99737 7.5152 9.37919 7.02499 9.86804L3.47198 13.421C2.52954 14.3635 2.00009 15.6417 2.00009 16.9745C2.00009 18.3073 2.52957 19.5855 3.47202 20.528C4.41446 21.4704 5.69269 21.9999 7.02551 21.9999C8.35833 21.9999 9.63656 21.4704 10.579 20.528L14.132 16.975C14.5987 16.5084 14.9689 15.9544 15.2215 15.3447C15.4741 14.735 15.6041 14.0815 15.6041 13.4215C15.6041 12.7615 15.4741 12.108 15.2215 11.4983C14.9689 10.8886 14.5987 10.3347 14.132 9.86804Z" fill="black"></path>
												</svg>
											</span>
                                    <!--end::Svg Icon-->
                                </button>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-300px" data-kt-menu="true">
                                    <!--begin::Card-->
                                    <div class="card card-flush">
                                        <div class="card-body p-5">
                                            <!--begin::Loader-->
                                            <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                                                <!--begin::Spinner-->
                                                <div class="me-5" data-kt-indicator="on">
															<span class="indicator-progress">
																<span class="spinner-border spinner-border-sm align-middle ms-2"></span>
															</span>
                                                </div>
                                                <!--end::Spinner-->
                                                <!--begin::Label-->
                                                <div class="fs-6 text-dark">Generating Share Link...</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Loader-->
                                            <!--begin::Link-->
                                            <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                                                <div class="d-flex mb-3">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr085.svg-->
                                                    <span class="svg-icon svg-icon-2 svg-icon-success me-3">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
																	<path d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z" fill="black"></path>
																</svg>
															</span>
                                                    <!--end::Svg Icon-->
                                                    <div class="fs-6 text-dark">Share Link Generated</div>
                                                </div>
                                                <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/">
                                                <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only.
                                                    <a href="settings/.html" class="ms-2">Change permissions</a></div>
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                    </div>
                                    <!--end::Card-->
                                </div>
                                <!--end::Menu-->
                            </div>
                            <!--end::Share link-->
                            <!--begin::More-->
                            <div class="ms-2">
                                <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen052.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
													<rect x="10" y="10" width="4" height="4" rx="2" fill="black"></rect>
													<rect x="17" y="10" width="4" height="4" rx="2" fill="black"></rect>
													<rect x="3" y="10" width="4" height="4" rx="2" fill="black"></rect>
												</svg>
											</span>
                                    <!--end::Svg Icon-->
                                </button>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-150px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Download File</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">Rename</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">Move to folder</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </div>
                            <!--end::More-->
                        </div>
                    </div>
                    <!--end::Action template-->
                    <!--begin::Checkbox template-->
                    <div class="d-none" data-kt-filemanager-template="checkbox">
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1">
                        </div>
                    </div>
                    <!--end::Checkbox template-->
                    <!--begin::Modals-->
                    <!--begin::Modal - Upload File-->
                    <div class="modal fade" id="kt_modal_upload" tabindex="-1" aria-hidden="true">
                        <!--begin::Modal dialog-->
                        <div class="modal-dialog modal-dialog-centered mw-650px">
                            <!--begin::Modal content-->
                            <div class="modal-content">
                                <!--begin::Form-->
                                <form class="form" action="none" id="kt_modal_upload_form">
                                    <!--begin::Modal header-->
                                    <div class="modal-header">
                                        <!--begin::Modal title-->
                                        <h2 class="fw-bolder">Upload files</h2>
                                        <!--end::Modal title-->
                                        <!--begin::Close-->
                                        <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                            <span class="svg-icon svg-icon-1">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
															<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black"></rect>
															<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black"></rect>
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Close-->
                                    </div>
                                    <!--end::Modal header-->
                                    <!--begin::Modal body-->
                                    <div class="modal-body pt-10 pb-15 px-lg-17">
                                        <!--begin::Input group-->
                                        <div class="form-group">
                                            <!--begin::Dropzone-->
                                            <div class="dropzone dropzone-queue mb-2" id="kt_modal_upload_dropzone">
                                                <!--begin::Controls-->
                                                <div class="dropzone-panel mb-4">
                                                    <a class="dropzone-select btn btn-sm btn-primary me-2">Attach files</a>
                                                    <a class="dropzone-upload btn btn-sm btn-light-primary me-2">Upload All</a>
                                                    <a class="dropzone-remove-all btn btn-sm btn-light-primary">Remove All</a>
                                                </div>
                                                <!--end::Controls-->
                                                <!--begin::Items-->
                                                <div class="dropzone-items wm-200px">
                                                    <div class="dropzone-item p-5" style="display:none">
                                                        <!--begin::File-->
                                                        <div class="dropzone-file">
                                                            <div class="dropzone-filename text-dark" title="some_image_file_name.jpg">
                                                                <span data-dz-name="">some_image_file_name.jpg</span>
                                                                <strong>(
                                                                    <span data-dz-size="">340kb</span>)</strong>
                                                            </div>
                                                            <div class="dropzone-error mt-0" data-dz-errormessage=""></div>
                                                        </div>
                                                        <!--end::File-->
                                                        <!--begin::Progress-->
                                                        <div class="dropzone-progress">
                                                            <div class="progress bg-light-primary">
                                                                <div class="progress-bar bg-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" data-dz-uploadprogress=""></div>
                                                            </div>
                                                        </div>
                                                        <!--end::Progress-->
                                                        <!--begin::Toolbar-->
                                                        <div class="dropzone-toolbar">
																	<span class="dropzone-start">
																		<i class="bi bi-play-fill fs-3"></i>
																	</span>
                                                            <span class="dropzone-cancel" data-dz-remove="" style="display: none;">
																		<i class="bi bi-x fs-3"></i>
																	</span>
                                                            <span class="dropzone-delete" data-dz-remove="">
																		<i class="bi bi-x fs-1"></i>
																	</span>
                                                        </div>
                                                        <!--end::Toolbar-->
                                                    </div>
                                                </div>
                                                <!--end::Items-->
                                            </div>
                                            <!--end::Dropzone-->
                                            <!--begin::Hint-->
                                            <span class="form-text fs-6 text-muted">Max file size is 1MB per file.</span>
                                            <!--end::Hint-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Modal body-->
                                </form>
                                <!--end::Form-->
                            </div>
                        </div>
                    </div>
                    <!--end::Modal - Upload File-->
                    <!--begin::Modal - New Product-->
                    <div class="modal fade" id="kt_modal_move_to_folder" tabindex="-1" aria-hidden="true">
                        <!--begin::Modal dialog-->
                        <div class="modal-dialog modal-dialog-centered mw-650px">
                            <!--begin::Modal content-->
                            <div class="modal-content">
                                <!--begin::Form-->
                                <form class="form" action="#" id="kt_modal_move_to_folder_form">
                                    <!--begin::Modal header-->
                                    <div class="modal-header">
                                        <!--begin::Modal title-->
                                        <h2 class="fw-bolder">Move to folder</h2>
                                        <!--end::Modal title-->
                                        <!--begin::Close-->
                                        <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                            <span class="svg-icon svg-icon-1">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
															<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black"></rect>
															<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black"></rect>
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Close-->
                                    </div>
                                    <!--end::Modal header-->
                                    <!--begin::Modal body-->
                                    <div class="modal-body pt-10 pb-15 px-lg-17">
                                        <!--begin::Input group-->
                                        <div class="form-group fv-row">
                                            <!--begin::Item-->
                                            <div class="d-flex">
                                                <!--begin::Checkbox-->
                                                <div class="form-check form-check-custom form-check-solid">
                                                    <!--begin::Input-->
                                                    <input class="form-check-input me-3" name="move_to_folder" type="radio" value="0" id="kt_modal_move_to_folder_0">
                                                    <!--end::Input-->
                                                    <!--begin::Label-->
                                                    <label class="form-check-label" for="kt_modal_move_to_folder_0">
                                                        <div class="fw-bolder">
                                                            <!--begin::Svg Icon | path: icons/duotune/files/fil012.svg-->
                                                            <span class="svg-icon svg-icon-2 svg-icon-primary me-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
																		<path opacity="0.3" d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z" fill="black"></path>
																		<path d="M9.2 3H3C2.4 3 2 3.4 2 4V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V7C22 6.4 21.6 6 21 6H12L10.4 3.60001C10.2 3.20001 9.7 3 9.2 3Z" fill="black"></path>
																	</svg>
																</span>
                                                            <!--end::Svg Icon-->account</div>
                                                    </label>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Checkbox-->
                                            </div>
                                            <!--end::Item-->
                                            <div class='separator separator-dashed my-5'></div>
                                            <!--begin::Item-->
                                            <div class="d-flex">
                                                <!--begin::Checkbox-->
                                                <div class="form-check form-check-custom form-check-solid">
                                                    <!--begin::Input-->
                                                    <input class="form-check-input me-3" name="move_to_folder" type="radio" value="1" id="kt_modal_move_to_folder_1">
                                                    <!--end::Input-->
                                                    <!--begin::Label-->
                                                    <label class="form-check-label" for="kt_modal_move_to_folder_1">
                                                        <div class="fw-bolder">
                                                            <!--begin::Svg Icon | path: icons/duotune/files/fil012.svg-->
                                                            <span class="svg-icon svg-icon-2 svg-icon-primary me-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
																		<path opacity="0.3" d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z" fill="black"></path>
																		<path d="M9.2 3H3C2.4 3 2 3.4 2 4V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V7C22 6.4 21.6 6 21 6H12L10.4 3.60001C10.2 3.20001 9.7 3 9.2 3Z" fill="black"></path>
																	</svg>
																</span>
                                                            <!--end::Svg Icon-->apps</div>
                                                    </label>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Checkbox-->
                                            </div>
                                            <!--end::Item-->
                                            <div class='separator separator-dashed my-5'></div>
                                            <!--begin::Item-->
                                            <div class="d-flex">
                                                <!--begin::Checkbox-->
                                                <div class="form-check form-check-custom form-check-solid">
                                                    <!--begin::Input-->
                                                    <input class="form-check-input me-3" name="move_to_folder" type="radio" value="2" id="kt_modal_move_to_folder_2">
                                                    <!--end::Input-->
                                                    <!--begin::Label-->
                                                    <label class="form-check-label" for="kt_modal_move_to_folder_2">
                                                        <div class="fw-bolder">
                                                            <!--begin::Svg Icon | path: icons/duotune/files/fil012.svg-->
                                                            <span class="svg-icon svg-icon-2 svg-icon-primary me-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
																		<path opacity="0.3" d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z" fill="black"></path>
																		<path d="M9.2 3H3C2.4 3 2 3.4 2 4V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V7C22 6.4 21.6 6 21 6H12L10.4 3.60001C10.2 3.20001 9.7 3 9.2 3Z" fill="black"></path>
																	</svg>
																</span>
                                                            <!--end::Svg Icon-->widgets</div>
                                                    </label>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Checkbox-->
                                            </div>
                                            <!--end::Item-->
                                            <div class='separator separator-dashed my-5'></div>
                                            <!--begin::Item-->
                                            <div class="d-flex">
                                                <!--begin::Checkbox-->
                                                <div class="form-check form-check-custom form-check-solid">
                                                    <!--begin::Input-->
                                                    <input class="form-check-input me-3" name="move_to_folder" type="radio" value="3" id="kt_modal_move_to_folder_3">
                                                    <!--end::Input-->
                                                    <!--begin::Label-->
                                                    <label class="form-check-label" for="kt_modal_move_to_folder_3">
                                                        <div class="fw-bolder">
                                                            <!--begin::Svg Icon | path: icons/duotune/files/fil012.svg-->
                                                            <span class="svg-icon svg-icon-2 svg-icon-primary me-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
																		<path opacity="0.3" d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z" fill="black"></path>
																		<path d="M9.2 3H3C2.4 3 2 3.4 2 4V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V7C22 6.4 21.6 6 21 6H12L10.4 3.60001C10.2 3.20001 9.7 3 9.2 3Z" fill="black"></path>
																	</svg>
																</span>
                                                            <!--end::Svg Icon-->assets</div>
                                                    </label>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Checkbox-->
                                            </div>
                                            <!--end::Item-->
                                            <div class='separator separator-dashed my-5'></div>
                                            <!--begin::Item-->
                                            <div class="d-flex">
                                                <!--begin::Checkbox-->
                                                <div class="form-check form-check-custom form-check-solid">
                                                    <!--begin::Input-->
                                                    <input class="form-check-input me-3" name="move_to_folder" type="radio" value="4" id="kt_modal_move_to_folder_4">
                                                    <!--end::Input-->
                                                    <!--begin::Label-->
                                                    <label class="form-check-label" for="kt_modal_move_to_folder_4">
                                                        <div class="fw-bolder">
                                                            <!--begin::Svg Icon | path: icons/duotune/files/fil012.svg-->
                                                            <span class="svg-icon svg-icon-2 svg-icon-primary me-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
																		<path opacity="0.3" d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z" fill="black"></path>
																		<path d="M9.2 3H3C2.4 3 2 3.4 2 4V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V7C22 6.4 21.6 6 21 6H12L10.4 3.60001C10.2 3.20001 9.7 3 9.2 3Z" fill="black"></path>
																	</svg>
																</span>
                                                            <!--end::Svg Icon-->documentation</div>
                                                    </label>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Checkbox-->
                                            </div>
                                            <!--end::Item-->
                                            <div class='separator separator-dashed my-5'></div>
                                            <!--begin::Item-->
                                            <div class="d-flex">
                                                <!--begin::Checkbox-->
                                                <div class="form-check form-check-custom form-check-solid">
                                                    <!--begin::Input-->
                                                    <input class="form-check-input me-3" name="move_to_folder" type="radio" value="5" id="kt_modal_move_to_folder_5">
                                                    <!--end::Input-->
                                                    <!--begin::Label-->
                                                    <label class="form-check-label" for="kt_modal_move_to_folder_5">
                                                        <div class="fw-bolder">
                                                            <!--begin::Svg Icon | path: icons/duotune/files/fil012.svg-->
                                                            <span class="svg-icon svg-icon-2 svg-icon-primary me-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
																		<path opacity="0.3" d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z" fill="black"></path>
																		<path d="M9.2 3H3C2.4 3 2 3.4 2 4V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V7C22 6.4 21.6 6 21 6H12L10.4 3.60001C10.2 3.20001 9.7 3 9.2 3Z" fill="black"></path>
																	</svg>
																</span>
                                                            <!--end::Svg Icon-->layouts</div>
                                                    </label>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Checkbox-->
                                            </div>
                                            <!--end::Item-->
                                            <div class='separator separator-dashed my-5'></div>
                                            <!--begin::Item-->
                                            <div class="d-flex">
                                                <!--begin::Checkbox-->
                                                <div class="form-check form-check-custom form-check-solid">
                                                    <!--begin::Input-->
                                                    <input class="form-check-input me-3" name="move_to_folder" type="radio" value="6" id="kt_modal_move_to_folder_6">
                                                    <!--end::Input-->
                                                    <!--begin::Label-->
                                                    <label class="form-check-label" for="kt_modal_move_to_folder_6">
                                                        <div class="fw-bolder">
                                                            <!--begin::Svg Icon | path: icons/duotune/files/fil012.svg-->
                                                            <span class="svg-icon svg-icon-2 svg-icon-primary me-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
																		<path opacity="0.3" d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z" fill="black"></path>
																		<path d="M9.2 3H3C2.4 3 2 3.4 2 4V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V7C22 6.4 21.6 6 21 6H12L10.4 3.60001C10.2 3.20001 9.7 3 9.2 3Z" fill="black"></path>
																	</svg>
																</span>
                                                            <!--end::Svg Icon-->modals</div>
                                                    </label>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Checkbox-->
                                            </div>
                                            <!--end::Item-->
                                            <div class='separator separator-dashed my-5'></div>
                                            <!--begin::Item-->
                                            <div class="d-flex">
                                                <!--begin::Checkbox-->
                                                <div class="form-check form-check-custom form-check-solid">
                                                    <!--begin::Input-->
                                                    <input class="form-check-input me-3" name="move_to_folder" type="radio" value="7" id="kt_modal_move_to_folder_7">
                                                    <!--end::Input-->
                                                    <!--begin::Label-->
                                                    <label class="form-check-label" for="kt_modal_move_to_folder_7">
                                                        <div class="fw-bolder">
                                                            <!--begin::Svg Icon | path: icons/duotune/files/fil012.svg-->
                                                            <span class="svg-icon svg-icon-2 svg-icon-primary me-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
																		<path opacity="0.3" d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z" fill="black"></path>
																		<path d="M9.2 3H3C2.4 3 2 3.4 2 4V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V7C22 6.4 21.6 6 21 6H12L10.4 3.60001C10.2 3.20001 9.7 3 9.2 3Z" fill="black"></path>
																	</svg>
																</span>
                                                            <!--end::Svg Icon-->authentication</div>
                                                    </label>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Checkbox-->
                                            </div>
                                            <!--end::Item-->
                                            <div class='separator separator-dashed my-5'></div>
                                            <!--begin::Item-->
                                            <div class="d-flex">
                                                <!--begin::Checkbox-->
                                                <div class="form-check form-check-custom form-check-solid">
                                                    <!--begin::Input-->
                                                    <input class="form-check-input me-3" name="move_to_folder" type="radio" value="8" id="kt_modal_move_to_folder_8">
                                                    <!--end::Input-->
                                                    <!--begin::Label-->
                                                    <label class="form-check-label" for="kt_modal_move_to_folder_8">
                                                        <div class="fw-bolder">
                                                            <!--begin::Svg Icon | path: icons/duotune/files/fil012.svg-->
                                                            <span class="svg-icon svg-icon-2 svg-icon-primary me-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
																		<path opacity="0.3" d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z" fill="black"></path>
																		<path d="M9.2 3H3C2.4 3 2 3.4 2 4V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V7C22 6.4 21.6 6 21 6H12L10.4 3.60001C10.2 3.20001 9.7 3 9.2 3Z" fill="black"></path>
																	</svg>
																</span>
                                                            <!--end::Svg Icon-->dashboards</div>
                                                    </label>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Checkbox-->
                                            </div>
                                            <!--end::Item-->
                                            <div class='separator separator-dashed my-5'></div>
                                            <!--begin::Item-->
                                            <div class="d-flex">
                                                <!--begin::Checkbox-->
                                                <div class="form-check form-check-custom form-check-solid">
                                                    <!--begin::Input-->
                                                    <input class="form-check-input me-3" name="move_to_folder" type="radio" value="9" id="kt_modal_move_to_folder_9">
                                                    <!--end::Input-->
                                                    <!--begin::Label-->
                                                    <label class="form-check-label" for="kt_modal_move_to_folder_9">
                                                        <div class="fw-bolder">
                                                            <!--begin::Svg Icon | path: icons/duotune/files/fil012.svg-->
                                                            <span class="svg-icon svg-icon-2 svg-icon-primary me-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
																		<path opacity="0.3" d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z" fill="black"></path>
																		<path d="M9.2 3H3C2.4 3 2 3.4 2 4V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V7C22 6.4 21.6 6 21 6H12L10.4 3.60001C10.2 3.20001 9.7 3 9.2 3Z" fill="black"></path>
																	</svg>
																</span>
                                                            <!--end::Svg Icon-->pages</div>
                                                    </label>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Checkbox-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Action buttons-->
                                        <div class="d-flex flex-center mt-12">
                                            <!--begin::Button-->
                                            <button type="button" class="btn btn-primary" id="kt_modal_move_to_folder_submit">
                                                <span class="indicator-label">Save</span>
                                                <span class="indicator-progress">Please wait...
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                            </button>
                                            <!--end::Button-->
                                        </div>
                                        <!--begin::Action buttons-->
                                    </div>
                                    <!--end::Modal body-->
                                </form>
                                <!--end::Form-->
                            </div>
                        </div>
                    </div>
                    <!--end::Modal - Move file-->
                    <!--end::Modals-->
                </div>
                <!--end::Post-->
@endsection

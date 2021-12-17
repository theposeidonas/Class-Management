@extends("../master")

@section('title', 'Versiyon Notları')
@section('description', 'Class Management System versiyon notları. Yapılan en son değişikliklerin notları')
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
            {{ Illuminate\Mail\Markdown::parse(file_get_contents(base_path() . '/README.md')) }}


        </div>
        <!--end::Card body-->
    </div>
    <!--end::FAQ-->
</div>
<!--end::Post-->
@endsection

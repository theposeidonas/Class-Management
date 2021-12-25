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
           <p>Ana Sayfa yapım aşamasında...</p>
           <p>Sistem notları ve aktif olan modüller için lütfen <a href="{{ route('version-notes') }}">Versiyon Notları</a>na bakınız...</p>
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Index-->
</div>
@endsection

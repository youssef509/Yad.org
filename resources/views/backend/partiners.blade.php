@extends('backend.layout')

@section('title')
    الصفحة الرئيسية |  شركائنا
@endsection

@section('css')
<link href="{{ asset('backend-assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet')}}" type="text/css" />
<link href="{{ asset('backend-assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">
@endsection

@section('page-content')
             
    <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">شركائنا</h4>
                                        <p class="card-title-desc">قسم شركائنا في الصفحة الرئيسية</p>
                                    </div>
                                    <div class="card-body p-4">
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        <form method="POST" action="" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div>
                                                        <div class="mb-3">
                                                            <label for="formFile" class="form-label">الصورة</label>
                                                            <input name="image" class="form-control" type="file" id="formFile">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    @if(session('success-create'))
                                    <script>
                                        document.addEventListener("DOMContentLoaded", function() {
                                            Swal.fire({
                                                title: "نجاح!",
                                                text: "{{ session('success-create') }}",
                                                icon: "success",
                                                confirmButtonText: "حسناً"
                                            });
                                        });
                                    </script>
                                @endif
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">قائمة الاسليدر</h4>
                                        <p class="card-title-desc">تعديل محتويات الاسليدر النصوص,زر,الصورة </p>
                                    </div>
                                    <div class="card-body p-4">
                                        <div class="container text-center">
                                            <div class="row">
                                                @foreach ($sliders as $slider)
                                                <div class="col">
                                                    <!-- Simple card -->
                                                    <div class="card">
                                                        <img class="card-img-top img-fluid" src="{{ $slider->image_url }}" alt="Card image cap">
                                                        <div class="card-body">
                                                            <form method="POST" action="{{route('admin.slider-destroy', $slider->id)}}" class="delete-form" style="display: inline">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger waves-effect waves-light sa-warning">حذف</button>
                                                            </form>
                                                        </div>
                                                        @if(session('success'))
                                                            <script>
                                                                document.addEventListener("DOMContentLoaded", function() {
                                                                    Swal.fire({
                                                                        title: "نجاح!",
                                                                        text: "{{ session('success') }}",
                                                                        icon: "success",
                                                                        confirmButtonText: "حسناً"
                                                                    });
                                                                });
                                                            </script>
                                                        @endif
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- container-fluid -->
                    
                </div>
                <!-- End Page-content -->

@endsection
@section('js')
<script src="{{ asset('backend-assets/libs/dropzone/min/dropzone.min.js')}}"></script>
 <!-- Sweet Alerts js -->
 <script src="{{ asset('backend-assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>
 <!-- Sweet alert init js-->
 <script src="{{ asset('backend-assets/js/pages/custom-alerts.js')}}"></script>
 <script src="{{ asset('backend-assets/js/pages/alert.init.js')}}"></script>
@endsection
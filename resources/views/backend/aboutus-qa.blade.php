@extends('backend.layout')

@section('title')
   من نحن  | الاسئلة والاجوبة
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
                                        <h4 class="card-title">الاسئلة والاجوبة</h4>
                                        <p class="card-title-desc">صفحة من نحن|قسم الاسئلة والاجوبة</p>
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
                                                            <label for="example-text-input" class="form-label">السؤال</label>
                                                            <input name="question"  class="form-control" type="text">
                                                        </div>
                                                    </div>
                                                </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="example-text-input" class="form-label">الاجابة</label>
                                                            <input  name="answer"  class="form-control" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="card-body text-center">
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">إضافة</button>
                                                    </div>
                                            </div>
                                        </form>
                                    </div>
                                    @if(session('success-update'))
                                        <script>
                                            document.addEventListener("DOMContentLoaded", function() {
                                                Swal.fire({
                                                    title: "نجاح!",
                                                    text: "{{ session('success-update') }}",
                                                    icon: "success",
                                                    confirmButtonText: "حسناً"
                                                });
                                            });
                                        </script>
                                    @endif
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
                                                @foreach ($AllQA as $OneQA)
                                                <div class="col">
                                                    <!-- Simple card -->
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h4 class="card-title">{{$OneQA->question}}</h4>
                                                            <p class="card-text">{{$OneQA->answer}}</p>
                                                            <form method="POST" action="{{route('admin.aboutqa-destroy', $OneQA->id)}}" class="delete-form" style="display: inline">
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
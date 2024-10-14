@extends('backend.layout')

@section('title')
    من نحن
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
                                        <h4 class="card-title">من نحن</h4>
                                        <p class="card-title-desc">صفحة من نحن</p>
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
                                        <form method="POST" action="{{ $homeAbout ? route('admin.homeabout-update', $homeAbout->id) : route('admin.homeabout-store') }}" enctype="multipart/form-data">
                                            @csrf
                                            @if($homeAbout)
                                                @method('PUT')
                                            @endif
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div>
                                                        <div class="mb-3">
                                                            <label for="example-text-input" class="form-label">العنوان الاول (يظهر بخط صغير)</label>
                                                            <input name="title1" value="{{ $homeAbout ? $homeAbout->title1 : old('title1') }}" class="form-control" type="text">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="example-text-input" class="form-label">النص الاول (يظهر بعد العنوان الثاني)</label>
                                                            <input name="text1" value="{{ $homeAbout ? $homeAbout->text1 : old('title1') }}" class="form-control" type="text">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="example-text-input" class="form-label">رؤيتنا</label>
                                                            <input name="our_vision" value="{{ $homeAbout ? $homeAbout->our_vision : old('our_vision') }}" class="form-control" type="text">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="example-text-input" class="form-label">نص الزر</label>
                                                            <input name="button_text" value="{{ $homeAbout ? $homeAbout->button_text : old('button_text') }}" class="form-control" type="text">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="formFile" class="form-label">الصورة الاولي (كبيرة الحجم)</label>
                                                            <input name="image1" class="form-control" type="file" id="formFile">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="example-text-input" class="form-label">رابط الفيديو</label>
                                                            <input name="video_url" value="{{ $homeAbout ? $homeAbout->video_url : old('video_url') }}" class="form-control" type="text">
                                                        </div>
                                                    </div>
                                                </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="example-text-input" class="form-label">العنوان الثاني (يظهر بخط اكبر)</label>
                                                            <input  name="title2" value="{{ $homeAbout ? $homeAbout->title2 : old('title2') }}" class="form-control" type="text">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="example-text-input" class="form-label">النص الثاني (يظهر داخل المربع)</label>
                                                            <input name="text2" value="{{ $homeAbout ? $homeAbout->text2 : old('text2') }}" class="form-control" type="text">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="example-text-input" class="form-label">رسالتنا</label>
                                                            <input name="our_messege" value="{{ $homeAbout ? $homeAbout->our_messege : old('our_messege') }}" class="form-control" type="text">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="example-text-input" class="form-label">رابط الزر</label>
                                                            <input name="button_url" value="{{ $homeAbout ? $homeAbout->button_url : old('button_url') }}" class="form-control" type="text">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="formFile" class="form-label">الصورة الثانية (صغيرة الحجم)</label>
                                                            <input name="image2" class="form-control" type="file" id="formFile">
                                                        </div>
                                                    </div>
                                                    <div class="card-body text-center">
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                            {{ $homeAbout ? 'تحديث' : 'إضافة' }}
                                                        </button>
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
                        @if ($homeAbout)
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">الصور المستخدمة حاليا</h4>
                                    </div>
                                    <div class="card-body p-4">
                                        <div class="container text-center">
                                            <div class="row">
                                                
                                                <div class="col">
                                                    <!-- Simple card -->
                                                    <div class="card">
                                                        <img class="card-img-top img-fluid" src="{{ asset('uploads/homeabout/' . $homeAbout->image1) }}" alt="Card image cap">
                                                        <div class="card-body">
                                                            <h4 class="card-title">الصورة الاولي (كبيرة الحجم)</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <!-- Simple card -->
                                                    <div class="card">
                                                        <img class="card-img-top img-fluid" src="{{ asset('uploads/homeabout/' . $homeAbout->image2) }}" alt="Card image cap">
                                                        <div class="card-body">
                                                            <h4 class="card-title">الصورة الثانية (صغيرة الحجم)</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
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
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
                                        <form method="POST" action="{{ $singleAboutUsPage ? route('admin.aboutus-update', $singleAboutUsPage->id) : route('admin.aboutus-create') }}" enctype="multipart/form-data">
                                            @csrf
                                            @if($singleAboutUsPage)
                                                @method('PUT')
                                            @endif
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div>
                                                        <div class="mb-3">
                                                            <label for="example-text-input" class="form-label">العنوان الاول (يظهر بخط كبير)</label>
                                                            <input name="title1" value="{{ $singleAboutUsPage ? $singleAboutUsPage->title1 : old('title1') }}" class="form-control" type="text">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="example-text-input" class="form-label">رؤيتنا</label>
                                                            <input name="our_vision" value="{{ $singleAboutUsPage ? $singleAboutUsPage->our_vision : old('our_vision') }}" class="form-control" type="text">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="example-text-input" class="form-label">رسالتنا</label>
                                                            <input name="our_messege" value="{{ $singleAboutUsPage ? $singleAboutUsPage->our_messege : old('our_messege') }}" class="form-control" type="text">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="example-text-input" class="form-label">أهدافنا</label>
                                                            <input name="our_goals" value="{{ $singleAboutUsPage ? $singleAboutUsPage->our_goals : old('our_goals') }}" class="form-control" type="text">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="formFile" class="form-label">الصورة</label>
                                                            <input name="image" class="form-control" type="file" id="formFile">
                                                        </div>
                                                    </div>
                                                </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="example-text-input" class="form-label">العنوان الثاني (يظهر بخط صغير)</label>
                                                            <input  name="title2" value="{{ $singleAboutUsPage ? $singleAboutUsPage->title2 : old('title2') }}" class="form-control" type="text">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="example-text-input" class="form-label">نص رؤيتنا</label>
                                                            <input name="vision" value="{{ $singleAboutUsPage ? $singleAboutUsPage->vision : old('vision') }}" class="form-control" type="text">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="example-text-input" class="form-label">نص رسالتنا</label>
                                                            <input name="messege" value="{{ $singleAboutUsPage ? $singleAboutUsPage->messege : old('messege') }}" class="form-control" type="text">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="example-text-input" class="form-label">نص أهدافنا</label>
                                                            <input name="goals" value="{{ $singleAboutUsPage ? $singleAboutUsPage->goals : old('goals') }}" class="form-control" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="card-body text-center">
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                            {{ $singleAboutUsPage ? 'تحديث' : 'إضافة' }}
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
                        @if ($singleAboutUsPage)
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">الصورة المستخدمة حاليا</h4>
                                    </div>
                                    <div class="card-body p-4">
                                        <div class="container text-center">
                                            <div class="row">
                                                
                                                <div class="col">
                                                    <!-- Simple card -->
                                                    <div class="card">
                                                        <img class="card-img-top img-fluid" src="{{ asset('uploads/aboutus/' . $singleAboutUsPage->image) }}" alt="Card image cap">
                                                        <div class="card-body">
                                                            <h4 class="card-title">الصورة المستخدمة</h4>
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
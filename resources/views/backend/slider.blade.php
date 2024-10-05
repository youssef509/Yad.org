@extends('backend.layout')

@section('title')
    Slider
@endsection

@section('css')
<link href="{{ asset('backend-assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet')}}" type="text/css" />
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
                                        <h4 class="card-title">الاسليدر</h4>
                                        <p class="card-title-desc">اضافة اسليدر</p>
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
                                        <form method="POST" action="{{route('admin.slider-store')}}"  enctype="multipart/form-data"> 
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div>
                                                        <div class="mb-3">
                                                            <label for="example-text-input" class="form-label">النص الاول</label>
                                                            <input name="text_1" class="form-control" type="text">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="example-text-input" class="form-label">نص الزر الاول</label>
                                                            <input name="button1_text" class="form-control" type="text">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="example-text-input" class="form-label">نص الزر الثاني</label>
                                                            <input name="button2_text" class="form-control" type="text">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="formFile" class="form-label">الصورة</label>
                                                            <input name="image" class="form-control" type="file" id="formFile">
                                                        </div>
                                                    </div>
                                                </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="example-text-input" class="form-label">النص الثاني</label>
                                                            <input  name="text_2" class="form-control" type="text">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="example-text-input" class="form-label">رابط الزر الاول</label>
                                                            <input name="button1_url" class="form-control" type="text">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="example-text-input" class="form-label">رابط الزر الثاني</label>
                                                            <input name="button2_url" class="form-control" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="card-body text-center">
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">اضافة</button>
                                                    </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                        <div class="row">
                            <div class="col-md-6 col-xl-3">

                                <!-- Simple card -->
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="{{ asset('backend-assets/images/small/img-1.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up the bulk of the card's content.</p>
                                        <a href="javascript: void(0);" class="btn btn-success waves-effect waves-light">تعديل</a>
                                        <a href="javascript: void(0);" class="btn btn-danger waves-effect waves-light">حذف</a>
                                    </div>
                                </div>
        
                            </div><!-- end col -->
                        </div>
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

@endsection
@section('js')
<script src="{{ asset('backend-assets/libs/dropzone/min/dropzone.min.js')}}"></script>
@endsection
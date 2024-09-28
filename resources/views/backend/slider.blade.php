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
                                        <h4 class="card-title">Textual inputs</h4>
                                        <p class="card-title-desc">Here are examples of <code>.form-control</code> applied to each
                                            textual HTML5 <code>&lt;input&gt;</code> <code>type</code>.</p>
                                    </div>
                                    <div class="card-body p-4">
                                        <div class="mb-3">
                                            <label for="formGroupExampleInput" class="form-label">Example label</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
                                          </div>
                                          <div class="mb-3">
                                            <label for="formGroupExampleInput" class="form-label">Example label</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
                                          </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div>
                        <!-- end row -->
                </div>
            </div>

@endsection
@section('js')
<script src="{{ asset('backend-assets/libs/dropzone/min/dropzone.min.js')}}"></script>
@endsection
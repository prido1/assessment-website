@extends('admin.layout')

@section('content')
    <div class="page-wrapper">
        <div class="row">
            <div class="col-lg-6">
                @if(session('error'))
                    <div id="error_m" class="alert alert-danger">
                        {{session('error')}}
                    </div>
                @endif
                @if(session('success'))
                    <div id="success_m" class="alert alert-success">
                        {{session('success')}}
                    </div>
                @endif
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            </div>
        </div>

        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">About section</h4>
                    
                </div>
            </div>
        </div>
        

        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-md-10 col-lg-8">
                    <div class="card">
                        <form class="form-horizontal" action="/admin/sections/about/save" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <h4 class="card-title">About details</h4>
                           
                                <div class="form-group row">
                                    <label for="sub_heading" class="col-sm-3 text-end control-label col-form-label">Sub-Heading</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="sub_heading" id="sub_heading"
                                            placeholder="Sub heading Here" value="{{$section_settings['sub_heading'] ?? ''}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="heading"
                                        class="col-sm-3 text-end control-label col-form-label">Heading</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" id="heading"  name="heading" rows="4">{{$section_settings['heading'] ?? ''}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <span class="col-md-12 text-end text-warning"><small>Image must be 720 x 697 to look good</small></span>
                                    <label class="col-md-3">Featured image Upload</label>
                                    <div class="col-md-9">
                                        <div class="custom-file">
                                            <input type="file" name="image" class="custom-file-input" id="validatedCustomFile"
                                                >
                                            <label class="custom-file-label" for="validatedCustomFile">Choose
                                                file...</label>
                                            <div class="invalid-feedback">Invalid image!!!</div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <h4>Tabs</h4>
                                <div class="form-group row">
                                    <label
                                        class="col-sm-3 text-end control-label col-form-label">Who We Are</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control editor" name="who_we_are" rows="7">{{$section_settings['who_we_are'] ?? ''}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label
                                        class="col-sm-3 text-end control-label col-form-label">Our Vision</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control editor" name="vision" rows="7">{{$section_settings['vision'] ?? ''}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label
                                        class="col-sm-3 text-end control-label col-form-label">Our History</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control editor" name="history" rows="7">{{$section_settings['history'] ?? ''}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        @include('admin/patials/footer')

    </div>
@endsection

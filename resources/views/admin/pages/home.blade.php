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
                    <h4 class="page-title">Home section</h4>
                    
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
                        <form class="form-horizontal" action="/admin/sections/home/save" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <h4 class="card-title">Home details</h4>
                           
                                <div class="form-group row">
                                    <label for="title" class="col-sm-3 text-end control-label col-form-label">Title</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="title" id="title"
                                            placeholder="Home section Title here" required
                                            value="{{$section_settings['title'] ?? ''}}"
                                            >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="editor"
                                        class="col-sm-3 text-end control-label col-form-label">Description</label>
                                    <div class="col-sm-9">
                                        <textarea id="editor" name="description" class="form-control editor" required rows="7">{{$section_settings['description'] ?? ''}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <span class="col-md-12 text-end text-warning"><small>Image must be 790 x 631 to look good</small></span>
                                    <label class="col-md-3">Featured image Upload</label>
                                    <div class="col-md-9">
                                        <div class="custom-file">
                                            <input type="file" name="featured_image" class="custom-file-input" id="validatedCustomFile">
                                            <label class="custom-file-label" for="validatedCustomFile">Choose
                                                file...</label>
                                            <div class="invalid-feedback">Invalid image!!!</div>
                                        </div>
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

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
                    <h4 class="page-title">Footer section</h4>
                    
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
                        <form class="form-horizontal" action="/admin/sections/footer/save" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <h4 class="card-title">Footer Details</h4>
                           
                                <div class="form-group row">
                                    <label for="title" class="col-sm-3 text-end control-label col-form-label">Title</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="title" class="form-control" id="title"
                                            placeholder="Footer title Here">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="editor"
                                        class="col-sm-3 text-end control-label col-form-label">Description</label>
                                    <div class="col-sm-9">
                                        <textarea id="editor" class="form-control editor" name="description" rows="7"></textarea>
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

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
                    <h4 class="page-title">Settings</h4>
                    
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
                        <form class="form-horizontal" action="/admin/settings/save" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <h4 class="card-title">Site settings</h4>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-3 text-end control-label col-form-label">Site Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" value="{{$site_settings['site_name'] ?? ''}}" name="site_name" id="name"
                                            placeholder="Site Name Here">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="title" class="col-sm-3 text-end control-label col-form-label">Site Title</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" value="{{$site_settings['site_title'] ?? ''}}" name="site_title" id="title"
                                            placeholder="Site Tile Here">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="Description" class="col-sm-3 text-end control-label col-form-label">Site Description</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" value="{{$site_settings['site_description'] ?? ''}}" name="site_description" id="Description"
                                            placeholder="Site Description Here">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 text-end control-label col-form-label">Logo Upload</label>
                                    <div class="col-md-9">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="logo" id="validatedCustomFile"
                                                >
                                            <label class="custom-file-label" for="validatedCustomFile">Choose
                                                file...</label>
                                            <div class="invalid-feedback">Invalid image!!!</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 text-end control-label col-form-label">Site Primary Color</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="color-picker" name="primary_color" class="form-control demo"
                                        data-position="bottom left" value="{{$site_settings['primary_color'] ?? ''}}">
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

@push('scripts')
    <script>
         $('#color-picker').minicolors({
                control: 'hue',
                position: 'bottom left',

                change: function (value, opacity) {
                    if (!value) return;
                    if (opacity) value += ', ' + opacity;
                    if (typeof console === 'object') {
                        console.log(value);
                    }
                },
                theme: 'bootstrap'
            });
    </script>
@endpush

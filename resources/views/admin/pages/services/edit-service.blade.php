@extends('admin.layout')

@section('content')
    <div class="page-wrapper">
        <div class="row">
            <div class="col-lg-6">
                @if (session('error'))
                    <div id="error_m" class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                @if (session('success'))
                    <div id="success_m" class="alert alert-success">
                        {{ session('success') }}
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
                <div class="col-12 d-flex align-items-center justify-content-between">
                    <h4 class="page-title">Service section</h4>
                    <a href="/admin/sections/services" class="btn btn-primary btn-lg">Back to list</a>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10 col-lg-8">
                    <div class="card">
                        <form class="form-horizontal" action="/admin/sections/service/update/{{$service->id}}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                            <div class="card-body">
                                <h4 class="card-title">Service Details</h4>
                                <div class="form-group row">
                                    <label for="icon" class="col-sm-3 text-end control-label col-form-label">Icon</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="icon" id="icon">
                                            <option value="">Select icon</option>
                                            @foreach (config('config.icons') as $item)
                                            <option
                                            @if ($service->icon === $item['value'])
                                               selected 
                                            @endif
                                            value="{{$item['value']}}">&#xe{{$item['content']}}; {{$item['text']}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="title" class="col-sm-3 text-end control-label col-form-label">Title</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="title" id="title" value="{{$service->title}}"
                                            placeholder="First Name Here">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="cono1"
                                        class="col-sm-3 text-end control-label col-form-label">Description</label>
                                    <div class="col-sm-9">
                                        <textarea name="description" class="form-control" rows="4">{{$service->description}}</textarea>
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

@push('styles')
    <style>
        select#icon {
            font-family: 'property-book';
            font-weight: 900;
        }
    </style>
@endpush
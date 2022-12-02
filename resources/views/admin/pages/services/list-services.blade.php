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

        <div class="container-fluid">

            <div class="card">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <h5 class="card-title mb-0">List Services</h5>
                    <a href="/admin/sections/service/create" class="btn btn-primary btn-lg">Create New</a>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Icon</th>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody class="customtable">
                            @foreach ($services as $service)
                                <tr>
                                <td><i class="{{$service->icon}}"></i></td>
                                <td>{{$service->title}}</td>
                                <td>{{$service->description}}</td>
                                <td>
                                    <a href="/admip/sections/service/delete/{{$service->id}}" class="btn btn-danger"><i class="mdi mdi-delete text-white"></i></a>
                                    <a href="/admin/sections/service/edit/{{$service->id}}" class="btn btn-info"><i class="mdi mdi-pencil text-white"></i></a>
                                </td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        @include('admin/patials/footer')

    </div>
@endsection

@push('script')
    <script>
        $('#mainCheckbox').click((ev) => {
            if (this.checked) {
                $(':checkbox').each(() => {
                    this.checked = true;
                });
            } else {
                $(':checkbox').each(() => {
                    this.checked = false;
                });
            }
        });
    </script>
@endpush

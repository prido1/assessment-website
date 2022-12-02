<!DOCTYPE html>
<html dir="ltr">

@include('admin.patials.head')

    <style>
        .auth-wrapper {
            height: 100vh !important;
        }
    </style>
<body>
    <div class="main-wrapper">
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>

        <div class="auth-wrapper d-flex justify-content-center align-items-center bg-dark">
            <div class="auth-box bg-dark border-top border-secondary w-50">
                <div id="loginform">
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
                    <!-- Form -->
                    <form class="form-horizontal mt-3" id="loginform" action="/sign-in" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row pb-4">
                            <div class="col-12">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-success text-white h-100" id="basic-addon1"><i
                                                class="mdi mdi-email"></i></span>
                                    </div>
                                    <input name="email" type="email" class="form-control form-control-lg"
                                        placeholder="Email" aria-label="email" aria-describedby="basic-addon1"
                                        required="">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-warning text-white h-100" id="basic-addon2"><i
                                                class="ti-pencil"></i></span>
                                    </div>
                                    <input name="password" type="password" class="form-control form-control-lg"
                                        placeholder="Password" aria-label="Password" aria-describedby="basic-addon1"
                                        required="">
                                </div>
                            </div>
                        </div>
                        <div class="row border-top border-secondary">
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="pt-3">
                                        <button class="btn btn-success float-end text-white"
                                            type="submit">Login</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </div>
    @include('admin.patials.scripts')


</body>

</html>

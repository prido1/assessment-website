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
                <div class="card-body wizard-content">
                    <h4 class="card-title">Pricing table</h4>
                    <h6 class="card-subtitle"></h6>
                        <form  id="pricing-form" class="mt-5" action="/admin/sections/pricing/save" method="post" enctype="multipart/form-data">
                            @csrf
                        <div>
                            <h3>Starter</h3>
                            <section>
                                <label for="starter-description">Description *</label>
                                <input id="starter-description" value="{{$section_settings['starter_description'] ?? ''}}" name="starter_description" type="text"
                                    class="required form-control">
                                <label for="starter-price">Price *</label>
                                <input id="starter-price" value="{{$section_settings['starter_price'] ?? ''}}" name="starter_price" type="text" class="required form-control">
                                <label for="starter-includes">Features *</label>
                                <div id="starter-includes" class="d-flex">
                                    <div class="p-2">
                                        <input type="checkbox"
                                        @if ($section_settings['starter_Cras_justo_odio'] === '1')
                                            checked
                                        @endif
                                        name="starter_Cras_justo_odio" />
                                        <span>Cras justo odio.</span>
                                    </div>
                                    <div class="p-2">
                                        <input type="checkbox"
                                        @if ($section_settings['starter_Dapibus_ac_facilisis_in'] === '1')
                                        checked
                                    @endif
                                        name="starter_Dapibus_ac_facilisis_in" />
                                        <span>Dapibus ac facilisis in.</span>
                                    </div>
                                    <div class="p-2">
                                        <input type="checkbox"
                                        @if ($section_settings['starter_Morbi_leo_risus'] === '1')
                                        checked
                                    @endif
                                        name="starter_Morbi_leo_risus" />
                                        <span>Morbi leo risus.</span>
                                    </div>
                                    <div class="p-2">
                                        <input type="checkbox"
                                        @if ($section_settings['starter_Excepteur_sint_occaecat_velit'] === '1')
                                        checked
                                    @endif
                                        name="starter_Excepteur_sint_occaecat_velit" />
                                        <span>Excepteur sint occaecat velit.</span>
                                    </div>
                                </div>
                            </section>
                            <h3>Exclusive</h3>
                            <section>
                                <label for="exclusive-description">Description *</label>
                                <input id="exclusive-description" value="{{$section_settings['exclusive_description'] ?? ''}}" name="exclusive_description" type="text"
                                    class="required form-control">
                                <label for="exclusive-price">Price *</label>
                                <input id="exclusive-price" value="{{$section_settings['exclusive_price'] ?? ''}}" name="exclusive_price" type="text" class="required form-control">
                                <label for="exclusive-includes">Features *</label>
                                <div id="exclusive-includes" class="d-flex">
                                    <div class="p-2">
                                        <input type="checkbox" 
                                        @if ($section_settings['exclusive_Cras_justo_odio'] === '1')
                                        checked
                                    @endif
                                        name="exclusive_Cras_justo_odio" />
                                        <span>Cras justo odio.</span>
                                    </div>
                                    <div class="p-2">
                                        <input type="checkbox"
                                        @if ($section_settings['exclusive_Dapibus_ac_facilisis_in'] === '1')
                                        checked
                                    @endif
                                        name="exclusive_Dapibus_ac_facilisis_in" />
                                        <span>Dapibus ac facilisis in.</span>
                                    </div>
                                    <div class="p-2">
                                        <input type="checkbox" 
                                        @if ($section_settings['exclusive_Morbi_leo_risus'] === '1')
                                        checked
                                    @endif
                                        name="exclusive_Morbi_leo_risus" />
                                        <span>Morbi leo risus.</span>
                                    </div>
                                    <div class="p-2">
                                        <input type="checkbox"
                                        @if ($section_settings['exclusive_Excepteur_sint_occaecat_velit'] === '1')
                                        checked
                                    @endif
                                        name="exclusive_Excepteur_sint_occaecat_velit" />
                                        <span>Excepteur sint occaecat velit.</span>
                                    </div>
                                </div>
                            </section>
                            <h3>Premium</h3>
                            <section>
                                <label for="premium-description">Description *</label>
                                <input id="premium-description" value="{{$section_settings['premium_description'] ?? ''}}" name="premium_description" type="text"
                                    class="required form-control">
                                <label for="premium_price">Price *</label>
                                <input id="premium_price" value="{{$section_settings['premium_price'] ?? ''}}" name="premium_price" type="text" class="required form-control">
                                <label for="premium_includes">Features *</label>
                                <div id="premium_includes" class="d-flex">
                                    <div class="p-2">
                                        <input type="checkbox"
                                          @if ($section_settings['premium_Cras_justo_odio'] === '1')
                                        checked
                                    @endif
                                        name="premium_Cras_justo_odio" />
                                        <span>Cras justo odio.</span>
                                    </div>
                                    <div class="p-2">
                                        <input type="checkbox"
                                          @if ($section_settings['premium_Dapibus_ac_facilisis_in'] === '1')
                                        checked
                                    @endif
                                        name="premium_Dapibus_ac_facilisis_in" />
                                        <span>Dapibus ac facilisis in.</span>
                                    </div>
                                    <div class="p-2">
                                        <input type="checkbox"
                                          @if ($section_settings['premium_Morbi_leo_risus'] === '1')
                                        checked
                                    @endif
                                        name="premium_Morbi_leo_risus" />
                                        <span>Morbi leo risus.</span>
                                    </div>
                                    <div class="p-2">
                                        <input type="checkbox"
                                          @if ($section_settings['premium_Excepteur_sint_occaecat_velit'] === '1')
                                        checked
                                    @endif
                                        name="premium_Excepteur_sint_occaecat_velit" />
                                        <span>Excepteur sint occaecat velit.</span>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </form>
                </div>
            </div>

        </div>

        @include('admin/patials/footer')

    </div>
@endsection

@push('scripts')
    <script>
        var form = $("#pricing-form");
        form.validate({
            errorPlacement: function errorPlacement(error, element) {
                element.before(error);
            },
            rules: {}
        });
        form.children("div").steps({
            headerTag: "h3",
            bodyTag: "section",
            transitionEffect: "slideLeft",
            onStepChanging: function(event, currentIndex, newIndex) {
                form.validate().settings.ignore = ":disabled,:hidden";
                return form.valid();
            },
            onFinishing: function(event, currentIndex) {
                form.validate().settings.ignore = ":disabled";
                return form.valid();
            },
            onFinished: function(event, currentIndex) {
                form.submit()
            }
        });
    </script>
@endpush

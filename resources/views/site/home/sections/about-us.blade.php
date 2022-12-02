<div class="content-wraper about" id="about">
    <div class="row">
        <div class="col-md-6">
            <div class="p-4">
                <div class="rounded overflow-hidden">
                    <img class="w-100" src="{{ asset('assets/images/'.$about['image']) }}"
                        alt="assessment about image">
                </div>
            </div>
        </div>

        <div class="col-md-6 about">
            <div class="p-4">
                <span class="subheading">{{$about['sub_heading']}}</span>
                <h2 class="fw-bold heading">{{$about['heading']}}</h2>
                <ul class="nav nav-pills nav-tab-light mb-3" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#about-tab"
                            type="button" role="tab" aria-controls="about-tab" aria-selected="true">Who We
                            Are</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#vision-tab" type="button"
                            role="tab" aria-controls="vision-tab" aria-selected="false">Our Vision</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#contact-tab" type="button"
                            role="tab" aria-controls="contact" aria-selected="false">Our History</button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="about-tab" role="tabpanel"
                        aria-labelledby="about-content">
                       {!!$about['who_we_are']!!}
                    </div>
                    <div class="tab-pane fade" id="vision-tab" role="tabpanel" aria-labelledby="vision-tab-content">
                        {!!$about['vision']!!}</div>
                    <div class="tab-pane fade" id="contact-tab" role="tabpanel"
                        aria-labelledby="contact-tab-content">
                        {!!$about['history']!!}</div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('styles')
    <style>
        .about .heading{
margin-top: 15px
        }
        .about .subheading {
            font-weight: bold;
            overflow: hidden;
            text-align: center
        }
        .about .subheading::before {
            background-color: var(--primary);
            content: '';
            display: inline-block;
            height: 2px;
            position: relative;
            vertical-align: middle;
            width: 10px;
            right: 0.3rem;
            margin-left: 7px
        }
    </style>
@endpush
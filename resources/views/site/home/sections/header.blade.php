<nav class="main-nav navbar sticky-top navbar-expand-md navbar-light">
    <div class="container-fluid p-0">
        <a class="navbar-brand fw-bold me-5" href="#">
            <img src="{{ asset('logo.png') }}" alt="">
            {{ config('config.site.site_name') }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navogation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="#home">Home</a>
                    <a class="nav-link" href="#services">Services</a>
                    <a class="nav-link" href="#pricing">Pricing</a>
                </div>
            </div>
        </div>
    </div>
</nav>
<div class="header-wrapper header-bg pt-5">


    <div class="content header" id="home">
        <div class="row header-content">
            <div class="col-md-6">
                <div class="d-flex align-items-center h-100">
                    <div class="d-flex flex-column">
                        <h1 class="fw-bold text-white">{!! $home['title'] !!}</h1>

                        <div class="py-3">
                            <p class="description text-white">{!! $home['description'] !!}</p>
                        </div>

                        <div class="buttons">
                            <button class="btn px-3 fw-bold btn-white me-3">GET STARTED</button>
                            <a class="d-flex align-items-center" href="">
                                <i class="pb-Start-2 watch-icon"></i>
                                <span class="text-white intro-text fw-bold">Watch Intro</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 home-featured">
                <div class="rounded img overflow-hidden">
                    <img class="w-100" src="{{ asset('assets/images/'.$home['featured_image']) }}"
                        alt="assessment header image">
                </div>
            </div>
        </div>
    </div>
</div>

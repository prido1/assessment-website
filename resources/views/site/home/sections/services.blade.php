<div class="content-wraper services py-5" id="services">
    <div class="row">
        <div class="col-md-12 mb-3">
            <div class="d-flex justify-content-center">
                <span class="outline-primary">Services</span>
            </div>
        </div>

        <div class="col-md-12 mt-4">
            <div class="row">

                @foreach ($services as $service)
                    <div class="col-md-4 service-item">
                        <div class="d-flex flex-column">
                            <i class="{{ $service->icon }} mb-3"></i>
                            <span class="item-title fw-bold mb-3">{{ $service->title }}</span>
                            <p class="item-description">{{ $service->description }}</p>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>
</div>

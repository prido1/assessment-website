<div class="content-wraper pricing" id="pricing">
    <div class="row">
        <div class="col-md-12 mb-5">
            <div class="d-flex justify-content-center">
                <span class="outline-primary">Pricing</span>
            </div>
        </div>

        <div class="col-md-12 mt-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="flex-column pricing-item px-5 ">
                        <div class="d-flex justify-content-center">
                            <span class="outline-primary plan-name">Starter</span>
                        </div>
                        <div class="text-center my-3">
                            {{$pricing['starter_description']}}
                        </div>
                        <div class="d-flex justify-content-center mb-3">
                            <div class="price-wraper">
                                <span class="price">{{$pricing['starter_price']}}</span>
                                <span class="billing-cycle">/mo</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mb-4">
                            <button class="btn btn-outline-primary fw-bold px-3">START FREE TRIAL</button>
                        </div>
                        <div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="pb-Yes fw-bold 
                                @if($pricing['starter_Cras_justo_odio'] ===  '1')
                                text-primary
                                @endif
                                me-3"></i>
                                <span>Cras justo odio.</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="pb-Yes fw-bold 
                                @if($pricing['starter_Dapibus_ac_facilisis_in'] ===  '1')
                                text-primary
                                @endif
                                me-3"></i>
                                <span>Dapibus ac facilisis in.</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="pb-Yes fw-bold
                                @if($pricing['starter_Morbi_leo_risus'] ===  '1')
                                text-primary
                                @endif
                                me-3"></i>
                                <span>Morbi leo risus.</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="pb-Yes fw-bold
                                @if($pricing['starter_Excepteur_sint_occaecat_velit'] ===  '1')
                                text-primary
                                @endif
                                me-3"></i>
                                <span>Excepteur sint occaecat velit.</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="flex-column pricing-item best px-5 shadow-lg">
                        <div class="d-flex justify-content-center">
                            <span class="outline-primary plan-name">Exclusive</span>
                        </div>
                        <div class="text-center my-3">
                            {{$pricing['exclusive_description']}}
                        </div>
                        <div class="d-flex justify-content-center mb-3">
                            <div class="price-wraper">
                                <span class="price">{{$pricing['exclusive_price']}}</span>
                                <span class="billing-cycle">/mo</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mb-4">
                            <button class="btn btn-outline-primary choose-plan-btn fw-bold px-3">START FREE TRIAL</button>
                        </div>
                        <div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="pb-Yes fw-bold 
                                @if($pricing['exclusive_Cras_justo_odio'] ===  '1')
                                text-primary
                                @endif
                                me-3"></i>
                                <span>Cras justo odio.</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="pb-Yes fw-bold 
                                @if($pricing['exclusive_Dapibus_ac_facilisis_in'] ===  '1')
                                text-primary
                                @endif
                                me-3"></i>
                                <span>Dapibus ac facilisis in.</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="pb-Yes fw-bold
                                @if($pricing['exclusive_Morbi_leo_risus'] ===  '1')
                                text-primary
                                @endif
                                me-3"></i>
                                <span>Morbi leo risus.</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="pb-Yes fw-bold
                                @if($pricing['exclusive_Excepteur_sint_occaecat_velit'] ===  '1')
                                text-primary
                                @endif
                                me-3"></i>
                                <span>Excepteur sint occaecat velit.</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="flex-column pricing-item px-5">
                        <div class="d-flex justify-content-center">
                            <span class="outline-primary plan-name">Premium</span>
                        </div>
                        <div class="text-center my-3">
                            {{$pricing['premium_description']}}
                        </div>
                        <div class="d-flex justify-content-center mb-3">
                            <div class="price-wraper">
                                <span class="price">{{$pricing['premium_price']}}</span>
                                <span class="billing-cycle">/mo</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mb-4">
                            <button class="btn btn-outline-primary fw-bold px-3">START FREE TRIAL</button>
                        </div>
                        <div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="pb-Yes fw-bold 
                                @if($pricing['premium_Cras_justo_odio'] ===  '1')
                                text-primary
                                @endif
                                me-3"></i>
                                <span>Cras justo odio.</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="pb-Yes fw-bold 
                                @if($pricing['premium_Dapibus_ac_facilisis_in'] ===  '1')
                                text-primary
                                @endif
                                me-3"></i>
                                <span>Dapibus ac facilisis in.</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="pb-Yes fw-bold
                                @if($pricing['premium_Morbi_leo_risus'] ===  '1')
                                text-primary
                                @endif
                                me-3"></i>
                                <span>Morbi leo risus.</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="pb-Yes fw-bold
                                @if($pricing['premium_Excepteur_sint_occaecat_velit'] ===  '1')
                                text-primary
                                @endif
                                me-3"></i>
                                <span>Excepteur sint occaecat velit.</span>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
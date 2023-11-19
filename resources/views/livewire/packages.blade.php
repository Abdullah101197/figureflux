
<div class="plan-tabs">
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-payment-tab-monthly" data-bs-toggle="pill"
                data-bs-target="#pills-monthly" type="button" role="tab" aria-controls="pills-monthly"
                aria-selected="true">Monthly</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-payment-tab-yearly" data-bs-toggle="pill" data-bs-target="#pills-yearly"
                type="button" role="tab" aria-controls="pills-yearly" aria-selected="true">Yearly</button>
        </li>
    </ul>
</div>
<div class="tab-content">
    <div class="tab-pane fade active show" id="pills-monthly" role="tabpanel" aria-labelledby="pills-monthly-tab">

        <div class="custom-container">
            <div class="row">
                @foreach ($pacakages as $key => $pacakage)
                    @if ($pacakage->package_duration == 30 || $pacakage->package_duration == 14)
                        @isset($pacakage->status)
                            @if ($pacakage->status == 1)
                                <div class="col-lg-4">
                                    <div class="pricing-plan-card">
                                        @if ($key == 1)
                                            <span class="recmend">Recommended</span>
                                        @endif
                                        <h2> @switch($pacakage->currency_id)
                                                @case(1)
                                                    €
                                                @break

                                                @case(2)
                                                    $
                                                @break

                                                @case(3)
                                                    ₹
                                                @break

                                                @case(4)
                                                    $
                                                @break

                                                @case(5)
                                                    ¥
                                                @break

                                                @case(6)
                                                    £
                                                @break

                                                @case(7)
                                                    $
                                                @break

                                                @case(8)
                                                    Ksh
                                                @break

                                                @case(9)
                                                    CHF
                                                @break

                                                @default
                                                    $
                                            @endswitch
                                            {{ $pacakage->price }}<span>
                                                @if ($pacakage->package_duration == 30)
                                                    / Month / User

                                                @elseif ($pacakage->package_duration == 180)
                                                    / Biannual / User
                                                @elseif ($pacakage->package_duration == 14)
                                                    / 14 Days
                                                @else
                                                    / Annum / User
                                                @endif
                                            </span></h2>
                                        <h3>{{ $pacakage->plan_name }}</h3>
                                        <p>Start off strong with everything you need</p>
                                        <div class="plan-list">
                                            <ul class="readmore">
                                                @if ($pacakage->features != '')
                                                    @foreach (explode(',', $pacakage->features) as $key => $features)
                                                        <li class="{{ $key }} "><span><img
                                                                    src="{{ asset('assets/img/plan-tick.png') }}"
                                                                    alt="plan"></span>
                                                            {{ $features }}</li>
                                                    @endforeach
                                                @endif

                                            </ul>
                                        </div>
                                        <a href="{{ route('createPackage', $pacakage->id) }}">Get Started <i
                                                class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            @endif
                        @endisset
                    @endif
                @endforeach

            </div>
        </div>


    </div>
    <div class="tab-pane fade" id="pills-yearly" role="tabpanel" aria-labelledby="pills-yearly-tab">

        <div class="custom-container">
             
            <div class="row">
                @foreach ($pacakages as $key => $pacakage)
                    @if ($pacakage->package_duration == 365 || $pacakage->package_duration == 14)
                        @isset($pacakage->status)
                            @if ($pacakage->status == 1)
                                <div class="col-lg-4">
                                    <div class="pricing-plan-card">
                                        @if ($key == 4)
                                            <span class="recmend">Recommended</span>
                                        @endif
                                        
                                          <strong  class="discount"><p>Save 20%</p></strong></strong>
                                        <h2> @switch($pacakage->currency_id)
                                                @case(1)
                                                    €
                                                @break

                                                @case(2)
                                                    $
                                                @break

                                                @case(3)
                                                    ₹
                                                @break

                                                @case(4)
                                                    $
                                                @break

                                                @case(5)
                                                    ¥
                                                @break

                                                @case(6)
                                                    £
                                                @break

                                                @case(7)
                                                    $
                                                @break

                                                @case(8)
                                                    Ksh
                                                @break

                                                @case(9)
                                                    CHF
                                                @break

                                                @default
                                                    $
                                            @endswitch
                                            {{ $pacakage->price }}<span>
                                                @if ($pacakage->package_duration == 30)
                                                    / Month / User
                                                @elseif ($pacakage->package_duration == 180)
                                                    / Biannual / User
                                                @elseif ($pacakage->package_duration == 14)
                                                    / 14 Days
                                                @else
                                                    / Annum / User
                                                @endif
                                            </span></h2>
                                        <h3>{{ $pacakage->plan_name }}</h3>
                                        <p>Start off strong with everything you need</p>
                                        <div class="plan-list">
                                            <ul class="readmore">
                                                @if ($pacakage->features != '')
                                                    @foreach (explode(',', $pacakage->features) as $key => $features)
                                                        <li class="{{ $key }} "><span><img
                                                                    src="{{ asset('assets/img/plan-tick.png') }}"
                                                                    alt="plan"></span>
                                                            {{ $features }}</li>
                                                    @endforeach
                                                @endif

                                            </ul>
                                        </div>
                                        <a href="{{ route('createPackage', $pacakage->id) }}">Get Started <i
                                                class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            @endif
                        @endisset
                    @endif
                @endforeach

            </div>
        </div>

    </div>
</div>

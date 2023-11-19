@extends('client_panel.layouts.app')
@section('title')
    {{ __('messages.dashboard') }}
@endsection
@section('content')
    <style>
        a {
            text-decoration: none;
        }

        .basic-plan-main {
            box-shadow: 0px 4px 26px 0px #00000040;
            border: 1px solid #EEEEEE;
            border-radius: 32px;
            padding: 50px 60px 70px;
            transition: 0.45s;
        }

        .basic-plan-main .basic-btn a {
            font-size: 16px;
            color: #000;
            border: 1px solid #111111;
            border-radius: 16px;
            display: inline-block;
            width: 152px;
            height: 49px;
            line-height: 49px;
            text-align: center;
            margin-bottom: 10px;
        }

        .basic-plan-main .basic-plan {
            display: flex;
            flex-wrap: wrap;
        }

        .basic-plan-main .basic-plan .plan-list {
            width: 50%;
        }

        .basic-plan-main .basic-plan .plan-list ul {
            margin: 0;
            padding: 0;
        }

        .basic-plan-main .basic-plan .plan-list ul li {
            font-size: 16px;
            color: #333333;
            line-height: 55px;
        }

        .basic-plan-main .basic-plan .plan-list ul li span {
            width: 24px;
            height: 24px;
            line-height: 24px;
            display: inline-block;
            background: #000;
            text-align: center;
            border-radius: 50px;
            margin-right: 5px;
        }

        .basic-plan-main .basic-plan .plan-list ul li span i {
            color: #fff;
            margin-top: 4px;
        }

        .basic-plan-card .basic-plan-main {
            padding: 40px 15px;
        }

        .basic-plan-card .basic-plan-main .basic-plan .plan-list {
            width: 60%;
        }

        .basic-plan-card .basic-plan-main .basic-plan .plan-content {
            width: 40%;
        }

        .basic-plan-card .basic-plan-main .basic-plan .plan-list ul li {
            line-height: 35px;
            font-size: 13px;
            list-style-type: none;
        }

        .basic-plan-card .basic-plan-main .basic-plan .plan-content h2 span {
            font-size: 14px;
        }

        .basic-plan-card .basic-plan-main .basic-plan .plan-content h2 {
            font-size: 31px;
            line-height: 32px;
            ss
        }

        .basic-plan-card .basic-plan-main .basic-plan .plan-content button {
            background-color: #00D2D2;
            border-color: #00D2D2;
            opacity: 1;
        }

        .basic-plan-main:hover .basic-plan .plan-list ul li span i {
            color: #000;
        }

        .basic-plan-main .basic-plan .plan-content h2 {
            font-size: 64px;
            color: #333333;
            line-height: 75px;
            font-weight: 600;
        }

        .basic-plan-main .basic-plan .plan-content h2 span {
            font-size: 24px;
            font-weight: 500;
            color: #5A5A5A;
        }

        .basic-plan-main .basic-plan .plan-content p {
            font-size: 18px;
            font-weight: 400;
            color: #5A5A5A;
            line-height: 32px;
            padding-bottom: 10px;
        }

        .basic-plan-main .basic-plan .plan-content a {
            background-color: #00D2D2;
            border-radius: 12px;
            font-size: 20px;
            font-weight: 500;
            color: #fff;
            display: inline-block;
            text-align: center;
            padding: 0.5rem 1rem;
            outline: none;
            border: none;
        }

        .basic-plan-card .basic-plan-main .basic-plan .plan-list {
            width: 100%;
        }

        .basic-plan-card .basic-plan-main .basic-plan .plan-content {
            width: 100%;
            margin-bottom: 30px;
        }

        .basic-plan-card .basic-plan-main .basic-plan {
            flex-direction: column-reverse;
        }

        .container.packages .select2-container {
            display: none;
        }

        .plan-tabs {
            width: 100%;
            text-align: center;
            display: flex;
            justify-content: center;
            margin-bottom: 30px;
        }

        .tab-content {
            width: 100%;
        }

        .d-flex.flex-column-fluid {
            flex-wrap: wrap;
        }
    </style>

    <div class="row">
        <div class="col-12">
            @include('layouts.errors')
            <div class="alert alert-danger display-none hide" id="validationErrorsBox"></div>
        </div>
    </div>


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
            <div class="container packages">
                <div class="row">
                    <input type="hidden" name="" id="client_id" value="{{ $clientPackage['client'] }}">

                    @foreach ($clientPackage['packages'] as $key => $pacakage)
                        @if ($pacakage['package_duration'] == 30)
                            <div class="col-lg-4 ">
                                <div class="basic-plan-card">
                                    <div class="basic-plan-main">

                                        @isset($subcription)
                                            @foreach ($subcription as $sub)
                                                @if ($sub['package_id'] == $pacakage['id'])
                                                    <span href=""
                                                        style="margin-top: -26px;color: #0aef0a;position: absolute;margin-left: 250px;">Active</span>
                                                @endif
                                            @endforeach
                                        @endisset
                                        <div class="basic-btn">
                                            <h2> {{ $pacakage['plan_name'] }}

                                            </h2>
                                        </div>


                                        <div class="basic-plan">
                                            <div class="plan-list">
                                                <ul class="readmore">
                                                    @if ($pacakage['features'] != '')
                                                        @foreach (explode(',', $pacakage['features']) as $features)
                                                            <li><span><img src="{{ asset('assets/img/plan-tick.png') }}"
                                                                        alt="plan"></span>
                                                                {{ $features }}</li>
                                                        @endforeach
                                                    @endif
                                                </ul>
                                            </div>
                                            <div class="plan-content">
                                                <h2>
                                                    @switch($pacakage['currency_id'])
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
                                                    {{ $pacakage['price'] }}<span>

                                                        <span>
                                                            @if ( $pacakage['package_duration'] == 30 )
                                                                / Month
                                                            @elseif ($pacakage['package_duration'] == 180)
                                                                / Biannual
                                                                 @elseif ($pacakage['package_duration'] == 14)
                                                                / 14 Days
                                                            @else
                                                                / Annum
                                                            @endif
                                                        </span>

                                                    </span>
                                                </h2>
                                                <p>{{ $pacakage['Description'] }}</p>
                                                @if (@isset($subcription))
                                                    @foreach ($subcription as $sub)
                                                        @if ($sub['package_id'] == $pacakage['id'])
                                                            <button type="button" class="btn btn-primary btn-lg "
                                                                id="tag<%={{ $pacakage['id'] }}%>"
                                                                value="{{ $pacakage['id'] }}" disabled>Subscribed</button>
                                                        @else
                                                            <button href="{{ route('client.invoices.index') }}"
                                                                type="button" class="btn btn-primary btn-lg "
                                                                id="tag<%={{ $pacakage['id'] }}%>"
                                                                value="{{ $pacakage['id'] }}"><a
                                                                    href="{{ route('client.invoices.index') }}">Subscribe
                                                                    Now</a></button>
                                                        @endif
                                                    @endforeach
                                                @else
                                                    <button type="button" class="btn btn-primary btn-lg "
                                                        id="tag<%={{ $pacakage['id'] }}%>"
                                                        value="{{ $pacakage['id'] }}"><a
                                                            href="{{ route('client.invoices.index') }}">Subscribe
                                                            Now</a></button>
                                                @endif

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-yearly" role="tabpanel" aria-labelledby="pills-yearly-tab">
            <div class="container packages">
                <div class="row">
                    <input type="hidden" name="" id="client_id" value="{{ $clientPackage['client'] }}">

                    @foreach ($clientPackage['packages'] as $key => $pacakage)
                        @if ($pacakage['package_duration'] == 365)
                            <div class="col-lg-4 ">
                                <div class="basic-plan-card">
                                    <div class="basic-plan-main">

                                        @isset($subcription)
                                            @foreach ($subcription as $sub)
                                                @if ($sub['package_id'] == $pacakage['id'])
                                                    <span href=""
                                                        style="margin-top: -26px;color: #0aef0a;position: absolute;margin-left: 250px;">Active</span>
                                                @endif
                                            @endforeach
                                        @endisset
                                        <div class="basic-btn">
                                            <h2> {{ $pacakage['plan_name'] }}

                                            </h2>
                                        </div>


                                        <div class="basic-plan">
                                            <div class="plan-list">
                                                <ul class="readmore">
                                                    @if ($pacakage['features'] != '')
                                                        @foreach (explode(',', $pacakage['features']) as $features)
                                                            <li><span><img src="{{ asset('assets/img/plan-tick.png') }}"
                                                                        alt="plan"></span>
                                                                {{ $features }}</li>
                                                        @endforeach
                                                    @endif
                                                </ul>
                                            </div>
                                            <div class="plan-content">
                                                <h2>
                                                    @switch($pacakage['currency_id'])
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
                                                    {{ $pacakage['price'] }}<span>

                                                        <span>
                                                            @if ( $pacakage['package_duration'] == 30 )
                                                                / Month
                                                            @elseif ($pacakage['package_duration'] == 180)
                                                                / Biannual
                                                                 @elseif ($pacakage['package_duration'] == 14)
                                                                / 14 Days
                                                            @else
                                                                / Annum
                                                            @endif
                                                        </span>

                                                    </span>
                                                </h2>
                                                <p>{{ $pacakage['Description'] }}</p>
                                                @if (@isset($subcription))
                                                    @foreach ($subcription as $sub)
                                                        @if ($sub['package_id'] == $pacakage['id'])
                                                            <button type="button" class="btn btn-primary btn-lg "
                                                                id="tag<%={{ $pacakage['id'] }}%>"
                                                                value="{{ $pacakage['id'] }}" disabled>Subscribed</button>
                                                        @else
                                                            <button href="{{ route('client.invoices.index') }}"
                                                                type="button" class="btn btn-primary btn-lg "
                                                                id="tag<%={{ $pacakage['id'] }}%>"
                                                                value="{{ $pacakage['id'] }}"><a
                                                                    href="{{ route('client.invoices.index') }}">Subscribe
                                                                    Now</a></button>
                                                        @endif
                                                    @endforeach
                                                @else
                                                    <button type="button" class="btn btn-primary btn-lg "
                                                        id="tag<%={{ $pacakage['id'] }}%>"
                                                        value="{{ $pacakage['id'] }}"><a
                                                            href="{{ route('client.invoices.index') }}">Subscribe
                                                            Now</a></button>
                                                @endif

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>





    <script>
        $(document).ready(function() {

            // $(".readmore").each(function() {
            //     var $this = $(this),
            //         $lis = $this.children(),
            //         $a = $("<a href='javascript:void(0)'>Less</a>")
            //     if ($lis.length > 3) {
            //         $this.after($a);
            //         $a.click(function() {
            //             $lis.slice(3).toggle();
            //             $a.html($a.html() === "More" ? "Less" : "More")
            //         }).click();
            //     }
            // });

            // $(".openpakcages").trigger('click');


        });


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        $(document).ready(function() {

            $('button[id^="tag"]').on('click', function() {

                var package_id = this.value;
                var client_id = $('#client_id').val();

                var url = '{{ route('invoice_store') }}';

                $.ajax({
                    type: 'POST',
                    url: url,
                    data: {
                        'package_id': package_id,
                        'client_id': client_id,
                    },

                    success: function(data) {

                        location.reload();
                    }
                });



            });



            $('.plans-slide').slick({
                dots: false,
                infinite: false,
                speed: 300,
                arrows: true,
                slidesToShow: 2,
                slidesToScroll: 1,
                responsive: [{
                    breakpoint: 1020,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }]
            });
        });
    </script>
@endsection

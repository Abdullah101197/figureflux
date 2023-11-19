<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bussines Plan</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>


<style>
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
        color: #121D4D;
        display: inline-block;
        width: 225px;
        height: 72px;
        line-height: 72px;
        text-align: center;
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
</style>

<body>
    @if (@isset($clientPackage['session']))
        <input type="hidden" name="session" id="sessionID" value="{{ $clientPackage['session'] }}">
        <input type="hidden" name="" id="sclient_id" value="{{ $clientPackage['client'] }}">
    @else
        <div class="container packages">
            <input type="hidden" class="btn btn-info btn-lg openpakcages " data-toggle="modal" data-target="#myModal">
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title" style="text-align:center">Packages</h1>
                        </div>
                        <div class="modal-body">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#home">Monthly</a></li>
                                <li><a data-toggle="tab" href="#menu1">Yearly</a></li>

                            </ul>

                            <div class="tab-content">
                                <div id="home" class="tab-pane fade in active">
                                    <div class="row">
                                        <input type="hidden" name="" id="client_id"
                                            value="{{ $clientPackage['client'] }}">
                                        @foreach ($clientPackage['packages'] as $key => $pacakage)
                                            @if ($pacakage['package_duration'] == 30 ||$pacakage['package_duration'] == 14)



                                                @isset($pacakage['status'])
                                                    @if ($pacakage['status'] == 1)
                                                        <div class="col-lg-4 ">
                                                            <div class="basic-plan-card">
                                                                <div class="basic-plan-main">
                                                                    <div class="basic-btn">
                                                                        <h2> <a
                                                                                href="#">{{ $pacakage['plan_name'] }}</a>
                                                                        </h2>
                                                                    </div>
                                                                    <div class="basic-plan">
                                                                        <div class="plan-list">
                                                                            <ul class="readmore">
                                                                                @if ($pacakage['features'] != '')
                                                                                    @foreach (explode(',', $pacakage['features']) as $features)
                                                                                        <li><span><img
                                                                                                    src="{{ asset('assets/img/plan-tick.png') }}"
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


                                                                            <button type="button"
                                                                                class="btn btn-primary btn-lg "
                                                                                id="tag<%={{ $pacakage['id'] }}%>"
                                                                                value="{{ $pacakage['id'] }}">Subscribe Now
                                                                            </button>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endisset
                                                @endif
                                            @endforeach

                                    </div>
                                </div>
                                <div id="menu1" class="tab-pane fade">
                                    <div class="row">
                                        <input type="hidden" name="" id="client_id"
                                            value="{{ $clientPackage['client'] }}">
                                        @foreach ($clientPackage['packages'] as $key => $pacakage)
                                            @if ($pacakage['package_duration'] == 365 ||$pacakage['package_duration'] == 14)



                                                @isset($pacakage['status'])
                                                    @if ($pacakage['status'] == 1)
                                                        <div class="col-lg-4 ">
                                                            <div class="basic-plan-card">
                                                                <div class="basic-plan-main">
                                                                    <div class="basic-btn">
                                                                        <h2> <a
                                                                                href="#">{{ $pacakage['plan_name'] }}</a>
                                                                        </h2>
                                                                    </div>
                                                                    <div class="basic-plan">
                                                                        <div class="plan-list">
                                                                            <ul class="readmore">
                                                                                @if ($pacakage['features'] != '')
                                                                                    @foreach (explode(',', $pacakage['features']) as $features)
                                                                                        <li><span><img
                                                                                                    src="{{ asset('assets/img/plan-tick.png') }}"
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


                                                                            <button type="button"
                                                                                class="btn btn-primary btn-lg "
                                                                                id="tag<%={{ $pacakage['id'] }}%>"
                                                                                value="{{ $pacakage['id'] }}">Subscribe Now
                                                                            </button>

                                                                        </div>
                                                                    </div>
                                                                </div>
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



                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>
        </div>
    @endif

</body>


<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(document).ready(function() {
        $(".openpakcages").trigger('click');
        if ($('#sessionID').val() != null) {
            var package_id = $('#sessionID').val();
            var client_id = $('#sclient_id').val();

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


        }
    });

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
    });
</script>


</html>

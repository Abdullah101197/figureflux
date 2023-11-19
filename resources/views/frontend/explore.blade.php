@extends('layouts.frontend.non_mix_header')
@section('title')
explore
@endsection
@section('content')

<div class="custom-container">
    <div class="explore-wrapper">
        <h2>Explore</h2>
        <div class="row">
            <div class="col-lg-3 col-md-6 p-lr-20">
                <div class="border-solid">
                    <div class="inner-feature-card">
                        <h4>Task</h4>
                        <a href="{{route('task')}}">Explore</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 p-lr-20">
                <div class="border-solid">
                    <div class="inner-feature-card">
                        <h4>Document</h4>
                        <a href="{{route('document')}}">Explore</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 p-lr-20">
                <div class="border-solid">
                    <div class="inner-feature-card">
                        <h4>Business</h4>
                        <a href="{{route('bussiness-plan')}}">Explore</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 p-lr-20">
                <div class="border-solid">
                    <div class="inner-feature-card">
                        <h4>Payments</h4>
                        <a href="{{route('payments')}}">Explore</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 p-lr-20">
                <div class="border-solid">
                    <div class="inner-feature-card">
                        <h4>Accounts</h4>
                        <a href="{{route('account')}}">Explore</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 p-lr-20">
                <div class="border-solid">
                    <div class="inner-feature-card">
                        <h4>Sales</h4>
                        <a href="{{route('sales')}}">Explore</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 p-lr-20">
                <div class="border-solid">
                    <div class="inner-feature-card">
                        <h4>Suppliers</h4>
                        <a href="{{route('suppliers')}}">Explore</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 p-lr-20">
                <div class="border-solid">
                    <div class="inner-feature-card">
                        <h4>Purchases</h4>
                        <a href="{{route('purchase')}}">Explore</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 p-lr-20">
                <div class="border-solid">
                    <div class="inner-feature-card">
                        <h4>Contracts</h4>
                        <a href="{{route('contracts')}}">Explore</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 p-lr-20">
                <div class="border-solid">
                    <div class="inner-feature-card">
                        <h4>Projects</h4>
                        <a href="{{route('project_management')}}">Explore</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 p-lr-20">
                <div class="border-solid">
                    <div class="inner-feature-card">
                        <h4>Leads</h4>
                        <a href="{{route('leads_management')}}">Explore</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 p-lr-20">
                <div class="border-solid">
                    <div class="inner-feature-card">
                        <h4>Support</h4>
                        <a href="{{route('support')}}">Explore</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 p-lr-20">
                <div class="border-solid">
                    <div class="inner-feature-card">
                        <h4>Knowledge Base</h4>
                        <a href="{{route('knowlage_base')}}">Explore</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 p-lr-20">
                <div class="border-solid">
                    <div class="inner-feature-card">
                        <h4>HRM</h4>
                        <a href="{{route('hrm')}}">Explore</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 p-lr-20">
                <div class="border-solid">
                    <div class="inner-feature-card">
                        <h4>Calendar</h4>
                        <a href="{{route('calender')}}">Explore</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 p-lr-20">
                <div class="border-solid">
                    <div class="inner-feature-card">
                        <h4>Product & Services</h4>
                        <a href="{{route('Products')}}">Explore</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 p-lr-20">
                <div class="border-solid">
                    <div class="inner-feature-card">
                        <h4>Report</h4>
                        <a href="{{route('report')}}">Explore</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 p-lr-20">
                <div class="border-solid">
                    <div class="inner-feature-card">
                        <h4>Setting</h4>
                        <a href="{{route('settings')}}">Explore</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 p-lr-20">
                <div class="border-solid">
                    <div class="inner-feature-card">
                        <h4>CRM</h4>
                        <a href="{{route('crm')}}">Explore</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
</script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/main.js"></script>
@endsection

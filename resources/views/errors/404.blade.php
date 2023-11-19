@extends('layouts.frontend.frontend_layout')
@section('title')
    404 page | {{ config('app.name') }}

@endsection
@section('content')

<div class="container con-404 vh-100 d-flex justify-content-center">
    <div class="row justify-content-md-center d-block">
        <div class="col-md-12 mt-5">
            <img src="{{ asset('images/404-error-image.svg') }}"
                 class="img-fluid img-404 mx-auto d-block" style="    width:60%;
">
        </div>
        <div class="col-md-12 text-center error-page-404">
            <h2>Opps! Something's missing...</h2>
            <p class="not-found-subtitle">The page you are looking for doesn't exists / isn't available / was loading
                incorrectly.</p>
            <a class="btn btn-primary back-btn mt-3" href="{{ url()->previous() }}">Back to Previous Page</a>
        </div>
    </div>
</div>
@endsection

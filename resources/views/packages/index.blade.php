@extends('layouts.app')
@section('title')
    Packages
@endsection
@section('content')
    <div class="container-fluid">
        <div class="d-flex flex-column ">
            @include('flash::message')
            <livewire:package-table/>
        </div>
    </div>
@endsection

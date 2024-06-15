@extends('website::app')
@section('body')
    @include('website::layouts.header')
    @yield('content')
    @include('website::layouts.footer')
@endsection

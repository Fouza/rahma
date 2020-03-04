{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" media="screen and (min-device-width: 576px)" href="{{ asset('css/tablet.css') }}">
    <link rel="stylesheet" media="screen and (max-device-width: 575px)" href="{{ asset('css/mobile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">

@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

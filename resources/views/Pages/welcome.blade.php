
@extends('layouts.app')

@section('title', 'Welcome')

@section('content')

<div class="container" style="margin-top: 100px;">

    <h1>{{ $welcome }}</h1>

    <p>Selamat datang di website pribadi saya.</p>

    <p>Website ini dibuat menggunakan Laravel Blade.</p>

</div>

@endsection

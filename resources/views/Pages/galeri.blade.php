
@extends('layouts.app')

@section('title', 'Galeri Foto')

@section('content')

<div class="container" style="max-width: 1400px;">

    <h1>Galeri Foto</h1>

    <p>Berikut adalah kumpulan foto saya.</p>

    @php
        $foto = [
            'foto1.jpg',
            'foto2.jpg',
            'foto3.jpg',
            'foto4.jpg'
        ];
    @endphp

    <div style="
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
        width: 100%;
        margin-top: 35px;
    ">

        @foreach ($foto as $gambar)

            <div style="
                width: 100%;
                aspect-ratio: 1 / 1;
                border-radius: 12px;
                overflow: hidden;
                box-shadow: 0 4px 10px rgba(0,0,0,0.15);
            ">

                <img
                    src="{{ asset('images/' . $gambar) }}"
                    alt="Foto Galeri"
                    style="
                        width: 100%;
                        height: 100%;
                        object-fit: cover;
                    "
                >

            </div>

        @endforeach

    </div>

</div>

@endsection

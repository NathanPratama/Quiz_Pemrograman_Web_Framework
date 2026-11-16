
@extends('layouts.app')

@section('title', 'Data Diri')

@section('content')

<div class="container" style="max-width: 800px;">

    <h1>Data Diri</h1>

    <p>Halo! Perkenalkan, berikut adalah deskripsi data diri saya.</p>

    @php
        $nama = "Nathanael";
        $umur = 19;
        $jurusan = "Informatika";
        $kampus = "INSTIKI";

        $hobi = [
            "Bermain Game",
            "Mendengarkan Musik",
            "Belajar Programming",
            "Badminton"
        ];
    @endphp

    <h3>Informasi Pribadi</h3>

    <p>Nama: {{ $nama }}</p>
    <p>Umur: {{ $umur }} Tahun</p>
    <p>Jurusan: {{ $jurusan }}</p>
    <p>Kampus: {{ $kampus }}</p>

    <hr>

    <h3>Daftar Hobi</h3>

    <div style="display: inline-block; text-align: left;">

        @for ($i = 0; $i < count($hobi); $i++)
            <p>{{ $i + 1 }}. {{ $hobi[$i] }}</p>
        @endfor

    </div>

    <hr>

    <h3>Daftar Hobi</h3>

    <div style="display: inline-block; text-align: left;">

        @php
            $i = 0;
        @endphp

        @while ($i < count($hobi))
            <p>{{ $i + 1 }}. {{ $hobi[$i] }}</p>

            @php
                $i++;
            @endphp
        @endwhile

    </div>

</div>

@endsection

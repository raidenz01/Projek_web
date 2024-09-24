@extends('layouts.app')

@section('title', 'Tentang Saya')

@section('content')
<!-- Header Section -->
<section class="about-header">
    <h1>Tentang Saya</h1>

</section>

<!-- Biografi Singkat -->
<section class="biografi-singkat">
    <h2>Biografi Singkat</h2>
    <p>Nama saya ILHAM MAULANA, seorang siswa SMK jurusan Teknik Rekayasa perangkat Lunak. Saya memiliki ketertarikan
        mendalam dalam bidang jaringan komputer, troubleshooting perangkat keras, dan pengelolaan sistem TI. Pendidikan
        saya fokus pada pengembangan keterampilan teknis yang relevan dengan bidang teknologi informasi.</p>
    <div class="biografi-foto">
        <img src="{{ asset('img/pp.jpg') }}" alt="Foto Diri" height="250" width="200">
    </div>
</section>

<!-- Keterampilan dan Keahlian -->
<section class="keterampilan">
    <h2>Keterampilan dan Keahlian</h2>
    <ul>
        <li>Pemrograman: Python, HTML, CSS, JavaScript</li>
        <li>Teknik Jaringan: Konfigurasi router & switch, troubleshooting jaringan</li>
        <li>Manajemen Sistem: Instalasi dan konfigurasi sistem operasi Linux dan Windows</li>
    </ul>
</section>

<!-- Tujuan dan Aspirasi -->
<section class="tujuan-aspirasi">
    <h2>Tujuan dan Aspirasi</h2>
    <p>Saya bercita-cita untuk menjadi seorang profesional di bidang jaringan komputer dan sistem informasi.Dan relawan
        kemanusiaan.</p>
</section>
@endsection
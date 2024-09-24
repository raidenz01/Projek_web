@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h2>Siswa SMK Teknik Komputer dan Jaringan</h2>
            <p>Menjelajahi dunia teknologi dan jaringan komputer.</p>
            <a href="#about" class="btn btn-secondary">Pelajari Lebih Lanjut</a>
        </div>
    </section>

    <!-- Tentang Saya (Sekilas) -->
    <section id="about" class="about-me">
        <h2>Tentang Saya</h2>
        <p>Saya adalah seorang siswa di jurusan Teknik Komputer dan rekayasa perangkat lunak. Saat ini saya berada di kelas XII.</p>
        <a href="/about" class="btn btn-secondary">Baca Selengkapnya</a>
    </section>

    <!-- Proyek Unggulan -->
    <section id="projects" class="featured-projects">
        <h2>Proyek Unggulan</h2>
        <div class="projects-list">
            <div class="project-item">
                <img src="{{ asset('img/tampilan.jpg') }}" alt="Proyek 1">
                <p>Proyek 1: Ini adalah tampilan cv buatan saya</p>
                <a href="/projects" class="btn btn-primary">Detail Proyek</a>
            </div>
            <div class="project-item">
                <img src="{{ asset('img/pesan.jpg') }}" alt="Proyek 2">
                <p>Proyek 2: website pesan rahasia</p>
                <a href="/projects" class="btn btn-primary">Detail Proyek</a>
            </div>
        </div>
    </section>
@endsection


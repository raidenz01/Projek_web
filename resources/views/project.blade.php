@extends('layouts.app')

@section('title', 'Proyek')

@section('content')
<!-- Header Section -->
<section class="projects-header">
    <h1>Proyek</h1>
</section>

<!-- Galeri Proyek -->
<section class="galeri-proyek">
    <h2>Galeri Proyek</h2>
    <div class="projects-grid">
        <!-- Proyek 1 -->
        <div class="project-item">
            <img src="{{ asset('img/pesan.jpg') }}" alt="Proyek 1">
            <h3>Proyek 1: Pesan rahasia </h3>
            <a href="/projects" class="btn btn-primary">Detail Proyek</a>
        </div>

        <!-- Proyek 2 -->
        <div class="project-item">
            <img src="{{ asset('img/tampilan.jpg') }}" alt="Proyek 2">
            <h3>Proyek 2: Tampilan cv </h3>
            <a href="/projects" class="btn btn-primary">Detail Proyek</a>
        </div>
    </div>
</section>
@endsection
@extends('layouts.app')

@section('title', 'Kontak')

@section('content')
    <!-- Header Section -->
    <section class="contact-header">
        <h1>Kontak</h1>
    </section>

    <!-- Formulir Kontak -->
    <section class="contact-form">
        <h2>Hubungi Saya</h2>
        <form action="/send-message" method="POST">
            @csrf <!-- Laravel CSRF protection -->
            <div class="form-group">
                <label for="name">Nama:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Pesan:</label>
                <textarea id="message" name="message" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-secondary">Kirim</button>
        </form>
    </section>

    <!-- Informasi Kontak Lain -->
    <section class="contact-info">
        <h2>Informasi Kontak Lain</h2>
        <p>Anda juga dapat menghubungi saya melalui:</p>
        <ul>
            <li>Email: <a href="mailto:emailanda@example.com">ilhammaulana7437@example.com</a></li>
            <li>Tiktok: <a href="http://tiktok.com/@dapitt_16" target="_blank">dapitt_16</a></li>
            <li>Instagram: <a href="https://www.instagram.com/dappsz_?igsh=dDBmenFxdHp5cWZi" target="_blank">@dappsz</a></li>
        </ul>
    </section>
@endsection

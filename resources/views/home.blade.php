@extends('layouts.layout')
@section('title', 'Home')
@section('content')

<style>
    /* Styling Dasar Kartu */
    .card {
        border: none;
        border-radius: 0;
        overflow: hidden;
        height: 100%; /* Penting: Kartu mengambil tinggi penuh dari kolom */
        padding: 0;
        margin: 0;
    }

    /* Styling Gambar - Kunci untuk menghindari kartu terpotong */
    .img-square {
        width: 100%;
        max-height: 400px; /* Batasi tinggi maksimum gambar */
        height: auto; /* Memastikan rasio aspek gambar dipertahankan */
        object-fit: cover;
        display: block;
    }

    /* Styling Teks dan Latar Belakang - BLOK 1 (Teks Putih) */
    .card-text-body {
        height: 100%;
        padding: 20px;
        color: white; 
    }
    
    .card-text-body h2 { font-size: 1.5rem; font-weight: bold; margin-bottom: 10px; }
    .card-text-body h4 { font-size: 1rem; font-style: italic; margin-bottom: 15px; }
    .card-text-body p { font-size: 0.9rem; line-height: 1.5; }

    /* Warna Spesifik Baris 1: [Gambar, Teks Biru, Teks Kuning, Gambar] */
    .bg-blue { background-color: #37c4e3; } 
    .bg-yellow { background-color: #f7e6c4; color: #333; } /* Teks hitam untuk latar kuning */
    
    /* Styling Teks dan Latar Belakang - BLOK 2 (Teks Hitam, Latar Pink/Putih) */
    .bg-pink { background-color: #f0a7b4; color: #333; } /* Teks hitam untuk latar pink Gudeg Sagan */
    .card-text-body-light {
        height: 100%;
        padding: 20px;
        color: #333; /* Teks Hitam */
        background-color: #f8f8f8; /* Latar Belakang Putih/Abu Muda */
    }

    .card-text-body-light h2 { font-size: 1.5rem; font-weight: bold; margin-bottom: 10px; }
    .card-text-body-light h4 { font-size: 1rem; font-style: italic; margin-bottom: 15px; }
    .card-text-body-light p { font-size: 0.9rem; line-height: 1.5; }

    /* Ikon Sosial Media */
    .social-icons a {
        color: inherit;
        margin-right: 15px;
        font-size: 1.2rem;
        text-decoration: none;
    }
</style>

<div class="container-fluid mt-0 pt-5">
    
    {{-- Header --}}
    <div class="row mb-4">
        <div class="col-12 text-center">
            <h1 style="font-size: 2rem; margin-bottom: 40px;">
                Selamat Datang di --Masukkan nama programmer 1 dan nim-- Group
            </h1>
        </div>
    </div>
    
    {{-- =============================================== --}}
    {{-- GRID GABUNGAN 8 KARTU (2 Baris x 4 Kolom) --}}
    {{-- g-0 menghilangkan jarak horizontal/vertikal antar kolom/row --}}
    {{-- =============================================== --}}
    
    @php
        // Mengambil 8 data teratas. Jika data kurang dari 8, ini akan mengambil semua yang ada.
        $allWarungs = array_slice($warungs, 0, 8); 
    @endphp

    <div class="row g-0">
        
        {{-- Loop FOR untuk memastikan 8 kolom (col-md-3) terbentuk --}}
        @for ($globalIndex = 0; $globalIndex < 8; $globalIndex++)
            @php
                // Ambil data warung (null jika data kurang dari 8)
                $warung = $allWarungs[$globalIndex] ?? null; 
                
                // Tentukan baris (0-3 adalah baris 1, 4-7 adalah baris 2)
                $isTopRow = ($globalIndex < 4);
                
                $bgColorClass = '';
                $textBodyClass = 'card-text-body'; // Default: Teks Putih
                $isImageCard = false; // Akan ditentukan di bawah sesuai pola

                if ($isTopRow) {
                    // Pola Baris Atas: [Gambar(0), Teks(1), Teks(2), Gambar(3)]
                    if ($globalIndex == 0 || $globalIndex == 3) {
                        $isImageCard = true;
                    } elseif ($globalIndex == 1) {
                        // Special Sambal - Teks Biru, Teks Putih
                        $bgColorClass = 'bg-blue'; 
                    } elseif ($globalIndex == 2) {
                        // Sate Pak Pong - Teks Kuning, Teks Hitam
                        $bgColorClass = 'bg-yellow';
                        $textBodyClass = 'card-text-body-light'; // Menggunakan class teks hitam
                    }
                } else {
                    // Pola Baris Bawah: [Teks(4), Gambar(5), Gambar(6), Teks(7)]
                    if ($globalIndex == 5 || $globalIndex == 6) {
                        $isImageCard = true;
                    } elseif ($globalIndex == 4) {
                        // Gudeg Sagan - Teks Pink, Teks Hitam
                        $bgColorClass = 'bg-pink'; 
                        $textBodyClass = 'card-text-body-light'; // Menggunakan class teks hitam
                    } elseif ($globalIndex == 7) {
                        // Sushi Cerita - Teks Putih/Abu, Teks Hitam
                        $bgColorClass = 'bg-light'; // Tidak digunakan di CSS, tapi untuk jaga-jaga
                        $textBodyClass = 'card-text-body-light'; // Menggunakan class teks hitam
                    }
                }
            @endphp
            
            {{-- Menggunakan col-md-3 agar 4 kartu muat dalam 1 baris --}}
            <div class="col-md-3 col-6"> 
                <div class="card h-100 {{ $bgColorClass }}">
                    @if ($warung)
                        {{-- Kartu Terisi Data --}}
                        @if($isImageCard)
                            <img class="img-square" src="{{ asset('image/' . $warung['images']) }}" alt="{{ $warung['title'] }}">
                        @else
                            <div class="{{ $textBodyClass }} d-flex flex-column justify-content-between">
                                <div>
                                    <h2>{{ $warung['title'] }}</h2>
                                    <h4>{{ $warung['subtitle'] }}</h4>
                                    <p>{{ $warung['deskripsi'] }}</p>
                                </div>
                                <div class="social-icons mt-3">
                                    <a href="#"><i class="fas fa-fw fa-facebook-f"></i></a>
                                    <a href="#"><i class="fas fa-fw fa-twitter"></i></a>
                                    <a href="#"><i class="fas fa-fw fa-instagram"></i></a>
                                </div>
                            </div>
                        @endif
                    @else
                        {{-- Kartu Kosong (Jika data kurang dari 8) --}}
                         <div class="card-text-body-light d-flex align-items-center justify-content-center">
                            <p style="text-align: center;">Data tidak tersedia</p>
                        </div>
                    @endif
                </div>
            </div>
        @endfor
    </div> {{-- Penutup dari row g-0 --}}


    {{-- Footer --}}
    <div class="text-center mt-3 mb-3">
        <p>Total Franchise: 4</p>
    </div>

</div>

@endsection
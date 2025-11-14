{{-- resources/views/about.blade.php --}}

@extends('layouts.layout')

@section('content')
    <div class="container-fluid p-0 page-background"> 
        
        <h1 class="text-center py-5 mb-0 bg-white text-dark">About Us</h1>
        
        @foreach ($team as $programmer)
            
            @php
                $is_first = $loop->first;
                $bg_class = $is_first ? 'bg-light-blue' : 'bg-light-green';
            @endphp
            
            <div class="row m-0 mb-0 align-items-stretch quadrant-row">
                
                {{-- Kiri (Gambar P-1 / Detail P-2) --}}
                <div class="col-md-6 p-0 
                    @if ($is_first) 
                        order-md-1 
                    @else 
                        {{-- REVISI ORDER DI SINI: Detail P-2 harus order-md-1 agar di KIRI BAWAH --}}
                        order-md-1 d-flex align-items-center justify-content-center {{ $bg_class }} 
                    @endif"
                >
                    @if ($is_first)
                        {{-- GAMBAR PROGRAMMER 1 (KIRI ATAS) --}}
                        <img src="{{ asset($programmer['foto_url']) }}" 
                            alt="Foto {{ $programmer['nama'] }}" 
                            class="img-fluid profile-img">
                    @else
                        {{-- DETAIL PROGRAMMER 2 (KIRI BAWAH) --}}
                        <div class="p-5 text-center text-md-start">
                            <h2> {{ $programmer['nama'] }}</h2>
                            <p class="text-muted">Masukkan NIM: {{ $programmer['nim'] }}</p>
                            <p class="lead mt-3">{{ $programmer['deskripsi'] }}</p>
                            <div class="social-links mt-3">
                                @foreach ($programmer['sosial_media'] as $media)
                                    <a href="#" class="text-secondary mx-2 fs-4"><i class="fab fa-{{ $media }}"></i></a>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>

                {{-- Kanan (Detail P-1 / Gambar P-2) --}}
                <div class="col-md-6 p-0 
                    @if ($is_first) 
                        order-md-2 d-flex align-items-center justify-content-center {{ $bg_class }} 
                    @else 
                        {{-- REVISI ORDER DI SINI: Gambar P-2 harus order-md-2 agar di KANAN BAWAH --}}
                        order-md-2 
                    @endif"
                >
                    @if ($is_first)
                        {{-- DETAIL PROGRAMMER 1 (KANAN ATAS) --}}
                        <div class="p-5 text-center text-md-start">
                            <h2>{{ $programmer['nama'] }}</h2>
                            <p class="text-muted">Masukkan NIM: {{ $programmer['nim'] }}</p>
                            <p class="lead mt-3">{{ $programmer['deskripsi'] }}</p>
                            <div class="social-links mt-3">
                                @foreach ($programmer['sosial_media'] as $media)
                                    <a href="#" class="text-secondary mx-2 fs-4"><i class="fab fa-{{ $media }}"></i></a>
                                @endforeach
                            </div>
                        </div>
                    @else
                        {{-- GAMBAR PROGRAMMER 2 (KANAN BAWAH) --}}
                        <img src="{{ asset($programmer['foto_url']) }}" 
                            alt="Foto {{ $programmer['nama'] }}" 
                            class="img-fluid profile-img">
                    @endif
                </div>
            </div> {{-- End row --}}
            
        @endforeach

        {{-- Footer/Button --}}
        <div class="row m-0">
            <div class="col-12 text-center py-3 bg-white border-top">
                <a href="{{ url('/') }}" class="btn btn-primary">
                    <i class="fas fa-arrow-left"></i> Back to Home
                </a>
            </div>
        </div>
    </div>
    
    {{-- Style Tambahan --}}
    <style>
        .page-background {
            background-color: #f7f7f7; 
        }
        .bg-light-blue {
            background-color: #e0f7fa !important; 
        }
        .bg-light-green {
            background-color: #e8f5e9 !important; 
        }
        .profile-img {
            width: 100%;
            height: 100%; 
            object-fit: cover;
            display: block; 
        }
        .quadrant-row {
            min-height: 400px; /* Ditambahkan kembali agar tinggi terjamin */
        }
    </style>
@endsection
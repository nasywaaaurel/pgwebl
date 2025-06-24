@extends('layout.template')

@section('content')

<style>
    body {
        background-color: #fdf6ec;
        font-family: 'Poppins', sans-serif;
        color: #333;
    }

    h1, h2, h3, h4, h5 {
        font-family: 'Playfair Display', serif;
    }

    p {
        text-align: justify;
    }

    .section-divider {
        height: 5px;
        width: 100px;
        background-color: #e1b382;
        border-radius: 5px;
        margin: 40px auto 20px auto;
    }

    .section-container {
        padding-top: 60px;
        padding-bottom: 60px;
    }

    .destination-card img {
        transition: transform 0.5s ease;
    }

    .destination-card:hover img {
        transform: scale(1.05);
    }

    .overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 100%;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.7), transparent);
        opacity: 0;
        transition: opacity 0.3s ease-in-out;
    }

    .destination-card:hover .overlay {
        opacity: 1;
    }

    .object-fit-cover {
        object-fit: cover;
    }

    .kejora-title {
        background-color: #e1b382;
        color: #2e1a47;
        padding: 30px 15px;
        text-align: center;
        border-bottom: 4px solid #d19c69;
    }

    .kejora-title h1 {
        font-family: 'Playfair Display', serif;
        font-weight: 800;
        font-size: 3.2rem;
        margin-bottom: 10px;
    }

    .kejora-title p {
        font-size: 1.2rem;
        margin-bottom: 0;
    }
</style>


<!-- Carousel Section -->
<div id="homeCarousel" class="carousel slide" data-bs-ride="carousel" style="margin-top: 10px;">
    <div class="carousel-inner">
        @foreach ([
            1 => ['Eksotisme Wisata di Kebumen', '#JelajahiKebumenSekarang', '1.jpeg'],
            2 => ['Keindahan Pantai Selatan', 'Wisata bahari dengan pesona alami', '2.png'],     {{-- ganti jadi png --}}
            3 => ['Wisata Alam Pegunungan', 'Nikmati sejuknya udara dan panorama hijau', '3.jpg'],
            4 => ['Jelajah Budaya & Kuliner', 'Rasakan cita rasa lokal dan seni tradisional', '4.jpeg']
        ] as $index => $item)
            <div class="carousel-item {{ $index == 1 ? 'active' : '' }}">
                <div class="d-block w-100"
                    style="background-image: url('/images/{{ $item[2] }}'); background-size: cover; background-position: center; height: 90vh; position: relative;">
                    <div style="position: absolute; top:0; left:0; width:100%; height:100%; background: rgba(0,0,0,0.4);"></div>
                    <div class="container h-100 d-flex align-items-center justify-content-start" style="position: relative; z-index: 1;">
                        <div class="text-white" style="max-width: 600px; padding-left: 40px;">
                            <h1 style="font-weight: 700; font-size: 3rem;">{{ $item[0] }}</h1>
                            <p style="font-size: 1.5rem;">{{ $item[1] }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Carousel Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Sebelumnya</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#homeCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Selanjutnya</span>
    </button>
</div>



<!-- Section: Tentang Kebumen -->
<div class="container section-container">
    <div class="row align-items-center">
        <div class="col-md-4 mb-3">
            <img src="/images/tugulawet.jpg" alt="Tentang Kebumen" class="img-fluid rounded shadow-sm">
        </div>
        <div class="col-md-8">
            <h3 style="color: #2e1a47; font-weight: 700;">Kenali Kebumen Lebih Dekat</h3>
            <p>Kabupaten Kebumen merupakan salah satu daerah di Jawa Tengah yang memiliki keindahan alam luar biasa, mulai dari pantai-pantai eksotis, gua-gua karst yang menakjubkan, hingga kuliner khas yang menggoda selera. Tradisi budaya yang masih lestari menjadikan Kebumen sebagai destinasi wisata yang autentik dan mengesankan.</p>
        </div>
    </div>
</div>

<div class="section-divider"></div>

<!-- Section: Berita Terbaru -->
<div class="container section-container">
    <div class="text-center mb-5">
        <h2 style="font-weight: 700; color: #2e1a47;">📰 Berita Terbaru</h2>
        <p>Informasi terbaru seputar Geopark dan pariwisata di Kebumen.</p>
        <div class="section-divider"></div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5 mb-4 d-flex justify-content-center">
            <div class="card shadow-sm h-100" style="width: 100%;">
                <a href="{{ route('berita') }}">
                    <img src="/images/unesco.jpg" class="card-img-top object-fit-cover" style="height: 200px;" alt="UNESCO Geopark">
                </a>
                <div class="card-body">
                    <h5 class="card-title fw-bold">Geopark Kebumen Resmi Jadi UNESCO Global Geopark</h5>
                    <small class="text-muted">April 18, 2025</small>
                    <p class="card-text mt-2">UNESCO menetapkan Geopark Kebumen sebagai bagian dari UNESCO Global Geopark, membawa dampak besar bagi pariwisata dan pelestarian.</p>
                    <a href="{{ route('berita') }}" class="btn btn-outline-danger">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Section: Pariwisata Terbaik -->
<div class="container section-container">
    <div class="text-center mb-5 position-relative">
        <h2 style="font-size: 2.8rem; font-weight: 700; color: #2e1a47;">🌴 Jelajahi Keindahan <span style="color: #e63946;">Kebumen</span> yang Memikat!</h2>
        <p style="font-size: 1.1rem;">Rekomendasi destinasi wisata paling menawan dan wajib dikunjungi di Kabupaten Kebumen.</p>
        <div class="section-divider"></div>
    </div>

    <div class="row justify-content-center text-center">
        @php
            $wisata = [
                ['Pantai Menganti', 'menganti.jpg', 'Pantai dengan pasir putih dan tebing karang menakjubkan, menjadi primadona wisata bahari di Kebumen.'],
                ['Jembangan', 'jembangan2.jpg', 'Danau yang indah dengan perahu dan kuliner, cocok untuk wisata keluarga dan santai.'],
                ['Pantai Sawangan', 'karangbolong.webp', 'Pantai unik di barat daya Kebumen, perpaduan laut dan pegunungan karst yang memesona.']
            ];
        @endphp

        @foreach ($wisata as $w)
        <div class="col-md-4 mb-4">
            <div class="destination-card position-relative overflow-hidden rounded" style="height: 400px;">
                <img src="/images/{{ $w[1] }}" class="img-fluid w-100 h-100 object-fit-cover" alt="{{ $w[0] }}">
                <div class="overlay p-4 d-flex flex-column justify-content-end text-start">
                    <h4 class="text-white fw-bold mb-2">{{ $w[0] }}</h4>
                    <p class="text-white mb-0">{{ $w[2] }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<div class="section-divider"></div>

<style>
    .kuliner-card {
        position: relative;
        overflow: hidden;
        border-radius: 10px;
        transition: transform 0.3s ease;
    }

    .kuliner-card img {
        transition: transform 0.4s ease;
        border-radius: 10px;
    }

    .kuliner-card:hover img {
        transform: scale(1.05);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.25);
    }

    .maps-link-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: rgba(0, 0, 0, 0.6);
        padding: 10px;
        text-align: center;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .kuliner-card:hover .maps-link-overlay {
        opacity: 1;
    }

    .maps-link-overlay a {
        color: #fff;
        font-weight: 600;
        text-decoration: none;
        background: #e63946;
        padding: 6px 12px;
        border-radius: 20px;
        font-size: 0.9rem;
    }

    .maps-link-overlay a:hover {
        background: #d12834;
    }
</style>

<!-- Section: Kuliner Khas Kebumen -->
<div class="container section-container">
    <div class="text-center mb-4">
        <h2 style="font-weight: 700; color: #2e1a47;">🍽️ Kuliner Khas <span style="color: #e63946;">Kebumen</span></h2>
        <p>Cita rasa lokal yang wajib dicoba saat berkunjung ke Kebumen!</p>
        <div class="section-divider"></div>
    </div>

    @php
        $kuliner = [
            [
                'nama' => 'Sate Ambal',
                'gambar' => 'sateambal.jpeg',
                'deskripsi' => 'Sate khas Kebumen dengan bumbu tempe yang unik dan cita rasa gurih manis menggoda.',
                'link' => 'https://maps.app.goo.gl/TGsoyV5gVMgYmUieA'
            ],
            [
                'nama' => 'Lanting',
                'gambar' => 'lanting.jpeg',
                'deskripsi' => 'Camilan renyah berbahan dasar singkong berbentuk angka delapan, cocok untuk oleh-oleh.',
                'link' => 'https://maps.app.goo.gl/mdpBDn3TJE7YioiG8'
            ],
            [
                'nama' => 'Sego Penggel',
                'gambar' => 'penggel.jpg',
                'deskripsi' => 'Nasi bulat kecil disajikan dengan pincuk dan lauk khas, hanya tersedia di pagi hari.',
                'link' => 'https://maps.app.goo.gl/UJ2UMKZLpRyjD3AR8'
            ],
        ];
    @endphp

    <div class="row justify-content-center">
        @foreach ($kuliner as $k)
        <div class="col-md-4 mb-4">
            <div class="card h-100 border-0 shadow-sm">
                <div class="kuliner-card">
                    <img src="/images/{{ $k['gambar'] }}" class="card-img-top" alt="{{ $k['nama'] }}">
                    <div class="maps-link-overlay">
                        <a href="{{ $k['link'] }}" target="_blank">📍 Lihat di Google Maps</a>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title fw-semibold">{{ $k['nama'] }}</h5>
                    <p class="card-text">{{ $k['deskripsi'] }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- Ulasan Pengunjung -->
<div class="container mt-2">
    <h4 class="mb-3" style="font-family: 'Javanese Text', cursive;">💬 Ulasan Pengunjung</h4>
    <form id="commentForm">
        <input type="text" id="name" placeholder="Nama Anda" class="form-control mb-2" required>
        <textarea id="comment" class="form-control mb-2" placeholder="Tulis komentar..." rows="3" required></textarea>
        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>
    <div id="commentList" class="mt-3"></div>
</div>

<!-- Footer -->
<div class="text-center py-3" style="background-color: #fdf6ec; font-size: 0.95rem; color: #7a4e3b;">
    © 2025 <strong>Nasywa Aurelia Yuandra</strong>. All rights reserved.
</div>


@endsection

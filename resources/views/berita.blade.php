@extends('layout.template')

@section('content')

<style>
    .berita-container {
        padding: 50px 20px;
        max-width: 900px;
        margin: 0 auto;
    }

    .berita-container img.feature-img {
    width: 100%;
    max-width: 400px; /* <--- batas maksimum ukuran gambar */
    height: auto;
    border-radius: 8px;
    margin: 0 auto 30px auto; /* <--- auto biar tetap di tengah */
    display: block; /* <--- memastikan gambar bisa center */
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
}


    .berita-container h1 {
        font-weight: 700;
        font-family: 'Playfair Display', serif;
        font-size: 2.5rem;
        color: #2e1a47;
        margin-bottom: 10px;
    }

    .berita-container p {
        text-align: justify;
        font-size: 1.05rem;
        line-height: 1.8;
        color: #333;
    }

    .berita-source {
        font-style: italic;
        font-size: 0.9rem;
        color: #777;
        text-align: right;
    }

    .section-divider {
        height: 4px;
        width: 80px;
        background-color: #e1b382;
        border-radius: 5px;
        margin: 20px 0 30px 0;
    }
</style>

<div class="berita-container">
    <img src="/images/unesco.jpg" alt="UNESCO Geopark Kebumen" class="feature-img">

    <h1>🌍 Geopark Kebumen Resmi Jadi UNESCO Global Geopark (UGGp)</h1>
    <div class="section-divider"></div>

    <p><strong>Badan Perserikatan Bangsa-Bangsa untuk Pendidikan, Ilmu Pengetahuan, dan Kebudayaan (UNESCO)</strong> resmi mengakui Geopark Kebumen di Jawa Tengah dan Geopark Meratus di Kalimantan Selatan sebagai UNESCO Global Geopark (UGGp).</p>

    <p>Keputusan ini diambil dalam Sidang Dewan Eksekutif UNESCO ke-221 di Paris, Prancis, pada 2–17 April 2025 dan disepakati oleh 58 negara anggota. Sebelumnya, Geopark Kebumen dan Meratus telah masuk nominasi pada sidang Dewan Geopark Dunia pada September dan Desember 2024 lalu.</p>

    <p><strong>Bupati Kebumen Lilis Nuryani</strong> menyampaikan selamat atas pencapaian luar biasa ini yang merupakan hasil kolaborasi Pemerintah Kabupaten Kebumen bersama Badan Pengelola Geopark Kebumen. Ia menyebut pengakuan ini sebagai perjuangan panjang yang patut diapresiasi.</p>

    <p>“Kami ucapkan selamat. Ini merupakan buah perjuangan luar biasa yang patut diapresiasi. Cita-cita yang kita usung sejak lama kini akhirnya terwujud,” ujar Bupati pada Sabtu (18/4).</p>

    <p>Menurutnya, tantangan ke depan adalah mempertahankan status UGGp, karena mempertahankan lebih sulit daripada meraih. Ini harus menjadi titik awal semangat untuk terus memajukan Kebumen dari berbagai sektor wisata, budaya, hingga kearifan lokal.</p>

    <p>Bupati berharap status ini bisa berdampak langsung pada peningkatan kesejahteraan masyarakat. “Mari kita jaga dan lestarikan alam Kebumen. Pada akhirnya, semua ini untuk masyarakat,” tegasnya.</p>

    <p>Selain Indonesia, terdapat 14 geopark lain dari 11 negara berbeda yang juga mendapat pengakuan serupa, termasuk Tiongkok, Korea, Ekuador, Norwegia, Italia, dan Inggris. Dengan tambahan ini, Indonesia kini memiliki 12 geopark yang diakui UNESCO secara global.</p>

    <p><strong>General Manager Badan Pengelola Geopark Kebumen, Sigit Tri Prabowo</strong>, menyebut Geopark Kebumen sebagai “<em>The Mother of Earth</em>” karena memiliki keragaman geologi, hayati, dan budaya yang luar biasa.</p>

    <p>“Geopark Kebumen mencakup 22 dari 26 kecamatan. Ada situs Lava Bantal dan Rijang Merah di Desa Seboro, serta Watu Kelir yang menunjukkan pertemuan dua jenis batuan,” jelasnya.</p>

    <p>Selain geologi, geopark ini juga kaya akan flora dan fauna yang hidup di berbagai habitat alami. Tujuannya bukan sekadar melestarikan, tapi juga mendorong pertumbuhan ekonomi masyarakat lewat pariwisata berkelanjutan.</p>

    <p class="berita-source">Sumber: <a href="https://www.kebumenkab.go.id/index.php/web/news_detail/2/8014" target="_blank">kebumenkab.go.id</a></p>
</div>

@endsection

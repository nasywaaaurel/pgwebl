@extends('layout.template')

@section('content')

<style>
    body {
        background-color: #fff4e6; /* background full sama seperti navbar */
    }

    .kontak-wrapper {
        padding: 80px 20px;
        color: #2e1a47;
    }

    .kontak-wrapper h2 {
        font-weight: 700;
        text-align: center;
        margin-bottom: 50px;
        font-size: 2rem;
    }

    .kontak-item {
        display: flex;
        align-items: center;
        margin-bottom: 25px;
        max-width: 700px;
        margin-left: auto;
        margin-right: auto;
    }

    .kontak-icon {
        background-color: #4a67d6;
        color: white;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        font-size: 22px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 20px;
    }

    .kontak-text small {
        display: block;
        font-weight: bold;
        color: #555;
    }

    .kontak-text span {
        font-size: 1rem;
    }
</style>

<div class="kontak-wrapper">
    <h2>📞 Informasi Kontak</h2>

    <div class="kontak-item">
        <div class="kontak-icon">
            <i class="fas fa-phone-alt"></i>
        </div>
        <div class="kontak-text">
            <small>Telepon</small>
            <span>0823-2604-0806</span>
        </div>
    </div>

    <div class="kontak-item">
        <div class="kontak-icon">
            <i class="fas fa-envelope"></i>
        </div>
        <div class="kontak-text">
            <small>Email</small>
            <span>nasywaaureliayuandra@mail.ugm.ac.id</span>
        </div>
    </div>

    <div class="kontak-item">
        <div class="kontak-icon">
            <i class="fas fa-user"></i>
        </div>
        <div class="kontak-text">
            <small>Nama</small>
            <span>Nasywa Aurelia Yuandra</span>
        </div>
    </div>

    <div class="kontak-item">
        <div class="kontak-icon">
            <i class="fas fa-id-card"></i>
        </div>
        <div class="kontak-text">
            <small>NIM</small>
            <span>23/514952/SV/22444</span>
        </div>
    </div>

    <div class="kontak-item">
        <div class="kontak-icon">
            <i class="fas fa-university"></i>
        </div>
        <div class="kontak-text">
            <small>Universitas</small>
            <span>Universitas Gadjah Mada</span>
        </div>
    </div>
</div>

@endsection

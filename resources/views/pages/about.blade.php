@extends('layouts.main')

@section('title', 'Tentang Kami')

@section('content')

<div class="container">
  <div class="row mt-5">    
    <nav class="breadcrumb bg-white">
        <ul class="breadcrumb bg-white">
            <li class="nav-item">
                <a href="/" class="nav-links text-decoration-none text-dark">Home</a>
            </li>
            <li clas="breadcrumb-item">
                <a href="/about" class="nav-links text-decoration-none text-dark active font-weight-bold">About</a>
            </li>
        </ul>
    </nav>
</div>
</div>

    <div class="container">
        <div class="row mt-5">
            <div class="col-sm">
                <img src="{{ url('frontend/images/studentbg.jpg') }}" height="70%" alt="">
            </div>
            <div class="col-sm">
            <h3>Aduan<span>siswa</span></h3>
            <p>AduanSiswa adalah Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam doloribus eligendi molestiaseius, animi voluptatibus repellat 
            </p>
            <a href="/create/laporkan" class="btn btn-primary">Kirim laporkan</a>
            </div>
        </div>
    </div>
@endsection


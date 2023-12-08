@extends('layouts.app')

@section('content')
    <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class=""
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active"
                aria-current="true"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"
                class=""></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item ">
                <img src="{{ asset('img/gambar/1701835666.jpg') }}" class="img-fluid" alt="" width="100%"
                    style="max-height: 350px">
            </div>
            <div class="carousel-item active">
                <img src="{{ asset('img/gambar/1701835666.jpg') }}" class="img-fluid" alt="" width="100%"
                    style="max-height: 350px">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/gambar/1701835666.jpg') }}" class="img-fluid" alt="" width="100%"
                    style="max-height: 350px">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container my-5">
        <div class="row">
            @foreach ($allBerita as $item)
                <div class="col-lg-4 col-md-6 mb-3">
                    <div class="card" style="min-height: 460px">
                        <img src="{{ asset('img/gambar/' . $item->gambar) }}" class="bd-placeholder-img card-img-top"
                            alt="">
                        <div class="card-body">
                            <div class="badge text-bg-secondary rounded-pill mb-3">{{ $item->kategori->nama_kategori }}</div>
                            <div class="card-title h6 fw-bold">{{ $item->judul }}</div>
                            <p class="card-text">{!! Str::limit($item->isi, 100) !!}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="{{ route('detail', $item->id) }}" class="btn btn-md btn-outline-secondary">View</a>
                                <small class="text-body-secondary fw-bold">| {{ $item->user->name }}</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="row justify-content-between">
        <div class="col-md-6 mb-3">
            <div class="card">
                <div class="card-header">Berita</div>
                <div class="card-body">
                    <div class="fs-5 fw-bold">Jumlah Berita</div>
                    <p>1</p>
                    <div class="mt-3">
                        <a href="/berita" class="btn btn-sm btn-primary">Lihat</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Kategori Berita</div>
                <div class="card-body">
                    <div class="fs-5 fw-bold">Jumlah Kategori</div>
                    <p>1</p>
                    <div class="mt-3">
                        <a href="/kategori" class="btn btn-sm btn-primary">Lihat</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

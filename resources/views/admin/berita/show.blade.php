@extends('layouts.app')

@section('content')
    <div class="col-md-8 mx-auto">
        <article class="blog-post">
            <h2 class="display-5 mb-1">{{ $berita->judul }}</h2>
            <p class="blog-post-meta">{{ $berita->created_at->format('F j, Y') }} by <a
                    href="#">{{ $berita->user->name }}</a></p>
            <img src="{{ asset('img/gambar/' . $berita->gambar) }}" class="mb-3 bd-placeholder-img card-img-top"
                alt="">
            {!! $berita->isi !!}
        </article>

        <nav class="blog-pagination" aria-label="Pagination">
            <a class="btn btn-outline-primary rounded-pill" href="#">Older</a>
            <a class="btn btn-outline-secondary rounded-pill disabled" aria-disabled="true">Newer</a>
        </nav>

    </div>
@endsection

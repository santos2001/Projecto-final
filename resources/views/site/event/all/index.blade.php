@extends('layouts.merge.site')
@section('titulo', 'Eventos')
@section('content')
    <section class="rts-breadcrumb breadcrumb-height breadcumb-bg"
    style="background-image: url(/site/images/banner/home-page.jpg); background-position:top; background-size:cover;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('site.home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Eventos</li>
                        </ul>
                        <h2 class="section-title">Eventos</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="rts-notice pb-5 ">
        <div class="container">
            <div class="row gy-5 gy-lg-0 justify-content-md-center">
                
                @foreach ($events as $item)
                <!-- single item -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-cat-item">
                        <div class="cat-thumb">
                            <img src="/storage/{{ $item->path }}" alt="{{ $item->title }}">
                        </div>
                        <div class="cat-meta">
                            <div class="cat-title">
                                <a href="{!! url('/evento/' . urlencode($item->title)) !!}">{{ $item->title }}</a>
                            </div>
                            <div class="cat-link">
                                <a href="{!! url('/evento/' . urlencode($item->title)) !!}" class="cat-link-arrow">
                                    <i class="fa-sharp fa-regular fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            </div>
        </div>
    </section>

@endsection


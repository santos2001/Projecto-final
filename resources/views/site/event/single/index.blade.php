@extends('layouts.merge.site')
@section('titulo', 'Eventos ' . $events->title)
@section('content')
    <section class="rts-breadcrumb breadcrumb-height breadcumb-bg"
    style="background-image: url(/site/images/banner/home-page.jpg); background-position:top; background-size:cover;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('site.home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $events->title }}</li>
                        </ul>
                        <h2 class="section-title">{{ $events->title }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="rts-notice pb-5 ">
        <div class="container">
            <div class="row gy-5 gy-lg-0 justify-content-md-center">
                
                @foreach ($events as $item)
                <!-- single gallery item -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-gallery">
                        <a href="/storage/{{ $item->path }}" class="single-gallery__item">
                            <img src="/storage/{{ $item->path }}" alt="gallery">
                            <div class="single-gallery__icon">
                                <i class="fa-light fa-circle-plus"></i>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach

            </div>
        </div>
    </section>

@endsection

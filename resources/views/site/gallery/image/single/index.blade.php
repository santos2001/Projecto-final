@extends('layouts.merge.site')
@section('titulo', 'Galeria ' . $gallery->name)
@section('content')

    <section class="rts-breadcrumb breadcrumb-height breadcumb-bg"
        style="background-image: url(/site/images/banner/breadcrumb.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('site.gallery') }}">Galeria</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $gallery->name }}</li>
                        </ul>
                        <h2 class="section-title">{{ $gallery->name }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="rts-gallery rts-section-padding">
        <div class="container">

            <div class="gallery-area">
                <div class="row g-5">

                    @foreach ($images as $item)
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

            {{ $images->links() }}

        </div>
    </div>




@endsection
@section('CSS')

    <style>
        .pagination {
            display: flex;
            list-style: none;
            padding: 0;
            margin: 20px 0;
            justify-content: center;
        }

        .pagination .page-item {
            margin: 0 5px;
        }

        .pagination .page-link {
            display: block;
            padding: 8px 12px;
            color: #0B0B2D;
            background-color: #fff;
            border: 1px solid #dee2e6;
            border-radius: 4px;
            text-decoration: none;
            transition: background-color 0.3s, color 0.3s;
        }

        .pagination .page-link:hover {
            background-color: #0B0B2D;
            color: #fff;
        }

        .pagination .page-item.active .page-link {
            color: #fff;
            background-color: #0B0B2D;
            border-color: #0B0B2D;
        }

        .pagination .page-item.disabled .page-link {
            color: #6c757d;
            pointer-events: none;
            background-color: #f8f9fa;
            border-color: #dee2e6;
        }
    </style>
@endsection

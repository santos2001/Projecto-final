@extends('layouts.merge.site')
@section('titulo', 'Oradores')
@section('content')
    <section class="rts-breadcrumb breadcrumb-height breadcumb-bg"
        style="background-image: url(/site/images/banner/breadcrumb.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('site.home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Oradores</li>
                        </ul>
                        <h2 class="section-title">Oradores</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- program start -->
    <section class="rts-program rts-section-padding">
        <div class="container">

            <!-- program content -->
            <div class="row g-5 justify-content-sm-center justify-content-md-start">

                <!-- ITEM --->
                @foreach ($speakers as $row)
                    <div class="col-lg-4 col-md-6 col-sm-11">
                        <div class="rts-program-single">
                            <div class="rts-program-single__content">
                                <div class="program-image">
                                    <img src="/storage/{{ $row->photo }}" alt="{{ $row->name }}" />
                                </div>
                                <div class="content rt-flex">
                                    <a href="{{ route('site.speaker.show', urlencode($row->name)) }}"
                                        class="program-link">{{ $row->name }} <br>
                                        {{ $row->company }}
                                    </a>
                                </div>
                                <div class="rts-program-hover">
                                    <a href="{{ route('site.speaker.show', urlencode($row->name)) }}"
                                        class="program-link">{{ $row->name }}</a>
                                    <p>
                                        {{ $row->function }}
                                    </p>
                                    <a href="{{ route('site.speaker.show', urlencode($row->name)) }}"
                                        class="about-btn rts-nbg-btn btn-arrow rt-white before-white">Ver
                                        Mais
                                        <span><i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- ./END ITEM --->
            </div>
        </div>
    </section>
    <!-- program end -->







@endsection

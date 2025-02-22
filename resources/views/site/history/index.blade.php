@extends('layouts.merge.site')
@section('titulo', 'História')
@section('content')
    <section class="rts-breadcrumb breadcrumb-height breadcumb-bg"
    style="background-image: url(/site/images/banner/home-page.jpg); background-position:top; background-size:cover;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('site.home') }}">Quem Somos</a></li>
                            <li class="breadcrumb-item active" aria-current="page">História</li>
                        </ul>
                        <h2 class="section-title">História</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="rts-notice pb-5 ">
        <div class="container">
            <div class="row gy-5 gy-lg-0 justify-content-md-center">
                <div class="col-md-12 col-lg-12">
                   
                </div>

            </div>
        </div>
    </section>

@endsection


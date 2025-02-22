@extends('layouts.merge.site')
@section('titulo', 'Orador ' . $speaker->name)
@section('content')

    <section class="rts-breadcrumb breadcrumb-height breadcumb-bg"
        style="background-image: url(/site/images/banner/breadcrumb.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <ul class="breadcrumb">

                            <li class="breadcrumb-item"><a href="{{ route('site.speaker') }}">Oradores</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $speaker->name }}</li>
                        </ul>
                        <h2 class="section-title">{{ $speaker->name }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="rts-faculty-details  rts-section-padding">
        <div class="container">
            <div class="row justify-content-sm-center g-5">
                <div class="col-lg-4 col-md-10 col-sm-10">
                    <div class="faculty-member">
                        <div class="faculty-member__details rt-center ">
                            <div class="faculty-member__image">
                                <img src="/storage/{{ $speaker->photo }}" alt="{{ $speaker->name }}">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-10 col-sm-10">
                    <div class="member-info ">
                        <div class="member-info__details">
                            <div class="short-info ">
                                <span class="designation">{{ $speaker->function }} <br>
                                    {{ $speaker->company }}
                                </span>
                                <p class="description">
                                    {!! html_entity_decode($speaker->description) !!}
                                </p>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection


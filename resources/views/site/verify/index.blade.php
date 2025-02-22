@extends('layouts.merge.site')
@section('titulo', 'Verificação do Credenciamento')
@section('content')
    <div id="content" class="site-content">

        <div class="entry-banner">
            <div class="inner-page-banner">
                <div class="container">
                    <div class="entry-banner-content breadcrumbs-area">

                        <h1 class="entry-title">Verificação do Credenciamento</h1>
                    </div>
                </div>
            </div>
        </div>

        <div id="primary" class="content-area event-page-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-12 py-5">
                        <!-- hero sec start -->
                        <section id="home" class="hero-sec"
                            style="background-image: url(/site/images/banner/group.png)">


                            <div class="container">

                                <div class="row align-items-center">

                                    <div class="col-lg-12 col-md-12 py-5">

                                        <h2 class="mt-5 pt-5" >
                                            <hr>
                                            <b>Verificação do Credenciamento</b>
                                            <br>
                                            <h4>{{ $registration->name }}</h4>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- hero sec start -->


                        <section class="container">
                            <div class="col-12">

                                <div class="row mx-5 my-5 align-items-center">

                                    <div class="row align-items-center">
                                        <div class="col-12 col-md-6 col-lg-4 mb-2">
                                            <h5 class="mb-3">
                                                <b>Estado</b>
                                            </h5>
                                            <p class="text-dark">

                                                @if ($registration->status == 'RECEBIDO')
                                                    <b class="bg-primary p-2 rounded text-white">
                                                        {{ $registration->status }}
                                                    </b>
                                                @elseif ($registration->status == 'PAGO')
                                                    <b class="bg-warning p-2 rounded text-white">
                                                        {{ $registration->status }}
                                                    </b>
                                                @elseif ($registration->status == 'DUPLICADO')
                                                    <b class="bg-danger p-2 rounded text-white">
                                                        {{ $registration->status }}
                                                    </b>
                                                @elseif ($registration->status == 'EMITIDO')
                                                    <b class="bg-success p-2 rounded text-white">
                                                        {{ $registration->status }}
                                                    </b>
                                                @endif
                                            </p>
                                        </div>

                                        <div class="col-12 col-md-6 col-lg-4 mb-2">
                                            <h5 class="mb-1">
                                                <b>Código</b>
                                            </h5>
                                            <p class="text-dark">
                                                {{ $registration->code }}
                                            </p>
                                        </div>


                                        <div class="col-12 col-md-6 col-lg-4 mb-2">
                                            <h5 class="mb-1">
                                                <b>Empresa/Organização/Governo</b>
                                            </h5>
                                            <p class="text-dark text-justify">
                                                {{ $registration->company }}
                                            </p>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-4 mb-2">
                                            <h5 class="mb-1">
                                                <b>Função</b>
                                            </h5>
                                            <p class="text-dark text-justify">
                                                {{ $registration->function }}
                                            </p>
                                        </div>

                                    </div>

                                </div>
                            </div> <!-- /.col-12 -->
                        </section>
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection

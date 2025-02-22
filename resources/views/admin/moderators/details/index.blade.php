@extends('layouts.merge.dashboard')
@section('titulo', 'Detalhes do Moderador')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title">
                <a href="{{ route('admin.moderators.index') }}"><u>Listar Moderadores</u></a> > {{ $moderators->name }}
            </h2>
        </div>
    </div>
    <div class="card shadow">
        <div class="card-body">

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2 class="h3 m-4 page-title">{{ $moderators->name }}</h2>
                        <div class="row m-5 align-items-center">



                            <div class="col-12 col-md-6 col-lg-6 mb-2">
                                <h5 class="mb-1">
                                    <b>Cargo/Função:</b>
                                </h5>
                                <p class="text-dark text-justify">{!! html_entity_decode($moderators->function) !!}</p>

                            </div>
                            <div class="col-12 col-md-6 col-lg-6 mb-2">
                                <h5 class="mb-1">
                                    <b>Empresa/Governo/Instituição:</b>
                                </h5>
                                <p class="text-dark text-justify">{!! html_entity_decode($moderators->company) !!}</p>

                            </div>


                            <div class="col-md-12 mb-2">
                                <h5 class="mb-1">
                                    <b>Descrição:</b>
                                </h5>
                                <p class="text-dark text-justify">{!! html_entity_decode($moderators->description) !!}</p>

                            </div>

                            <div class="col-12">
                                <div class="row align-items-center my-4">
                                    <div class="col">
                                        <h2 class="page-title">Foto</h2>
                                    </div>

                                </div>
                                <div class="card-deck mb-4">

                                    <div class="col-12 col-md-6 col-lg-6">
                                        <img src="/storage/{{ $moderators->photo }}" width="100%">

                                    </div> <!-- .card -->
                                </div> <!-- .card-deck -->
                            </div>


                            <div class="col-12 mb-2">
                                <hr>
                                <p class="mb-1 text-dark"><b>Data de Cadastro:</b> {{ $moderators->created_at }}
                                </p>
                                <p class="mb-1 text-dark"><b>Última Actualização:</b> {{ $moderators->updated_at }}
                                </p>

                            </div>

                        </div>


                    </div> <!-- /.col-12 -->
                </div> <!-- .row -->
            </div> <!-- .container-fluid -->


        </div>
    </div>




@endsection

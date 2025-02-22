@extends('layouts.merge.dashboard')
@section('titulo', 'Detalhes da Empresa ' . $company->company)

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title">
                <a href="{{ route('admin.company.index') }}"><u>Lista de Empresas</u></a> >
                {{ $company->company }}
            </h2>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">

            <!-- card-->
            <div class="card shadow col-12 col-md-12 col-lg-12">
                <div class="card-body">


                    <div class="row align-items-center my-4">
                        <div class="col">
                            <h4 class="page-title">{{ $company->company }} <br>
                                <small><i>Empresa/Organização/Ministério</i></small>
                            </h4>
                        </div>
                        <div class="col-auto">
                            <a type="button" class="btn btn-lg btn-primary text-white"
                                href="{{ route('admin.company.edit', $company->id) }}">
                                <span class="fe fe-plus fe-16 mr-3"></span>Editar
                            </a>

                        </div>
                    </div>

                    <div class="col-12 mt-5 mb-5">

                        <div class="row align-items-center">
                            <div class="col-12 col-md-6 col-lg-4 mb-2">
                                <h5 class="mb-1">
                                    <b>Estado</b>
                                </h5>
                                <p class="text-dark">
                                    @if ($company->status == 'RECEBIDO')
                                        <b class="bg-primary p-2 rounded text-white">
                                            {{ $company->status }}
                                        </b>
                                    @elseif ($company->status == 'DUPLICADO')
                                        <b class="bg-danger p-2 rounded text-white">
                                            {{ $company->status }}
                                        </b>
                                    @elseif ($company->status == 'PAGO' || $company->status == 'APROVADO')
                                        <b class="bg-success p-2 rounded text-white">
                                            {{ $company->status }}
                                        </b>
                                    @elseif ($company->status == 'CONTACTO REALIZADO')
                                        <b class="bg-dark p-2 rounded text-white">
                                            {{ $company->status }}
                                        </b>
                                    @endif


                                </p>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4 mb-2">
                                <h5 class="mb-1">
                                    <b>Plafond</b>
                                </h5>
                                <p class="text-dark text-justify">
                                    {{ $company->plafond }}
                                </p>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4 mb-2">
                                <h5 class="mb-1">
                                    <b>NIF</b>
                                </h5>
                                <p class="text-dark">
                                    {{ $company->nif }}
                                </p>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4 mb-2">
                                <h5 class="mb-1">
                                    <b>Código</b>
                                </h5>
                                <p class="text-dark">
                                    {{ $company->code }}
                                </p>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 mb-2">
                                <h5 class="mb-1">
                                    <b>Telefone</b>
                                </h5>
                                <p class="text-dark text-justify">
                                    {{ $company->phone }}
                                </p>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 mb-2">
                                <h5 class="mb-1">
                                    <b>Email</b>
                                </h5>
                                <p class="text-dark text-justify">
                                    {{ $company->email }}
                                </p>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 mb-2">
                                <h5 class="mb-1">
                                    <b>Ramo de Actuação</b>
                                </h5>
                                <p class="text-dark text-justify">
                                    {{ $company->lineBusiness }}
                                </p>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 mb-2">
                                <h5 class="mb-1">
                                    <b>Website</b>
                                </h5>
                                <p class="text-dark text-justify">
                                    {{ $company->Website }}
                                </p>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4 mb-2">
                                <h5 class="mb-1">
                                    <b>Instituição/Escola/Governo</b>
                                </h5>
                                <p class="text-dark text-justify">
                                    {{ $company->company }}
                                </p>
                            </div>


                            <div class="col-12 col-md-6 col-lg-6 mb-5">
                                <h5 class="mb-2">
                                    <b>Credencial Emitido</b>
                                </h5>
                                @if ($company->issued == 'Sim')
                                    <b class="bg-primary p-2 rounded text-white">
                                        {{ $company->issued }}
                                    </b>
                                @else
                                    <b class="bg-danger p-2 rounded text-white">
                                        {{ $company->issued }}
                                    </b>
                                @endif
                            </div>

                            <div class="col-12 mb-2">
                                <h5 class="mb-3">
                                    <b>Logotipo</b>
                                </h5>

                                <div class="col-12 col-md-6 col-lg-4">

                                    <img src="/storage/{{ $company->logo }}" width="100%">
                                </div>
                            </div>
                        </div>



                        <div class="col-12 mt-3">
                            <hr>
                            <p class="mb-1 text-dark"><b>Data de Cadastro</b>
                                {{ $company->created_at }}
                            </p>
                            <p class="mb-1 text-dark"><b>Última Actualização</b>
                                {{ $company->updated_at }}
                            </p>

                        </div>

                    </div>
                </div>
            </div>



        </div>

    </div> <!-- .container-fluid -->
@endsection
@section('JS')
    <script>
        $('#dataTable-2').DataTable({
            autoWidth: true,
            "lengthMenu": [
                [8, 16, 32, -1],
                [8, 16, 32, "All"]
            ],
            "order": [
                [0, 'desc']
            ]
        });
    </script>
@endsection

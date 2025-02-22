@extends('layouts.merge.dashboard')
@section('titulo', 'Editar a Empresa '.$company->company)

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title">
                <a href="{{ route('admin.company.show', $company->id) }}"><u> {{ $company->company }}</u></a>
            </h2>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action='{{ route('admin.company.update', $company->id) }}' method="POST"
                enctype="multipart/form-data" class="mx-4">
                @csrf
                @method('PUT')

                <h4 class="my-5">
                    <b>Dados da Empresa</b>
                    <hr>
                </h4>

                @include('forms._formCompany.index')



                <div class="col-12 col-md-12 col-lg-12 mt-4">
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="form-control" required>

                            @if (isset($company->status))
                                <option value="{{ $company->status }}" class="text-primary h6" selected>
                                    {{ $company->status }}
                                </option>
                            @else
                                <option disabled selected>Selecione o Status</option>
                            @endif

                            <option value="PAGO">PAGO</option>
                            <option value="APROVADO">APROVADO</option>
                            <option value="CONTACTO REALIZADO">CONTACTO REALIZADO</option>
                            <option value="RECEBIDO">RECEBIDO</option>
                            <option value="DUPLICADO">DUPLICADO</option>
                        </select>
                    </div>
                </div>

                <div class="col-12 col-md-12 col-lg-12 mt-4">
                    <div class="form-group">
                        <label for="issued">Credencial Emitido</label>
                        <select name="issued" id="issued" class="form-control" required>

                            @if (isset($company->issued))
                                <option value="{{ $company->issued }}" class="text-primary h6" selected>
                                    {{ $company->issued }}
                                </option>
                            @else
                                <option disabled selected>Selecione uma Opção</option>
                            @endif

                            <option value="Sim">Sim</option>
                            <option value="Não">Não</option>

                        </select>
                    </div>
                </div>

                <div class="col-md-12 mt-3">
                    <div class="form-group text-center">
                        <button type="submit" class="btn px-5 col-md-4 btn-primary">
                            Salvar alterações
                            <span class="fe fe-chevron-right fe-16"></span>
                        </button>

                    </div>
                </div>
            </form>

        </div>
    </div>
@endsection

@extends('layouts.merge.dashboard')
@section('titulo', 'Lista de Empresas')

@section('content')


    <div class="card mb-2">
        <div class="card-body">

            <div class="row justify-content-between">
                <div class="col-12 col-md-6 col-lg-6">
                    <h2 class="h5 page-title">
                        Lista de Empresas
                    </h2>
                </div>
                <div class="col-12 col-md-6 col-lg-6 text-right">
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        <i class="fa fa-file-pdf-o text-white"></i>Imprimir Lista
                    </a>
                </div>
            </div>

        </div>
    </div>


    <div class="card shadow mb-4">

        <div class="card-body table-responsive">
            <table class="table datatables table-hover table-bordered" id="dataTable-1">
                <thead class="bg-primary">
                    <tr class="text-center">
                        <th>#</th>
                        <th>CÓDIGO</th>

                        <th>EMPRESA/ORGANIZAÇÃO/MINISTÉRIO</th>
                        <th>PLAFOND</th>
                        <th>STATUS</th>
                        <th>STATUS DO CREDENCIAL</th>
                        <th>ACÇÕES</th>
                    </tr>
                </thead>
                <tbody class="bg-white">

                    @foreach ($companies as $item)
                        <tr class="text-center text-dark">
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->code }}</td>

                            <td>{{ $item->company }} </td>
                            <td>

                                {{ $item->plafond }}
                            </td>
                            <td>
                                @if ($item->status == 'RECEBIDO')
                                    <b class="bg-primary p-2 rounded text-white">
                                        {{ $item->status }}
                                    </b>
                                @elseif ($item->status == 'DUPLICADO')
                                    <b class="bg-danger p-2 rounded text-white">
                                        {{ $item->status }}
                                    </b>
                                @elseif ($item->status == 'PAGO' || $item->status == 'APROVADO')
                                    <b class="bg-success p-2 rounded text-white">
                                        {{ $item->status }}
                                    </b>
                                @elseif ($item->status == 'CONTACTO REALIZADO')
                                    <b class="bg-dark p-2 rounded text-white">
                                        {{ $item->status }}
                                    </b>
                                @endif

                            </td>
                            <td>
                                @if ($item->issued == 'Sim')
                                    <b class="bg-success p-2 rounded text-white">
                                        {{ $item->issued }}
                                    </b>
                                @else
                                    <b class="bg-primary p-2 rounded text-white">
                                        {{ $item->issued }}
                                    </b>
                                @endif
                            </td>

                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-primary btn-sm dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="fa fa-clone fa-sm" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                        <a href='{{ route('admin.company.show', $item->id) }}'
                                            class="dropdown-item">Detalhes</a>
                                        <a href='{{ route('admin.company.edit', $item->id) }}'
                                            class="dropdown-item">Editar</a>

                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

    @include('extra.modal.company.index')

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

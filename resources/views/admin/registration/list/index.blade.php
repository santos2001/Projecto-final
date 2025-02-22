@extends('layouts.merge.dashboard')
@section('titulo', 'Lista de Participantes')

@section('content')
    <div class="card mb-2">
        <div class="card-body">

            <div class="row justify-content-between">
                <div class="col-12 col-md-6 col-lg-6">
                    <h2 class="h5 page-title">
                        Lista de Participantes
                    </h2>
                </div>


                <div class="col-12 col-md-6 col-lg-6 text-right">
                    <a href="{{ route('admin.registration.create') }}" class="btn btn-primary" >
                        <i class="fa fa-file-pdf-o text-white"></i>Inserir Participantes
                    </a>

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
                        <th>NOME</th>
                        <th>EMPRESA</th>
                        <th>STATUS INSCRIÇÃO</th>
                        <th>NÍVEL</th>
                        <th>ACÇÕES</th>
                    </tr>
                </thead>
                <tbody class="bg-white">

                    @foreach ($registrations as $item)
                        <tr class="text-center text-dark">
                            <td>{{ $item->id }}</td>

                            <td>{{ $item->code }}</td>

                            <td>{{ $item->name }} </td>
                            <td>{{ $item->company }}
                                <br>
                                <small>"{{ $item->function }}"</small>
                            </td>

                            <td>
                                @if ($item->status == 'RECEBIDO')
                                    <b class="bg-primary p-2 rounded text-white">
                                        {{ $item->status }}
                                    </b>
                                @elseif ($item->status == 'PAGO')
                                    <b class="bg-success p-2 rounded text-white">
                                        {{ $item->status }}
                                    </b>
                                @elseif ($item->status == 'DUPLICADO')
                                    <b class="bg-danger p-2 rounded text-white">
                                        {{ $item->status }}
                                    </b>
                                @elseif ($item->status == 'EMITIDO')
                                    <b class="bg-warning p-2 rounded text-white">
                                        {{ $item->status }}-{{ $item->printed_at }}
                                    </b>
                                @endif
                            </td>

                            <td>{{ $item->level }} </td>

                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-primary btn-sm dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="fa fa-clone fa-sm" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                        <a href='{{ route('admin.registration.show', $item->id) }}'
                                            class="dropdown-item">Detalhes</a>

                                        @if ($item->status == 'EMITIDO' || $item->status == 'PAGO')
                                            <a href='{{ route('admin.credencial.guest.print', $item->code) }}'
                                                class="dropdown-item" target='_blank'>Imprimir Credencial</a>
                                        @endif

                                        <a href='{{ route('admin.registration.edit', $item->id) }}'
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




    @include('extra.modal.participant.index')

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

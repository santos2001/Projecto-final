@extends('layouts.merge.dashboard')
@section('titulo', 'Sobre a ANPERE')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title">
                <a href="{{ route('admin.about.edit', $about->id) }}"><u>Editar Sobre a ANPERE</u></a> >
                
            </h2>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">

            <!-- card-->
            <div class="card shadow col-12 col-md-12 col-lg-12">
                <div class="card-body">


                    <div class="row align-items-center my-4">
                        
                        <div class="col-auto">
                           
                            <p class="text-justify">
                                {!!html_entity_decode($about->title)!!}
                            </p>


                        </div>
                    </div>

                    <div class="col-12 mt-5 mb-5">

                        <div class="col-12 mt-3">
                            <hr>
                            <p class="mb-1 text-dark"><b>Data de Cadastro</b>
                                {{ $about->created_at }}
                            </p>
                            <p class="mb-1 text-dark"><b>Última Actualização</b>
                                {{ $about->updated_at }}
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

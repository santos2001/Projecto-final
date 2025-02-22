@extends('layouts.merge.site')
@section('titulo', 'Inscrição de Participantes')
@section('content')
    <section class="rts-breadcrumb breadcrumb-height breadcumb-bg"
        style="background-image: url(/site/images/banner/breadcrumb.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('site.home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Inscrição</li>
                        </ul>
                        <h2 class="section-title">Inscrição de Participantes</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <div class="rts-page-content rts-section-padding">
        <div class="container">
            <div class="row g-5">
                <div class="col-12">
                    <p>O Bilhete de Acesso tem o Preço de 100.000,00kz (Cem mil kwanzas), pagos por RUPE (Referência única de Pagamento ao Estado)</p>
                </div>
                <div class="col-lg-12">
                    <div class="rts-ap-section">
                        <div class="rts-application-form">


                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{ route('site.registration.store') }}" enctype="multipart/form-data"
                                method="POST">
                                @csrf
                                @method('POST')
                                @include('forms._formRegistration.index')


                                <button type="submit" class="rts-theme-btn primary with-arrow">Submeter
                                    <span>
                                        <i class="fa-thin fa-arrow-right"></i></span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection
@section('JS')

    <script>
        var qnt = document.getElementById('qnt');


        const type = document.getElementById('type');

        function category(valor) {

            if (valor === "Individual") {


                document.getElementById('qnt').disabled = true;
                document.getElementById('qnt').style.display = "none";
                document.getElementById('qnt').value = 1;

            } else if (valor === "Empresa") {

                document.getElementById('qnt').disabled = false;
                document.getElementById('qnt').style.display = "block";
            }
        }
    </script>
    @if (session('create'))
        @php

            $data = session('create');
        @endphp
        <input id="codeT" value="{{ $data['codetype'] }}" hidden>
        <input id="idCardT" value="{{ $data['idCardtype'] }}" hidden>

        <script>
            var code = document.getElementById("codeT").value;
            var idCard = document.getElementById("idCardT").value;

            Swal.fire({
                icon: 'success',
                title: 'Submetido com sucesso!',
                text: "Para dar continuidade ao processo submetido, clique no botão Pagamento e Comprovativo.",
                showConfirmButton: true,
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#999',
                cancelButtonText: 'Voltar',
                confirmButtonText: 'Pagamento'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.open("http://" + window.location.host + "/participantes/invoice/" + code,
                        '_blank');

                }
            })
        </script>
    @endif
@endsection

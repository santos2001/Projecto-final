@extends('layouts.merge.site')
@section('titulo', 'INSCRIÇÃO PARA EMPRESAS')
@section('content')

    <div id="content" class="site-content">
        <div class="entry-banner">
            <div class="inner-page-banner">
                <div class="container">
                    <div class="entry-banner-content breadcrumbs-area">
                        <h1 class="entry-title">INSCRIÇÃO PARA EMPRESAS</h1>
                    </div>
                </div>
            </div>
        </div>

        <div id="primary" class="content-area event-page-area">
            <div class="container">

                <div class="row my-5 py-5">
                    <div class="col-12">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('site.company.store') }}" enctype="multipart/form-data" method="POST"
                            class="popup-form pb-5 mb-5">
                            @method('POST')
                            @csrf



                            <h4 class="my-5">
                                <b>Escolha do Plafond</b><br>
                                <hr>
                            </h4>
                            <div class="row">

                                <div class="col-12 col-md-6 col-lg-4 p-3">
                                    <div class="card h-100 cardcolor" style="border-radius:15px;">
                                        <div class="card-body m-5">
                                            <input checked class="form-check-input" type="radio" name="plafond"
                                                onchange="toggleCard(this)" id="silver" value="SILVER">
                                            <label class="form-check-label" for="silver">
                                                <span style="color: #484848;" class="card-lable"> <b>SILVER </b></span>
                                                <br>
                                                <h2 class="price-pacage">
                                                    5.000.000,00 <small>AOA</small> <span class="regular-price"></span>
                                                </h2>


                                                <div class="card-content text-dark">
                                                    <small>
                                                        <i class="fa fa-check-circle"></i>
                                                        Acesso ao evento para 10 convidados;
                                                    </small><br>
                                                    <small>
                                                        <i class="fa fa-check-circle"></i>
                                                        Almoço sentado para 5 convidados;<br>
                                                    </small>
                                                    <small>
                                                        <i class="fa fa-check-circle"></i>
                                                        Logotipo presente no local do evento;<br>
                                                    </small>
                                                    <small>
                                                        <i class="fa fa-check-circle"></i>
                                                        Menção à marca na abertura do evento.<br>
                                                    </small>


                                                </div>

                                            </label>
                                        </div>


                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-lg-4 p-3">
                                    <div class="card h-100 cardcolor" style="border-radius:15px;">
                                        <div class="card-body m-5">
                                            <input checked class="form-check-input" type="radio" name="plafond"
                                                onchange="toggleCard(this)" id="gold" value="GOLD">
                                            <label class="form-check-label" for="gold">
                                                <span style="color: #b6b61d;" class="card-lable"> <b>GOLD </b></span>
                                                <br>
                                                <h2 class="price-pacage">
                                                    25.000.000,00 <small>AOA</small> <span class="regular-price"></span>
                                                </h2>


                                                <div class="card-content text-dark">
                                                    <small>
                                                        <i class="fa fa-check-circle"></i>
                                                        Acesso ao evento para 30 convidados;

                                                    </small><br>
                                                    <small>
                                                        <i class="fa fa-check-circle"></i>
                                                        Almoço sentado para 10 convidados mais 5 elementos do staff;<br>
                                                    </small>
                                                    <small>
                                                        <i class="fa fa-check-circle"></i>
                                                        Presença na comunicação estática e digital;<br>
                                                    </small>
                                                    <small>
                                                        <i class="fa fa-check-circle"></i>
                                                        Menção à marca na abertura do evento;
                                                        <br>
                                                    </small>

                                                </div>

                                            </label>
                                        </div>


                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 p-3">
                                    <div class="card h-100 cardcolor" style="border-radius:15px;">
                                        <div class="card-body m-5">
                                            <input checked class="form-check-input" type="radio" name="plafond"
                                                onchange="toggleCard(this)" id="platinium" value="PLATINIUM">
                                            <label class="form-check-label" for="platinium">
                                                <span style="color: #fc8c20;" class="card-lable"> <b>PLATINIUM</b></span>
                                                <br>
                                                <h2 class="price-pacage">
                                                    60.000.000,00 <small>AOA</small> <span class="regular-price"></span>
                                                </h2>


                                                <div class="card-content text-dark">
                                                    <small>
                                                        <i class="fa fa-check-circle"></i>
                                                        Acesso global a 30 convidados;
                                                    </small><br>
                                                    <small>
                                                        <i class="fa fa-check-circle"></i>
                                                        Almoço sentado para todos os convidados mais 10 elementos do staff;
                                                        <br>
                                                    </small>
                                                    <small>
                                                        <i class="fa fa-check-circle"></i>
                                                        Presença destacada na comunicação estática e digital;
                                                        <br>
                                                    </small>
                                                    <small>
                                                        <i class="fa fa-check-circle"></i>
                                                        Menção ao patrocinador na abertura do evento bem como no
                                                        encerramento;

                                                        <br>
                                                    </small>
                                                    <small>
                                                        <i class="fa fa-check-circle"></i>
                                                        Possibilidade de ter conteúdos digitais específicos da marca durante
                                                        o almoço;
                                                        <br>
                                                    </small>

                                                </div>

                                            </label>
                                        </div>


                                    </div>
                                </div>



                            </div>
                            <h4 class="my-5">
                                <b>Dados da Empresa</b>
                                <hr>
                            </h4>

                            @include('forms._formCompany.index')

                            <button type="submit" class="btn-fill size-lg border-radius-5 color-primary gust">
                                Submeter
                            </button>
                        </form>
                    </div>


                </div>
            </div>
        </div>
    </div>

@endsection

@section('CSS')
    <style>
        .cardcolor:hover {

            box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);

        }


        .modal-xl {
            max-width: 60%;
            width: 60%;
        }

        .fa.fa-check-circle {
            color: green;
        }

        small {
            font-size: 15px;
        }

        input[type=text],
        input[type=number],
        input[type=date],
        input[type=email],
        input[type=file],
        select,
        textarea {
            height: 55px !important;
            width: 100% !important;
            background-color: rgba(147, 146, 150, 0.1) !important;
            font-size: 14px !important;
            font-style: italic !important;
            font-weight: 500 !important;
            margin-bottom: 15px !important;
            border-radius: 0 !important;
            border: none !important;
            border-bottom: 2px solid #9392961a !important;
        }


        input:hover,
        select:hover,
        textarea:hover {
            border-bottom: 4px solid #9392961a  !important;
        }

        input::placeholder,
        select::placeholder,
        textarea::placeholder {
            font-size: 12px !important;
            color: rgb(147, 146, 150) !important;
        }
    </style>


@endsection
@section('JS')


    @if (session('create'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Submetido com sucesso!',
                text: "Aguarde o Contacto. Após a confirmação, compartilharemos os detalhes para o pagamento por transferência bancária ou depósito.",
                showConfirmButton: true,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'ok'
            })
        </script>
    @endif


    @if (session('errorExhibitor'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Não existe mais vagas para o plafond selecionado, escolha outro',
                showConfirmButton: true
            })
        </script>
    @endif


@endsection

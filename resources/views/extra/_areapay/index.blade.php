{{-- Informações do Pagamento --}}
@if ($payment)
    <div class="card-header mb-4">
        <div class="card-head-row">
            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="page-title">

                        <h4> Informações do Pagamento</h4>
                    </div>
                </div>
                <div class="col-12 col-md-4 text-right">

                    <a href="{{ route('site.registration.invoice', $registration->code) }}" target="_blank">
                        <b>
                            <i class="fa fa-download"></i> Baixar Documento da RUPE
                        </b>
                    </a>
                </div>
            </div>

        </div>
    </div>

    <div class="col-12">
        <div class="row">
            <div class="col-md-6 border border-dark mx-auto px-5 py-3 text-center">
                <b>PAGAMENTO AO ESTADO</b> <br>
                <b>Referência: {!! chunk_split($payment['numeroRUPE'], 4, ' ') !!}</b> <br>
                <b>Montante: {!! number_format($payment['itemImpostoDC'][0]['itemImposto'][0]['valorItemDC'], 2, ',', '.') !!} Kz
                </b>
                <br><br>
                <small><i>Pagamento disponível até {{ date('d/m/Y', strtotime($payment['dtVencimento'])) }}</i></small>
            </div>
        </div>
        <div class="row mt-5">


            <div class="col-md-4">
                <p class="text-dark">
                    <b>Estado de Pagamento da RUPE</b><br>
                    @if ($payment['sitDC'] == 'E')
                        <span class="badge bg-info p-2 text-white">
                            {{ $payment['sitDescr'] }}
                        </span>
                    @elseif ($payment['sitDC'] == 'P')
                        <span class="badge bg-success p-2 text-white">
                            {{ $payment['sitDescr'] }}
                        </span>
                    @else
                        <span class="badge bg-warning p-2 text-white">
                            {{ $payment['sitDescr'] }}
                        </span>
                    @endif

                </p>
            </div>
            <div class="col-md-4">
                <p class="text-dark">
                    <b>Forma de Pagamento</b><br>
                    <small>PAGAMENTO AO ESTADO</small>
                </p>
            </div>
            <div class="col-md-4">
                <p class="text-dark">
                    <b>NIF da Entidade de Cobrança</b><br>
                    <small> {{ $payment['nif'] }}</small>
                </p>
            </div>
            <div class="col-md-4">
                <p class="text-dark">
                    <b>Entidade de Cobrança</b><br>
                    <small>{{ $payment['nomeContribuinte'] }}</small>
                </p>
            </div>

            <div class="col-md-4">
                <p class="text-dark">
                    <b>Data de Criação da Referência</b><br>
                    <small> {{ date('d/m/Y', strtotime($payment['dtReferencia'])) }}</small>
                </p>
            </div>
            <div class="col-md-4">
                <p class="text-dark">
                    <b>Data de Expiração da Referência</b><br>
                    <small> {{ date('d/m/Y', strtotime($payment['dtVencimento'])) }}</small>
                </p>
            </div>


        </div>

    </div>
@else
    <div class="col-12 mt-5 mb-5">
        <h3 class="text-danger text-center">
            <b>Infelizmente não foi possível gerar a RUPE, o serviço de pagamento do
                Ministério das Finanças esta indisponível.

                Inicie um
                novo registo de empresa daqui a 1hora.
            </b>
        </h3>
    </div>

@endif

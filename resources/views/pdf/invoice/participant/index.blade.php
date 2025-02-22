<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="site/PDFRUPE/bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Documento de Pagamento-{{ $registration->code }}</title>

    <style>
        .watermark {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('site/images/brand/institucional/infosi.png');
            /* Caminho da imagem */
            background-size: 60%;
            /* Ajuste o tamanho */
            background-position: center;
            background-repeat: no-repeat;
            opacity: 0.1;
            /* Transparência */
            z-index: -1;
            /* Fica por trás do conteúdo */
        }

        #footer {
            padding-top: 10px;
            padding-bottom: 0px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .pylarge {
            padding: 0.2px 0:
        }

        * {
            font-size: 10;
        }
    </style>
</head>

<body>
    <div class="watermark"></div>
    <header class="col-12 row">



        <small class="text-left mt-2">
            <img src="site/images/logo/colored.png" alt="" width="200px">

            <br><br>
            Nome: {{ $registration->name }} <br>
            Número de Identificação Fiscal (NIF): {{ $registration->idCard }} <br>
            Empresa/Organização/Ministério: {{ $registration->company }} <br>

        </small>

    </header>
    <section class="col-12 mt-4 my-4">
        <p class="text-center">
            <b>Documento de Pagamento Nº </b>{{ $registration->code }} |
            <b> Data:</b> {{ $registration->created_at }}

        </p>
        <hr class="pylarge bg-dark">
        <table class="table table-striped">
            <thead>
                <tr class="text-center">

                    <th>PRODUTO</th>
                    <th>PREÇO UNITÁRIO</th>
                    <th>QNT</th>
                    <th>TOTAL GERAL</th>

                </tr>
            </thead>
            <tbody>
                <tr class="text-center">
                    <td>
                        Credencial de Acesso
                    </td>
                    <td>100.000,00Kz</td>
                    <td>{{ $registration->quantity }}</td>

                    <td>
                        {!! number_format($payment['itemImpostoDC'][0]['itemImposto'][0]['valorItemDC'], 2, ',', '.') !!} Kz
                    </td>

                </tr>

            </tbody>

        </table>

    </section>
    <section>
        <p>
            <b> PASSO À PASSO PARA O PAGAMENTO:</b>
            <br>

            <br>

            <b>1. Escolher o Método de Pagamento</b><br>
            <small>A RUPE pode ser paga por vários meios:</small>
        <ul>

            <li><b>Multicaixa:</b> Utiliza caixas automáticos que suportem pagamentos ao Estado.</li>
            <li><b>Internet Banking:</b> Algumas plataformas bancárias permitem o pagamento de RUPE.</li>
        </ul>


        <b>2. Efetuar o Pagamento</b><br>

        <b>Pagamento via Multicaixa:</b>
        <ol>
            <li>Inserir o cartão no terminal Multicaixa.</li>
            <li>Selecionar a opção “Pagamentos”.</li>
            <li>Escolher “Pagamento ao Estado” ou equivalente.</li>
            <li>Inserir a referência da RUPE fornecida.</li>
            <li>Confirmar o valor e concluir o pagamento.</li>
        </ol>

        <b>Pagamento via Internet Banking:</b>
        <ol>
            <li>Aceder ao Internet Banking do teu banco</li>
            <li>Selecionar “Pagamento ao Estado”</li>
            <li>Introduzir a referência da RUPE</li>
            <li>Confirmar o valor e pagar</li>
        </ol>





        </p>
    </section>

    <footer class="col-12 text-center" id="footer">


        <div class="col-8 text-left">
            <table class="table table-striped">

                <tr>
                    <th>Forma de Pagamento:</th>
                    <td class="text-right">
                        <h5>Pagamento ao Estado</h5>
                    </td>
                </tr>
                <tr>
                    <th>Referência a Pagar:</th>
                    <td class="text-right">
                        <h5>{!! chunk_split($payment['numeroRUPE'], 4, ' ') !!}</h5>
                    </td>
                </tr>
                <tr>
                    <th>Pagamento disponível até:</th>
                    <td class="text-right">
                        <h5>{{ date('d/m/Y', strtotime($payment['dtVencimento'])) }}</h5>
                    </td>
                </tr>


            </table>

            <hr class="pylarge bg-dark">
            <table class="table table-striped">
                <tr>
                    <th>
                        <h4>Montante:</h4>
                    </th>
                    <td>
                        <h4 class="text-right">
                            {!! number_format($payment['itemImpostoDC'][0]['itemImposto'][0]['valorItemDC'], 2, ',', '.') !!} Kz
                        </h4>
                    </td>
                </tr>


            </table>

        </div>


        <small class="text-left text-dark">
            Documento Processado por Computador. <br>
            OBS: O Pagamento deve ser efectuado via RUPE, no prazo de trinta dias (30 dias).
        </small>



    </footer>

</body>

</html>

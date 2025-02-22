<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Lista de Empresas - {{ date('d/m/Y') }}</title>
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif !important;
        }

        th,
        td {
            font-size: 14px;
        }
    </style>
</head>

<body>

    <header class="col-12 mt-2">

        <img src="site/images/logo/colored.png" class="mb-5 pb-5" width="300">


        <h2 class="text-center">Lista de Empresas</h2>
        <p>
            @if ($checkbox['status'] != 'TODAS')
                <b> Origem:</b> {{ $checkbox['status'] }}<br>
            @endif


            <b>Data:</b> {{ date('d/m/Y') }}
            <br>
            <b>Total de Empresas:</b> {!! count($companies) !!}
        </p>
    </header>

    <section class="container-fluid">
        <div class="row">

            <table class="table table-striped">
                <thead>
                    <tr class="text-left">
                        <td>#</td>
                        @isset($checkbox['plafond'])
                            <th>PLAFOND</th>
                        @endisset
                        @isset($checkbox['code'])
                            <th>ID</th>
                        @endisset
                        @isset($checkbox['nif'])
                            <th>NIF</th>
                        @endisset
                        @isset($checkbox['company'])
                            <th>EMPRESA/ORG/MINISTÉRIO</th>
                        @endisset
                        @isset($checkbox['phone'])
                            <th>TELEFONE</th>
                        @endisset
                        @isset($checkbox['email'])
                            <th>EMAIL</th>
                        @endisset

                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($companies as $item)
                        <tr class="text-left text-dark">
                            <td>{{ $i++ }}</td>
                            @isset($checkbox['plafond'])
                                <td>{{ $item->plafond }} </td>
                            @endisset
                            @isset($checkbox['code'])
                                <td>{{ $item->code }} </td>
                            @endisset

                            @isset($checkbox['nif'])
                                <td>{{ $item->nif }}</td>
                            @endisset
                            @isset($checkbox['company'])
                                <td>{{ $item->company }}</td>
                            @endisset
                            @isset($checkbox['phone'])
                                <td>{{ $item->phone }}</td>
                            @endisset
                            @isset($checkbox['email'])
                                <td>{{ $item->email }}</td>
                            @endisset


                        </tr>
                    @endforeach

                </tbody>
            </table>

        </div>

    </section>


</body>

</html>

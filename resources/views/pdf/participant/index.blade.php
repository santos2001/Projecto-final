<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Lista de Participantes - {{ date('d/m/Y') }}</title>
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

    <header class="col-12 mt-2 mb-5">

        <img src="site/images/logo/colored.png" class="mb-5 pb-5" width="300">


        <h2 class="text-center">Lista de Participantes</h2>
        <p>
            @if ($checkbox['status'] != 'TODAS')
                <b> Origem:</b> {{ $checkbox['status'] }}<br>
            @endif


            <b>Data:</b> {{ date('d/m/Y') }}
            <br>
            <b>Total de Participantes:</b> {!! count($registrations) !!}
        </p>
    </header>

    <section class="container-fluid">
        <div class="row">

            <table class="table table-striped">
                <thead>
                    <tr class="text-left">
                        <td>#</td>
                        @isset($checkbox['name'])
                            <th>PARTICIPANTE</th>
                        @endisset
                        @isset($checkbox['idCard'])
                            <th>ID</th>
                        @endisset

                        @isset($checkbox['company'])
                            <th>EMPRESA</th>
                        @endisset
                        @isset($checkbox['function'])
                            <th>FUNÇÃO/ORG/GOV</th>
                        @endisset
                        @isset($checkbox['level'])
                            <th>NIVEL</th>
                        @endisset
                        @isset($checkbox['tel'])
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
                    @foreach ($registrations as $item)
                        <tr class="text-left text-dark">
                            <td>{{ $i++ }}</td>
                            @isset($checkbox['name'])
                                <td>{{ $item->name }} </td>
                            @endisset
                            @isset($checkbox['idCard'])
                                <td>{{ $item->idCard }} </td>
                            @endisset

                            @isset($checkbox['company'])
                                <td>{{ $item->company }}</td>
                            @endisset
                            @isset($checkbox['function'])
                                <td>{{ $item->function }}</td>
                            @endisset
                            @isset($checkbox['level'])
                                <td>{{ $item->level }}</td>
                            @endisset
                            @isset($checkbox['tel'])
                                <td>{{ $item->tel }}</td>
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

<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard/css/bootstrap.min.css">

    <title>Credenciamento - {{ $registration->code }}</title>
    <style>
        * {
            margin: 0 !important;
            padding: 0 !important;
            font-family: Arial, Helvetica, sans-serif !important;
            text-transform: uppercase;
        }

        body {
            margin: 0 !important;
            padding: 0 !important;
            background-image: url('dashboard/img/pass.jpg');
            background-size: cover;
            width: 100%;
        }

        #footer {
            margin-left: 70px !important;
            position: fixed;
            bottom: 114px;
            width: 100%;

        }
    </style>
</head>


<body>
    <div class="container-fluid">

        <div class="row">

            <div class="col-12 text-center" style="padding-top:215px!important;">
                @if ($registration->level == 'VIP')
                    <h1 class="text-center" style="font-size: 40;font-weight: bold; color:#FFFFFF;">
                        {{ $registration->level }}
                    </h1>
                @endif
            </div>

        </div>
        <footer class="col-12" id="footer">

            <h4 style="font-size:12px; font-weight:bold; padding-bottom:5px!important;">
                <b>{{ strtoupper($registration->name) }}</b>
            </h4>
            <h6 style="font-size:9px; font-weight: bold; padding-top:5px!important;">
                <b>{{ strtoupper($registration->company) }}</b>
            </h6>
        </footer>
    </div>


</body>

</html>

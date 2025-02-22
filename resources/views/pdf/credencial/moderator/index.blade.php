<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard/css/bootstrap.min.css">

    <title>Credenciamento - {{ $moderator->id }}</title>
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
            bottom: 108px;
            width: 100%;

        }
    </style>
</head>


<body>
    <div class="container-fluid">

        <div class="row">

            <div class="col-12 text-center" style="padding-top:220px!important;padding-left:20px!important;">

                <h1 class="text-center" style="font-size: 20;font-weight: bold; color:#FFFFFF;">
                    @if ($moderator->gender == 'M')
                        Moderador
                    @else
                        Moderadora
                    @endif

                </h1>

            </div>

        </div>
        <footer class="col-12" id="footer">

            <h4 style="font-size:13px; font-weight:bold; padding-bottom:5px!important;">
                <b>{{ strtoupper($moderator->name) }}</b>
            </h4>
            <h6 style="font-size:9px; font-weight: bold; padding-top:5px!important;">
                <b>{{ strtoupper($moderator->company) }}</b>
            </h6>
        </footer>
    </div>


</body>

</html>

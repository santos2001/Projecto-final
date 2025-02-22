<?php

namespace App\Apis\Minfin;

class GerarDC
{

    public function index($value, $ref)
    {
        $dateinit = date('Y-m-d');
        $dateend = date('Y-m-d', strtotime(' + 30 days'));

        $url = 'https://sifp.minfin.gov.ao/sigfe/tributario/receita/ape/v5/gerarDC';
        $originSystem = 'DIGITAL.AO';
        $nifpayment = '5000379263';


        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS =>'{
            "sistemaOrigem": "'.$originSystem.'",
            "idOrigem": "'.$ref.'",
            "nif": "'.$nifpayment.'",
            "dtReferencia": "'.$dateinit.'",
            "dtValidade": "'.$dateend.'",
            "dataPagEscr": "'.$dateinit.'",

            "ImpostosCollection": [
                {
                    "codigoImposto": "01O",
                    "valor": '.$value.'
                }
            ]
        }',
        CURLOPT_HTTPHEADER => array(
            ': ',
            'SOAPAction: "#gerarDC',
            'Authorization: Basic d3MuaW5mb3NpLmRpZ2l0YWw6bWZuKzI5NTc0KzIwMjI=',
            'Content-Type: application/json'
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);


    }
}

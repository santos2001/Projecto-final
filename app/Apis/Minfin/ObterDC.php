<?php

namespace App\Apis\Minfin;
//use App\Jobs\Logger;

class ObterDC
{

    public function index($ref)
    {

        $originSystem = 'DIGITAL.AO';

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://sifp.minfin.gov.ao/sigfe/tributario/receita/ape/v5/obterDC?sistemaOrigem='.$originSystem.'&idOrigem='.$ref,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            ': ',
            'SOAPAction: "#gerarDC',
            'Authorization: Basic d3MuaW5mb3NpLmRpZ2l0YWw6bWZuKzI5NTc0KzIwMjI='
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $result = json_decode($response, TRUE);

        return $result['DC']['DCItem'][0] ?? 0;



    }

}

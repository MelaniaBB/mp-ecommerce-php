<?php
$token = "APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398";//prueba localhost
//$token = "TEST-7226383179129436-071015-9384951a2bd1dcf9752264d83bbb4c7e-589229631";prueba compro al toque
$url = "https://api.mercadopago.com/checkout/preferences?access_token=$token";
//$vars = "site_id=MLA";
$vars = "{\"site_id\":\"MLA\"}";
echo(enviar($vars, $url));



function enviar($parametrospost,$urlpost)
{

        $curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $urlpost);
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $parametrospost);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		$respuesta = trim(curl_exec($curl));
		curl_close($curl);
		
                return $respuesta ;
} 


?>
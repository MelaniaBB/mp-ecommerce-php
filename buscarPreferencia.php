<?php
require($_SERVER['DOCUMENT_ROOT']. '/vendor/autoload.php');
require($_SERVER['DOCUMENT_ROOT']. '/mp/credencialesMP.php');

 //$url = 'https://api.mercadopago.com/checkout/preferences/:'.$_GET["preference_id"].'?access_token='.$token;
$preferencia = MercadoPago\Preference::find_by_id($_GET["preference_id"]);

var_dump($preferencia);


//$pref = $this->_curlAPIRestGET($url);

//var_dump($pref);

  //function _curlAPIRestGET($url){
        /*$r = curl_init();
        curl_setopt($r, CURLOPT_URL, $url);
        curl_setopt($r, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($r, CURLOPT_CONNECTTIMEOUT, 5);
        $data = curl_exec($r);
        curl_close($r);
        //return json_decode($data, TRUE);
		var_dump(json_decode($data, TRUE));*/
   // }
?>
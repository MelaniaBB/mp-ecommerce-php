<?php
/*$token = "APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398";
$key = "APP_USR-7eb0138a-189f-4bec-87d1-c0504ead5626";*/
#CREDENCIALES CON USUARIO DE PRUEBA:{"id":629152755,"nickname":"TETE5092381","password":"qatest9051","site_status":"active","email":"test_user_41119717@testuser.com"}


$token = "APP_USR-8750797241086384-082102-ea4584d8c7c8784ac5e4684acfc324e3-629152755";
$key = "APP_USR-d510d4e8-188a-4617-9670-0d3f466b5feb";

$clientId= "8750797241086384";
$clientSecret = "QIuTvzhXQ5pYkk9DaG4oqWKW8DIVCy00";

$collector_id = "469485398";
$integrador_id = "dev_24c65fb163bf11ea96500242ac130004";
// Agrega credenciales
MercadoPago\SDK::setAccessToken($token);
MercadoPago\SDK::setIntegratorId(getenv($integrador_id));
?>
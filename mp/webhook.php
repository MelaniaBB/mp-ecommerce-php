 <?php

http_response_code(200);
// SDK de Mercado Pago
require($_SERVER['DOCUMENT_ROOT']. '/vendor/autoload.php');
require($_SERVER['DOCUMENT_ROOT']. '/mp/credencialesMP.php');
    //MercadoPago\SDK::setAccessToken("ENV_ACCESS_TOKEN");
$fh = fopen("logMP.txt", 'a') or die("Se produjo un error al crear el archivo");

$texto = date('Y-m-d h:i:sa')." --> TOPIC: ".$_POST["topic"]." --> ID: ".$_POST["id"];

fwrite($fh, $texto.PHP_EOL) or die("No se pudo escribir en el archivo");

fclose($fh);
    switch($_POST["topic"]) {
        case "payment":
            $payment = MercadoPago\Payment.find_by_id($_POST["id"]);
            break;
        case "plan":
            $plan = MercadoPago\Plan.find_by_id($_POST["id"]);
            break;
        case "subscription":
            $plan = MercadoPago\Subscription.find_by_id($_POST["id"]);
            break;
        case "invoice":
            $plan = MercadoPago\Invoice.find_by_id($_POST["id"]);
            break;
    }
//var_dump($_POST[]);
?>

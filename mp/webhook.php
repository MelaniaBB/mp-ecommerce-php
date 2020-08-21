 <?php

http_response_code(200);
// SDK de Mercado Pago
require($_SERVER['DOCUMENT_ROOT']. '/vendor/autoload.php');
require($_SERVER['DOCUMENT_ROOT']. '/mp/credencialesMP.php');
    //MercadoPago\SDK::setAccessToken("ENV_ACCESS_TOKEN");


//$info = json_decode($post);

   /* switch($_POST["type"]) {
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
    }*/

 switch($_GET["topic"]) {
        case "payment":
            $payment = MercadoPago\Payment.find_by_id($_GET["id"]);
            break;
        case "plan":
            $plan = MercadoPago\Plan.find_by_id($_GET["id"]);
            break;
        case "subscription":
            $plan = MercadoPago\Subscription.find_by_id($_GET["id"]);
            break;
        case "invoice":
            $plan = MercadoPago\Invoice.find_by_id($_GET["id"]);
            break;
		    case "merchant_order":
      		$merchant_order = MercadoPago\MerchantOrder::find_by_id($_GET["id"]);
		 	break; 
    }
var_dump($payment);
?>

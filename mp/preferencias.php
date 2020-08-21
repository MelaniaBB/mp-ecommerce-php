<?php
$preference = new MercadoPago\Preference();

#Generamos la preferencia del comprador, payer

$payer = new MercadoPago\Payer();
$payer->name = "Lalo";
$payer->surname = "Landa";
//$payer->email = "test_user_63274575@testuser.com";
$payer->email = "test_user_28915056@testuser.com";
//$payer->date_created = new DateTime();
$payer->phone = array(
	"area_code" => "11",
	"number" => '22223333'
);
$payer->address = array(
	"street_name" => "False",
	"street_number" => "123",
	"zip_code" => "1111"
);		


$item = new MercadoPago\Item();
$item->id = 1234;
$item->title = $_POST['title'];
$item->currency_id = 'ARS';
$item->description = 'Dispositivo móvil de Tienda e-commerce';
$item->picture_url = $_POST['img'];
$item->quantity = 1;
$item->unit_price = intval($_POST['price']);

$preference->items = array($item);

// Opcional por si quieren quitar métodos de pago de la preferencia
//$preference->init_point='/mp/checkout.php';
$preference->payment_methods = array(
    "excluded_payment_types" => array(
        array("id" => "atm")
    ),
	"excluded_payment_methods" => array
			(
				array ( "id" => "amex"),
				
			),
		"installments" 	=> 6   // cuotas
);

// Opcional para setear las url de pago aprobado, fallido o pendiente
$preference->back_urls = array(
    "success" => $_SERVER['HTTP_HOST'].'/mp/success.php',
    "failure" => $_SERVER['HTTP_HOST'].'/mp/failure.php',
    "pending" => $_SERVER['HTTP_HOST'].'/mp/pending.php'
);

// Retorna siempre
$preference->auto_return = "approved";

// Para que no tenga estados pendientes de pago
$preference->binary_mode = TRUE;

// Creación de un código external reference para vincular el pago con un pedido en nuestra DB
$preference->external_reference = 'melania@infinitoweb.com.ar';



// Opcional para setear las url del webhook
$preference->notification_url = $_SERVER['HTTP_HOST'].'/mp/webhook.php';

// Crea la preferencia
$preference->save();
?>
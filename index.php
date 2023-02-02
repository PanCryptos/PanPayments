<?php
$api = "test@pancryptos.com"; # Aqui debes poner tu API KEY cual aparece en https://pancryptos.com/login/
$shop_name = "TIENDA EJEMPLO"; # Aqui pones el nombre de tu tienda
$Pago_Cantidad = 10; # Aqui pones el monto que vas a cobrar
$Return = "http://localhost/PAGO_CON_PANPAYMENTS/pago.php"; # Aqui pones la ubicacion del archivo pago.php

$url = "https://pancryptos.com/api/PanPayments/pay.php?price=" . $Pago_Cantidad . "&shop=" . $shop_name . "&api=" . $api . "&return=" . $Return;

$code = file_get_contents($url);
echo  "Tu link de pago es : " . $code;
header('Location: ' . $code);

?>

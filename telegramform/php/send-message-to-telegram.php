<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
if (!empty($_POST['name']) && !empty($_POST['phone']) && !empty($_POST['cart']) ){
  if (isset($_POST['name'])) {
    if (!empty($_POST['name'])){
  $name = strip_tags($_POST['name']);
  $nameFieldset = "Заказчик: ";
  }
}

if (isset($_POST['phone'])) {
  if (!empty($_POST['phone'])){
  $phone = strip_tags($_POST['phone']);
  $phoneFieldset = "Телефон: ";
  }
}

if (isset($_POST['theme'])) {
  if (!empty($_POST['theme'])){
  $theme = strip_tags($_POST['theme']);
  $themeFieldset = "Источник: ";
  }
}

if (isset($_POST['cart'])) {
  if (!empty($_POST['cart'])){
  $cart =($_POST['cart']);
  $cartt=urlencode($cart);
  $cartFieldset = "Заказ: ";
  }
}

 if (isset($_POST['adr'])) {
    if (!empty($_POST['adr']))
		$adr = strip_tags($_POST['adr']);
	else $adr="Заберу сам!";
 }
  else $adr="Заберу сам!";
 
$adrFieldset = "Доставка: ";


$token = "736824065:AAG_-av8AAN0CVGUah3zhpQKGVTZA_EXrRk";
$chat_id = "-287505375";

$arr = array(
  $nameFieldset => $name,
  $phoneFieldset => $phone,
  $themeFieldset => $theme,
  $cartFieldset => $cartt,
  $adrFieldset => $adr
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
if ($sendToTelegram) {
 
  echo '<p class="success">Заказ отправлен</p>';
    return true;
} else {
  echo '<p class="fail"><b>Ошибка. Заказ не отправлен!</b></p>';
}
} else {
  echo '<p class="fail">Ошибка. Вы заполнили не все обязательные поля!</p>';
}
} else {
header ("Location: /");
}

?>
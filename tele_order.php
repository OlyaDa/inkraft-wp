<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$order = $_POST['order'];



$token ="978008395:AAGyiumee5gpevVXS6-XtVwEIXM5inkc3Ac";
$chat_id ="-358960507";
$arr = array(
	'Имя: ' => $name,
	'Телефон: ' => $phone,
	'Цель: ' => $order,
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
?>


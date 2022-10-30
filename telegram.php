Кодировка

UTF-8
<?php

/* https://api.telegram.org/botXXXXXXXXXXXXXXXXXXXXXXX/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */


$token = "5657087828:AAEnC3geALwfvUdJQZEs4XTSk2K0mX8RX8g";
$chat_id = "-1001746446316";



$name = $_POST['user_name'];
$comp = $_POST['user_comp'];
$phone = $_POST['user_phone'];
$mail = $_POST['user_mail'];
$meropr = $_POST['user_meropr'];
$type = $_POST['user_type'];
$opis = $_POST['user_opis'];
$obor = $_POST['user_obor'];
$data = $_POST['user_date'];
$time = $_POST['user_time'];
$timee = $_POST['user_timee'];
$zal = $_POST['user_zal'];




$arr = array(
  'Имя пользователя ' => $name,
  'Компания ' => $comp,
  'Email ' => $mail,
  'Номер телефона ' => $phone,
  'Название мероприятия ' => $meropr,
  'Тип мероприятия ' => $type,
  'Описание мероприятия ' => $opis,
  'Оборудование ' => $obor,
  'Дата ' => $data,
  'Время начала ' => $time,
  'Время окончания ' => $timee,
  'Зал ' => $zal

);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: index.html');
} else {
  echo "Error";
}
?>
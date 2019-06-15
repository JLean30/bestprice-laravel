<?php
$request = file_get_contents("php://input");
$fecha = date('Y-m-d H:i:s');
file_put_contents("registro_de_actualizaciones.log", $fecha.' - '.$request, FILE_APPEND);
$request = json_decode($request);

$TOKEN = "834694223:AAGlh7uhgIFH3fKqJb1Komuibf8kF3G3_Q4";
$URL = "https://api.telegram.org/bot$TOKEN"; 

function sendMessage($chat_id, $text)
{
    global $URL;
    $json = ['chat_id'       => $chat_id,
             'text'          => $text,
             'parse_mode'    => 'HTML'];
    return http_post($URL.'/sendMessage', $json);
}

sendMessage($request->message->chat->id, $request->message->text);


?>
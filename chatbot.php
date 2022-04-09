<?php 
 define('API_KEY', '5264995810:AAFbhclKHXj3I_y5K4FCT09RfGc_DM35v64');

 $Manager = "2146587263";
 $compane = "XWEBUILDER";
 
 //telegram API bilan ma'lumot almashinish uchun kere
 function bot($method, $dates =[]){ 
     $url = "https://api.telegram.org/bot".API_KEY."/" . $method;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $dates);
    $res = curl_exec($ch);
    curl_close($ch);
    if (!curl_error($ch)) return json_decode($res);
 };
//  botni kod belgilaridan himoya qilish uchun
 function html($text){
     return str_replace(['<','>'],['&#60;','&#62;'], $text);
 };

 $update = json_decode(file_get_contents('php://input'));

//  testlog
file_put_contents("log.txt",file_get_contents('php://input'));

?>
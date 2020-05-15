<?php
session_start();
$newURL = "https://odc-tech.com";
$errors = [];

// validate name
if(!isset($_POST['name'])){

    array_push($errors, 'Name filed is required');
}
else{
    if(trim($_POST['name']) == ''){
        array_push($errors, 'Name filed is required');
    }
    if(strlen($_POST['name']) > 255){
        array_push($errors, 'Name filed should contain max 255 characters');
    }
}

// validate email
if(!isset($_POST['email'])){
    array_push($errors, 'Email filed is required');
}
else{
    if(trim($_POST['email']) == ''){
        array_push($errors, 'Email filed is required');
    }
    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        array_push($errors, 'Incorrect email format');
    }
}

// validate message
if(!isset($_POST['message'])){
    array_push($errors, 'Message filed is required');
}
else{
    if(trim($_POST['message']) == ''){
        array_push($errors, 'Message filed is required');
    }
    if(strlen($_POST['message']) > 2000){
        array_push($errors, 'Message filed should contain max 2000 characters');
    }
}

if(isset($_POST['g-recaptcha-response'])){
    $captcha=$_POST['g-recaptcha-response'];
}
if(!$captcha){
    array_push($errors, 'Please check captcha form');
}

if(count($errors) > 0){
    $_SESSION['errors'] = $errors;
    $_SESSION['request_data'] = $_POST;
    header('Location: ' . $_SERVER['HTTP_REFERER'].'#contactUs');
}

$secretKey = "6LcgZ_cUAAAAAK8vePkSa7qeXJgmeAMLXc7t-S4D";
$url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
$response = file_get_contents($url);
$responseKeys = json_decode($response,true);
// should return JSON with success as true
if($responseKeys["success"]) {
//    $to      = 'administration@odc-tech.com';
    $to      = 'tpetrosy@gmail.com';
    $subject = 'ODC - Contact Us';
    $message = '<label>NAME: </label><i>'.$_POST['name'].'</i><br>'.
        '<label>EMAIL: </label><i>'.$_POST['email'].'</i><br>'.
        '<label>MESSAGE: </label><i>'.$_POST['message'].'</i>';

    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From: ' . $_POST['email'] . "\r\n";
    $headers .= 'Reply-To: '.$_POST['email'] . "\r\n" ;


    mail($to, $subject, $message, $headers);
    header('Location: '.$newURL);
} else {
    echo '<h2>Bad Request</h2>';
}


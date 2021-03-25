<?php
if($_POST){

    //echo '<pre>'; print_r($_POST); echo '</pre>'; die();
    
    $to      = 'thakurnaseeb@gmail.com';
$subject = $_POST['subject'].'-'.$_POST['name'].'-'.$_POST['phone'].'-'.$_POST['email'];
$message = $_POST['message'];
$headers = array(
    'From' => 'support@inimistacademy.com',
    'Reply-To' => 'support@inimistacademy.com',
    'X-Mailer' => 'PHP/' . phpversion()
);

if(mail($to, $subject, $message, $headers)){
    echo 'Thanks for contacting us! We will get back to you at earliest.';
}else{
    echo 'no';
}
header('Location: index.php');
exit;
}
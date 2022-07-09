<?php
if($_POST['key']==='orbt'){
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "site@indesfer.com.br";
    $to = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['fullname'].'<br>'.$_POST['message'] . '<br>' . $_POST['phone'] ;
    $headers = "From:" . $from;
    $ok['ok'] = mail($to,$subject,$message, $headers);
    if(!$ok){
        throw new Exception("Error Processing your mail", 1);
    }
    echo(json_encode($ok));
    http_response_code(200);
}else{
    throw new Exception("Error Processing key", 1);
}
?>

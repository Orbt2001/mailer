<?php
if($_POST['key']==='orbt'){
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "site@indesfer.com.br";
    $to = $_POST['email'];
    $subject = $_POST['subject'];s
    $message = $_POST['fullname'].'<br>'.$_POST['message'] . '<br>' . $_POST['phone'] ;
    $headers = "From:" . $from;
    if(!mail($to,$subject,$message, $headers)){
        throw new Exception("Error Processing your mail", 1);
    }
    $ok['ok'] = true;
    echo(json_encode($ok))
    http_response_code(200);
}else{
    throw new Exception("Error Processing key", 1);
}
    
?>

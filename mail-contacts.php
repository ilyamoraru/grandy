
<?php
    $to = "il.moraru@yandex.ru";

    $subject = 'Заявка с сайта grandy';

    $message =  'Заявка c эл.почты ' . $_POST['contacts-mail'] . ' комментарием ' . $_POST['message'];

     $mail_headers =
           "MIME-Version: 1.0" . "\r\n" . 
            "Content-type: text/html; charset=UTF-8" . "\r\n";  
    mail($to,$subject,$message,$mail_headers);
echo $message;
?>
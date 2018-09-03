<?php
    $to = "il.moraru@yandex.ru";

    $subject = 'Заявка с сайта grandy';

    $message =  'Заявка c из раздела "индивидуальный пошив" ' . ' бренд ' . $_POST['right-brend'] . ' заказ ' . $_POST['#right-item'] . ' Фото ' . $_POST['#ind_file'] . ' телефон ' . $_POST['#ind-tel'] . ' сообщение ' . $_POST['#ind-textarea'];

     $mail_headers =
           "MIME-Version: 1.0" . "\r\n" . 
            "Content-type: text/html; charset=UTF-8" . "\r\n";  
    mail($to,$subject,$message,$mail_headers);
echo $message;
?>
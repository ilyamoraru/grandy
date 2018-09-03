<?php
    $to = "il.moraru@yandex.ru";

    $subject = 'Заявка с сайта grandy';

if(!empty($_FILES['ind_file']))
{
    $path = $_FILES['ind_file'];
    if(copy($_FILES['ind_file'], $path)) $picture = $path;
}


if(!empty($_FILES['down-input-corp']))
{
    $path1 = $_FILES['down-input-corp'];
    if(copy($_FILES['down-input-corp'], $path1)) $picuture1 = $path1;
}

    $message =  'Заявка c из раздела "индивидуальный пошив" ' . ' бренд ' . $_POST['right-brend'] . ' заказ ' . $_POST['right-item'] . ' Фото ' . $path . ' телефон ' . $_POST['ind-tel'] . ' сообщение ' . $_POST['ind-textarea'] . 'Заказ из раздела "корпоративные услуши" ' . ' услуга ' . $_POST['corp-left-select'] . 'файл' . $path1 . ' количество ' . $_POST['number-input'] . ' телефон ' . $_POST['corp-tel'] . ' комментарий ' . $_POST['corp-textarea'] . 'Заявка из разде "Ремонт и подгонка"' . ' cписок услуг ' . $_POST['all-services'] . ' телефон ' . $_POST['select-tel'] . ' комментарий ' . $_POST['all-textarea'];

     $mail_headers =
           "MIME-Version: 1.0" . "\r\n" . 
            "Content-type: text/html; charset=UTF-8" . "\r\n";  
    mail($to,$subject,$message,$mail_headers);
echo $message;
?>

<!DOCTYPE html>
<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
   <meta name="viewport" content="width=device-width,initial-scale=1">
   <title>Отправка заявки</title>
</head>
<body>

<?php
$name = $_POST['name'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];
$time = $_POST['time'];
$reason = $_POST['reason'];


$name = htmlspecialchars($name);
$telephone = htmlspecialchars($telephone);
$email = htmlspecialchars($email);
$time = htmlspecialchars($time);
$reason = htmlspecialchars($reason);

$name = urldecode($name);
$telephone = urldecode($telephone);
$email = urldecode($email);
$time = urldecode($time);
$reason = urldecode($reason);

$name = trim($name);
$telephone = trim($telephone);
$email = trim($email);
$time = trim($time);
$reason = trim($reason);


if(mail("inbox@test.ru", 
   "Обращение пациента с сайта",

   "
   ФИО:".$name.
   "
   Телефон: ".$telephone.
   "
   E-mail: ".$email.
   "
   Время для звонка: ".$time.
   "
   Причина обращение: ".$reason,

   "From: inbox@test.ru \r\n"))
 {
    

echo 'Заявка на консультацию успешно отправлена.';
} else {
    echo 'При отправке заявки произошла ошибка.';
}

?>


<a href="http://doctor-avakyan.ru/">Вернуться на главную страницу</a>
</body>
</html>

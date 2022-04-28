<?php
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

// Проверяем отравленность сообщения
function SendMail($mail, &$status)
{
  if ($mail->send())
    $status = "Сообщение успешно отправлено";
  else
    $status =  "Сообщение не было отправлено. Причина ошибки: " . $mail->ErrorInfo;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Настройки PHPMailer
  $mail = new PHPMailer\PHPMailer\PHPMailer();

  $mail->isSMTP();
  $mail->CharSet = "UTF-8";
  $mail->SMTPAuth   = true;
  $mail->isHTML(true);

  // Настройки вашей почты
  $mail->Host       = 'smtp.yandex.ru'; // SMTP сервера вашей почты
  $mail->Username   = ''; // Логин на почте
  $mail->Password   = ''; // Пароль на почте
  $mail->SMTPSecure = 'ssl';
  $mail->Port       = 465;
  $mail->setFrom('info@brandigital.ru', 'ПРОФАВТО'); // от кого будет уходить письмо?

  // Переменные
  $name  = (!empty($_POST['user__name']))  ? $_POST['user__name']   : 'Не указано';
  $email = (!empty($_POST['user__email'])) ? $_POST['user__email']  : 'Не указана';
  $phone = (!empty($_POST['user__phone'])) ? $_POST['user__phone'] : 'Не указан';
  $task  = (!empty($_POST['user__task']))  ? $_POST['user__task'] : 'Не указана';

  $phone_formatted = str_replace(['(', ')', '-', ' ', ''], '', $phone);

  // Формирование содержимого письма
  $title = "ПРОФАВТО _ наш сайт";
  $body =
    "
    <html>
     <p>
      Контактная информация: <br> <br>
      <b>Имя: </b> $name <br>
      <b>Электронная почта: </b> <a href='mailto:$email'>$email</a><br>
      <b>Номер телефона: </b> <a href='tel:$phone_formatted'>$phone</a><br>
      <b>Задача: </b>$task
     </p>
    </html>
   ";

  // Получатель письма
  $mail->addAddress('main.acr0matic@gmail.com');

  // Отправка сообщения
  $mail->Subject = $title;
  $mail->Body = $body;

  SendMail($mail, $status);
}

echo json_encode($status);

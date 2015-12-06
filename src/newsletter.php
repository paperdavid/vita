<?php
$post = (!empty($_POST)) ? true : false;
if($post)
{
$text = trim($_POST["email"]);
$error = "";
if(!$text)
{
$error .= "Введите почту";
}

if(!$error)
{
$subject ="Новое сообщение!";
$message ="Новый запрос!\n\nE-mail: ".$text."";
$mail = mail("paperdavid@gmail.com", $subject, $message,

"From: ".$name." <".$email."> "."Reply-To: ".$email." "." X-Mailer: PHP/" . phpversion());
if($mail)
{
echo 'OK';
}
}
else
{
echo '<div class="notification_error">'.$error.'</div>';
}
}
?>
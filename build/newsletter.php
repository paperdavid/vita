<?php
$post = (!empty($_POST)) ? true : false;
if($post)
{
$text = trim($_POST["text"]);
$error = "";
if(!$text)
{
$error .= "Повторите: ";
}

// Check email
function ValidateEmail($value)
{
$regex = "/^([a-zA-Z0-9])+([\.a-zA-Z0-9_-])*@([a-zA-Z0-9_-])+(\.[a-zA-Z0-9_-]+)*\.([a-zA-Z]{2,6})$/";
if($value == "") {
return false;
} else {
$string = preg_replace($regex, "", $value);
}
return empty($string) ? true : false;
}
if(!$text)
{
$error .= "Введите email";
}
if($text && !ValidateEmail($text))
{
$error .= "Введите корректный email";
}
//

if(!$error)
{
$subject ="Новая подписка!";
$message ="На сайте vitastretta.ru оформлена новая подписка!\n\nE-mail: ".$text."";
$mail = mail("paperdavid@gmail.com", $subject, $message,

"From: ".$name." <".$text."> "."Reply-To: ".$text." "." X-Mailer: PHP/" . phpversion());
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
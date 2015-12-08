<?php
$post = (!empty($_POST)) ? true : false;
if($post)
{
$email = trim($_POST["email"]);
$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$tel = htmlspecialchars($_POST["tel"]);
$mes = htmlspecialchars($_POST["mes"]);
$error = "";
if(!$name)
{
$error .= "Введите имя";
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
if(!$email)
{
$error .= " / Введите e-mail";
}
if($email && !ValidateEmail($email))
{
$error .= " / Введите корректный e-mail";
}
// Check tel
function ValidateTel($valueTel)
{
$regexTel = "/^[0-9]{7,12}$/";
if($valueTel == "") {
return false;
} else {
$string = preg_replace($regexTel, "", $valueTel);
}
return empty($string) ? true : false;
}
if(!$tel)
{
$error .= " / Введите телефон";
}
if($tel && !ValidateTel($tel))
{
$error .= " / Введите корректный телефон (начиная с 8 и без пробелов)";
}
if(!$error)
{
$subject ="Новое сообщение!";
$message ="Новый запрос!\n\nE-mail: ".$email."\n\nИмя: " .$name."\n\nТелефон:".$tel."\n\nСообщение:" .$mes."\n\n";
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
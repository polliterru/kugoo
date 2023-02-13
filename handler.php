<?php
$user_email = htmlspecialchars($_POST["email"]);
$user_phone = htmlspecialchars($_POST["userphone"]);

$token = "6156123311:AAH91NYqrtdlC9huEHlkl8GAa0lhlssqL6Q";
$chat_id = "-731480576";

if (!empty($user_email)) {
  $text .= "E-mail: " . "<b>" . urldecode($user_email) . "</b>" . "%0A";
}
if (!empty($user_phone)) {
  $text .= "Телефон: " . "<b>" . urldecode($user_phone) . "</b>" . "%0A";
}

if (!empty($text)) {
  fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&text={$text}&parse_mode=html", "r");
}

?>
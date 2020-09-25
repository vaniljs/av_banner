<?php
$param = json_decode($_REQUEST["param"]);
$admin_email = 'mail@yandex.ru';
$theme = $param->theme;

$message = "Площадь фасада: " . $param->area .
    "<br> Толщина панели: " . $param->panel .
    "<br> Утепление: " . $param->winterizing .
    "<br> Подсистема с доп. эл.: " . $param->subsystem .
    "<br> Монтаж: " . $param->montage .
    "<br> Цена: " . $param->price .
    "<br><br> Имя: " . $param->name .
    "<br>Телефон: " . $param->phone;

$headers = "MIME-Version: 1.0" . PHP_EOL .
    "Content-Type: text/html; charset=utf-8" . PHP_EOL .
    'From: '.$theme.' <'.$admin_email.'>' . PHP_EOL .
    'Reply-To: '.$admin_email.'' . PHP_EOL;

mail($admin_email, $theme, $message, $headers );

echo "Отправлено";
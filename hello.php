<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Использование данных формы</title>
</head>
<body>
<?php
if ($_REQUEST['login'] == 'root' && $_REQUEST['password'] =='Z10N0101') {
    echo "Доступ открыт для пользователя {$_REQUEST['login']}";
    // команда блокирования рабочей станции (работает в NT системах). В первый раз меня напугала)))
    system("rundll32.exe user32.dll,LockWorkStation");
} else {
    echo 'Доступ закрыт!';
}
?>
</body>
</html>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Страница с формой</title>
</head>
<body>

<?php
//проверяем существует ли переменная с именем, совпадающим с именем кнопки
if (!isset($_REQUEST['doGo'])) {?>
<form action="<?=$_SERVER['SCRIPT_NAME']?>">
    Логин: <input type="text" name="login" value=""><br>
    Пароль: <input type="password" name="password" value=""><br>
    <input type="submit" name="doGo" value="Нажми кнопку!">
</form>

<?php } else
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
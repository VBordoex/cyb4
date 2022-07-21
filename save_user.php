<?php

    $user = $_REQUEST["login"];
    $pwd = $_REQUEST["password"];
    $mail = $_REQUEST["mail"];
    $hash = hash("sha256", $pwd);

    if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
    //заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
 if (empty($login) or empty($password)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
    {
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }

 // подключаемся к базе
    include ("bd.php");

    $result = mysqli_query($conn,"SELECT * FROM users WHERE login='$user'");
    $myrow = mysqli_fetch_array($result);
    if (!empty($myrow['id'])) {
    exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
    }
 // если такого нет, то сохраняем данные
    $result2 = mysqli_query ($conn,"INSERT INTO users (Login,PwdHash,Email) VALUES('$user','$hash','$mail')");
     

    if ($result2=='TRUE')
    {
      echo '<meta http-equiv="refresh" content="2; url=login.php" />';
      die("Вы успешно зарегистрированы! Вы будете перенаправлены на страницу входа.");
    }
 else {
    echo "Ошибка! Вы не зарегистрированы.";
    }
    ?>
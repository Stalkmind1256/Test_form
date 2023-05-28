<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css"href="test.css">
    <title>Авторизация и регистарция</title>
</head>
<body>
<form action="signup.php" method="post">
    <label>ФИО</label>
    <input type="text" name="full_name" placeholder="Введите свое полное имя">
    <label>Логин</label>
    <input type="text" name="login" placeholder="Введите свой логин">
    <label>Почта</label>
    <input type="email" name="email" placeholder="Введите адрес своей почты">
    <label>Пароль</label>
    <input type="text" name="password" placeholder="Введите пароль">
    <label>Подтверждение пароля</label>
    <input type="text" name="password_confirm" placeholder="Подтвердите пароль">
    <button>Войти</button>
    <p>
        У вас уже есть аккаунт? -<a href="test.php"> авторизуйтесь</a>
    </p>
         <?php
            if (isset($_SESSION['message'])){
                echo'<p class="msg"> '. $_SESSION['message'] . '</p>';
            }
                unset($_SESSION['message']);

         ?>
</form>
</body>
</html>
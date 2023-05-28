<?php
session_start();
    //require_once 'connect.php';
    $host = "localhost";
    $port = "5432";
    $dbname="postgres";
    $user ="postgres";
    $password ="123456789";

    $connect = pg_connect("host=$host  port=$port dbname=$dbname user=$user password=$password");


    $full_name = $_POST['full_name'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    if ($password === $password_confirm){
        //con..
        $query = "INSERT INTO public.users (full_name, login,email,password) VALUES ('" . pg_escape_string($full_name) . "', '" . pg_escape_string($login) . "', '" . pg_escape_string($email) . "', '" . pg_escape_string($password)."')";
        pg_query($connect,$query);

    }else{

        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: regist.php');
    }
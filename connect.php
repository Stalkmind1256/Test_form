<?php
$host = "localhost";
$port = "5432";
$dbname="postgres";
$user ="postgres";
$password ="123456789";

$connect = pg_connect("host=$host  port=$port dbname=$dbname user=$user password=$password");

if(!$connect){
    die('Error connect to databse');
}
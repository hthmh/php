<?php
$postData=file_get_contents('php://input', true);
//echo var_dump($postData);
$data = json_decode($postData);
$pdo = new PDO('mysql:host=localhost:3306;dbname=yny;charset=utf8', "root");


$username = json_encode($data -> username);
$password = json_encode($data -> password);
$sql = 'INSERT INTO user (userName,password) VALUES ("'.$data -> username.'","'.$data -> password.'")';



$pdo -> query($sql);
//echo 'success';
echo $username;
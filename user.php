<?php

$postData=file_get_contents('php://input', true);
$data = json_decode($postData);
$pdo = new PDO('mysql:host=localhost:3306;dbname=yny;charset=utf8', "root");



$name = json_encode($data->userName);
$password = json_encode($data->password);
//$sql ="SELECT * FROM user";

$sql="select * from user where userName=$name and password=$password";
//$sql="select * from user where id=1";
//
$r = $pdo -> query($sql);
$d = $r->fetchObject();


////
if($d -> password){
    echo $name;
}







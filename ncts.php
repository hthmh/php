<?php
//需要通过 file_get_contents 直接以字符串形式获取请求的内容
$postData=file_get_contents('php://input', true);
$data = json_encode($postData);
//$data = json_decode($postData);

//if($data[0] == '["ncts"]'){
    $type = 'ncts';
//}else if($data[0] == '["cpts"]'){
//    $type = 'cpts';
//}

//数据库操作
$pdo = new PDO('mysql:host=localhost:3306;dbname=yny;charset=utf8', "root");

$sql ="UPDATE $type SET value=value+1 WHERE id = $data";

$pdo -> query($sql);



echo $data;

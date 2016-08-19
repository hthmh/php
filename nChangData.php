<?php
require('dbutil/mysql_util.php');

if ($_GET['cBack'] == "cLiang") {
    $sql = 'SELECT * FROM cLiang';
}else if($_GET['cBack'] == "zDi") {
    $sql = 'SELECT * FROM zDi';
}else if($_GET['cBack'] == "ncts") {
    $sql = 'SELECT * FROM ncts';
}else if($_GET['cBack'] == "cpts") {
    $sql = 'SELECT * FROM cpts';
}
else if($_GET['cBack'] == "pHang") {
    $sql = 'SELECT * FROM pHang';
}

$d = db_execute($sql, function ($r) {
    $r->setFetchMode(PDO::FETCH_OBJ);
    return $r->fetchAll();
});
echo json_encode($d);
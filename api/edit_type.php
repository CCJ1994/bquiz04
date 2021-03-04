<?php
include_once "../base.php";
$row=$Type->find($_POST['id']);
$row['name']=$_POST['result'];
$Type->save($row);

?>
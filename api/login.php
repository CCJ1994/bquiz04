<?php
include_once "../base.php";
$db=new DB($_POST['table']);
$chk=$db->count(['acc'=>$_POST['acc'],'pw'=>$_POST['pw']]);
echo $chk;

switch($_POST['table']){
  case 'mem':
    $_SESSION['mem']=$_POST['acc'];
    break;
  case 'admin':
    $_SESSION['admin']=$_POST['acc'];
    break;
}

?>
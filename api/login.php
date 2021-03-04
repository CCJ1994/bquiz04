<?php
include_once "../base.php";
$db=new DB($_POST['table']);
echo $db->count(['acc'=>$_POST['acc'],'pw'=>$_POST['pw']]);
switch ($_POST['table']) {
  case 'admin':
    $_SESSION['admin']=$_POST['acc'];
    break;
  case 'mem':
    $_SESSION['mem']=$_POST['acc'];
    break;
    
  }

  ?>
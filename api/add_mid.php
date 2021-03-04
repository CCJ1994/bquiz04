<?php
include_once "../base.php";
$data=[];
if(!empty($_POST['mid'])){
  $data['parent']=$_POST['big'];
  $data['name']=$_POST['mid'];

  $Type->save($data);
}
to("../backend.php?do=th");

?>
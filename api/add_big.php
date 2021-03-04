<?php
include_once "../base.php";
$data=[];
if(!empty($_POST['big'])){
  $data['parent']=0;
  $data['name']=$_POST['big'];
  $Type->save($data);
}
to("../backend.php?do=th");

?>
<?php
if(!empty($_POST['bottom'])){
  $bottom=$Bottom->find(1);
  $bottom['bottom']=$_POST['bottom'];
  $Bottom->save($bottom);
}
?>

<h2 class="ct">編輯頁尾版權區</h2>
<form action="?do=bottom" method="post">
  <table class="all">
    <tr>
      <td class="tt">頁尾版權內容</td>
      <td class="pp"><input type="text" id="bot" name="bottom" value="<?=$Bottom->find(1)['bottom'];?>"></td>
    </tr>
    <tr>
      <td class="ct" colspan="2">
      <input type="submit" value="編輯">
      <input type="button" onclick="cl()" value="重置">
      </td>
    </tr>
  </table>
</form>
<script>
  function cl(){
    $("#bot").val("");
  }
</script>
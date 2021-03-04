<?php
if(!empty($_POST['bottom'])){
    $bot=$Bottom->find(1);
    $bot['bottom']=$_POST['bottom'];
    $Bottom->save($bot);
}

?>
<h1 class="ct">頁尾版權管理</h1>
<form action="?do=bottom" method="post">
  <table class="all " id="head">
      <tr>
        <td class="tt">頁尾宣告內容</td>
        <td class="pp"><input type="text" id="bot" name="bottom" value="<?=$Bottom->find(1)['bottom']?>"></td>
      </tr>
    <tr><td colspan="2" class="ct">
    <input type="submit" value="編輯">
    <input type="button" value="重置" id="clear">
    </td></tr>
  </table>
</form>
<script>
$("#clear").on('click',function () {
  $("#bot").val("");
})
</script>
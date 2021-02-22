<form action="api/save_admin.php" method="post">
  <?php $admin=$Admin->find($_GET['id']);
  $pr=unserialize($admin['pr']);
  ?>
  
<h2 class="ct">修改管理員權限</h2>
  <table class="all">
    <tr>
      <td class="tt ct">帳號</td>
      <td class="pp"><?=$admin['acc'];?></td>
    </tr>
    <tr>
      <td class="tt ct">密碼</td>
      <td class="pp"><?=str_repeat("*",strlen($admin['pw']));?></td>
    </tr>
    <tr>
      <td class="tt ct">權限</td>
      <td class="pp">
      <div><input type="checkbox" name="pr[]" value="1" <?=(in_array(1,$pr))?'checked':'';?>>商品分類與管理</div>
      <div><input type="checkbox" name="pr[]" value="2" <?=(in_array(2,$pr))?'checked':'';?>>訂單管理</div>
      <div><input type="checkbox" name="pr[]" value="3" <?=(in_array(3,$pr))?'checked':'';?>>會員管理</div>
      <div><input type="checkbox" name="pr[]" value="4" <?=(in_array(4,$pr))?'checked':'';?>>頁尾版權區管理</div>
      <div><input type="checkbox" name="pr[]" value="5" <?=(in_array(5,$pr))?'checked':'';?>>最新消息管理</div>
      </td>
    </tr>
    
    <input type="hidden" name="id" value="<?=$admin['id'];?>">
  </table>
  <div class="ct">
    <input type="submit" value="編輯">
    <input type="reset" value="重置">
  </div>
</form>

<div class="ct">
<button onclick="lof('?do=add_admin')">新增管理員</button>
</div>
<table class="all">
  <tr class="tt ct">
    <td>姓名</td>
    <td>會員帳號</td>
    <td>操作</td>
  </tr>
  <?php
  $admins=$Admin->all();
  foreach($admins as $admin){ 
    ?>

  <tr class="pp ct">
    <td><?=$admin['acc'];?></td>
    <td><?=str_repeat("*",strlen($admin['pw']));?></td>
    <?php if($admin['acc']=='admin'){ ?>
      <td>此帳號為最高權限</td>
    <?php  }else{?>
    <td>
      <input type="button" value="修改" onclick="lof('?do=edit_admin&id=<?=$admin['id'];?>')">
      <input type="button" value="刪除" onclick="del('admin',<?=$admin['id'];?>)">
    </td>
    <?php  }?>
  </tr>
  <?php } ?>
</table>

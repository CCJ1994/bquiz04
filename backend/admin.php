<div class="ct"><a href="?do=add_admin"><button>新增管理員</button></a></div>
<table class="all">
  <tr class="tt ct">
    <td>帳號</td>
    <td>密碼</td>
    <td>管理</td>
  </tr>
  <?php
  $rows=$Admin->all();
  foreach ($rows as $key => $row) { ?>
  <tr class="pp ct">
    <td><?=$row['acc']?></td>
    <td><?=str_repeat("*",strlen($row['pw']))?></td>
    <td>
    <?php if($row['acc']=='admin'){?>
      此帳號為最高權限
    <?php }else{?>
      <a href="?do=edit_admin&id=<?=$row['id']?>"><input type="button" value="編輯"></a>
      <input type="button" value="刪除" onclick="del('admin',<?=$row['id']?>)">
    <?php } ?>
    </td>
  </tr>
  <?php }
  ?>
</table>
<div class="ct"><button type="button" onclick="lof('index.php')">返回</button></div>
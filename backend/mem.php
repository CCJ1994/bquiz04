<h2 class="ct">會員管理</h2>
<table class="all">
  <tr class="tt ct">
    <td>姓名</td>
    <td>會員帳號</td>
    <td>註冊日期</td>
    <td>操作</td>
  </tr>
  <?php
  $mems=$Mem->all();
  foreach($mems as $mem){ ?>

  <tr class="pp ct">
    <td><?=$mem['name'];?></td>
    <td><?=$mem['acc'];?></td>
    <td><?=$mem['regdate'];?></td>
    <td>
      <input type="button" value="修改" onclick="lof('?do=edit_mem&id=<?=$mem['id'];?>')">
      <input type="button" value="刪除" onclick="del('mem',<?=$mem['id'];?>)">
    </td>
  </tr>
  <?php } ?>
</table>


<h1 class="ct">商品分類</h1>
<form action="api/add_big.php" method="post">
  <div class="ct">新增大分類<input type="text" name="big" id="big"><input type="submit" value="新增"></div>
</form>
<form action="api/add_mid.php" method="post">
  <div class="ct">新增中分類
  <select name="big" >
  <?php
  $opts=$Type->all(['parent'=>0]);
  foreach ($opts as $key => $opt) {
    echo "<option value='{$opt['id']}'>{$opt['name']}</option>";
  }
  ?>
  </select>
  <input type="text" name="mid" id=""><input type="submit" value="新增"></div>
</form>
<table class="all">
<?php 
$bigs=$Type->all(['parent'=>0]);
foreach ($bigs as $key => $big) { ?>
  <tr>
    <td class="tt "><?=$big['name']?></td>
    <td class="tt ct">
      <button type="button" onclick="edit(<?=$big['id']?>,'<?=$big['name']?>')">修改</button>
      <button type="button" onclick="del('type',<?=$big['id']?>)">刪除</button>
    </td>
  </tr>
  <?php
  $mids=$Type->all(['parent'=>$big['id']]);
  foreach ($mids as $key => $mid) { ?>
    <tr>
    <td class="pp ct"><?=$mid['name']?></td>
    <td class="pp ct">
      <button type="button" onclick="edit(<?=$mid['id']?>,'<?=$mid['name']?>')">修改</button>
      <button type="button" onclick="del('type',<?=$mid['id']?>)">刪除</button>
    </td>
  </tr>
  <?php }
}
?>
</table>
<h1 class="ct">商品管理</h1>
<div class="ct"><a href="?do=add_item"><button type="button">新增商品</button></a></div>
<table class="all">
<tr class="tt ct">
<td width="10%">編號</td>
<td width="50%">商品名稱</td>
<td width="10%">庫存量</td>
<td width="10%">狀態</td>
<td width="20%">操作</td>
</tr>
</table>
<script>
  function edit(id,name) {
    let result=prompt("修改分類名為：",name);
    if(result!=null){
      $.post('api/edit_type.php',{id,result},function () {
        location.reload();
      })
    }
  }
</script>

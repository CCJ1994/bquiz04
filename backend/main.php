<h2 class="ct">管理者管理</h2>
<div class="ct"><button onclick="">新增管理者</button></div>
<table class="all">
  <tr class="tt ct">
    <td>帳號</td>
    <td>密碼</td>
    <td>管理</td>
  </tr>
  <?php
  $admins=$Admin->all();
  foreach($admins as $admin){
  ?>
  <tr class="pp">
    <td class="ct"><?=$admin['acc'];?></td>
    <td class="ct"><?=str_repeat("*",strlen($admin['acc']));?></td>
    <td class="ct">
      <?php
        if($admin['acc']=='admin'){
          echo "此帳號為最高權限";
        }else{
          ?>
      <button onclick="lof('?do=edit_admin&id=<?=$admin['id'];?>')">修改</button>
      <button onclick="del('admin',<?=$admin['id'];?>)">刪除</button>
        <?php
        }
        ?>
    </td>
  </tr>
  <?php
  }
  ?>
</table>
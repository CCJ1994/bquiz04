<form action="api/add_goods.php" method="post">
  <h2 class="ct">新增商品</h2>
  <table class="all">
    <tr>
      <td class="tt">所屬大分類</td>
      <td class="pp">
      <select name="big" id="big" onchange="getMid()"></select>
      </td>
    </tr>
    <tr>
      <td class="tt">所屬中分類</td>
      <td class="pp">
      <select name="mid" id="mid" onchange="getMid()"></select>
      </td>
    </tr>
    <tr>
      <td class="tt">商品編號</td>
      <td class="pp">完成分類後自動分配</td>
    </tr>
    <tr>
      <td class="tt">商品名稱</td>
      <td class="pp"><input type="text" name="name"></td>
    </tr>
    <tr>
      <td class="tt">商品價格</td>
      <td class="pp"><input type="text" name="price"></td>
    </tr>
    <tr>
      <td class="tt">規格</td>
      <td class="pp"><input type="text" name="spec"></td>
    </tr>
    <tr>
      <td class="tt">庫存量</td>
      <td class="pp"><input type="number" name="quota"></td>
    </tr>
    <tr>
      <td class="tt">商品圖片</td>
      <td class="pp"><input type="file" name="img"></td>
    </tr>
    <tr>
      <td class="tt">商品介紹</td>
      <td class="pp"><textarea type="text" name="intro" style="width:90%;height:90px;"></textarea></td>
    </tr>
  </table>
  <div class="ct">
    <button type="submit">新增</button>
    <button type="reset">重置</button>
    <button type="button" onclick="lof('?do=th')">返回</button>
  </div>
</form>

<script>
getBig();
  function getBig(){
    
      $.get("api/get_big.php",function(bigs){
        $("#big").html(bigs);
        getMid();
      })
    
  }

  function getMid(){
    $.get("api/get_mid.php",{bigId:$("#big").val()},function(mids){
      $("#mid").html(mids);
        
      })
  }

</script>
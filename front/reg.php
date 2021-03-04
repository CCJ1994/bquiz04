<h1 class="ct">會員註冊</h1>
<form action="api/reg.php" method="post">
  <table class="all">
    <tr>
      <td class="tt ct">姓名</td>
      <td class="pp"><input type="text" name="name" id="name"></td>
    </tr>
    <tr>
      <td class="tt ct">帳號</td>
      <td class="pp"><input type="text" name="acc" id="acc"><button type="button" onclick="chkacc()">檢查帳號</button></td>
    </tr>
    <tr>
      <td class="tt ct">密碼</td>
      <td class="pp"><input type="password" name="pw" id="pw"></td>
    </tr>
    <tr>
      <td class="tt ct">電話</td>
      <td class="pp"><input type="text" name="tel" id="tel"></td>
    </tr>
    <tr>
      <td class="tt ct">住址</td>
      <td class="pp"><input type="text" name="addr" id="addr"></td>
    </tr>
    <tr>
      <td class="tt ct">電子信箱</td>
      <td class="pp"><input type="text" name="email" id="email"></td>
    </tr>
  </table>
  <div class="ct"><input type="button" onclick="reg()" value="註冊"><input type="reset" value="重置"></div>
</form>
<script>
function reg() {
  let 
    acc=$("#acc").val(),
    pw=$("#pw").val(),
    name=$("#name").val(),
    tel=$("#tel").val(),
    addr=$("#addr").val(),
    email=$("#email").val();
    $.post('api/chkacc.php',{acc},function (re) {
    if(parseInt(re) || acc=='admin'){
      alert("帳號已存在");
    }else{
      $.post('api/reg.php',{name,acc,pw,tel,addr,email},function (res) {
        alert("註冊完成");
        lof("?do=login");
      })
    }
    
  })
    
}
function chkacc() {
  let acc=$("#acc").val();
  $.post('api/chkacc.php',{acc},function (re) {
    if(parseInt(re) || acc=='admin'){
      alert("帳號已存在");
    }else{
      alert("帳號可以使用");
    }
    
  })
}
</script>
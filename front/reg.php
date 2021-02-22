<div>
  <h3 class="ct">會員登入</h3>
  <form action="" method="post">
    <table class="all">
      <tr>
        <td class="ct tt">姓名</td>
        <td class="pp"><input type="text" name="name" id="name"></td>
      </tr>
      <tr>
        <td class="ct tt">帳號</td>
        <td class="pp"><input type="text" name="acc" id="acc">
          <input type="button" value="檢測帳號" onclick="chkacc()">
        </td>
      </tr>
      <tr>
        <td class="ct tt">密碼</td>
        <td class="pp"><input type="password" name="pw" id="pw"></td>
      </tr>
      <tr>
        <td class="ct tt">電話</td>
        <td class="pp"><input type="text" name="tel" id="tel"></td>
      </tr>
      <tr>
        <td class="ct tt">住址</td>
        <td class="pp"><input type="text" name="addr" id="addr"></td>
      </tr>
      <tr>
        <td class="ct tt">電子信箱</td>
        <td class="pp"><input type="text" name="email" id="email"></td>
      </tr>

      <tr>
        <td colspan="2" class="ct">
          <input type="button" onclick="reg()" value="註冊">
          <input type="reset" value="重置">
        </td>
      </tr>
    </table>
  </form>
</div>
<script>
function reg() {
  let 
    acc=$("#acc").val(),
    pw=$("#pw").val(),
    email=$("#email").val(),
    addr=$("#addr").val(),
    tel=$("#tel").val(),
    name=$("#name").val();
    $.post('api/chkacc.php',{acc},function(re){
      if(parseInt(re) || acc=='admin'){
        alert("帳號已被使用")
      }else{
        $.post('api/reg.php',{name,acc,pw,tel,addr,email},function(){
          lof("index.php?do=login");
        })
      }
    })
}

    function chkacc(){
      let acc=$("#acc").val();
      $.post("api/chkacc.php",{acc},function(re){
        if(parseInt(re) || acc=='admin'){
        alert("帳號已被使用");
        }else{
        alert("帳號可使用");
        }
      })
    }
</script>
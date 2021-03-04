<form action="" method="">
  <table class="all " id="head">
      <tr>
        <td class="tt ct">帳號</td>
        <td class="pp"><input type="text" id="acc" name="acc" value=""></td>
      </tr>
      <tr>
        <td class="tt ct">密碼</td>
        <td class="pp"><input type="password" id="pw" name="pw" value=""></td>
      </tr>
      <tr>
        <td class="tt ct">驗證碼</td>
        <td class="pp">
        <span>
        <?php
        $a=rand(10,99);
        $b=rand(10,99);
        echo $a."+".$b."=";
        $_SESSION['ans']=$a+$b;
        ?>
        </span>
        <input type="text" id="ans" name="ans" value=""></td>
      </tr>
    <tr><td colspan="2" class="ct">
    <input type="button" value="確認" onclick="login('admin')">
    </td></tr>
  </table>
</form>

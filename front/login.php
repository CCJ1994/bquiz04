<div>
  <h3>第一次購物</h3>
  <a href="?do=reg" style="text-decoration:none;color:orange;">
    <img src="./icon/0413.jpg" alt="">
  </a>
</div>
<div>
  <h3>會員登入</h3>
    <table class="ct all">
      <tr>
        <td class="tt">帳號</td>
        <td class="pp"><input type="text" name="acc" id="acc"></td>
      </tr>
      <tr>
        <td class="tt">密碼</td>
        <td class="pp"><input type="password" name="pw" id="pw"></td>
      </tr>
      <tr>
        <td class="tt">驗證碼</td>
        <td class="pp">
        <?php
          $a=rand(10,99);
          $b=rand(10,99);
          $_SESSION['ans']=$a+$b;
          echo $a."+".$b."=";
        ?>
        <input type="text" name="ans" id="ans">
        </td>
      </tr>
      <tr>
        <td colspan="2" class="ct">
          <input type="button" onclick="login('mem')" value="確認">
        </td>
      </tr>
    </table>
</div>

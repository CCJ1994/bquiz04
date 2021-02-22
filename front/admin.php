<div>
  <h3 class="ct">管理登入</h3>
    <table class="all">
      <tr>
        <td class="tt ct">帳號</td>
        <td class="pp"><input type="text" name="acc" id="acc"></td>
      </tr>
      <tr>
        <td class="tt ct">密碼</td>
        <td class="pp"><input type="password" name="pw" id="pw"></td>
      </tr>
      <tr>
        <td class="tt ct">驗證碼</td>
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
          <input type="button" onclick="login('admin')" value="確認">
        </td>
      </tr>
    </table>
</div>

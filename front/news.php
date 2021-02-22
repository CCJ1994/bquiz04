<style>
#tb1,#tb2{
  display:none;
}
</style>
<h2 class="ct">最新消息</h2>
<div id="tb">
<div class="ct" style="color:red;">＊點擊標題觀看最新資訊</div>
<table class="all">
  <tr>
    <td class="tt ct">標題</td>
  </tr>
  <tr>
    <td class="pp" id="tit1">年終特賣會開跑了</td>
  </tr>
  <tr>
    <td class="pp" id="tit2">情人節特惠活動</td>
  </tr>
</table>
</div>
<table id="tb1" class="all">
  <tr>
    <td class="tt">標題</td>
    <td class="pp">年終特賣會開跑了</td>
  </tr>
  <tr>
    <td class="tt">內容</td>
    <td class="pp">即日期至年底，凡會員購物滿仟送佰，買越多送越多~</td>
  </tr>
  <tr>
    <td class="ct" colspan="2"><button type="button" onclick="lof('index.php?do=news')">返回</button></td>
  </tr>
</table >
<table id="tb2" class="all">
  <tr>
    <td class="tt">標題</td>
    <td class="pp">情人節特惠活動</td>
  </tr>
  <tr>
    <td class="tt">內容</td>
    <td class="pp">為了慶祝七夕情人節，將舉辦情人兩人到現場有七七折之特惠活動~</td>
  </tr>
  <tr>
    <td class="ct" colspan="2"><button type="button" onclick="lof('index.php?do=news')">返回</button></td>
  </tr>
</table>
<script>
  $("#tit1").on("click",function(){
    $("#tb").hide();
    $("#tb1").show();
  })
  $("#tit2").on("click",function(){
    $("#tb").hide();
    $("#tb2").show();
  })
</script>
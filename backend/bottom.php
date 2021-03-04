<h1 class="ct">頁尾版權管理</h1>
<table class="all " id="head">
  <tr>
    <td class="tt ct">標題</td>
  </tr>
  <tr>
    <td class="pp t1">年終特賣會開跑了</td>
  </tr>
  <tr>
    <td class="pp t2">情人節特惠活動</td>
  </tr>
</table>
<table class="all detail">
  <tr>
    <td class="tt ct">標題</td>
    <td class="pp sub"></td>
  </tr>
  <tr>
    <td class="tt ct">內容</td>
    <td class="pp content"></td>
  </tr>
  <tr><td colspan="2" class="ct"><button id="back">返回</button></td></tr>
</table>
<script>
$(".t1").on('click',function(){
  $("#head").hide();
  $(".sub").html($(".t1").text());
  $(".content").html("即日期至年底，凡會員購物滿仟送佰，買越多送越多~");
  $(".detail").show();
})
$(".t2").on('click',function(){
  $("#head").hide();
  $(".sub").html($(".t2").text());
  $(".content").html("情人節特惠活動內容為了慶祝七夕情人節，將舉辦情人兩人到現場有七七折之特惠活動~");
  $(".detail").show();
})
$("#back").on("click",function(){
  location.reload();
})
</script>
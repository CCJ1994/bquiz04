// JavaScript Document
function lof(x)
{
	location.href=x
}
function login(table){
	let acc=$("#acc").val(),
	pw=$("#pw").val(),
	ans=$("#ans").val();
	$.post('api/ans.php',{ans},function(res){
		if(parseInt(res)){
			$.post('api/login.php',{table,acc,pw},function(re){
				if(parseInt(re)){
					switch (table) {
						case 'admin':
							lof('backend.php');
							break;
						case 'mem':
							lof('index.php');
							break;
					}
				}else{
					alert("帳號或密碼錯誤");
				}
			})
		}else{
			alert("對不起，您輸入的驗證碼有誤請您重新登入");
		}
	})
}
function del(table,id) {
	$.post('api/del.php',{table,id},function (res) {
		location.reload();
	})
}
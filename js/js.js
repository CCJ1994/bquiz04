// JavaScript Document
function lof(x)
{
	location.href=x
}
function login(table){
	let 
		acc=$("#acc").val(),
		pw=$("#pw").val(),
		ans=$("#ans").val();
	$.post('api/ans.php',{ans},function(re){
		if(parseInt(re)){
			$.post('api/login.php',{table,acc,pw},function(result){
				if(parseInt(result)){
					switch(table){
						case 'mem':
							lof('index.php');
							break;
							case 'admin':
								lof('backend.php');
						break;
					}
				}else{
					alert("帳號密碼錯誤");
				}
			})
		}else{
			alert("對不起，您輸入的驗證碼有誤，請你重新登入");
		}
	})
}
function del(table,id){
	$.post('api/del.php',{table,id},function(res){
		location.reload();
	})
}
$(function(){
		/*传递数据到数据库*/
		$("#submit_info").click(function(){
			$.get("login.php", { 
						username :  $("#username").val() , 
						userkey :  $("#userkey").val()  
					}, function (data, textStatus){
                        $("#login_info").html(data); // 把返回的数据添加到页面上
					}
				);

			if($("#login_info").text() == "登录成功"){
	   			alert("登录成功");
	   		}
	   	})
	   	
});

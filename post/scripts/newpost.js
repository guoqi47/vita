$(function(){
	$("#submit").click(function(){
			$.get("newpost.php", { 
						title :  $("#newpost_title").val() , 
						content :  $("#newpost_content").val()  
					}, function (data, textStatus){
						$(".new").append("<div>"+data+"</div>");
                        //$("#resText").html(data); // 把返回的数据添加到页面上
					}
			);
	   }).hover(function () {
			$(this).stop().animate({
				opacity: '1'
			}, 600);
		}, function () {
			$(this).stop().animate({
				opacity: '0.8'
			}, 1000);
		});
})
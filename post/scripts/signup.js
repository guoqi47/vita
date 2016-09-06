$(function(){
	$("form :input").bind('input propertychange',function(){
		/*该句相比$("form :input").input(function(){可以实现实时检测*/
		var $parent = $(this).parent();
		$parent.find(".formtip").remove();


		if($(this).is("#username")){
			if(this.value=="" || this.value.length<6){
				$parent.append('<span class="formtip Error">' + "请输入至少六位的用户名" + '</span>');
				/*input是不是行内元素*/
			}else{
				$parent.append('<span class="formtip Success">' + "输入正确" + '</span>');
			}
		}else if($(this).is("#passwd_1")){
			if(this.value=="" || this.value.length<6){
				$parent.append('<span class="formtip Error">' + "密码至少六位" + '</span>');
			}else{
				$parent.append('<span class="formtip Success">' + "输入正确" + '</span>');
			}
		}else if($(this).is("#passwd_2")){
			if($("#passwd_1").val().length>=6){
				if($("#passwd_1").val() != $("#passwd_2").val()){
					$parent.append('<span class="formtip Error">' + "密码不一致" + '</span>');
				}else{
					$parent.append('<span class="formtip Success">' + "输入正确" + '</span>');
				}
			}
		}
	});

});
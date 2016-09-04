$(function(){
	    var $tab_li =$(".tab_menu ul li");
	    $tab_li.click(function(){
			$(this).addClass("selected")            
				   .siblings().removeClass("selected");  
            var index =  $tab_li.index(this);  
			$(".tab_box > div").eq(index).show()   
								  .siblings().hide(); 
		}).hover(function(){
			$(this).addClass("hover");
		},function(){
			$(this).removeClass("hover");
		})
})
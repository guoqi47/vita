/*function scroll(){
 $(".scrollNews ul").animate({"margin-top":"-20px"},2000,function(){
   $(".scrollNews ul li:eq(0)").appendTo($(".scrollNews ul"))
   $(".scrollNews ul").css({"margin-top":0})
 })
 }
  setInterval(scroll,1500);*/

  
$(function(){
    /*新闻滚动*/
    var $this = $(".scrollNews");
		var scrollTimer;
		$this.hover(function(){
			  clearInterval(scrollTimer);
		 },function(){
		   scrollTimer = setInterval(function(){
						 scrollNews( $this );
					}, 3000 );
		}).trigger("mouseleave");

    /*模块展开和关闭*/
    $(".module_up_down").toggle(function(){
          var $self = $(this);
          //slideToggle(speed,[callback])
          $self.prev().slideToggle(600,function(){
              $("img",$self).attr("src","images/up.gif");
          });
       },function(){
          var $self = $(this);
          $self.prev().slideToggle(600,function(){
              $("img",$self).attr("src","images/down.gif");
          });
     })
});
function scrollNews(obj){
   var $self = obj.find("ul:first"); 
   var lineHeight = $self.find("li:first").height(); //获取行高
   $self.animate({ "marginTop" : -lineHeight +"px" }, 600 , function(){
         $self.css({marginTop:0}).find("li:first").appendTo($self); //appendTo能直接移动元素
   })
}
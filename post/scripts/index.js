$(function(){
/*侧边栏随屏幕滚动*/
	$sidebar = $("#sidebar");
	$window = $(window);
	offset = $sidebar.offset();
	topPadding = 1;
	$window.scroll(function() {
	if ($window.scrollTop() > offset.top) {
	    $sidebar.stop().animate({
	    	marginTop: $window.scrollTop() - offset.top + topPadding
	    });
	} else{
	    $sidebar.stop().animate({
	    		marginTop: 0 
	    	});
   		}
	});

	/*点击帖子进入*/
	$(".con_left_list").hover(function(){
		$(this).css({background:'rgba(190, 208, 236, 0.14)'});
	},function(){
		$(this).css({background:'none'});
	}).click(function(){
		location.href="postdetail.html"
	});
});
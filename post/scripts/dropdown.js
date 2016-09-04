$(function(){
	$('.userbar ul li').hover(function(){
		$(this).children('ul').show();
	},function(){
		$(this).children('ul').hide();
	});
});

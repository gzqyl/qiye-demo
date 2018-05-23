// JavaScript Document
$(function(){
	//返回顶部
	$(window).scroll(function(){
		var top=$(window).scrollTop()
		if(top>=500){
			$('#toTop').fadeIn()
		}else{
			$('#toTop').fadeOut()
		}
	})
	$('#toTop').click(function(){
		$('body,html').animate({scrollTop:'0'},1000)
	})
})
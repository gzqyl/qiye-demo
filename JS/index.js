// JavaScript Document
$(function(){
	//伪类
	$(".contact_main>ul>li:last-child>span").css({'padding-top':'0'})
	$(".contact_main>ul>li:last-child>dl>dt").css({'padding':'0'})
	
	
	//返回顶部
	$(window).scroll(function(){
		var top=$(window).scrollTop()
		if(top>=1000){
			$('#toTop').fadeIn()
		}else{
			$('#toTop').fadeOut()
		}
	})
	$('#toTop').click(function(){
		$('body,html').animate({scrollTop:'0'},1000)
	})
})
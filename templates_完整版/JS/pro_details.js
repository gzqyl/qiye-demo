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
	
	//点小图放大图
	$('.details>ul>li').click(function(){
		var smallPic=$(this).children('img').attr('src')
		$('.big_pic>img').attr('src',smallPic)
		$(this).children('i').addClass('on')
		$(this).siblings().children('i').removeClass('on')
	})
})
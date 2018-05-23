// JavaScript Document
$(function(){
	$('#title').focus(function(){
		var searchValue=$('#title').val()
			$('#title').css({'border':'1px #999 solid'})
		if(searchValue=='标题'){
			$('#title').val('')
			$('#title').css({'color':'#000'})
		}
	})
	$('#title').blur(function(){
		var searchValue=$('#title').val()
			$('#title').css({'border':'1px #f2f2f2 solid'})
		if(searchValue==''){
			$('#title').val('标题')
			$('#title').css({'color':'#CCC'})
		}
	})
	$('#name').focus(function(){
		var searchValue=$('#name').val()
		$('#name').css({'border':'1px #999 solid'})
		if(searchValue=='姓名'){
			$('#name').val('')
			$('#name').css({'color':'#000'})
		}
	})
	$('#name').blur(function(){
		var searchValue=$('#name').val()
		$('#name').css({'border':'1px #f2f2f2 solid'})
		if(searchValue==''){
			$('#name').val('姓名')
			$('#name').css({'color':'#CCC'})
		}
	})
	$('textarea').focus(function(){
		var searchValue=$('textarea').val()
			$('textarea').css({'border':'1px #999 solid'})
		if(searchValue=='请在这里留言'){
			$('textarea').val('')
			$('textarea').css({'color':'#000'})
		}
	})
	$('textarea').blur(function(){
		var searchValue=$('textarea').val()
			$('textarea').css({'border':'1px #f2f2f2 solid'})
		if(searchValue==''){
			$('textarea').val('请在这里留言')
			$('textarea').css({'color':'#CCC'})
		}
	})
	$('#on').focus(function(){
		var searchValue=$('#on').val()
			$('#on').css({'border':'1px #999 solid'})
		if(searchValue=='验证码'){
			$('#on').val('')
			$('#on').css({'color':'#000'})
		}
	})
	$('#on').blur(function(){
		var searchValue=$('#on').val()
			$('#on').css({'border':'1px #f2f2f2 solid'})
		if(searchValue==''){
			$('#on').val('验证码')
			$('#on').css({'color':'#CCC'})
		}
	})
	
	//返回顶部
	$(window).scroll(function(){
		var top=$(window).scrollTop()
		if(top>=200){
			$('#toTop').fadeIn()
		}else{
			$('#toTop').fadeOut()
		}
	})
	$('#toTop').click(function(){
		$('body,html').animate({scrollTop:'0'},1000)
	})
})
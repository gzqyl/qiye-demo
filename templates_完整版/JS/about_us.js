// JavaScript Document
$(function(){
	$('.banner>ul>li:gt(0)').hide()
	var bj=$('.banner>ul>li').length
	var n=0
	var t
	function autoPlay(){
		$('.banner>ul>li').eq(n).show().siblings().hide()	
	}
	function auto(){
		t=setInterval(function(){
		n++
		if(n>=bj){
			n=0	
		}
		$('.banner>ul>li').eq(n).show().siblings().hide()	
	},1500)
	}
	auto()
	$('.banner').hover(function(){
		clearInterval(t)
	},function(){
		auto()
	})
	$('#last').click(function(){
		if(n<=0){
			n=bj	
		}
		n--
		autoPlay()
	})
	$('#next').click(function(){
		n++
		if(n>=bj){
			n=0	
		}
		autoPlay()	
	})

})
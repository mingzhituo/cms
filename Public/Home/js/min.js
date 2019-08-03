	function AutoScroll(obj){
			$(obj).find("ul:first").animate({
				marginTop:"-25px"
			},500,function(){
				$(this).css({marginTop:"0px"}).find("li:first").appendTo(this);
			});
		}
		$(document).ready(function(){
			setInterval('AutoScroll("#s1")',4000);
		});
 		
 				function AutoScroll(obj){
			$(obj).find("ul:first").animate({
				marginTop:"-25px"
			},500,function(){
				$(this).css({marginTop:"0px"}).find("li:first").appendTo(this);
			});
		}

		$(document).ready(function(){
			setInterval('AutoScroll("#s2")',6000);
		});


		$(document).ready(function(){

	$(".main_visual").hover(function(){
		$("#btn_prev,#btn_next").fadeIn()
	},function(){
		$("#btn_prev,#btn_next").fadeOut()
	});
	
	$dragBln = false;
	
	$(".main_image").touchSlider({
		flexible : true,
		speed : 1000,
		btn_prev : $("#btn_prev"),
		btn_next : $("#btn_next"),
		paging : $(".flicking_con a"),
		counter : function (e){
			$(".flicking_con a").removeClass("on").eq(e.current-1).addClass("on");
		}
	});
	
	$(".main_image").bind("mousedown", function() {
		$dragBln = false;
	});
	
	$(".main_image").bind("dragstart", function() {
		$dragBln = true;
	});
	
	$(".main_image a").click(function(){
		if($dragBln) {
			return false;
		}
	});
	
	timer = setInterval(function(){
		$("#btn_next").click();
	}, 6000);
	
	$(".main_visual").hover(function(){
		clearInterval(timer);
	},function(){
		timer = setInterval(function(){
			$("#btn_next").click();
		},6000);
	});
	
	$(".main_image").bind("touchstart",function(){
		clearInterval(timer);
	}).bind("touchend", function(){
		timer = setInterval(function(){
			$("#btn_next").click();
		}, 6000);
	});
	
});

function qc(){
var li=$('.you_xi li')
$('.you_xi li').eq(0).addClass('mei');
$('.you_xi li').eq(4).addClass('mei');

for (var i = li.length - 5; i >= 0; i--) {
	$('.you_xi li').eq(i).css('border-top','none')
}

}
qc()

function ou(a,b){
    a.click(function(){
	$(this).addClass('zhong').siblings().removeClass('zhong')
	b.eq($(this).index()).addClass('show').siblings().removeClass('show')

})
}
ou($('.tab3 a'),$('.table1 .hide'))
ou($('.tab2 a'),$('.nei_left4 .hide'))

// ou($('.taba a'),$('.at_right .in_right'))

$('.fua2').hover(function(){
$('.er_wei').show()
},function(){
$('.er_wei').hide()
}
)

$(function(){	
	$(window).scroll(function() {		
		if($(window).scrollTop() >= 519){ //向下滚动像素大于这个值时，即出现小火箭~
			$('.fu').addClass('fu1'); //火箭淡入的时间，越小出现的越快~
		}else{    
			$('.fu').removeClass('fu1'); //火箭淡出的时间，越小消失的越快~
		 }  
	});
	$('.fua3').click(function(){$('html,body').animate({scrollTop: '0px'}, 800);}); //火箭动画停留时间，越小消失的越快~
});

$(".xiaoer").hover(function(){
	$(this).parent().children("div.erweibei").show()
	},function(){
	$('.erweibei').hide()
}
)

$(".d_k").hover(function(){
	$(this).parent().children("div.er_xia").show()
	},function(){
	$(this).parent().children("div.er_xia").hide()
}
)

$('.gzhao').click(function(){
	var xian=$('.gzh').css('display')
	if(xian=='none'){
		$('.gzh').show()
	}else{
		$('.gzh').hide()
	}
})

$('.gzhao').hover(function(){
	var xian=$('.gzh').css('display')
	if(xian=='none'){
		$('.gzh').show()
	}else{
		$('.gzh').hide()
	}
})

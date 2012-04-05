(function($){
	$(function() {
		//ナビゲーション部分の動作
		$('nav li.trigger').hover(function() {
			$(this).find('ul.sub').slideDown('fast');
		}, function() {
			$(this).find('ul.sub').slideUp('fast');
		});
		
		//クイックリンク部分の動作
		var ql_height = $('#quicklink').outerHeight() * -1 + 75;
		$('#quicklink').css({top:ql_height, visibility:'visible'})
			.hover(function() {
				 //console.log('hover');
				$(this).stop().animate({top:0}, 300, 'easeInOutCirc');
			}, function() {
				//console.log('out');
				$(this).stop().animate({top:ql_height}, 600, 'easeOutBounce');
			});
		
		//ブロックリンク（案件リスト実装後）
		$('.grid li').each(function() {
			$(this).find('a').css({height:$(this).outerHeight()});
		});
		
		//アンカーリンクの調整
		if (anc = window.location.hash) {
			$("html,body").animate({scrollTop:$(anc).offset().top - 80});
		}
				
		//サービスパネル
		$('#bubble img').hide();
		//if ($.support['opacity']) {
			$('#fig-service a').each(function() {
				var cl = $(this).attr('class');
				
				$(this).hover(function() {
					if ($.support['opacity']) {
						$('#bubble_' + cl).fadeIn(400);
					} else {
						$('#bubble_' + cl).show();
					}
				}, function() {
					if ($.support['opacity']) {
						$('#bubble_' + cl).fadeOut(400);
					} else {
						$('#bubble_' + cl).hide();
					}
				});
			});
			$(document).mousemove(function(e) {
				$('#bubble').css({
					top:getMousePosition(e).y - 200,
					left:getMousePosition(e).x - 199
				});
			});
		//}
		
		// 背景画像フィッター
		$('#bg img').fitImg();
		$(window).resize(function() {$('#bg img').fitImg();});
		
		// 背景画像ローダー
		$('#bg').fadeIn(1800, 'swing');
		
		// 案件スライダー
		$('.slide').slider({
			speed:	600,
			easing:	'easeInBack'
		});
		
		// 案件キャプション
		$('.slide li').hover(function() {
			cap = $(this).find('.caption');
			h = cap.height();
			cap.animate({marginTop:h*-1}, 200, 'swing');
		}, function() {
			$(this).find('.caption').animate({marginTop:0}, 200, 'swing');
		});
		
		// リンク領域
		
		$('.trigger_link').hover(function() {
			$(this).find('a.permalink').addClass('on');
		}, function() {
			$(this).find('a.permalink').removeClass('on');
		});
	});
	
	
	init();
	
})(jQuery);

function getMousePosition(e) {
	var obj = new Object();
	 
	if (e) {
		obj.x = e.clientX;
		obj.y = e.clientY;
	} else {
		obj.x = event.x;// + document.body.scrollLeft;
		obj.y = event.y;// + document.body.scrollTop;
	}
	 
	return obj;
}

function init() {
	$(".trigger_link").one('click', function(){
         window.location=$(this).find("a.permalink").attr("href");
         return false;
    });
      
    $(".trigger_link").hover(function(){
       		cap = $(this).find('.cap:not(:animated)');
			h = cap.height();
			cap.animate({marginTop:h*-1}, 200, 'swing');
			$(this).addClass('on');
			$(this).find('h3').css("color","#0588C6");
	    },
	    function(){
	     	$(this).find('.cap').animate({marginTop:0}, 200, 'swing');
	     	$(this).removeClass('on');
	     	$(this).find('h3').css("color","grey");
     	}
    );
}




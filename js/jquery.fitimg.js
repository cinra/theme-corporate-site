(function() {
	$.fn.fitImg = function() {
		winWidth = $(window).width();
		winHeight = $(window).height();
		ratio = winWidth / winHeight;
		
		//alert(1400/900);   1.555555556
		
		if (ratio > 1.55555) {//横幅が大きい場合：縦幅をwinHeightに合わせて、900/winHeightを横幅にかける
			tarWidth = winWidth;
			tarHeight = 900 * (winWidth / 1400);
		} else {//縦幅が大きい場合：横幅をwinWidthに合わせて、1400/winWidthを縦幅にかける
			tarHeight = winHeight;
			tarWidth = 1400 * (winHeight / 900);
		}
		
		$(this).width(tarWidth).height(tarHeight);
		//$('#bg').css('top', winHeight - tarHeight);
		//$('#bg').css('left', (tarHeight - winHeight) / 2);
	}
})(jQuery);
jQuery(document).ready(function($) {
		// preloader
		$(window).on('load', function() { 
  			$('#status').fadeOut(5000);
 			$('#preloader').delay(1500).fadeOut("slow");
 			$('body').delay(1500).css({
 				height: 'auto',
 				overflow: 'visible'
 			});
		});

		// nice scroll
		$(document).ready(
			function() {
				$("html").niceScroll();
			}
		);

		// navigation color
		$(window).ready(function(event) {
			for (var i = 0; i < $('.color_nav').length; i++) {	
				var obj = $('.color_nav').eq(i).attr('id');
      			$('.scroll').removeClass('color');
				$('li[data-section$='+obj+']').addClass('color');
			};
		});


		// mobile burger
		$(".burger").click(function(event) {
			if(!$(".header_main ul").hasClass('black')){
				$(this).children('img').css('transform', 'rotate(360deg)').attr('src','/images/close.png');
				$(".header_main ul").css('background', 'black').slideDown().addClass('black');
			}else{
				$(this).children('img').css('transform', 'rotate(-360deg)').attr('src','/images/burger.png');
				$(".header_main ul").slideUp().css('background', 'black').removeClass('black');
			}
		});
		$(window).resize(function(event) {
				if ($(window).innerWidth()>768) {
					$(".header_main ul").css('display', 'block');
				}else{
					$(".header_main ul").css('display', 'none');
				}
		});

		// scale
		$('.gallery_images').hover(function() {
			$(this).children('a').children('img').css('transform','scale(1.11)');
		}, function() {
			$(this).children('a').children('img').css('transform','scale(1)');
		});

		// player

		$(".red_div").click(function(e) {
				$('.player').slideDown();
				var data=$(this).siblings('.img_songs').data();
				var attrAudio = $('audio').attr('src');
				var red = $(".red_div");
				if (!$(this).hasClass('play') ) {
					red.removeClass('play');
					Array.prototype.forEach.call(red,function(e){
						e.children[0].src = '/images/play.png'
					})
					$(this).children('img').attr('src','/images/pause.png');
					if(data.img !== attrAudio) {
						$(".singer_player").attr('src', data.img);
					}
						$(this).addClass('play');
					}else{
						$(this).removeClass('play');
						$(this).children('img').attr('src','/images/play.png');
				}
				$('button')[0].click();
				
			});

				
				 $('button').attr('aria-controls', 'mep_0').eq(0).addClass('as').css('opacity', '0');

					
				
			


		// scrollTop
		$('.up').click(function(event) {
			$('body').animate({"scrollTop": "0"}, 350);
		});
		

		//  body animation


		$(document).ready(function() {
			if ($(window).innerWidth()>1024) {
					 $.fn.visible = function(partial) {
    
      var $t            = $(this),
          $w            = $(window),
          viewTop       = $w.scrollTop(),
          viewBottom    = viewTop + $w.height(),
          _top          = $t.offset().top,
          _bottom       = _top + $t.height(),
          compareTop    = partial === true ? _bottom : _top,
          compareBottom = partial === true ? _top : _bottom;
    
    return ((compareBottom <= viewBottom) && (compareTop >= viewTop));

  };
			var win = $(window);
		var allMods = $(".module");
		allMods.each(function(i, el) {
		var el = $(el);
		if (el.visible(true)) {
		el.addClass("already-visible");
		}
		});
		win.scroll(function(event) {
		
		allMods.each(function(i, el) {
		var el = $(el);
		if (el.visible(true)) {
		el.addClass("come-in");
		}
		});
		});
			}
		});

});		
		
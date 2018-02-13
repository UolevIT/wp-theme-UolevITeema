$(function() {
	      $('a[href*="#"]:not([href="#"])').click(function() {
	        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	          var target = $(this.hash);
	          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	          if (target.length) {
	            $('html, body').animate({
	              scrollTop: target.offset().top
	            }, 1000);
	            return false;
	          }
	        }
	      });
	    });

$(window).scroll(function() {
	if ($(this).scrollTop() >= 400) {        
		$('#return-to-top').fadeIn(500);    
	} else {
		$('#return-to-top').fadeOut(500);   
		}
	});
		$('#return-to-top').click(function() {      
			$('body,html').animate({
			    scrollTop : 0                       
		}, 1000);
	});
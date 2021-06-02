'use-strict';

document.addEventListener('DOMContentLoaded', function(){
	window.$ = window.jQuery;
  $(window).on('scroll load', function() {
		if ($(".navbar").offset().top > 60) {
			$(".fixed-top").addClass("top-nav-collapse");
		} else {
			$(".fixed-top").removeClass("top-nav-collapse");
		}
    });
    
	// jQuery for page scrolling feature - requires jQuery Easing plugin
	$(function() {
		$('.page-scroll').on('click', function(event) {
			event.preventDefault();
			var $anchor = $(this);
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top
			}, 500);
			
		});
  });

	let amountScrolled = 400;
	$(window).scroll(function() {
			if ($(window).scrollTop() > amountScrolled) {
					$('a.back-to-top').fadeIn('500');
			} else {
					$('a.back-to-top').fadeOut('500');
			}
	});

	let menuToggled = false
	$('.navbar-toggler').on('click', function(){
		menuToggled = !menuToggled
		if (menuToggled) {
			$('.navbar-toggler').html('<span class="bi-x-lg"></span>')
			$('.navbar-mobile').addClass('toggled')
		} else {
			$('.navbar-toggler').html('<span class="navbar-toggler-icon"></span>')
			$('.navbar-mobile').removeClass('toggled')
		}
	})

	document.querySelector('#navbarSupportedContent').addEventListener('show.bs.collapse', function(){
		$('.navbar-toggler').html('<span class="bi-x-lg"></span>')
	})
	document.querySelector('#navbarSupportedContent').addEventListener('hide.bs.collapse', function(){
		$('.navbar-toggler').html('<span class="navbar-toggler-icon"></span>')
	})
})
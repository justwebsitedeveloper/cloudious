$(document).ready(function(){$(window).scroll(function(){if($(this).scrollTop()>100){$('.scrollToTop').fadeIn();$('#header_top').hide();$('.header_menu').addClass('sticky_header');$('.navbar-collapse').addClass('martop');$('nav').addClass('martopzero');$('.big_logo').hide();$('.small_logo').show();$('.navbar-brand img').attr('src','images/logo2.png');}else{$('.scrollToTop').fadeOut();$('#header_top').show();$('.header_menu').removeClass('sticky_header');$('.navbar-collapse').removeClass('martop');$('nav').removeClass('martopzero');$('.big_logo').show();$('.small_logo').hide();$('.navbar-brand img').attr('src','images/logo1.png');}});$('.scrollToTop').click(function(){$('html, body').animate({scrollTop:0},800);return false;});});$(function(){$("header a[href^='#']").click(function(e){var target=$(this).attr("href");$("html, body").animate({scrollTop:$(target).offset().top-$("header").outerHeight()-100});e.preventDefault();});});var site_path='/';jQuery(document).ready(function($){jQuery(window).load(function(){jQuery(".loading").hide();});jQuery('.animated').appear({loop:true});jQuery(document.body).on('appear','.fadeInUpNow',function(){jQuery(this).each(function(){jQuery(this).addClass('fadeInUp')});});jQuery(document.body).on('appear','.fadeInDownNow',function(){jQuery(this).each(function(){jQuery(this).addClass('fadeInDown')});});jQuery(document.body).on('appear','.fadeInLeftNow',function(){jQuery(this).each(function(){jQuery(this).addClass('fadeInLeft')});});jQuery(document.body).on('appear','.fadeInRightNow',function(){jQuery(this).each(function(){jQuery(this).addClass('fadeInRight')});});jQuery(document.body).on('appear','.slideInLeftNow',function(){jQuery(this).each(function(){jQuery(this).addClass('slideInLeft')});});jQuery(document.body).on('appear','.slideInRightNow',function(){jQuery(this).each(function(){jQuery(this).addClass('slideInRight')});});jQuery(document.body).on('appear','.slideInDownNow',function(){jQuery(this).each(function(){jQuery(this).addClass('slideInDown')});});jQuery(document.body).on('appear','.slideInUpNow',function(){jQuery(this).each(function(){jQuery(this).addClass('slideInUp')});});});function updateFilters(){$('h1.referral').remove();$('.j-paginate.juicer-button').remove()};

function openNav() {

	var han = window.innerWidth;

	if(han < 400){
		document.getElementById("mySidenav").style.width = "90vw";
	}
	else{
		document.getElementById("mySidenav").style.width = "70vw";
	}

}

function closeNav() {
	document.getElementById("mySidenav").style.width = "0";
}

$(document).ready(function () {
	$('.group').hide();
	$('#option1').show();
	$('#selectMe').change(function () {
		$('.group').hide();
		$('#'+$(this).val()).show();
	})

	$('#selectmob').change(function () {
		$('.group').hide();
		$('#'+$(this).val()).show();
	})
});

$('#tweets2').hammer().bind('swipeleft', function (event)   {
	$(event.target).carousel('next');
});

$('#tweets2').hammer().bind('swiperight', function (event) {
	$(event.target).carousel('prev');
});

$('#myCarousel1').hammer().bind('swipeleft', function (event)   {
	$(event.target).carousel('next');
});

$('#myCarousel1').hammer().bind('swiperight', function (event) {
	$(event.target).carousel('prev');
});



$('#myCarousel').hammer().bind('swipeleft', function (event)   {
	$(event.target).carousel('next');
});

$('#myCarousel').hammer().bind('swiperight', function (event) {
	$(event.target).carousel('prev');
});

$(document).ready(function(){
	$('#hamburger').mouseover(function(){
		$('#hamburger div').css({
			backgroundColor: 'grey',
		})
	})
	$('#hamburger').mouseout(function(){
		$('#hamburger div').css({
			backgroundColor: 'black',
		})
	})
	$('nav ul li').mouseover(function(){
		$link = $(this);

		$('nav ul li span').removeClass('active');
		$link.find('span').addClass('active');
	})

	$('#catalog').mouseover(function(){
		$('#catalog nav').css({
			display: 'block',
			opacity: 0
		})
		.animate({
			opacity: 1
		},300)
	})
	$('#catalog nav').mouseout(function(){
		$('#catalog nav').css({
			display: 'none'
		})
	})
})
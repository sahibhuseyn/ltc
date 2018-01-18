$(function () {
	"use strict";
	$(window).on("scroll", function() {
		   if($(window).scrollTop() > 0) {
				$("#header-fix").addClass("active");
               $('.top__header').css('margin-top' , '-30px')

           } else {
			$("#header-fix").removeClass("active");
               $('.top__header').css('margin-top' , '')

           }
		});
    $('#accordion a[data-toggle="collapse"]').on('click', function () {
            $(this).closest('.card').toggleClass('bg__blue');

    });

    $('ul.navbar-nav li.dropdown').hover(function() {
        var dropDown =$(this).find('.dropdown-menu');
        dropDown.stop(true, true).delay(200).fadeIn(500);
    }, function() {
        var dropDown =$(this).find('.dropdown-menu');

        dropDown.stop(true, true).delay(200).fadeOut(500);
    });




});
	
	
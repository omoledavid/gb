/** 
 *------------------------------------------------------------------------------
 * @package       T3 Framework for Joomla!
 *------------------------------------------------------------------------------
 * @copyright     Copyright (C) 2004-2013 JoomlArt.com. All Rights Reserved.
 * @license       GNU General Public License version 2 or later; see LICENSE.txt
 * @authors       JoomlArt, JoomlaBamboo, (contribute to this project at github 
 *                & Google group to become co-author)
 * @Google group: https://groups.google.com/forum/#!forum/t3fw
 * @Link:         http://t3-framework.org 
 *------------------------------------------------------------------------------
 */
 
 
 
(function($){
	$(document).click(function () {
		$(".searchBox").removeClass("show");
		$(".searchBoxClose").removeClass("show");
	});
	function searchBtn() {
		var n = $(".header__menu-search > img")
		  , m = $(".searchBoxClose");
		n.on("click", function(e) {
			e.stopPropagation();
			$(".searchBox").addClass("show");
			$(".searchBoxClose").addClass("show");
			$("#mod-search-searchword").focus();
		})
		
		m.on("click", function() {
			e.removeClass("show");
			m.removeClass("show");
		})
		
	}
	function menuBtn() {
		var n = $(".header__menu-moblie")
		  , e = $(".mobileMenu-fixed");
		n.on("click", function() {
			e.toggleClass("navDraw")
		})
	}


	//document ready
	$(document).ready(function(){
		$(window).trigger('resize');

		// Off-canvas accordion menu
		$('.accordionMenu').find('li.active').addClass('open');	
		$('.accordionMenu').find('li.active').children('.dropdown-menu').addClass('open').show();
					
		$( '.accordionMenu .dropdown > span.accordion' ).on( 'click', function ( e ) {
			//var el = $(this).next('ul.dropdown-menu');
			
			var element = $(this).parent('li');
			if (element.hasClass('open')) {
				element.removeClass('open');
				element.find('li').removeClass('open');
				element.find('ul').hide();
			} else {
				element.addClass('open');
				element.children('ul').show();
				element.siblings('li').children('ul').hide();
				element.siblings('li').removeClass('open');
				element.siblings('li').find('li').removeClass('open');
				element.siblings('li').find('ul').hide();
			}			
		} );
				
		$('.accordionMenu .dropdown > a').click(function() {
		location.href = this.href;
		});		
	});
	$(window).on('resize',function() {
			searchBtn(),
			menuBtn()
	});

})(jQuery);
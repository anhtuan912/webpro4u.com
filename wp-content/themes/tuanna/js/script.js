function init() {
	clickableBlock();
	stickyMenu();
	footerParallax();
}

function modalEquipe() {
	$(document).ready(function() {
		$document = $(this);
		$modal = $('.popup_bg');
		$container = $modal.children('.container');
		
		$document.on('click', '.membre .over button', function() {
			$button = $(this);
			$membre = $button.closest('.membre');
			$popup = $membre.find('.popup');
			
			$container.html($popup.html());
			
			$modal.fadeIn(250).addClass('open');
			$margin = $(window).height() - $container.height();
			$container.css({'margin-top':$margin/2, 'opacity': 1});
			$('body').css({'overflow':'hidden'});
		});
		
		$document.on('click', '.popup_bg.open', function() {
			$modal.fadeOut(250).removeClass('open');
			$('body').css({'overflow':'auto'});
		});
	});
}

function stickyMenu() {	
	jQuery(document).ready(function() {
		$body = jQuery('body');
		$bodyWidth = $body.width();
		$menu = jQuery('.menu_fixe');
		$menuHeight = $menu.height();
		$logo = $menu.find('.home');
		
		jQuery(window).resize(function() {
			$bodyWidth = $body.width();
			$menuHeight = $menu.height();
			
			// Si on est en dessous de 1200 et que le menu fixe n'est pas replié, on l'enlève (prend trop de place en version mobile)
			if($bodyWidth < 1200 && $menu.css('top') != -$menuHeight) {
				$menuHeight = $menu.height();
				$menu.css({'top': -$menuHeight});
				$logo.css({'transform': 'translateX(0) rotate(0)'});
				
				$menu.removeClass('sticky');
			}
		});
		
		// Gestion du menu fixe
		jQuery(window).scroll(function() {
			$position = jQuery(window).scrollTop();
			
			if($position > 200) {
				if(!$menu.hasClass('sticky')) {
					$menu.css({'top':'0px'});
					if($bodyWidth < 768) {
						$logo.css({'transform': 'translateX(40px) rotate(360deg)'});
					} else {
						$logo.css({'transform': 'translateX(120px) rotate(360deg)'});
					}
					
					$menu.addClass('sticky');
				}
			} else {
				$menu.css({'top': -$menuHeight});
				$logo.css({'transform': 'translateX(0) rotate(0)'});
				jQuery('nav.open').removeClass('open');
				
				$menu.removeClass('sticky').removeClass('open');
			}
		});
		
		jQuery('.menu_mobile').on('click', function(e) {
			e.preventDefault();
			
			$button = jQuery(this);
			$navigation = $button.siblings('nav');
			$socialBlock = $button.siblings('nav');
		
			if(!$navigation.hasClass('open')) {
				$navigation.addClass('open');
				$menu.addClass('open');
				$socialBlock.show();
			} else {
				$navigation.removeClass('open');
				$menu.removeClass('open');
			}
		});
	});
}

function loadMoreProducts(cid) {
	jQuery(document).ready(function() {
		
		$button = jQuery('.moreProducts');
		$references = jQuery('.references .list');
		
		$button.on('click', function(e) {
			$input = jQuery('input[name="nbProducts"]');
			$nbProductsAlreadyLoaded = parseInt($input.val()) + 12;
			
			e.preventDefault();
			jQuery.ajax({
				url: "/index.php?option=com_flexicontent&view=category&cid="+cid+"&Itemid=24&limitstart="+$nbProductsAlreadyLoaded,
				type: "GET",
				dataType: "html",
				success: function(returnData) {
					$newButton = jQuery(returnData).find('.moreProducts');
					$newProduct = jQuery(returnData).find('.references .list').html();
					$references.append($newProduct);
					$input.val($nbProductsAlreadyLoaded);
					if($newButton.length == 0) {
						$button.hide();
					}
				}
			});
		});
	});
}	

function footerParallax() {
	jQuery(document).ready(function() {
		$container = jQuery('#bandeau-contact');
		$containerLink = $container.find('.custom');
		$bgPositionTop = $container.offset().top;
		$windowHeight = jQuery(window).height();

		$startParallax = $bgPositionTop - $windowHeight;

		jQuery(window).scroll(function() {
			$scrollTop = jQuery(window).scrollTop();
			if($scrollTop > $startParallax)
			{
				$bgOffset = ($startParallax - $scrollTop) * 0.4;
				$linkOffset = (20 + $startParallax - $scrollTop) * 0.15;
				
				$container.css({'background-position': '0px ' + $bgOffset + 'px'});
				$containerLink.css({'margin-top': -$linkOffset + 'px'});
			}
		});

		
	});
}

function clickableBlock() {
	jQuery(document).ready(function() {
		jQuery('.clickable-block').on('click', function() {
			window.location = $(this).find('a').attr('href');
		});
	});
}
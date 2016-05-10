$(window).load(function() {
	var container = $('#testimonial-cont');
	container.imagesLoaded( function(){
	  container.masonry({ 	
		itemSelector: '.testimonial',
		  columnWidth: function( containerWidth ) {
		    return containerWidth / 3;
		  }
		});
	});	
	// 
	// var container = $('#gallery #container');
	// container.imagesLoaded( function(){
	//   container.masonry({ 	
	// 	itemSelector: '#gallery #container .wp-caption',
	// 	  columnWidth: function( containerWidth ) {
	// 	    return containerWidth / 3;
	// 	  }
	// 	});
	// });
	GalleryCalculations();
	
});

$(document).ready(function() {
	$('#header, #footer, #main-wrap').fadeIn('slow');
	$('<div class="overlay" />').appendTo('#gallery .wp-caption a');
	GalleryCalculations();
	GalleryHover();
	$('#gallery .wp-caption-text').each(function() {
		$(this).wrapInner('<span></span>');
	});
	
	//$('.gallery-grid a').fancybox();


});

function GalleryCalculations() {
	$('#gallery #container img').each(function(){ 
		//$(this).removeAttr('width')
 		//$(this).removeAttr('height');
 		
 		$(this).parent().attr('rel', 'lightbox[12]');
 		
		var imgW = $(this).width();
		var imgH = $(this).height();
		if(imgW > imgH) {
			$(this).css({'width':650, 'height':'450'});
		} else if(imgW < imgH) {
			$(this).css({'width':325, 'height':'450'});
		}
		var newW = $(this).width();
		var newH = $(this).height();
		$(this).css({'width':newW, 'height':newH});
		$(this).parent('#gallery .wp-caption a').each(function() {
			$(this).css({'width':newW, 'height':newH});
		});

		$(this).siblings('.overlay').each(function() {
			$(this).css({'width':newW, 'height':newH - 38, 'marginTop': - newH - 5 +'px'});
		});
		$(this).parent('#gallery .wp-caption a').siblings('.wp-caption-text').each(function() {
			var textH = $(this).height();
			$(this).css({'width':newW});
			if(textH > 40) {$(this).css({'marginTop':-54});}
		});
		$(this).parent('#gallery .wp-caption a').parent('.wp-caption').each(function() {
			$(this).css({'width':newW, 'height':newH});
		});
 
 	});
}

function GalleryHover() {
	$('#gallery .wp-caption').each(function() {
		$(this).on({
			mouseenter: function(){$(this).children('a').children('.overlay').fadeIn(); $(this).children('.wp-caption-text').fadeIn();},
			mouseleave: function(){$(this).children('a').children('.overlay').fadeOut(); $(this).children('.wp-caption-text').fadeOut();}
		});
	});
}



// JavaScript Document
	jQuery('.tab-content .icons').hide();
	
	AOS.init({
	   once: true
    });

	jQuery(".nav-overlay").fadeOut();
    
	//language dd menu
	jQuery(document).ready(function(){
		jQuery(".lang .selected").click(function() {
		   jQuery(".lang ul").fadeToggle(100); 
			jQuery(this).toggleClass('active');
		});
		jQuery(".lang ul li a").click(function() {
		   // jQuery(".selected").text(jQuery(this).text());
		   jQuery(".selected").html(jQuery(this));  
			jQuery(".lang ul").fadeOut(100); 
			jQuery(".selected").toggleClass('active');
		});
		
		//tab menu
		jQuery('.icon-tab li a').on('click', function (event) {
			event.preventDefault();

			jQuery('.active').removeClass('active');
			jQuery(this).addClass('active');
			jQuery('.tab-content .icons').hide();
			jQuery(jQuery(this).attr('href')).show();
		});
		jQuery('.icon-tab li a:first').trigger('click');
		
		//menu
		jQuery(".navMenu").click(function() {
			jQuery(".nav").addClass('active');
			jQuery(".nav-overlay").fadeToggle();
			jQuery(this).toggleClass('active'); 
		});
		jQuery("#nav-close").click(function() {
			jQuery(".nav").removeClass('active');
			jQuery(".nav-overlay").fadeOut();
			jQuery(".navMenu").removeClass('active'); 
		});
		jQuery(".nav-overlay").click(function() {
			jQuery(".nav").removeClass('active');
			jQuery(".navMenu").removeClass('active'); 
			jQuery(this).fadeOut();
		});
		
		jQuery('.form-group input').focus(function () {
            jQuery(this).parents('.form-group').addClass('focused');
        });

		jQuery('.form-group input').blur(function () {
		  var inputValue = jQuery(this).val();
		  if (inputValue == '') {
			jQuery(this).removeClass('filled');
			jQuery(this).parents('.form-group').removeClass('focused');
		  } else {
			jQuery(this).addClass('filled');
		  }
		});
		
		jQuery(window).scroll(function(){
			if (jQuery(this).scrollTop() > 100) 
			{
				jQuery('.scroll_To_Top').fadeIn();
			} 
			else 
			{
				jQuery('.scroll_To_Top').fadeOut();
			}
		});
	

	jQuery('.scroll_To_Top').click(function(){
		jQuery('html, body').animate({scrollTop : 0},700);
		return false;
	});
		
		

       
    
    //banner
	/*jQuery('#banner').owlCarousel({
		loop:false,
		margin:0,
		items:1,
		autoplay:true,
		autoplayTimeout:7000,
		ltr:true,
		nav:false,
		dots: true,
		mouseDrag:true,
		addClassActive: true
	});
		*/
		
		
	var owl = jQuery('#banner');

  owl.owlCarousel({
   loop:true,
		margin:0,
		items:1,
		autoplay:true,
		autoplayTimeout:7000,
		ltr:true,
		nav:false,
		dots: true,
		mouseDrag:true,
		addClassActive: true
  });

  owl.on('changed.owl.carousel', function(event) {
      var item = event.item.index - 2;     // Position of the current item
	  jQuery('a').removeClass('animated fadeInUp');
      jQuery('.owl-item').not('.cloned').eq(item).find('a').addClass('animated fadeInUp');
	  
	  jQuery('h1').removeClass('animated fadeInLeft');
      jQuery('.owl-item').not('.cloned').eq(item).find('h1').addClass('animated fadeInLeft');
  });
 
		

    //testimonials                    
	jQuery('#tm-carousel').owlCarousel({
		autoplay: true,
        center: true,
        loop: true,
        nav: false,
		items:3,
		dots: false,
		lazyLoad: true,
		autoplayTimeout:9000, 
		margin:10,
		responsive:{
			0:{
				items:1,
				 center: false
			},
			768:{
				items:2
			},
			1024:{
				items:3
			}

		}
		
  });
	var highestBox = 0;
	    jQuery('.offer-sec .shadowbox').each(function(){  
	            if(jQuery(this).height() > highestBox){  
	            highestBox = jQuery(this).height();  
	    }
	});    
	jQuery('.offer-sec .shadowbox').height(highestBox);

});


// popup
		jQuery(".rm-open").on("click", function() {
			jQuery('#pd-' + jQuery(this).attr('id')).fadeToggle();
        });

       //removes the "active" class to .popup and .popup-content when the "Close" button is clicked 
		jQuery(".rm-close").on("click", function() {
		  jQuery(".rm-overlay").fadeOut();
			
		});


 jQuery(window).on('load', function(){
    jQuery(".nav-ul a").each(function() {
      if ((window.location.pathname.indexOf(jQuery(this).attr('href'))) > -1) {
        jQuery(this).parent().addClass('current');
        
      }
    });
  });



 //    jQuery(window).on('load', function(){
  		
	//     	jQuery(".nav ul a").each(function() {

	//     			alert(jQuery(this).attr('href'))


	// 		      if ((window.location.pathname.indexOf(jQuery(this).attr('href'))) > -1) {
			        	
	// 		        	jQuery(this).addClass('current');
			        
	// 		      } 

	// 	    });
	// });
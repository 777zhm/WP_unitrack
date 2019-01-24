(function($) {

	$( document ).ready(function() {
		
		$('.open_submenu a').click(function(){
			$('.uni_block').slideToggle();
		});
		$('.load_more_opportunities').click(function(){
			$('.more_opportunities').slideDown();
			$('.more_opportunities').css('display', 'flex');
			$(this).hide();
		});



		$('.partners_slider').owlCarousel({
			navigation : false,
			pagination : false,
		      items : 5,
		      itemsDesktop : [1199,4],
		      itemsDesktopSmall : [979,3],
			autoPlay : 3500
		});



	   $('.contact_form').submit(function(e){
	    	e.preventDefault();
	    	send_contact_form( $(this) );

	        console.log('submit');
	   })


	  function send_contact_form( form ) {
	    var form_data = form.serialize();
		  form_data += '&action=contact_form';
	      $.ajax({
	      type: 'POST',
			url: '/wp-admin/admin-ajax.php',
	      dataType: 'json',
	      data: form_data,
	      beforeSend: function() {
	        $('#load_banner').children('.popup_bg').fadeIn();  
	      },
	      success: function() {
	        $('#load_banner').children('.popup_bg').fadeOut();  
	        $('#success_banner').children('.popup_bg').fadeIn();  
	        clearForm( form );
	        
	        $('.modal').hide();
			$('.modal-backdrop').hide();


	      },
	      error: function(){
	        console.log('error');
	      }
	      });
	  }

    function show_ok() {
    	$('#load_banner').children('.popup_bg').fadeOut();  
	    $('#success_banner').children('.popup_bg').fadeIn();  
    }
	function clearForm(container) {
        container.find("input[type=text], input[type=file], input[type=tel]  input[type=email], input[type=password], textarea").each(function() {
            $(this).val("");
        });
    }

	$('.popup_bg').mousedown(function(e) {
		var clicked = $(e.target); // get the element clicked
		if (clicked.is('.popup') || clicked.parents().is('.popup')) {
			return;
		} else {
			$('.popup_bg').hide();
		}        
	});






	$(window).mousemove(function(e) {
		var change;
		var xpos=e.clientX;
		var ypos=e.clientY;
		var y_bottom_pos = $(window).height() - e.clientY;
		var left= change*20;
		var  xpos=xpos*2;ypos=ypos*2;

		$('.satelite_artbord .satelite_mouse').css('bottom', 'calc( -3vw ' + ' + ' + (y_bottom_pos/25) + 'px )' );

		$('.satelite_artbord .satelite_server').css('top',  (y_bottom_pos/35) + 'px').css('right', 'calc( 20vw ' + ' - ' + (xpos/40) + 'px )' );

		$('.satelite_artbord .satelite_gps').css('bottom', 'calc( 5vw ' + ' + ' + (y_bottom_pos/45) + 'px )').css('right',  (xpos/45) + 'px' );
		


		$('.man').css('right',(( 0+(xpos/80))+"px"));

	});

	// Start Backtotop button	      
	$('.backtotop_button').click(function(){ 
        $('html,body').animate({ scrollTop: 0 } );
        return false; 
	});
	// End Backtotop button

	});

})( jQuery );




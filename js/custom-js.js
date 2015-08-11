//jQuery.noConflict();
jQuery(document).ready(function(){
	jQuery("#button1").click(function(){
		//alert('Hello');
		jQuery('#domestic').show();
		jQuery('#international').hide();
	})

	jQuery('#button2').click(function(){
		// jQuery('domestic').hide();
		jQuery('#domestic').hide();
		jQuery('#international').show();

	})

	jQuery("#button3").click(function(){
		//alert('Hello');
		jQuery('#domesticpackages').show();
		jQuery('#internationalpackages').hide();
	})

	jQuery('#button4').click(function(){
		// jQuery('domestic').hide();
		jQuery('#domesticpackages').hide();
		jQuery('#internationalpackages').show();

	})
	
	
});




  jQuery(function() {
    jQuery( "#dfromdate" ).datepicker({
    	minDate:0,
    	dateFormat:"dd/mm/yy",
    	changeMonth:true,
    	changeYear:true,
    	showOn: "button",
       	buttonImage:'http://localhost/workshop/wp-content/uploads/2015/08/calendar.gif',
       	buttonImageOnly:true,
       	onSelect:function(){
       		var theDate=new Date();
       		theDate.setDate("minDate");
       		jQuery(this).datepicker('option','minDate',theDate);
       	},
    	onClose:function(){
    		var theDate = new Date(jQuery(this).datepicker('getDate'));
	        // this sets "theDate" 1 day forward of start date
	        theDate.setDate(theDate.getDate() + 1);
	        // set min date for the end date as one day after start date
	        jQuery('#dtodate').datepicker('option','minDate',theDate);
    	}
    	
    })

    jQuery( "#dtodate" ).datepicker({
    	// minDate:theDate,
    	dateFormat:"dd/mm/yy",
    	changeMonth:true,
    	changeYear:true,
    	showOn: "button",
       	buttonImage:'http://localhost/workshop/wp-content/uploads/2015/08/calendar.gif',
       	buttonImageOnly:true,
    	onSelect:function(){
			    		var theDate = new Date(jQuery( "#dfromdate" ).datepicker('getDate'));
			        // sets "theDate" 2 days ahead of today
			        theDate.setDate(theDate.getDate() + 1);
			        // set min date as 2 days from today
			        jQuery(this).datepicker('option','minDate',theDate);
			    	}
    	
    })
  });


jQuery(document).ready(function() {
         jQuery(".up").on('click',function(){
         var jQueryincdec = jQuery(this).prev();
         if (jQueryincdec.val() < jQuery(this).data("max")) {
          jQueryincdec.val(parseInt(jQueryincdec.val())+1);
         }
     });

   jQuery(".down").on('click',function(){
      var jQueryincdec = jQuery(this).next();
      if (jQueryincdec.val() > jQuery(this).data("min")) {
        jQueryincdec.val(parseInt(jQueryincdec.val())-1);
      }
     });
    });
$(document).ready(function() {
	//$('.cycle-slideshow').cycle();
	
	$(".toggle").click(function(){
		if($(".toggle-hide").css("display") == "none" ){
			$(".toggle-hide").show('fast');
		} else {
			$(".toggle-hide").hide('fast');
		}
	});
	
	// var img_height = $('.cycle-slideshow, .mainHeroImage').height();
	// $('.boxHeight').css({'height': img_height});
	
	//var newHeight = $(".cycle-slideshow, .mainHeroImage").height(); //where #grownDiv is what's growing
	
	function matchHeight() {
    	var newHeight = $(".cycle-slideshow, .mainHeroImage").height(); //where #grownDiv is what's growing
    	$(".boxHeight").height(newHeight);    //where .matchDiv is the class of the other two
    	
	}
	// if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
// 		
	// }
	//jQuery.event.add(window,"load",matchHeight);
	//jQuery.event.add(window,"resize",matchHeight);
	
	$(window).bind('load', function(){
		var newHeight = $(".cycle-slideshow, .mainHeroImage").height(); //where #grownDiv is what's growing
	    if(Modernizr.mq('(orientation: portrait)')){
	    	// portrait stuff
	    } else if(Modernizr.mq('(orientation: landscape)')){
    		//$(".boxHeight").height(newHeight);
	    }
	});
	
	$(window).bind('resize', function(){
	
	    if(Modernizr.mq('(orientation: portrait)')){
	    	// portrait stuff
	       //$(".boxHeight").css({'background-color':'#ccc', 'height':'auto'}); 
	    } else if(Modernizr.mq('(orientation: landscape)')){
			// $(".boxHeight").css({'height':'auto'}); 
			// var newHeight = $(".cycle-slideshow, .mainHeroImage").height(); //where #grownDiv is what's growing
    		// $(".boxHeight").height(newHeight);
	    }
	});
});

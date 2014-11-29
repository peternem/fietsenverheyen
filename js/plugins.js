// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

// Place any jQuery/helper plugins in here.
(function() {
  	
  	/**************************************************************************************/
	/**** BEGIN _ rollover link animation  ***********/
	/**************************************************************************************/

	// Preload all rollovers
	$("#facebook_btn img, #twitter_btn img").each(function() {
		// Set the original src
		rollsrc = $(this).attr("src");
		rollON = rollsrc.replace(/.png$/ig, "_over.png");
		newImg = new Image();
		// create new image obj
		$(newImg).attr("src", rollON);
		// set new obj's src
	});

	// Navigation rollovers
	$("#facebook_btn, #twitter_btn").mouseover(function() {
		imgsrc = $(this).children("img").attr("src");

		if ( typeof (imgsrc) != 'undefined') {
			imgsrcON = imgsrc.replace(/.png$/ig, "_over.png");
			// strip off extension
			$(this).children("img").attr("src", imgsrcON);
		}

		if ($(this).children("img").attr("src", imgsrcON)) {
			imgsrcON = imgsrc.replace(/.png$/ig, "_over.png");
			// strip off extension
			$(this).children("img").attr("src", imgsrcON);
		}

	});

	// Handle mouseout
	$("#facebook_btn, #twitter_btn").mouseout(function() {
		if ( typeof (imgsrc) != 'undefined') {
			$(this).children("img").attr("src", imgsrc);
		}
	});
  
}());
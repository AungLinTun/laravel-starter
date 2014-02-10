/**
 * 
 */

;(function ($, window, document, undefined) {

	'use strict';

	// External links handling
	$('a[rel*="external"]').click(function () {
		$(this).attr('target', '_blank');
	});

	// FastClick
	FastClick.attach(document.body);

	// EchoJS
	Echo.init({
		offset:   100,
		throttle: 250
	});

	// ...

})(jQuery, window, document);

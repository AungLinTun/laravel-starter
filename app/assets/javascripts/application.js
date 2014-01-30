/**
 * 
 */

(function () {

	'use strict';

	// External links handling
	$('a[rel*="external"]').click(function () {
		$(this).attr('target', '_blank');
	});

	// FastClick
	FastClick.attach(document.body);

	// ...

})();
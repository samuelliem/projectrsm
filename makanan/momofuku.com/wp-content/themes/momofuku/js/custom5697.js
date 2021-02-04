// t+r custom.js file

function fbEvent() {
  fbq('track', 'Schedule');
};


(function($){
	$("document").ready(function() {


		// The function actually applying the offset
		function offsetAnchor() {
		    if(location.hash.length !== 0) {
		        window.scrollTo(window.scrollX, window.scrollY - 100);
		    }
		};

		$(window).on("hashchange", function () { offsetAnchor(); });

		window.setTimeout(function() { offsetAnchor(); }, 1); 

		



	}); // $("document")
})(jQuery);



// ADA kb nav
var isLastItemSubmenu = false;
var inSubmenu = false;
var curParent = null;
var isReservsationReached = false;
var prevFocus = null;
var isBackFocus = false;

function resetFocusVar () {
	isLastItemSubmenu = false;
	inSubmenu = false;
	curParent = null;
	isReservsationReached = false;
	prevFocus = null;
}

function doBackFocus () {
	var tmp = $(document.activeElement);

	if (inSubmenu) {
		if ($(tmp).parent().is(':first-child')) {
			inSubmenu = false;
			curParent.click(); // close submenu;
			if (curParent.text().toLowerCase() == 'our restaurants')
				$('.logo').focus();
			else
				curParent.parent().prev().find('a').focus();

			tmp = $(document.activeElement);
			curParent = null;
		} 
	}

	doSubmenuFocus (tmp)
}

function doSubmenuFocus (tmp) {

	if (!inSubmenu && (tmp.text().toLowerCase() == 'our restaurants' || tmp.text().toLowerCase() == 'our company')) {
		curParent = tmp;
		tmp.click();
		inSubmenu = true;

		if (tmp.text().toLowerCase() == 'our restaurants') {
			if (isBackFocus)
				$('#subResto .nav-section .sub-menu').find("li:last a").focus();
			else
				$('#subResto .nav-section .sub-menu').find("li:first a").focus();
		} else {
			if (isBackFocus)
				$('#sub .nav-section .sub-menu').find("li:last a").focus();
			else
				$('#sub .nav-section .sub-menu').find("li:first a").focus();
		}
	} else if (!inSubmenu && tmp.text().toLowerCase() == 'reservations') {
		isReservsationReached = true;
	} else if (isReservsationReached && $('#menu-careers').length) {
		isReservsationReached = false;
		$('#menu-careers').find("li:first a").focus();
	}
}

function doForwardFocus () {
	var tmp = $(document.activeElement);

	if (inSubmenu) {
		if (isLastItemSubmenu) {
			inSubmenu = false;
			isLastItemSubmenu = false;
			curParent.click(); // close submenu;
			
			curParent.parent().next().find('a').focus();
			curParent = null;
			tmp = $(document.activeElement);

		} else {
			if($(tmp).parent().is(':last-child'))
				isLastItemSubmenu = true;
		}
	}

	doSubmenuFocus (tmp)
}

(function($){


	$("document").ready(function() {


	// The function actually applying the offset
		function offsetAnchor() {
		    if(location.hash.length !== 0) {
		        window.scrollTo(window.scrollX, window.scrollY - 100);
		    }
		};

		$(window).on("hashchange", function () { offsetAnchor(); });

		window.setTimeout(function() { offsetAnchor(); }, 1); 

		document.addEventListener('keydown', function(e) {
		  if (e.keyCode === 9) {
		  
		    $('body').addClass('show-focus-outlines');
	 			if (e.shiftKey) {
					isBackFocus = true;
					setTimeout(doBackFocus, 200);
				} else {
					isBackFocus = false;
			    		setTimeout(doForwardFocus , 200);
				}
		  }
		});

		document.addEventListener('click', function(e) {
		  $('body').removeClass('show-focus-outlines');
		  resetFocusVar ();
		});



	}); // $("document")
})(jQuery);
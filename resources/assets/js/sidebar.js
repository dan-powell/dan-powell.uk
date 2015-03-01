/**
 * main4.js
 * http://www.codrops.com
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 *
 * Copyright 2014, Codrops
 * http://www.codrops.com
 */
(function() {

    var bodyEl = document.body,
        content = document.getElementById( 'js_content' ),
        openbtn = document.querySelectorAll( '.js_openSidebar' ),
        closebtn = document.getElementById( 'js_closeSidebar' ),
        isOpen = false,
        isAnimating = false;

    function init() {
        initEvents();

        if (readCookie('sidebar') == 'true' && Math.max(document.documentElement.clientWidth, window.innerWidth || 0) > 970) {
            classie.add( bodyEl, '-showSidebar' );
            isOpen = true;
        } else {
            classie.remove( bodyEl, '-showSidebar' );
            isOpen = false;
        }

    }

    function readCookie(name) {
	    var nameEQ = name + "=";
        var ca = document.cookie.split(';');
    	for(var i=0;i < ca.length;i++) {
    		var c = ca[i];
    		while (c.charAt(0)==' ') c = c.substring(1,c.length);
    		if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    	}
    	return null;
    }

    function initEvents() {
        for (i=0;i<openbtn.length;i++){
            openbtn[i].addEventListener( 'click', toggleMenu );
            if( closebtn ) {
                closebtn.addEventListener( 'click', toggleMenu );
            }
        }

        // close the menu element if the target it´s not the menu element or one of its descendants..
/*
        content.addEventListener( 'click', function(ev) {
            var target = ev.target;
            if( isOpen && target !== openbtn ) {
                toggleMenu();
            }
        } );
*/
    }

    function toggleMenu() {
        if( isAnimating ) return false;
        isAnimating = true;
        if( isOpen ) {
            classie.remove( bodyEl, '-showSidebar' );
            setTimeout( function() {
                isAnimating = false;
            }, 300 );
            document.cookie ='sidebar=false; expires=Fri, 3 Aug 2020 20:47:11 UTC; path=/';
        }
        else {
            classie.add( bodyEl, '-showSidebar' );
            document.cookie ='sidebar=true; expires=Fri, 3 Aug 2020 20:47:11 UTC; path=/';
            // animate path
            isAnimating = false;
        }
        isOpen = !isOpen;
    }

    init();

})();
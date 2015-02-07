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


/*
        morphEl = document.getElementById( 'morph-shape' ),
        s = Snap( morphEl.querySelector( 'svg' ) );
        path = s.select( 'path' );
        initialPath = this.path.attr('d'),
        steps = morphEl.getAttribute( 'data-morph-open' ).split(';');
        console.log(steps);
        stepsTotal = steps.length;
        console.log(stepsTotal);
*/

        isAnimating = false;


    function init() {
        initEvents();
    }

    function initEvents() {
        for (i=0;i<openbtn.length;i++){
            openbtn[i].addEventListener( 'click', toggleMenu );
            if( closebtn ) {
                closebtn.addEventListener( 'click', toggleMenu );
            }
        }

        // close the menu element if the target itÂ´s not the menu element or one of its descendants..
        content.addEventListener( 'click', function(ev) {
            var target = ev.target;
            if( isOpen && target !== openbtn ) {
                toggleMenu();
            }
        } );
    }

    function toggleMenu() {
        if( isAnimating ) return false;
        isAnimating = true;
        if( isOpen ) {
            classie.remove( bodyEl, '-showSidebar' );
            // animate path
            setTimeout( function() {
                // reset path
                //path.attr( 'd', initialPath );
                isAnimating = false;
            }, 300 );
        }
        else {
            classie.add( bodyEl, '-showSidebar' );
            // animate path
            isAnimating = false;
/*
            var pos = 0,
                nextStep = function( pos ) {
                    if( pos > stepsTotal - 1 ) {
                        isAnimating = false;
                        return;
                    }
                    path.animate( { 'path' : steps[pos] }, pos === 0 ? 400 : 500, pos === 0 ? mina.easein : mina.elastic, function() { nextStep(pos); } );
                    pos++;
                };

            nextStep(pos);
*/
        }
        isOpen = !isOpen;
    }

    init();

})();
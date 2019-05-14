(function() {

    function init() {
        if (readCookie('sidebar') == 'true' && Math.max(document.documentElement.clientWidth, window.innerWidth || 0) > 970) {
            sidebar.open();
        } else {
            sidebar.close();
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

    function open_sidebar() {
        document.cookie ='sidebar=true; expires=Fri, 3 Aug 2020 20:47:11 UTC; path=/';
        // anime({
        //     targets: '.Sidebar-main-bg polygon',
        //     opacity: [
        //         {value: 1, easing: 'easeOutSine', duration: 200},
        //     ],
        //     direction: 'normal',
        //     delay: anime.stagger(50, {grid: [6, 10], from: 'first'})
        // });
    }

    function close_sidebar() {
        document.cookie ='sidebar=false; expires=Fri, 3 Aug 2020 20:47:11 UTC; path=/';
        // anime({
        //     targets: '.Sidebar-main-bg polygon',
        //     opacity: [
        //         {value: 0, easing: 'easeOutSine', duration: 200},
        //     ],
        //     direction: 'normal',
        //     delay: anime.stagger(50, {grid: [6, 10], from: 'last'})
        // });
    }

    var sidebar = new Overlay('.Sidebar', '.js-sidebar', {
        open: 'false', // Initial state
        class_open: 'is-open', // Class applied to overlay when active
        class_open_control: 'is-active', // Class applied to buttons when active
        class_open_body: 'has-openSidebar', // Class applied to body when active
        callback_open: function() {
            // open_sidebar();
        },
        callback_close: function() {
            // close_sidebar();
        }
    });

    // init();

})();

(function() {

    function open_sidebar() {
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
            open_sidebar();
        },
        callback_close: function() {
            close_sidebar();
        }
    });

})();

import anime from 'animejs/lib/anime.es.js';

// Home
(function() {

    // BG Animation
    anime({
        targets: '.HomeAbout-bg circle',
        loop: true,
        opacity: [
            {value: .1, easing: 'linear', duration: 1000},
            {value: 1, easing: 'linear', duration: 1000},
        ],
        translateX: [
            {value: 20, easing: 'easeOutSine', duration: 200},
            {value: 0, easing: 'easeOutSine', duration: 200},
        ],
        translateY: [
            {value: 10, easing: 'easeOutSine', duration: 200},
            {value: 0, easing: 'easeOutSine', duration: 200},
        ],
        delay: anime.stagger(100, {from: 'center', start: 0, easing: 'easeOutQuad'})
    });

    // Animate items when visible

    // Check is IntersectionObserver is supported
    if ('IntersectionObserver' in window)
    {
        let body = document.getElementsByTagName('body');
        body[0].classList.add('supports-observer');
    };

    // Setup the observer
    const intersectionObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach((entry) => {
            if (entry.intersectionRatio > 0) {
                entry.target.classList.add('is-visible');
            } else {
                entry.target.classList.remove('is-visible');
            }
        });
    });

    // Get the items to animate
    const elements = document.querySelectorAll(['.PortfolioExcerpt','.ProjectExcerpt']);

    // Fire up the observer
    elements.forEach((element) => intersectionObserver.observe(element));

})();

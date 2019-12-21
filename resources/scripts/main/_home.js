import anime from 'animejs/lib/anime.es.js';

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


    var hero = []
    // Define the timeline
    hero[0] = anime.timeline({
        loop: false,
        autoplay: false,
        complete: function(anim) {
            hero[1].play();
        }
    });
    // Add children
    hero[0]
    .add({
        targets: ['.HomeHeroBg-one .box'],
        strokeDashoffset: [anime.setDashoffset, 0],
        easing: 'easeInOutSine',
        delay: anime.stagger(400),
        duration: 2000,
    })
    .add({
        targets: ['.HomeHeroBg-one .fill', '.HomeHeroBg-one .line'],
        opacity: [0,1],
        easing: 'easeInOutSine',
        delay: anime.stagger(200),
        duration: 400,
    }, 0)
    .add({
        targets: ['.HomeHeroBg-one .HomeHeroBg-labels > g'],
        opacity: [0,1],
        easing: 'easeInOutSine',
        delay: anime.stagger(200),
        duration: 400,
    }, 3000)
    .add({
        targets: ['.HomeHeroBg-one'],
        scale: [0.6,1],
        rotate: [-10,10],
        duration: 7000,
        easing: 'easeInQuad',
    }, 0)
    .add({
        targets: ['.HomeHeroBg-one'],
        opacity: [1,0],
        duration: 2000,
        easing: 'easeInOutSine',
    }, "-=2000");


    // Define the timeline
    hero[1] = anime.timeline({
        loop: false,
        autoplay: false,
        complete: function(anim) {
            hero[2].play();
        }
    });
    // Add children
    hero[1]
    .add({
        targets: ['.HomeHeroBg-two .HomeHeroBg-boxes .box'],
        strokeDashoffset: [anime.setDashoffset, 0],
        easing: 'easeInOutSine',
        delay: anime.stagger(400),
        duration: 2000,
    })
    .add({
        targets: ['.HomeHeroBg-two .HomeHeroBg-icons > g'],
        opacity: [0,1],
        easing: 'easeInOutSine',
        delay: anime.stagger(600),
        duration: 400,
    }, 0)
    .add({
        targets: ['.HomeHeroBg-two .HomeHeroBg-labels > g'],
        opacity: [0,1],
        easing: 'easeInOutSine',
        delay: anime.stagger(200),
        duration: 400,
    }, 2000)
    .add({
        targets: ['.HomeHeroBg-two'],
        scale: [0.8,1],
        rotate: [-10,10],
        duration: 6000,
        easing: 'easeInQuad',
    }, 0)
    .add({
        targets: ['.HomeHeroBg-two'],
        opacity: [1,0],
        duration: 2000,
        easing: 'easeInOutSine',
    }, "-=2000");


    // Define the timeline
    hero[2] = anime.timeline({
        loop: false,
        autoplay: false,
        complete: function(anim) {
            hero[0].play();
        }
    });
    // Add children
    hero[2]
    .add({
        targets: ['.HomeHeroBg-three .HomeHeroBg-boxes .box'],
        strokeDashoffset: [anime.setDashoffset, 0],
        easing: 'easeInOutSine',
        delay: anime.stagger(400),
        duration: 2000,
    })
    .add({
        targets: ['.HomeHeroBg-three .HomeHeroBg-content > g'],
        opacity: [0,1],
        easing: 'easeInOutSine',
        delay: anime.stagger(600),
        duration: 400,
    }, 3000)
    .add({
        targets: ['.HomeHeroBg-three .HomeHeroBg-labels > g'],
        opacity: [0,1],
        easing: 'easeInOutSine',
        delay: anime.stagger(200),
        duration: 400,
    }, 2000)
    .add({
        targets: ['.HomeHeroBg-three'],
        scale: [0.8,1],
        rotate: [-10,10],
        duration: 6000,
        easing: 'easeInQuad',
    }, 0)
    .add({
        targets: ['.HomeHeroBg-three'],
        opacity: [1,0],
        duration: 2000,
        easing: 'easeInOutSine',
    }, "-=2000");

    function getRandomInt(max) {
        return Math.floor(Math.random() * Math.floor(max));
    }

    hero[getRandomInt(3)].play();


    // Animate items when visible

    // Check if IntersectionObserver is supported
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

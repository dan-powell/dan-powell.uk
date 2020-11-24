import anime from 'animejs/lib/anime.es.js';

// Helper to split titles in to individual letters

let textWrappers = document.querySelectorAll(['.js-anime-small', '.js-anime-title', '.js-anime-sub']);
for(let x = 0; x < textWrappers.length; x++) {
    textWrappers[x].innerHTML = textWrappers[x].textContent.replace(/\S/g, "<span class='js-anime-span'>$&</span>");
}

// Intro
let timeline_intro = anime.timeline({
        autoplay: false,
        complete: function(anim) {
            anime({
                targets: '.js-anime-icon',
                translateY: '-20px',
                direction: 'alternate',
                loop: true,
                easing: 'easeInOutSine'
            });
        }
    })
    .add({
        targets: '.js-anime-small .js-anime-span',
        scale: [0,1],
        easing: "easeOutExpo",
        duration: 600,
        delay: (el, i) => (1000/19)*i
    }, 0)
    .add({
        targets: '.js-anime-title .js-anime-span',
        scale: [0,1],
        easing: "easeOutExpo",
        duration: 600,
        delay: (el, i) => (1000/11)*i
    }, 0)
    .add({
        targets: '.js-anime-line',
        scaleX: [0,1],
        easing: "easeInOutExpo",
        duration: 1000,
    }, 0)
    .add({
        targets: '.js-anime-sub .js-anime-span',
        scale: [0,1],
        easing: "easeOutExpo",
        duration: 600,
        delay: (el, i) => (1000/50)*i
    })
    .add({
        targets: '.js-anime-icon',
        scaleX: [10,1],
        translateY: ['-20vh',0],
        opacity: [0,1],
        easing: "easeInQuad",
        duration: 600,
        loop: true,
        direction: 'alternate',
    }, "-=1000");

// Setup observer

// Check if we have support for observers...
if ('IntersectionObserver' in window &&
    'IntersectionObserverEntry' in window &&
    'intersectionRatio' in window.IntersectionObserverEntry.prototype) {
    let observer_title = new IntersectionObserver(entry => {
        if (entry.intersectionRatio > 0) {
            timeline_intro.play();
        } else {
            timeline_intro.restart();
        }
    });
    observer_title.observe(document.querySelector('.js-anime-observer'));
} else {
    //no support, just play animation
    timeline_intro.play();
}



// Generic observer for animations on scroll
let observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.intersectionRatio > 0) {
            entry.target.tl.play();
        } else {
            entry.target.tl.seek(0);
        }
    });
});

// Fade in animations
let el_fades = document.querySelectorAll('.js-anime-fade');
// intialise observers
el_fades.forEach(el => {
    el.tl = anime.timeline({autoplay: false})
        .add({
            targets: el,
            opacity: [0.1,1],
            easing: "linear",
            duration: 400,
            delay: () => el.dataset.delay || 400
        });
    observer.observe(el);
});

// Drop in animations
let el_drops = document.querySelectorAll('.js-anime-drop');
// intialise observers
el_drops.forEach(el => {
    el.tl = anime.timeline({autoplay: false})
        .add({
            targets: el,
            opacity: [0,1],
            translateX: [40,0],
            translateZ: 0,
            scaleX: [0.1, 1],
            easing: "spring(1, 80, 10, 0)",
            duration: 400,
            delay: () => el.dataset.delay || 400
        });
    observer.observe(el);
});

let el_zooms = document.querySelectorAll('.js-anime-zoom');
// intialise observers
el_zooms.forEach(el => {
    el.tl = anime.timeline({autoplay: false})
        .add({
            targets: el,
            opacity: [0.1,1],
            scale: [0.1,1],
            easing: "spring(1, 80, 10, 0)",
            duration: 400,
            delay: () => el.dataset.delay || 400
        });
    observer.observe(el);
});
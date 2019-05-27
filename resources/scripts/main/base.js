import anime from 'animejs/lib/anime.es.js';
import {
   watchViewport,
   unwatchViewport,
   getViewportState
 } from 'tornis';

(function() {

    var targets = document.querySelectorAll('.Home-intro-bg polygon');
    console.log(targets);

    function getrandomelement() {
        return targets[Math.floor(Math.random()*targets.length)];;
    }
    console.log(getrandomelement());

    // let timerId = setInterval(() => animate(), 1000);

    function animate() {
        anime({
            targets: getrandomelement(),
            strokeDashoffset: [anime.setDashoffset, 0],
            easing: 'easeInOutSine',
            duration: 1500,
            delay: function(el, i) { return i * 250 },
            direction: 'alternate',
            loop: true
        });
    }

    // define a watched function, to be run on each update
    const updateValues = ({ size, scroll, mouse, orientation }) => {
        if (mouse.changed) {
            for(let i = 0; i < targets.length; i++) {
                targets[i].style.transform = 'translateX(' + ((mouse.x - size.x / 2) +i) + 'px) translateY(' + ((mouse.y - size.y / 2) +i) + 'px)';
            }
        }
    };

    watchViewport(updateValues, false);

    console.log(getViewportState());

    // anime({
    //     targets: '.Home-intro-bg polyline',
    //     strokeDashoffset: [anime.setDashoffset, 0],
    //     easing: 'linear',
    //     duration: 1500,
    //     delay: anime.stagger(1000, {grid: [4, 10], from: 'first'}),
    //     direction: 'alternate',
    //     loop: true
    // });



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
        delay: anime.stagger(100, {from: 'center', start: 3000, easing: 'easeOutQuad'})
    });





})();

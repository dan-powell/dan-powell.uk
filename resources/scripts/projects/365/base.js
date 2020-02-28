import LazyLoad from 'vanilla-lazyload/dist/lazyload.esm.js';
import GLightbox from 'glightbox';

var lazyLoadInstance = new LazyLoad({
    elements_selector: ".lazy"
});

let waypoints = document.getElementsByClassName('js-waypoint');
for(let i=0; i<waypoints.length; i++) {
    new Waypoint.Inview({
        element: waypoints[i],
        enter: function(direction) {
            document.querySelector('[href="#' + waypoints[i].id + '"]').classList.add('is-active');
        },
        // entered: function(direction) {
        // },
        // exit: function(direction) {
        // },
        exited: function(direction) {
            document.querySelector('[href="#' + waypoints[i].id + '"]').classList.remove('is-active');
        }
    })
}

const lightbox = GLightbox({
    selector: 'js-lightbox',
    autoplayVideos: true,
});

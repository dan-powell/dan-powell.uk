import GLightbox from 'glightbox';

// import LazyLoad from 'vanilla-lazyload/dist/lazyload.esm.js';
// import BaguetteBox from 'baguettebox.js/src/baguetteBox.js';
//
// var lazyLoadInstance = new LazyLoad({
//     elements_selector: ".lazy"
// });
//
// BaguetteBox.run('.js-lightbox');

const lightbox = GLightbox({
    selector: 'js-lightbox',
    autoplayVideos: true,
    width: 900,
    height: 562,
    keyboardNavigation: false,
    onOpen: function() {

    }
});

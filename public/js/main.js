(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["/js/main"],{

/***/ "./node_modules/tornis/dist/tornis.js":
/*!********************************************!*\
  !*** ./node_modules/tornis/dist/tornis.js ***!
  \********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

!function(t,s){ true?s(exports):undefined}(this,function(t){"use strict";function s(t,s){let i=0;return function(...e){const h=(new Date).getTime();if(!(h-i<t))return i=h,s(...e)}}function i(t){return Math.floor(t.reduce((t,s)=>t+s,0)/t.length)}class e{constructor(){this.lastX=0,this.lastY=0,this.lastWidth=window.innerWidth,this.lastHeight=window.innerHeight,this.lastMouseX=0,this.lastMouseY=0,this.scrollHeight=document.body.scrollHeight,this.scrollChange=!1,this.sizeChange=!1,this.mouseChange=!1,this.currX=0,this.currY=0,this.currWidth=window.innerWidth,this.currHeight=window.innerHeight,this.currMouseX=0,this.currMouseY=0,this.mouseXVelocity=[],this.mouseYVelocity=[],this.lastMouseXVelocity=0,this.lastMouseYVelocity=0,this.updating=!1,this.callbacks=[],this.update=this.update.bind(this),this.handleResize=this.handleResize.bind(this),this.handleMouse=this.handleMouse.bind(this),this.formatData=this.formatData.bind(this),this.watch=this.watch.bind(this),this.unwatch=this.unwatch.bind(this),this.handleResize=s(110,this.handleResize),this.handleMouse=s(75,this.handleMouse),window.addEventListener("resize",this.handleResize),window.addEventListener("mousemove",this.handleMouse),requestAnimationFrame(this.update)}handleResize(t){this.currWidth=window.innerWidth,this.currHeight=window.innerHeight}handleMouse(t){this.currMouseX=t.clientX,this.currMouseY=t.clientY}formatData(){return{scroll:{changed:this.scrollChange,left:Math.floor(this.lastX),right:Math.floor(this.lastX+this.lastWidth),top:Math.floor(this.lastY),bottom:Math.floor(this.lastY+this.lastHeight),velocity:{x:Math.floor(this.scrollXVelocity)||0,y:Math.floor(this.scrollYVelocity)||0}},size:{changed:this.sizeChange,x:Math.floor(this.lastWidth),y:Math.floor(this.lastHeight),docY:Math.floor(this.scrollHeight)},mouse:{changed:this.mouseChange,x:Math.floor(this.lastMouseX),y:Math.floor(this.lastMouseY),velocity:{x:Math.floor(this.lastMouseXVelocity)||0,y:Math.floor(this.lastMouseYVelocity)||0}}}}updateSize(){}update(){const{currWidth:currWidth,currHeight:currHeight,currMouseX:currMouseX,currMouseY:currMouseY}=this;if(this.updating)return!1;this.scrollChange=this.sizeChange=this.mouseChange=!1,window.pageXOffset==this.lastX&&0!=this.scrollXVelocity&&(this.scrollXVelocity=0,this.scrollChange=!0),window.pageYOffset==this.lastY&&0!=this.scrollYVelocity&&(this.scrollYVelocity=0,this.scrollChange=!0),window.pageXOffset!=this.lastX&&(this.scrollChange=!0,this.scrollXVelocity=Math.floor(window.pageXOffset-this.lastX),this.lastX=window.pageXOffset),window.pageYOffset!=this.lastY&&(this.scrollChange=!0,this.scrollYVelocity=Math.floor(window.pageYOffset-this.lastY),this.lastY=window.pageYOffset),currWidth!=this.lastWidth&&(this.lastWidth=currWidth,this.scrollHeight=document.body.scrollHeight,this.sizeChange=!0),currHeight!=this.lastHeight&&(this.lastHeight=currHeight,this.sizeChange=!0),this.mouseXVelocity.length>5&&this.mouseXVelocity.shift(),this.mouseXVelocity.push(currMouseX-this.lastMouseX),i(this.mouseXVelocity)!=this.lastMouseXVelocity&&(this.lastMouseXVelocity=i(this.mouseXVelocity),this.mouseChange=!0),currMouseX!=this.lastMouseX&&(this.lastMouseX=currMouseX,this.mouseChange=!0),this.mouseYVelocity.length>5&&this.mouseYVelocity.shift(),this.mouseYVelocity.push(currMouseY-this.lastMouseY),i(this.mouseYVelocity)!=this.lastMouseYVelocity&&(this.lastMouseYVelocity=i(this.mouseYVelocity),this.mouseChange=!0),currMouseY==this.lastMouseY&&0==i(this.mouseYVelocity)||(this.lastMouseY=currMouseY,this.mouseChange=!0),(this.scrollChange||this.sizeChange||this.mouseChange)&&this.callbacks.forEach(t=>t(this.formatData())),this.updating=!1,requestAnimationFrame(this.update)}watch(t,s=!0){if("function"!=typeof t)throw new Error("Value passed to Watch is not a function");if(s){const s=this.formatData();s.scroll.changed=!0,s.mouse.changed=!0,s.size.changed=!0,t(s)}this.callbacks.push(t)}unwatch(t){if("function"!=typeof t)throw new Error("The value passed to unwatch is not a function");this.callbacks=this.callbacks.filter(s=>s!==t)}}const h=new e;window.__TORNIS={watchViewport:h.watch,unwatchViewport:h.unwatch,getViewportState:h.formatData};const o=h.watch,a=h.unwatch,l=h.formatData;t.getViewportState=l,t.unwatchViewport=a,t.watchViewport=o,Object.defineProperty(t,"__esModule",{value:!0})});


/***/ }),

/***/ "./resources/scripts/main/base.js":
/*!****************************************!*\
  !*** ./resources/scripts/main/base.js ***!
  \****************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var animejs_lib_anime_es_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! animejs/lib/anime.es.js */ "./node_modules/animejs/lib/anime.es.js");
/* harmony import */ var tornis__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! tornis */ "./node_modules/tornis/dist/tornis.js");
/* harmony import */ var tornis__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(tornis__WEBPACK_IMPORTED_MODULE_1__);



(function () {
  var targets = document.querySelectorAll('.Home-intro-bg polygon');
  console.log(targets);

  function getrandomelement() {
    return targets[Math.floor(Math.random() * targets.length)];
    ;
  }

  console.log(getrandomelement()); // let timerId = setInterval(() => animate(), 1000);

  function animate() {
    Object(animejs_lib_anime_es_js__WEBPACK_IMPORTED_MODULE_0__["default"])({
      targets: getrandomelement(),
      strokeDashoffset: [animejs_lib_anime_es_js__WEBPACK_IMPORTED_MODULE_0__["default"].setDashoffset, 0],
      easing: 'easeInOutSine',
      duration: 1500,
      delay: function delay(el, i) {
        return i * 250;
      },
      direction: 'alternate',
      loop: true
    });
  } // define a watched function, to be run on each update


  var updateValues = function updateValues(_ref) {
    var size = _ref.size,
        scroll = _ref.scroll,
        mouse = _ref.mouse,
        orientation = _ref.orientation;

    if (mouse.changed) {
      for (var i = 0; i < targets.length; i++) {
        targets[i].style.transform = 'translateX(' + (mouse.x - size.x / 2 + i) + 'px) translateY(' + (mouse.y - size.y / 2 + i) + 'px)';
      }
    }
  };

  Object(tornis__WEBPACK_IMPORTED_MODULE_1__["watchViewport"])(updateValues, false);
  console.log(Object(tornis__WEBPACK_IMPORTED_MODULE_1__["getViewportState"])()); // anime({
  //     targets: '.Home-intro-bg polyline',
  //     strokeDashoffset: [anime.setDashoffset, 0],
  //     easing: 'linear',
  //     duration: 1500,
  //     delay: anime.stagger(1000, {grid: [4, 10], from: 'first'}),
  //     direction: 'alternate',
  //     loop: true
  // });

  Object(animejs_lib_anime_es_js__WEBPACK_IMPORTED_MODULE_0__["default"])({
    targets: '.HomeAbout-bg circle',
    loop: true,
    opacity: [{
      value: .1,
      easing: 'linear',
      duration: 1000
    }, {
      value: 1,
      easing: 'linear',
      duration: 1000
    }],
    translateX: [{
      value: 20,
      easing: 'easeOutSine',
      duration: 200
    }, {
      value: 0,
      easing: 'easeOutSine',
      duration: 200
    }],
    translateY: [{
      value: 10,
      easing: 'easeOutSine',
      duration: 200
    }, {
      value: 0,
      easing: 'easeOutSine',
      duration: 200
    }],
    delay: animejs_lib_anime_es_js__WEBPACK_IMPORTED_MODULE_0__["default"].stagger(100, {
      from: 'center',
      start: 3000,
      easing: 'easeOutQuad'
    })
  });
})();

/***/ }),

/***/ "./resources/styles/base/base.less":
/*!*****************************************!*\
  !*** ./resources/styles/base/base.less ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/styles/main/base.less":
/*!*****************************************!*\
  !*** ./resources/styles/main/base.less ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/styles/projects/365/base.less":
/*!*************************************************!*\
  !*** ./resources/styles/projects/365/base.less ***!
  \*************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/styles/projects/fungifalls/base.less":
/*!********************************************************!*\
  !*** ./resources/styles/projects/fungifalls/base.less ***!
  \********************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/styles/sidebar/base.less":
/*!********************************************!*\
  !*** ./resources/styles/sidebar/base.less ***!
  \********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!**************************************************************************************************************************************************************************************************************************************************!*\
  !*** multi ./resources/scripts/main/base.js ./resources/styles/base/base.less ./resources/styles/main/base.less ./resources/styles/sidebar/base.less ./resources/styles/projects/365/base.less ./resources/styles/projects/fungifalls/base.less ***!
  \**************************************************************************************************************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /Users/dan/Codebase/dan-powell/resources/scripts/main/base.js */"./resources/scripts/main/base.js");
__webpack_require__(/*! /Users/dan/Codebase/dan-powell/resources/styles/base/base.less */"./resources/styles/base/base.less");
__webpack_require__(/*! /Users/dan/Codebase/dan-powell/resources/styles/main/base.less */"./resources/styles/main/base.less");
__webpack_require__(/*! /Users/dan/Codebase/dan-powell/resources/styles/sidebar/base.less */"./resources/styles/sidebar/base.less");
__webpack_require__(/*! /Users/dan/Codebase/dan-powell/resources/styles/projects/365/base.less */"./resources/styles/projects/365/base.less");
module.exports = __webpack_require__(/*! /Users/dan/Codebase/dan-powell/resources/styles/projects/fungifalls/base.less */"./resources/styles/projects/fungifalls/base.less");


/***/ })

},[[0,"/js/manifest","/js/vendor"]]]);
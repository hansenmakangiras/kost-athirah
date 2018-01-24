/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 44);
/******/ })
/************************************************************************/
/******/ ({

/***/ 44:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(45);


/***/ }),

/***/ 45:
/***/ (function(module, exports, __webpack_require__) {

"use strict";
/*!
 * Katniss v2.0.0 (https://themepixels.me/starlight)
 * Copyright 2017-2018 ThemePixels
 * Licensed under ThemeForest License
 */



$(document).ready(function () {

   // displaying time and date in left sidebar
   var interval = setInterval(function () {
      var momentNow = moment();
      $('#ktDate').html(momentNow.format('MMMM DD, YYYY hh:mm:ss') + ' ' + momentNow.format('dddd').substring(0, 3).toUpperCase());
   }, 100);

   $('.kt-sideleft').perfectScrollbar({
      useBothWheelAxes: false,
      suppressScrollX: true,
      wheelPropogation: true
   });

   // hiding all sub nav in left sidebar by default.
   $('.nav-sub').slideUp();

   // showing sub navigation to nav with sub nav.
   $('.with-sub.active + .nav-sub').slideDown();

   // showing sub menu while hiding others
   $('.with-sub').on('click', function (e) {
      e.preventDefault();

      var nextElem = $(this).next();
      if (!nextElem.is(':visible')) {
         $('.nav-sub').slideUp();
      }
      nextElem.slideToggle();
   });

   // showing and hiding left sidebar
   $('#naviconMenu').on('click', function (e) {
      e.preventDefault();
      $('body').toggleClass('hide-left');
   });

   // pushing to/back left sidebar
   $('#naviconMenuMobile').on('click', function (e) {
      e.preventDefault();
      $('body').toggleClass('show-left');
   });

   // highlight syntax highlighter
   $('pre code').each(function (i, block) {
      hljs.highlightBlock(block);
   });
});

/***/ })

/******/ });
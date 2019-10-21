/******/ (function(modules) { // webpackBootstrap
/******/ 	// install a JSONP callback for chunk loading
/******/ 	function webpackJsonpCallback(data) {
/******/ 		var chunkIds = data[0];
/******/ 		var moreModules = data[1];
/******/ 		var executeModules = data[2];
/******/
/******/ 		// add "moreModules" to the modules object,
/******/ 		// then flag all "chunkIds" as loaded and fire callback
/******/ 		var moduleId, chunkId, i = 0, resolves = [];
/******/ 		for(;i < chunkIds.length; i++) {
/******/ 			chunkId = chunkIds[i];
/******/ 			if(Object.prototype.hasOwnProperty.call(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 				resolves.push(installedChunks[chunkId][0]);
/******/ 			}
/******/ 			installedChunks[chunkId] = 0;
/******/ 		}
/******/ 		for(moduleId in moreModules) {
/******/ 			if(Object.prototype.hasOwnProperty.call(moreModules, moduleId)) {
/******/ 				modules[moduleId] = moreModules[moduleId];
/******/ 			}
/******/ 		}
/******/ 		if(parentJsonpFunction) parentJsonpFunction(data);
/******/
/******/ 		while(resolves.length) {
/******/ 			resolves.shift()();
/******/ 		}
/******/
/******/ 		// add entry modules from loaded chunk to deferred list
/******/ 		deferredModules.push.apply(deferredModules, executeModules || []);
/******/
/******/ 		// run deferred modules when all chunks ready
/******/ 		return checkDeferredModules();
/******/ 	};
/******/ 	function checkDeferredModules() {
/******/ 		var result;
/******/ 		for(var i = 0; i < deferredModules.length; i++) {
/******/ 			var deferredModule = deferredModules[i];
/******/ 			var fulfilled = true;
/******/ 			for(var j = 1; j < deferredModule.length; j++) {
/******/ 				var depId = deferredModule[j];
/******/ 				if(installedChunks[depId] !== 0) fulfilled = false;
/******/ 			}
/******/ 			if(fulfilled) {
/******/ 				deferredModules.splice(i--, 1);
/******/ 				result = __webpack_require__(__webpack_require__.s = deferredModule[0]);
/******/ 			}
/******/ 		}
/******/
/******/ 		return result;
/******/ 	}
/******/
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// object to store loaded and loading chunks
/******/ 	// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 	// Promise = chunk loading, 0 = chunk loaded
/******/ 	var installedChunks = {
/******/ 		"app": 0
/******/ 	};
/******/
/******/ 	var deferredModules = [];
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
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
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
/******/ 	__webpack_require__.p = "/build/";
/******/
/******/ 	var jsonpArray = window["webpackJsonp"] = window["webpackJsonp"] || [];
/******/ 	var oldJsonpFunction = jsonpArray.push.bind(jsonpArray);
/******/ 	jsonpArray.push = webpackJsonpCallback;
/******/ 	jsonpArray = jsonpArray.slice();
/******/ 	for(var i = 0; i < jsonpArray.length; i++) webpackJsonpCallback(jsonpArray[i]);
/******/ 	var parentJsonpFunction = oldJsonpFunction;
/******/
/******/
/******/ 	// add entry module to deferred list
/******/ 	deferredModules.push(["./assets/js/app.js","vendors~CountDown~app","vendors~app"]);
/******/ 	// run deferred modules when ready
/******/ 	return checkDeferredModules();
/******/ })
/************************************************************************/
/******/ ({

/***/ "./assets/css/app.scss":
/*!*****************************!*\
  !*** ./assets/css/app.scss ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./assets/css/base.css":
/*!*****************************!*\
  !*** ./assets/css/base.css ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./assets/css/homeStyle.css":
/*!**********************************!*\
  !*** ./assets/css/homeStyle.css ***!
  \**********************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./assets/images sync recursive \\.(png|jpg|jpeg|gif|ico|svg|webp)$":
/*!***************************************************************!*\
  !*** ./assets/images sync \.(png|jpg|jpeg|gif|ico|svg|webp)$ ***!
  \***************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

var map = {
	"./0403e075ba013fa0d8a9ceac0a1206a4.png": "./assets/images/0403e075ba013fa0d8a9ceac0a1206a4.png",
	"./06bc94e6b4afccb7cd9e29dc7192dba0_original.gif": "./assets/images/06bc94e6b4afccb7cd9e29dc7192dba0_original.gif",
	"./1.png": "./assets/images/1.png",
	"./10.png": "./assets/images/10.png",
	"./2.png": "./assets/images/2.png",
	"./20.png": "./assets/images/20.png",
	"./27a16970da1f818ea2419f93a8a16be4_original.png": "./assets/images/27a16970da1f818ea2419f93a8a16be4_original.png",
	"./32feb0ca2b355438e4d5ea88a01b250e_original.png": "./assets/images/32feb0ca2b355438e4d5ea88a01b250e_original.png",
	"./4.png": "./assets/images/4.png",
	"./451c05a5dc8148affe85488dfa4ec839_original.jpg": "./assets/images/451c05a5dc8148affe85488dfa4ec839_original.jpg",
	"./5782e86838a62dd05d3348f28b44c4a2_original.png": "./assets/images/5782e86838a62dd05d3348f28b44c4a2_original.png",
	"./6e8e070aaa473041df3628c024a81cab_original.png": "./assets/images/6e8e070aaa473041df3628c024a81cab_original.png",
	"./6f774fecf7de574748fb0bb69072090f_original.jpg": "./assets/images/6f774fecf7de574748fb0bb69072090f_original.jpg",
	"./8954eeef74be001decdac564f465a50a_original.jpg": "./assets/images/8954eeef74be001decdac564f465a50a_original.jpg",
	"./99de5feef4b02c9309cae676f50f8203_original.gif": "./assets/images/99de5feef4b02c9309cae676f50f8203_original.gif",
	"./Adapatation.png": "./assets/images/Adapatation.png",
	"./AvisFR.png": "./assets/images/AvisFR.png",
	"./Avis_des_testeurs.png": "./assets/images/Avis_des_testeurs.png",
	"./Besoin vous.png": "./assets/images/Besoin vous.png",
	"./Carac monture.png": "./assets/images/Carac monture.png",
	"./Details traitements.png": "./assets/images/Details traitements.png",
	"./Détails des traitements.png": "./assets/images/Détails des traitements.png",
	"./ED.png": "./assets/images/ED.png",
	"./FIGFINAL.gif": "./assets/images/FIGFINAL.gif",
	"./FR.png": "./assets/images/FR.png",
	"./FR10.png": "./assets/images/FR10.png",
	"./FR11.png": "./assets/images/FR11.png",
	"./FR12.png": "./assets/images/FR12.png",
	"./FR14.png": "./assets/images/FR14.png",
	"./FR2.png": "./assets/images/FR2.png",
	"./FR3.png": "./assets/images/FR3.png",
	"./FR4.png": "./assets/images/FR4.png",
	"./FR5.png": "./assets/images/FR5.png",
	"./FR6.png": "./assets/images/FR6.png",
	"./FR7.png": "./assets/images/FR7.png",
	"./FR8.png": "./assets/images/FR8.png",
	"./FR9.png": "./assets/images/FR9.png",
	"./FRFR.jpg": "./assets/images/FRFR.jpg",
	"./FRcourbe.png": "./assets/images/FRcourbe.png",
	"./Fichier_4.svg": "./assets/images/Fichier_4.svg",
	"./Flou.png": "./assets/images/Flou.png",
	"./Frais_de_port.png": "./assets/images/Frais_de_port.png",
	"./InfoFR.png": "./assets/images/InfoFR.png",
	"./Lunettes araignée.png": "./assets/images/Lunettes araignée.png",
	"./Myopi noc.png": "./assets/images/Myopi noc.png",
	"./Nos modSles.png": "./assets/images/Nos modSles.png",
	"./OWL_logo.png": "./assets/images/OWL_logo.png",
	"./Objectifs.png": "./assets/images/Objectifs.png",
	"./Objectifs_banner.png": "./assets/images/Objectifs_banner.png",
	"./Opaque.png": "./assets/images/Opaque.png",
	"./Origines_verres.png": "./assets/images/Origines_verres.png",
	"./PackFR.png": "./assets/images/PackFR.png",
	"./Pour_Qui.png": "./assets/images/Pour_Qui.png",
	"./Pourquoi_Owl_eyewear.png": "./assets/images/Pourquoi_Owl_eyewear.png",
	"./Ronde_Ecaille.png": "./assets/images/Ronde_Ecaille.png",
	"./Timeline FR.png": "./assets/images/Timeline FR.png",
	"./VID_20191010_161057_1.gif": "./assets/images/VID_20191010_161057_1.gif",
	"./a67a0f66538778ff1f44f2b65cd485ec_original.jpg": "./assets/images/a67a0f66538778ff1f44f2b65cd485ec_original.jpg",
	"./a84715986501781141e5074442b89746_original.png": "./assets/images/a84715986501781141e5074442b89746_original.png",
	"./b36c9cf3d44ba58db0e09363e4d69d05_original.png": "./assets/images/b36c9cf3d44ba58db0e09363e4d69d05_original.png",
	"./background.jpg": "./assets/images/background.jpg",
	"./bf3121dc2309cf78049447bcbda3c149_original.jpg": "./assets/images/bf3121dc2309cf78049447bcbda3c149_original.jpg",
	"./carac verres.png": "./assets/images/carac verres.png",
	"./carac.png": "./assets/images/carac.png",
	"./choix_taille.png": "./assets/images/choix_taille.png",
	"./collaps.png": "./assets/images/collaps.png",
	"./corrige.png": "./assets/images/corrige.png",
	"./dummy.jpg": "./assets/images/dummy.jpg",
	"./dummy2.png": "./assets/images/dummy2.png",
	"./f492acd4a9846eec532f31a21bff3179_original.png": "./assets/images/f492acd4a9846eec532f31a21bff3179_original.png",
	"./favicon.ico": "./assets/images/favicon.ico",
	"./fd3ed39a56a04ff75cd00b179c02f44a_original.png": "./assets/images/fd3ed39a56a04ff75cd00b179c02f44a_original.png",
	"./finfr.gif": "./assets/images/finfr.gif",
	"./gene_et_benef.png": "./assets/images/gene_et_benef.png",
	"./gif.gif": "./assets/images/gif.gif",
	"./gifcar.gif": "./assets/images/gifcar.gif",
	"./net.png": "./assets/images/net.png",
	"./parrainage.png": "./assets/images/parrainage.png",
	"./personnes_concernees.png": "./assets/images/personnes_concernees.png",
	"./placeholder.png": "./assets/images/placeholder.png",
	"./process.png": "./assets/images/process.png",
	"./quand_les_porter.png": "./assets/images/quand_les_porter.png",
	"./recap.png": "./assets/images/recap.png",
	"./verres jaunes.png": "./assets/images/verres jaunes.png",
	"./verres polas.png": "./assets/images/verres polas.png"
};


function webpackContext(req) {
	var id = webpackContextResolve(req);
	return __webpack_require__(id);
}
function webpackContextResolve(req) {
	if(!__webpack_require__.o(map, req)) {
		var e = new Error("Cannot find module '" + req + "'");
		e.code = 'MODULE_NOT_FOUND';
		throw e;
	}
	return map[req];
}
webpackContext.keys = function webpackContextKeys() {
	return Object.keys(map);
};
webpackContext.resolve = webpackContextResolve;
module.exports = webpackContext;
webpackContext.id = "./assets/images sync recursive \\.(png|jpg|jpeg|gif|ico|svg|webp)$";

/***/ }),

/***/ "./assets/images/0403e075ba013fa0d8a9ceac0a1206a4.png":
/*!************************************************************!*\
  !*** ./assets/images/0403e075ba013fa0d8a9ceac0a1206a4.png ***!
  \************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/0403e075ba013fa0d8a9ceac0a1206a4.eb0076ad.png";

/***/ }),

/***/ "./assets/images/06bc94e6b4afccb7cd9e29dc7192dba0_original.gif":
/*!*********************************************************************!*\
  !*** ./assets/images/06bc94e6b4afccb7cd9e29dc7192dba0_original.gif ***!
  \*********************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/06bc94e6b4afccb7cd9e29dc7192dba0_original.6910b146.gif";

/***/ }),

/***/ "./assets/images/1.png":
/*!*****************************!*\
  !*** ./assets/images/1.png ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/1.e5ff50a3.png";

/***/ }),

/***/ "./assets/images/10.png":
/*!******************************!*\
  !*** ./assets/images/10.png ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/10.7b031ebc.png";

/***/ }),

/***/ "./assets/images/2.png":
/*!*****************************!*\
  !*** ./assets/images/2.png ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/2.12448040.png";

/***/ }),

/***/ "./assets/images/20.png":
/*!******************************!*\
  !*** ./assets/images/20.png ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/20.33ee32de.png";

/***/ }),

/***/ "./assets/images/27a16970da1f818ea2419f93a8a16be4_original.png":
/*!*********************************************************************!*\
  !*** ./assets/images/27a16970da1f818ea2419f93a8a16be4_original.png ***!
  \*********************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/27a16970da1f818ea2419f93a8a16be4_original.d5155332.png";

/***/ }),

/***/ "./assets/images/32feb0ca2b355438e4d5ea88a01b250e_original.png":
/*!*********************************************************************!*\
  !*** ./assets/images/32feb0ca2b355438e4d5ea88a01b250e_original.png ***!
  \*********************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/32feb0ca2b355438e4d5ea88a01b250e_original.6a6a1061.png";

/***/ }),

/***/ "./assets/images/4.png":
/*!*****************************!*\
  !*** ./assets/images/4.png ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/4.61d04de2.png";

/***/ }),

/***/ "./assets/images/451c05a5dc8148affe85488dfa4ec839_original.jpg":
/*!*********************************************************************!*\
  !*** ./assets/images/451c05a5dc8148affe85488dfa4ec839_original.jpg ***!
  \*********************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/451c05a5dc8148affe85488dfa4ec839_original.0b8ab53b.jpg";

/***/ }),

/***/ "./assets/images/5782e86838a62dd05d3348f28b44c4a2_original.png":
/*!*********************************************************************!*\
  !*** ./assets/images/5782e86838a62dd05d3348f28b44c4a2_original.png ***!
  \*********************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/5782e86838a62dd05d3348f28b44c4a2_original.ecdc95b9.png";

/***/ }),

/***/ "./assets/images/6e8e070aaa473041df3628c024a81cab_original.png":
/*!*********************************************************************!*\
  !*** ./assets/images/6e8e070aaa473041df3628c024a81cab_original.png ***!
  \*********************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/6e8e070aaa473041df3628c024a81cab_original.f9466eea.png";

/***/ }),

/***/ "./assets/images/6f774fecf7de574748fb0bb69072090f_original.jpg":
/*!*********************************************************************!*\
  !*** ./assets/images/6f774fecf7de574748fb0bb69072090f_original.jpg ***!
  \*********************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/6f774fecf7de574748fb0bb69072090f_original.9dc1edab.jpg";

/***/ }),

/***/ "./assets/images/8954eeef74be001decdac564f465a50a_original.jpg":
/*!*********************************************************************!*\
  !*** ./assets/images/8954eeef74be001decdac564f465a50a_original.jpg ***!
  \*********************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/8954eeef74be001decdac564f465a50a_original.75212a38.jpg";

/***/ }),

/***/ "./assets/images/99de5feef4b02c9309cae676f50f8203_original.gif":
/*!*********************************************************************!*\
  !*** ./assets/images/99de5feef4b02c9309cae676f50f8203_original.gif ***!
  \*********************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/99de5feef4b02c9309cae676f50f8203_original.fdb3d0b6.gif";

/***/ }),

/***/ "./assets/images/Adapatation.png":
/*!***************************************!*\
  !*** ./assets/images/Adapatation.png ***!
  \***************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/Adapatation.448958e1.png";

/***/ }),

/***/ "./assets/images/AvisFR.png":
/*!**********************************!*\
  !*** ./assets/images/AvisFR.png ***!
  \**********************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/AvisFR.e1251bb2.png";

/***/ }),

/***/ "./assets/images/Avis_des_testeurs.png":
/*!*********************************************!*\
  !*** ./assets/images/Avis_des_testeurs.png ***!
  \*********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/Avis_des_testeurs.2a67f876.png";

/***/ }),

/***/ "./assets/images/Besoin vous.png":
/*!***************************************!*\
  !*** ./assets/images/Besoin vous.png ***!
  \***************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/Besoin vous.b9df6fff.png";

/***/ }),

/***/ "./assets/images/Carac monture.png":
/*!*****************************************!*\
  !*** ./assets/images/Carac monture.png ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/Carac monture.e5411406.png";

/***/ }),

/***/ "./assets/images/Details traitements.png":
/*!***********************************************!*\
  !*** ./assets/images/Details traitements.png ***!
  \***********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/Details traitements.7474e869.png";

/***/ }),

/***/ "./assets/images/Détails des traitements.png":
/*!***************************************************!*\
  !*** ./assets/images/Détails des traitements.png ***!
  \***************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/Détails des traitements.ee731cde.png";

/***/ }),

/***/ "./assets/images/ED.png":
/*!******************************!*\
  !*** ./assets/images/ED.png ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/ED.eea96dcb.png";

/***/ }),

/***/ "./assets/images/FIGFINAL.gif":
/*!************************************!*\
  !*** ./assets/images/FIGFINAL.gif ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/FIGFINAL.396b4767.gif";

/***/ }),

/***/ "./assets/images/FR.png":
/*!******************************!*\
  !*** ./assets/images/FR.png ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/FR.456ebb3d.png";

/***/ }),

/***/ "./assets/images/FR10.png":
/*!********************************!*\
  !*** ./assets/images/FR10.png ***!
  \********************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/FR10.1cd7fac0.png";

/***/ }),

/***/ "./assets/images/FR11.png":
/*!********************************!*\
  !*** ./assets/images/FR11.png ***!
  \********************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/FR11.d4b54aa5.png";

/***/ }),

/***/ "./assets/images/FR12.png":
/*!********************************!*\
  !*** ./assets/images/FR12.png ***!
  \********************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/FR12.9f3e1ce8.png";

/***/ }),

/***/ "./assets/images/FR14.png":
/*!********************************!*\
  !*** ./assets/images/FR14.png ***!
  \********************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/FR14.466d13c4.png";

/***/ }),

/***/ "./assets/images/FR2.png":
/*!*******************************!*\
  !*** ./assets/images/FR2.png ***!
  \*******************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/FR2.1671e564.png";

/***/ }),

/***/ "./assets/images/FR3.png":
/*!*******************************!*\
  !*** ./assets/images/FR3.png ***!
  \*******************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/FR3.484e8eb8.png";

/***/ }),

/***/ "./assets/images/FR4.png":
/*!*******************************!*\
  !*** ./assets/images/FR4.png ***!
  \*******************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/FR4.c5c9ac1b.png";

/***/ }),

/***/ "./assets/images/FR5.png":
/*!*******************************!*\
  !*** ./assets/images/FR5.png ***!
  \*******************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/FR5.7549b27e.png";

/***/ }),

/***/ "./assets/images/FR6.png":
/*!*******************************!*\
  !*** ./assets/images/FR6.png ***!
  \*******************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/FR6.bfb517ea.png";

/***/ }),

/***/ "./assets/images/FR7.png":
/*!*******************************!*\
  !*** ./assets/images/FR7.png ***!
  \*******************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/FR7.64d4c2e0.png";

/***/ }),

/***/ "./assets/images/FR8.png":
/*!*******************************!*\
  !*** ./assets/images/FR8.png ***!
  \*******************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/FR8.7b369de1.png";

/***/ }),

/***/ "./assets/images/FR9.png":
/*!*******************************!*\
  !*** ./assets/images/FR9.png ***!
  \*******************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/FR9.02bfd0dc.png";

/***/ }),

/***/ "./assets/images/FRFR.jpg":
/*!********************************!*\
  !*** ./assets/images/FRFR.jpg ***!
  \********************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/FRFR.10367c6c.jpg";

/***/ }),

/***/ "./assets/images/FRcourbe.png":
/*!************************************!*\
  !*** ./assets/images/FRcourbe.png ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/FRcourbe.57889c14.png";

/***/ }),

/***/ "./assets/images/Fichier_4.svg":
/*!*************************************!*\
  !*** ./assets/images/Fichier_4.svg ***!
  \*************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/Fichier_4.8f8cdf3f.svg";

/***/ }),

/***/ "./assets/images/Flou.png":
/*!********************************!*\
  !*** ./assets/images/Flou.png ***!
  \********************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/Flou.77ea1e45.png";

/***/ }),

/***/ "./assets/images/Frais_de_port.png":
/*!*****************************************!*\
  !*** ./assets/images/Frais_de_port.png ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/Frais_de_port.5f5d9ab4.png";

/***/ }),

/***/ "./assets/images/InfoFR.png":
/*!**********************************!*\
  !*** ./assets/images/InfoFR.png ***!
  \**********************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/InfoFR.4a6c20e9.png";

/***/ }),

/***/ "./assets/images/Lunettes araignée.png":
/*!*********************************************!*\
  !*** ./assets/images/Lunettes araignée.png ***!
  \*********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/Lunettes araignée.632bfb25.png";

/***/ }),

/***/ "./assets/images/Myopi noc.png":
/*!*************************************!*\
  !*** ./assets/images/Myopi noc.png ***!
  \*************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/Myopi noc.54895fea.png";

/***/ }),

/***/ "./assets/images/Nos modSles.png":
/*!***************************************!*\
  !*** ./assets/images/Nos modSles.png ***!
  \***************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/Nos modSles.c402ed27.png";

/***/ }),

/***/ "./assets/images/OWL_logo.png":
/*!************************************!*\
  !*** ./assets/images/OWL_logo.png ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/OWL_logo.5da53e41.png";

/***/ }),

/***/ "./assets/images/Objectifs.png":
/*!*************************************!*\
  !*** ./assets/images/Objectifs.png ***!
  \*************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/Objectifs.1ecbce6e.png";

/***/ }),

/***/ "./assets/images/Objectifs_banner.png":
/*!********************************************!*\
  !*** ./assets/images/Objectifs_banner.png ***!
  \********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/Objectifs_banner.8bc8850e.png";

/***/ }),

/***/ "./assets/images/Opaque.png":
/*!**********************************!*\
  !*** ./assets/images/Opaque.png ***!
  \**********************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/Opaque.61d5800f.png";

/***/ }),

/***/ "./assets/images/Origines_verres.png":
/*!*******************************************!*\
  !*** ./assets/images/Origines_verres.png ***!
  \*******************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/Origines_verres.61f0f314.png";

/***/ }),

/***/ "./assets/images/PackFR.png":
/*!**********************************!*\
  !*** ./assets/images/PackFR.png ***!
  \**********************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/PackFR.e1fd8347.png";

/***/ }),

/***/ "./assets/images/Pour_Qui.png":
/*!************************************!*\
  !*** ./assets/images/Pour_Qui.png ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/Pour_Qui.465be7be.png";

/***/ }),

/***/ "./assets/images/Pourquoi_Owl_eyewear.png":
/*!************************************************!*\
  !*** ./assets/images/Pourquoi_Owl_eyewear.png ***!
  \************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/Pourquoi_Owl_eyewear.46a32322.png";

/***/ }),

/***/ "./assets/images/Ronde_Ecaille.png":
/*!*****************************************!*\
  !*** ./assets/images/Ronde_Ecaille.png ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/Ronde_Ecaille.0414298f.png";

/***/ }),

/***/ "./assets/images/Timeline FR.png":
/*!***************************************!*\
  !*** ./assets/images/Timeline FR.png ***!
  \***************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/Timeline FR.8cad95d2.png";

/***/ }),

/***/ "./assets/images/VID_20191010_161057_1.gif":
/*!*************************************************!*\
  !*** ./assets/images/VID_20191010_161057_1.gif ***!
  \*************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/VID_20191010_161057_1.f93f3aea.gif";

/***/ }),

/***/ "./assets/images/a67a0f66538778ff1f44f2b65cd485ec_original.jpg":
/*!*********************************************************************!*\
  !*** ./assets/images/a67a0f66538778ff1f44f2b65cd485ec_original.jpg ***!
  \*********************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/a67a0f66538778ff1f44f2b65cd485ec_original.87db49bc.jpg";

/***/ }),

/***/ "./assets/images/a84715986501781141e5074442b89746_original.png":
/*!*********************************************************************!*\
  !*** ./assets/images/a84715986501781141e5074442b89746_original.png ***!
  \*********************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/a84715986501781141e5074442b89746_original.498741f6.png";

/***/ }),

/***/ "./assets/images/b36c9cf3d44ba58db0e09363e4d69d05_original.png":
/*!*********************************************************************!*\
  !*** ./assets/images/b36c9cf3d44ba58db0e09363e4d69d05_original.png ***!
  \*********************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/b36c9cf3d44ba58db0e09363e4d69d05_original.c1d524c0.png";

/***/ }),

/***/ "./assets/images/background.jpg":
/*!**************************************!*\
  !*** ./assets/images/background.jpg ***!
  \**************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/background.57228088.jpg";

/***/ }),

/***/ "./assets/images/bf3121dc2309cf78049447bcbda3c149_original.jpg":
/*!*********************************************************************!*\
  !*** ./assets/images/bf3121dc2309cf78049447bcbda3c149_original.jpg ***!
  \*********************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/bf3121dc2309cf78049447bcbda3c149_original.d257a561.jpg";

/***/ }),

/***/ "./assets/images/carac verres.png":
/*!****************************************!*\
  !*** ./assets/images/carac verres.png ***!
  \****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/carac verres.2c7d7036.png";

/***/ }),

/***/ "./assets/images/carac.png":
/*!*********************************!*\
  !*** ./assets/images/carac.png ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/carac.0257e035.png";

/***/ }),

/***/ "./assets/images/choix_taille.png":
/*!****************************************!*\
  !*** ./assets/images/choix_taille.png ***!
  \****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/choix_taille.c505f783.png";

/***/ }),

/***/ "./assets/images/collaps.png":
/*!***********************************!*\
  !*** ./assets/images/collaps.png ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/collaps.1386f83c.png";

/***/ }),

/***/ "./assets/images/corrige.png":
/*!***********************************!*\
  !*** ./assets/images/corrige.png ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/corrige.c6f47421.png";

/***/ }),

/***/ "./assets/images/dummy.jpg":
/*!*********************************!*\
  !*** ./assets/images/dummy.jpg ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/dummy.e00757a0.jpg";

/***/ }),

/***/ "./assets/images/dummy2.png":
/*!**********************************!*\
  !*** ./assets/images/dummy2.png ***!
  \**********************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/dummy2.ba38f527.png";

/***/ }),

/***/ "./assets/images/f492acd4a9846eec532f31a21bff3179_original.png":
/*!*********************************************************************!*\
  !*** ./assets/images/f492acd4a9846eec532f31a21bff3179_original.png ***!
  \*********************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/f492acd4a9846eec532f31a21bff3179_original.a54153eb.png";

/***/ }),

/***/ "./assets/images/favicon.ico":
/*!***********************************!*\
  !*** ./assets/images/favicon.ico ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/favicon.5ee79b31.ico";

/***/ }),

/***/ "./assets/images/fd3ed39a56a04ff75cd00b179c02f44a_original.png":
/*!*********************************************************************!*\
  !*** ./assets/images/fd3ed39a56a04ff75cd00b179c02f44a_original.png ***!
  \*********************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/fd3ed39a56a04ff75cd00b179c02f44a_original.932efebe.png";

/***/ }),

/***/ "./assets/images/finfr.gif":
/*!*********************************!*\
  !*** ./assets/images/finfr.gif ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/finfr.6b7f7df8.gif";

/***/ }),

/***/ "./assets/images/gene_et_benef.png":
/*!*****************************************!*\
  !*** ./assets/images/gene_et_benef.png ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/gene_et_benef.09e95592.png";

/***/ }),

/***/ "./assets/images/gif.gif":
/*!*******************************!*\
  !*** ./assets/images/gif.gif ***!
  \*******************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/gif.7cd42fe3.gif";

/***/ }),

/***/ "./assets/images/gifcar.gif":
/*!**********************************!*\
  !*** ./assets/images/gifcar.gif ***!
  \**********************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/gifcar.a7470e31.gif";

/***/ }),

/***/ "./assets/images/net.png":
/*!*******************************!*\
  !*** ./assets/images/net.png ***!
  \*******************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/net.c81b8bd3.png";

/***/ }),

/***/ "./assets/images/parrainage.png":
/*!**************************************!*\
  !*** ./assets/images/parrainage.png ***!
  \**************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/parrainage.bf9e3fde.png";

/***/ }),

/***/ "./assets/images/personnes_concernees.png":
/*!************************************************!*\
  !*** ./assets/images/personnes_concernees.png ***!
  \************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/personnes_concernees.b22c5392.png";

/***/ }),

/***/ "./assets/images/placeholder.png":
/*!***************************************!*\
  !*** ./assets/images/placeholder.png ***!
  \***************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/placeholder.5631caaa.png";

/***/ }),

/***/ "./assets/images/process.png":
/*!***********************************!*\
  !*** ./assets/images/process.png ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/process.5f63f1a7.png";

/***/ }),

/***/ "./assets/images/quand_les_porter.png":
/*!********************************************!*\
  !*** ./assets/images/quand_les_porter.png ***!
  \********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/quand_les_porter.0935229d.png";

/***/ }),

/***/ "./assets/images/recap.png":
/*!*********************************!*\
  !*** ./assets/images/recap.png ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/recap.61746e12.png";

/***/ }),

/***/ "./assets/images/verres jaunes.png":
/*!*****************************************!*\
  !*** ./assets/images/verres jaunes.png ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/verres jaunes.cb45cc79.png";

/***/ }),

/***/ "./assets/images/verres polas.png":
/*!****************************************!*\
  !*** ./assets/images/verres polas.png ***!
  \****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "/build/images/verres polas.4267f8d5.png";

/***/ }),

/***/ "./assets/js/app.js":
/*!**************************!*\
  !*** ./assets/js/app.js ***!
  \**************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* WEBPACK VAR INJECTION */(function(global) {/* harmony import */ var core_js_modules_es_array_for_each__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.array.for-each */ "./node_modules/core-js/modules/es.array.for-each.js");
/* harmony import */ var core_js_modules_es_array_for_each__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_for_each__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_array_iterator__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.array.iterator */ "./node_modules/core-js/modules/es.array.iterator.js");
/* harmony import */ var core_js_modules_es_array_iterator__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_iterator__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_object_to_string__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.object.to-string */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_web_dom_collections_for_each__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/web.dom-collections.for-each */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");
/* harmony import */ var core_js_modules_web_dom_collections_for_each__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_for_each__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_web_dom_collections_iterator__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/web.dom-collections.iterator */ "./node_modules/core-js/modules/web.dom-collections.iterator.js");
/* harmony import */ var core_js_modules_web_dom_collections_iterator__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_iterator__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var bootstrap_dist_js_bootstrap__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! bootstrap/dist/js/bootstrap */ "./node_modules/bootstrap/dist/js/bootstrap.js");
/* harmony import */ var bootstrap_dist_js_bootstrap__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(bootstrap_dist_js_bootstrap__WEBPACK_IMPORTED_MODULE_5__);






/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */
// any CSS you require will output into a single css file (app.css in this case)
__webpack_require__(/*! ../css/app.scss */ "./assets/css/app.scss");

__webpack_require__(/*! ../css/base.css */ "./assets/css/base.css");

__webpack_require__(/*! ../css/homeStyle.css */ "./assets/css/homeStyle.css");

__webpack_require__(/*! ./jquery.countdown.js */ "./assets/js/jquery.countdown.js"); // Need jQuery? Install it with "yarn add jquery", then uncomment to require it.


var $ = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");

__webpack_require__(/*! bootstrap/dist/js/bootstrap.bundle */ "./node_modules/bootstrap/dist/js/bootstrap.bundle.js");

global.$ = global.jQuery = $;
$(document).ready(function () {
  $('[data-toggle="popover"]').popover();
});


var imagesContext = __webpack_require__("./assets/images sync recursive \\.(png|jpg|jpeg|gif|ico|svg|webp)$");

imagesContext.keys().forEach(imagesContext);
/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! ./../../node_modules/webpack/buildin/global.js */ "./node_modules/webpack/buildin/global.js")))

/***/ }),

/***/ "./assets/js/jquery.countdown.js":
/*!***************************************!*\
  !*** ./assets/js/jquery.countdown.js ***!
  \***************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

var __WEBPACK_AMD_DEFINE_FACTORY__, __WEBPACK_AMD_DEFINE_ARRAY__, __WEBPACK_AMD_DEFINE_RESULT__;__webpack_require__(/*! core-js/modules/es.array.join */ "./node_modules/core-js/modules/es.array.join.js");

__webpack_require__(/*! core-js/modules/es.array.slice */ "./node_modules/core-js/modules/es.array.slice.js");

__webpack_require__(/*! core-js/modules/es.date.to-string */ "./node_modules/core-js/modules/es.date.to-string.js");

__webpack_require__(/*! core-js/modules/es.number.constructor */ "./node_modules/core-js/modules/es.number.constructor.js");

__webpack_require__(/*! core-js/modules/es.object.to-string */ "./node_modules/core-js/modules/es.object.to-string.js");

__webpack_require__(/*! core-js/modules/es.regexp.constructor */ "./node_modules/core-js/modules/es.regexp.constructor.js");

__webpack_require__(/*! core-js/modules/es.regexp.exec */ "./node_modules/core-js/modules/es.regexp.exec.js");

__webpack_require__(/*! core-js/modules/es.regexp.to-string */ "./node_modules/core-js/modules/es.regexp.to-string.js");

__webpack_require__(/*! core-js/modules/es.string.match */ "./node_modules/core-js/modules/es.string.match.js");

__webpack_require__(/*! core-js/modules/es.string.replace */ "./node_modules/core-js/modules/es.string.replace.js");

__webpack_require__(/*! core-js/modules/es.string.split */ "./node_modules/core-js/modules/es.string.split.js");

__webpack_require__(/*! core-js/modules/web.timers */ "./node_modules/core-js/modules/web.timers.js");

/*!
 * The Final Countdown for jQuery v2.2.0 (http://hilios.github.io/jQuery.countdown/)
 * Copyright (c) 2016 Edson Hilios
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy of
 * this software and associated documentation files (the "Software"), to deal in
 * the Software without restriction, including without limitation the rights to
 * use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of
 * the Software, and to permit persons to whom the Software is furnished to do so,
 * subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS
 * FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
 * COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER
 * IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
 * CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */
(function (factory) {
  "use strict";

  if (true) {
    !(__WEBPACK_AMD_DEFINE_ARRAY__ = [__webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js")], __WEBPACK_AMD_DEFINE_FACTORY__ = (factory),
				__WEBPACK_AMD_DEFINE_RESULT__ = (typeof __WEBPACK_AMD_DEFINE_FACTORY__ === 'function' ?
				(__WEBPACK_AMD_DEFINE_FACTORY__.apply(exports, __WEBPACK_AMD_DEFINE_ARRAY__)) : __WEBPACK_AMD_DEFINE_FACTORY__),
				__WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__));
  } else {}
})(function ($) {
  "use strict";

  var instances = [],
      matchers = [],
      defaultOptions = {
    precision: 100,
    elapse: false,
    defer: false
  };
  matchers.push(/^[0-9]*$/.source);
  matchers.push(/([0-9]{1,2}\/){2}[0-9]{4}( [0-9]{1,2}(:[0-9]{2}){2})?/.source);
  matchers.push(/[0-9]{4}([\/\-][0-9]{1,2}){2}( [0-9]{1,2}(:[0-9]{2}){2})?/.source);
  matchers = new RegExp(matchers.join("|"));

  function parseDateString(dateString) {
    if (dateString instanceof Date) {
      return dateString;
    }

    if (String(dateString).match(matchers)) {
      if (String(dateString).match(/^[0-9]*$/)) {
        dateString = Number(dateString);
      }

      if (String(dateString).match(/\-/)) {
        dateString = String(dateString).replace(/\-/g, "/");
      }

      return new Date(dateString);
    } else {
      throw new Error("Couldn't cast `" + dateString + "` to a date object.");
    }
  }

  var DIRECTIVE_KEY_MAP = {
    Y: "years",
    m: "months",
    n: "daysToMonth",
    d: "daysToWeek",
    w: "weeks",
    W: "weeksToMonth",
    H: "hours",
    M: "minutes",
    S: "seconds",
    D: "totalDays",
    I: "totalHours",
    N: "totalMinutes",
    T: "totalSeconds"
  };

  function escapedRegExp(str) {
    var sanitize = str.toString().replace(/([.?*+^$[\]\\(){}|-])/g, "\\$1");
    return new RegExp(sanitize);
  }

  function strftime(offsetObject) {
    return function (format) {
      var directives = format.match(/%(-|!)?[A-Z]{1}(:[^;]+;)?/gi);

      if (directives) {
        for (var i = 0, len = directives.length; i < len; ++i) {
          var directive = directives[i].match(/%(-|!)?([a-zA-Z]{1})(:[^;]+;)?/),
              regexp = escapedRegExp(directive[0]),
              modifier = directive[1] || "",
              plural = directive[3] || "",
              value = null;
          directive = directive[2];

          if (DIRECTIVE_KEY_MAP.hasOwnProperty(directive)) {
            value = DIRECTIVE_KEY_MAP[directive];
            value = Number(offsetObject[value]);
          }

          if (value !== null) {
            if (modifier === "!") {
              value = pluralize(plural, value);
            }

            if (modifier === "") {
              if (value < 10) {
                value = "0" + value.toString();
              }
            }

            format = format.replace(regexp, value.toString());
          }
        }
      }

      format = format.replace(/%%/, "%");
      return format;
    };
  }

  function pluralize(format, count) {
    var plural = "s",
        singular = "";

    if (format) {
      format = format.replace(/(:|;|\s)/gi, "").split(/\,/);

      if (format.length === 1) {
        plural = format[0];
      } else {
        singular = format[0];
        plural = format[1];
      }
    }

    if (Math.abs(count) > 1) {
      return plural;
    } else {
      return singular;
    }
  }

  var Countdown = function Countdown(el, finalDate, options) {
    this.el = el;
    this.$el = $(el);
    this.interval = null;
    this.offset = {};
    this.options = $.extend({}, defaultOptions);
    this.instanceNumber = instances.length;
    instances.push(this);
    this.$el.data("countdown-instance", this.instanceNumber);

    if (options) {
      if (typeof options === "function") {
        this.$el.on("update.countdown", options);
        this.$el.on("stoped.countdown", options);
        this.$el.on("finish.countdown", options);
      } else {
        this.options = $.extend({}, defaultOptions, options);
      }
    }

    this.setFinalDate(finalDate);

    if (this.options.defer === false) {
      this.start();
    }
  };

  $.extend(Countdown.prototype, {
    start: function start() {
      if (this.interval !== null) {
        clearInterval(this.interval);
      }

      var self = this;
      this.update();
      this.interval = setInterval(function () {
        self.update.call(self);
      }, this.options.precision);
    },
    stop: function stop() {
      clearInterval(this.interval);
      this.interval = null;
      this.dispatchEvent("stoped");
    },
    toggle: function toggle() {
      if (this.interval) {
        this.stop();
      } else {
        this.start();
      }
    },
    pause: function pause() {
      this.stop();
    },
    resume: function resume() {
      this.start();
    },
    remove: function remove() {
      this.stop.call(this);
      instances[this.instanceNumber] = null;
      delete this.$el.data().countdownInstance;
    },
    setFinalDate: function setFinalDate(value) {
      this.finalDate = parseDateString(value);
    },
    update: function update() {
      if (this.$el.closest("html").length === 0) {
        this.remove();
        return;
      }

      var hasEventsAttached = $._data(this.el, "events") !== undefined,
          now = new Date(),
          newTotalSecsLeft;
      newTotalSecsLeft = this.finalDate.getTime() - now.getTime();
      newTotalSecsLeft = Math.ceil(newTotalSecsLeft / 1e3);
      newTotalSecsLeft = !this.options.elapse && newTotalSecsLeft < 0 ? 0 : Math.abs(newTotalSecsLeft);

      if (this.totalSecsLeft === newTotalSecsLeft || !hasEventsAttached) {
        return;
      } else {
        this.totalSecsLeft = newTotalSecsLeft;
      }

      this.elapsed = now >= this.finalDate;
      this.offset = {
        seconds: this.totalSecsLeft % 60,
        minutes: Math.floor(this.totalSecsLeft / 60) % 60,
        hours: Math.floor(this.totalSecsLeft / 60 / 60) % 24,
        days: Math.floor(this.totalSecsLeft / 60 / 60 / 24) % 7,
        daysToWeek: Math.floor(this.totalSecsLeft / 60 / 60 / 24) % 7,
        daysToMonth: Math.floor(this.totalSecsLeft / 60 / 60 / 24 % 30.4368),
        weeks: Math.floor(this.totalSecsLeft / 60 / 60 / 24 / 7),
        weeksToMonth: Math.floor(this.totalSecsLeft / 60 / 60 / 24 / 7) % 4,
        months: Math.floor(this.totalSecsLeft / 60 / 60 / 24 / 30.4368),
        years: Math.abs(this.finalDate.getFullYear() - now.getFullYear()),
        totalDays: Math.floor(this.totalSecsLeft / 60 / 60 / 24),
        totalHours: Math.floor(this.totalSecsLeft / 60 / 60),
        totalMinutes: Math.floor(this.totalSecsLeft / 60),
        totalSeconds: this.totalSecsLeft
      };

      if (!this.options.elapse && this.totalSecsLeft === 0) {
        this.stop();
        this.dispatchEvent("finish");
      } else {
        this.dispatchEvent("update");
      }
    },
    dispatchEvent: function dispatchEvent(eventName) {
      var event = $.Event(eventName + ".countdown");
      event.finalDate = this.finalDate;
      event.elapsed = this.elapsed;
      event.offset = $.extend({}, this.offset);
      event.strftime = strftime(this.offset);
      this.$el.trigger(event);
    }
  });

  $.fn.countdown = function () {
    var argumentsArray = Array.prototype.slice.call(arguments, 0);
    return this.each(function () {
      var instanceNumber = $(this).data("countdown-instance");

      if (instanceNumber !== undefined) {
        var instance = instances[instanceNumber],
            method = argumentsArray[0];

        if (Countdown.prototype.hasOwnProperty(method)) {
          instance[method].apply(instance, argumentsArray.slice(1));
        } else if (String(method).match(/^[$A-Z_][0-9A-Z_$]*$/i) === null) {
          instance.setFinalDate.call(instance, method);
          instance.start();
        } else {
          $.error("Method %s does not exist on jQuery.countdown".replace(/\%s/gi, method));
        }
      } else {
        new Countdown(this, argumentsArray[0], argumentsArray[1]);
      }
    });
  };
});

/***/ })

/******/ });
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vd2VicGFjay9ib290c3RyYXAiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2Nzcy9hcHAuc2NzcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvY3NzL2Jhc2UuY3NzIiwid2VicGFjazovLy8uL2Fzc2V0cy9jc3MvaG9tZVN0eWxlLmNzcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvaW1hZ2VzIHN5bmMgXFwuKHBuZ3xqcGd8anBlZ3xnaWZ8aWNvfHN2Z3x3ZWJwKSQiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2ltYWdlcy8wNDAzZTA3NWJhMDEzZmEwZDhhOWNlYWMwYTEyMDZhNC5wbmciLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2ltYWdlcy8wNmJjOTRlNmI0YWZjY2I3Y2Q5ZTI5ZGM3MTkyZGJhMF9vcmlnaW5hbC5naWYiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2ltYWdlcy8xLnBuZyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvaW1hZ2VzLzEwLnBuZyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvaW1hZ2VzLzIucG5nIiwid2VicGFjazovLy8uL2Fzc2V0cy9pbWFnZXMvMjAucG5nIiwid2VicGFjazovLy8uL2Fzc2V0cy9pbWFnZXMvMjdhMTY5NzBkYTFmODE4ZWEyNDE5ZjkzYThhMTZiZTRfb3JpZ2luYWwucG5nIiwid2VicGFjazovLy8uL2Fzc2V0cy9pbWFnZXMvMzJmZWIwY2EyYjM1NTQzOGU0ZDVlYTg4YTAxYjI1MGVfb3JpZ2luYWwucG5nIiwid2VicGFjazovLy8uL2Fzc2V0cy9pbWFnZXMvNC5wbmciLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2ltYWdlcy80NTFjMDVhNWRjODE0OGFmZmU4NTQ4OGRmYTRlYzgzOV9vcmlnaW5hbC5qcGciLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2ltYWdlcy81NzgyZTg2ODM4YTYyZGQwNWQzMzQ4ZjI4YjQ0YzRhMl9vcmlnaW5hbC5wbmciLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2ltYWdlcy82ZThlMDcwYWFhNDczMDQxZGYzNjI4YzAyNGE4MWNhYl9vcmlnaW5hbC5wbmciLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2ltYWdlcy82Zjc3NGZlY2Y3ZGU1NzQ3NDhmYjBiYjY5MDcyMDkwZl9vcmlnaW5hbC5qcGciLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2ltYWdlcy84OTU0ZWVlZjc0YmUwMDFkZWNkYWM1NjRmNDY1YTUwYV9vcmlnaW5hbC5qcGciLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2ltYWdlcy85OWRlNWZlZWY0YjAyYzkzMDljYWU2NzZmNTBmODIwM19vcmlnaW5hbC5naWYiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2ltYWdlcy9BZGFwYXRhdGlvbi5wbmciLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2ltYWdlcy9BdmlzRlIucG5nIiwid2VicGFjazovLy8uL2Fzc2V0cy9pbWFnZXMvQXZpc19kZXNfdGVzdGV1cnMucG5nIiwid2VicGFjazovLy8uL2Fzc2V0cy9pbWFnZXMvQmVzb2luIHZvdXMucG5nIiwid2VicGFjazovLy8uL2Fzc2V0cy9pbWFnZXMvQ2FyYWMgbW9udHVyZS5wbmciLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2ltYWdlcy9EZXRhaWxzIHRyYWl0ZW1lbnRzLnBuZyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvaW1hZ2VzL0TDqXRhaWxzIGRlcyB0cmFpdGVtZW50cy5wbmciLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2ltYWdlcy9FRC5wbmciLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2ltYWdlcy9GSUdGSU5BTC5naWYiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2ltYWdlcy9GUi5wbmciLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2ltYWdlcy9GUjEwLnBuZyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvaW1hZ2VzL0ZSMTEucG5nIiwid2VicGFjazovLy8uL2Fzc2V0cy9pbWFnZXMvRlIxMi5wbmciLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2ltYWdlcy9GUjE0LnBuZyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvaW1hZ2VzL0ZSMi5wbmciLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2ltYWdlcy9GUjMucG5nIiwid2VicGFjazovLy8uL2Fzc2V0cy9pbWFnZXMvRlI0LnBuZyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvaW1hZ2VzL0ZSNS5wbmciLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2ltYWdlcy9GUjYucG5nIiwid2VicGFjazovLy8uL2Fzc2V0cy9pbWFnZXMvRlI3LnBuZyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvaW1hZ2VzL0ZSOC5wbmciLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2ltYWdlcy9GUjkucG5nIiwid2VicGFjazovLy8uL2Fzc2V0cy9pbWFnZXMvRlJGUi5qcGciLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2ltYWdlcy9GUmNvdXJiZS5wbmciLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2ltYWdlcy9GaWNoaWVyXzQuc3ZnIiwid2VicGFjazovLy8uL2Fzc2V0cy9pbWFnZXMvRmxvdS5wbmciLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2ltYWdlcy9GcmFpc19kZV9wb3J0LnBuZyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvaW1hZ2VzL0luZm9GUi5wbmciLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2ltYWdlcy9MdW5ldHRlcyBhcmFpZ27DqWUucG5nIiwid2VicGFjazovLy8uL2Fzc2V0cy9pbWFnZXMvTXlvcGkgbm9jLnBuZyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvaW1hZ2VzL05vcyBtb2RTbGVzLnBuZyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvaW1hZ2VzL09XTF9sb2dvLnBuZyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvaW1hZ2VzL09iamVjdGlmcy5wbmciLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2ltYWdlcy9PYmplY3RpZnNfYmFubmVyLnBuZyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvaW1hZ2VzL09wYXF1ZS5wbmciLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2ltYWdlcy9PcmlnaW5lc192ZXJyZXMucG5nIiwid2VicGFjazovLy8uL2Fzc2V0cy9pbWFnZXMvUGFja0ZSLnBuZyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvaW1hZ2VzL1BvdXJfUXVpLnBuZyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvaW1hZ2VzL1BvdXJxdW9pX093bF9leWV3ZWFyLnBuZyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvaW1hZ2VzL1JvbmRlX0VjYWlsbGUucG5nIiwid2VicGFjazovLy8uL2Fzc2V0cy9pbWFnZXMvVGltZWxpbmUgRlIucG5nIiwid2VicGFjazovLy8uL2Fzc2V0cy9pbWFnZXMvVklEXzIwMTkxMDEwXzE2MTA1N18xLmdpZiIsIndlYnBhY2s6Ly8vLi9hc3NldHMvaW1hZ2VzL2E2N2EwZjY2NTM4Nzc4ZmYxZjQ0ZjJiNjVjZDQ4NWVjX29yaWdpbmFsLmpwZyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvaW1hZ2VzL2E4NDcxNTk4NjUwMTc4MTE0MWU1MDc0NDQyYjg5NzQ2X29yaWdpbmFsLnBuZyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvaW1hZ2VzL2IzNmM5Y2YzZDQ0YmE1OGRiMGUwOTM2M2U0ZDY5ZDA1X29yaWdpbmFsLnBuZyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvaW1hZ2VzL2JhY2tncm91bmQuanBnIiwid2VicGFjazovLy8uL2Fzc2V0cy9pbWFnZXMvYmYzMTIxZGMyMzA5Y2Y3ODA0OTQ0N2JjYmRhM2MxNDlfb3JpZ2luYWwuanBnIiwid2VicGFjazovLy8uL2Fzc2V0cy9pbWFnZXMvY2FyYWMgdmVycmVzLnBuZyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvaW1hZ2VzL2NhcmFjLnBuZyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvaW1hZ2VzL2Nob2l4X3RhaWxsZS5wbmciLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2ltYWdlcy9jb2xsYXBzLnBuZyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvaW1hZ2VzL2NvcnJpZ2UucG5nIiwid2VicGFjazovLy8uL2Fzc2V0cy9pbWFnZXMvZHVtbXkuanBnIiwid2VicGFjazovLy8uL2Fzc2V0cy9pbWFnZXMvZHVtbXkyLnBuZyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvaW1hZ2VzL2Y0OTJhY2Q0YTk4NDZlZWM1MzJmMzFhMjFiZmYzMTc5X29yaWdpbmFsLnBuZyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvaW1hZ2VzL2Zhdmljb24uaWNvIiwid2VicGFjazovLy8uL2Fzc2V0cy9pbWFnZXMvZmQzZWQzOWE1NmEwNGZmNzVjZDAwYjE3OWMwMmY0NGFfb3JpZ2luYWwucG5nIiwid2VicGFjazovLy8uL2Fzc2V0cy9pbWFnZXMvZmluZnIuZ2lmIiwid2VicGFjazovLy8uL2Fzc2V0cy9pbWFnZXMvZ2VuZV9ldF9iZW5lZi5wbmciLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2ltYWdlcy9naWYuZ2lmIiwid2VicGFjazovLy8uL2Fzc2V0cy9pbWFnZXMvZ2lmY2FyLmdpZiIsIndlYnBhY2s6Ly8vLi9hc3NldHMvaW1hZ2VzL25ldC5wbmciLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2ltYWdlcy9wYXJyYWluYWdlLnBuZyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvaW1hZ2VzL3BlcnNvbm5lc19jb25jZXJuZWVzLnBuZyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvaW1hZ2VzL3BsYWNlaG9sZGVyLnBuZyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvaW1hZ2VzL3Byb2Nlc3MucG5nIiwid2VicGFjazovLy8uL2Fzc2V0cy9pbWFnZXMvcXVhbmRfbGVzX3BvcnRlci5wbmciLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2ltYWdlcy9yZWNhcC5wbmciLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2ltYWdlcy92ZXJyZXMgamF1bmVzLnBuZyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvaW1hZ2VzL3ZlcnJlcyBwb2xhcy5wbmciLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2pzL2FwcC5qcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvanMvanF1ZXJ5LmNvdW50ZG93bi5qcyJdLCJuYW1lcyI6WyJyZXF1aXJlIiwiJCIsImdsb2JhbCIsImpRdWVyeSIsImRvY3VtZW50IiwicmVhZHkiLCJwb3BvdmVyIiwiaW1hZ2VzQ29udGV4dCIsImtleXMiLCJmb3JFYWNoIiwiZmFjdG9yeSIsImRlZmluZSIsImluc3RhbmNlcyIsIm1hdGNoZXJzIiwiZGVmYXVsdE9wdGlvbnMiLCJwcmVjaXNpb24iLCJlbGFwc2UiLCJkZWZlciIsInB1c2giLCJzb3VyY2UiLCJSZWdFeHAiLCJqb2luIiwicGFyc2VEYXRlU3RyaW5nIiwiZGF0ZVN0cmluZyIsIkRhdGUiLCJTdHJpbmciLCJtYXRjaCIsIk51bWJlciIsInJlcGxhY2UiLCJFcnJvciIsIkRJUkVDVElWRV9LRVlfTUFQIiwiWSIsIm0iLCJuIiwiZCIsInciLCJXIiwiSCIsIk0iLCJTIiwiRCIsIkkiLCJOIiwiVCIsImVzY2FwZWRSZWdFeHAiLCJzdHIiLCJzYW5pdGl6ZSIsInRvU3RyaW5nIiwic3RyZnRpbWUiLCJvZmZzZXRPYmplY3QiLCJmb3JtYXQiLCJkaXJlY3RpdmVzIiwiaSIsImxlbiIsImxlbmd0aCIsImRpcmVjdGl2ZSIsInJlZ2V4cCIsIm1vZGlmaWVyIiwicGx1cmFsIiwidmFsdWUiLCJoYXNPd25Qcm9wZXJ0eSIsInBsdXJhbGl6ZSIsImNvdW50Iiwic2luZ3VsYXIiLCJzcGxpdCIsIk1hdGgiLCJhYnMiLCJDb3VudGRvd24iLCJlbCIsImZpbmFsRGF0ZSIsIm9wdGlvbnMiLCIkZWwiLCJpbnRlcnZhbCIsIm9mZnNldCIsImV4dGVuZCIsImluc3RhbmNlTnVtYmVyIiwiZGF0YSIsIm9uIiwic2V0RmluYWxEYXRlIiwic3RhcnQiLCJwcm90b3R5cGUiLCJjbGVhckludGVydmFsIiwic2VsZiIsInVwZGF0ZSIsInNldEludGVydmFsIiwiY2FsbCIsInN0b3AiLCJkaXNwYXRjaEV2ZW50IiwidG9nZ2xlIiwicGF1c2UiLCJyZXN1bWUiLCJyZW1vdmUiLCJjb3VudGRvd25JbnN0YW5jZSIsImNsb3Nlc3QiLCJoYXNFdmVudHNBdHRhY2hlZCIsIl9kYXRhIiwidW5kZWZpbmVkIiwibm93IiwibmV3VG90YWxTZWNzTGVmdCIsImdldFRpbWUiLCJjZWlsIiwidG90YWxTZWNzTGVmdCIsImVsYXBzZWQiLCJzZWNvbmRzIiwibWludXRlcyIsImZsb29yIiwiaG91cnMiLCJkYXlzIiwiZGF5c1RvV2VlayIsImRheXNUb01vbnRoIiwid2Vla3MiLCJ3ZWVrc1RvTW9udGgiLCJtb250aHMiLCJ5ZWFycyIsImdldEZ1bGxZZWFyIiwidG90YWxEYXlzIiwidG90YWxIb3VycyIsInRvdGFsTWludXRlcyIsInRvdGFsU2Vjb25kcyIsImV2ZW50TmFtZSIsImV2ZW50IiwiRXZlbnQiLCJ0cmlnZ2VyIiwiZm4iLCJjb3VudGRvd24iLCJhcmd1bWVudHNBcnJheSIsIkFycmF5Iiwic2xpY2UiLCJhcmd1bWVudHMiLCJlYWNoIiwiaW5zdGFuY2UiLCJtZXRob2QiLCJhcHBseSIsImVycm9yIl0sIm1hcHBpbmdzIjoiO1FBQUE7UUFDQTtRQUNBO1FBQ0E7UUFDQTs7UUFFQTtRQUNBO1FBQ0E7UUFDQSxRQUFRLG9CQUFvQjtRQUM1QjtRQUNBO1FBQ0E7UUFDQTtRQUNBO1FBQ0E7UUFDQTtRQUNBO1FBQ0E7UUFDQTtRQUNBO1FBQ0E7O1FBRUE7UUFDQTtRQUNBOztRQUVBO1FBQ0E7O1FBRUE7UUFDQTtRQUNBO1FBQ0E7UUFDQTtRQUNBLGlCQUFpQiw0QkFBNEI7UUFDN0M7UUFDQTtRQUNBLGtCQUFrQiwyQkFBMkI7UUFDN0M7UUFDQTtRQUNBO1FBQ0E7UUFDQTtRQUNBO1FBQ0E7UUFDQTs7UUFFQTtRQUNBOztRQUVBO1FBQ0E7O1FBRUE7UUFDQTtRQUNBO1FBQ0E7UUFDQTtRQUNBOztRQUVBOztRQUVBO1FBQ0E7O1FBRUE7UUFDQTtRQUNBO1FBQ0E7UUFDQTtRQUNBO1FBQ0E7UUFDQTtRQUNBO1FBQ0E7O1FBRUE7UUFDQTs7UUFFQTtRQUNBOztRQUVBO1FBQ0E7UUFDQTs7O1FBR0E7UUFDQTs7UUFFQTtRQUNBOztRQUVBO1FBQ0E7UUFDQTtRQUNBLDBDQUEwQyxnQ0FBZ0M7UUFDMUU7UUFDQTs7UUFFQTtRQUNBO1FBQ0E7UUFDQSx3REFBd0Qsa0JBQWtCO1FBQzFFO1FBQ0EsaURBQWlELGNBQWM7UUFDL0Q7O1FBRUE7UUFDQTtRQUNBO1FBQ0E7UUFDQTtRQUNBO1FBQ0E7UUFDQTtRQUNBO1FBQ0E7UUFDQTtRQUNBLHlDQUF5QyxpQ0FBaUM7UUFDMUUsZ0hBQWdILG1CQUFtQixFQUFFO1FBQ3JJO1FBQ0E7O1FBRUE7UUFDQTtRQUNBO1FBQ0EsMkJBQTJCLDBCQUEwQixFQUFFO1FBQ3ZELGlDQUFpQyxlQUFlO1FBQ2hEO1FBQ0E7UUFDQTs7UUFFQTtRQUNBLHNEQUFzRCwrREFBK0Q7O1FBRXJIO1FBQ0E7O1FBRUE7UUFDQTtRQUNBO1FBQ0E7UUFDQSxnQkFBZ0IsdUJBQXVCO1FBQ3ZDOzs7UUFHQTtRQUNBO1FBQ0E7UUFDQTs7Ozs7Ozs7Ozs7O0FDdkpBLHVDOzs7Ozs7Ozs7OztBQ0FBLHVDOzs7Ozs7Ozs7OztBQ0FBLHVDOzs7Ozs7Ozs7OztBQ0FBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7O0FBR0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBLHlGOzs7Ozs7Ozs7OztBQzFHQSwrRTs7Ozs7Ozs7Ozs7QUNBQSx3Rjs7Ozs7Ozs7Ozs7QUNBQSxnRDs7Ozs7Ozs7Ozs7QUNBQSxpRDs7Ozs7Ozs7Ozs7QUNBQSxnRDs7Ozs7Ozs7Ozs7QUNBQSxpRDs7Ozs7Ozs7Ozs7QUNBQSx3Rjs7Ozs7Ozs7Ozs7QUNBQSx3Rjs7Ozs7Ozs7Ozs7QUNBQSxnRDs7Ozs7Ozs7Ozs7QUNBQSx3Rjs7Ozs7Ozs7Ozs7QUNBQSx3Rjs7Ozs7Ozs7Ozs7QUNBQSx3Rjs7Ozs7Ozs7Ozs7QUNBQSx3Rjs7Ozs7Ozs7Ozs7QUNBQSx3Rjs7Ozs7Ozs7Ozs7QUNBQSx3Rjs7Ozs7Ozs7Ozs7QUNBQSwwRDs7Ozs7Ozs7Ozs7QUNBQSxxRDs7Ozs7Ozs7Ozs7QUNBQSxnRTs7Ozs7Ozs7Ozs7QUNBQSwwRDs7Ozs7Ozs7Ozs7QUNBQSw0RDs7Ozs7Ozs7Ozs7QUNBQSxrRTs7Ozs7Ozs7Ozs7QUNBQSxzRTs7Ozs7Ozs7Ozs7QUNBQSxpRDs7Ozs7Ozs7Ozs7QUNBQSx1RDs7Ozs7Ozs7Ozs7QUNBQSxpRDs7Ozs7Ozs7Ozs7QUNBQSxtRDs7Ozs7Ozs7Ozs7QUNBQSxtRDs7Ozs7Ozs7Ozs7QUNBQSxtRDs7Ozs7Ozs7Ozs7QUNBQSxtRDs7Ozs7Ozs7Ozs7QUNBQSxrRDs7Ozs7Ozs7Ozs7QUNBQSxrRDs7Ozs7Ozs7Ozs7QUNBQSxrRDs7Ozs7Ozs7Ozs7QUNBQSxrRDs7Ozs7Ozs7Ozs7QUNBQSxrRDs7Ozs7Ozs7Ozs7QUNBQSxrRDs7Ozs7Ozs7Ozs7QUNBQSxrRDs7Ozs7Ozs7Ozs7QUNBQSxrRDs7Ozs7Ozs7Ozs7QUNBQSxtRDs7Ozs7Ozs7Ozs7QUNBQSx1RDs7Ozs7Ozs7Ozs7QUNBQSx3RDs7Ozs7Ozs7Ozs7QUNBQSxtRDs7Ozs7Ozs7Ozs7QUNBQSw0RDs7Ozs7Ozs7Ozs7QUNBQSxxRDs7Ozs7Ozs7Ozs7QUNBQSxnRTs7Ozs7Ozs7Ozs7QUNBQSx3RDs7Ozs7Ozs7Ozs7QUNBQSwwRDs7Ozs7Ozs7Ozs7QUNBQSx1RDs7Ozs7Ozs7Ozs7QUNBQSx3RDs7Ozs7Ozs7Ozs7QUNBQSwrRDs7Ozs7Ozs7Ozs7QUNBQSxxRDs7Ozs7Ozs7Ozs7QUNBQSw4RDs7Ozs7Ozs7Ozs7QUNBQSxxRDs7Ozs7Ozs7Ozs7QUNBQSx1RDs7Ozs7Ozs7Ozs7QUNBQSxtRTs7Ozs7Ozs7Ozs7QUNBQSw0RDs7Ozs7Ozs7Ozs7QUNBQSwwRDs7Ozs7Ozs7Ozs7QUNBQSxvRTs7Ozs7Ozs7Ozs7QUNBQSx3Rjs7Ozs7Ozs7Ozs7QUNBQSx3Rjs7Ozs7Ozs7Ozs7QUNBQSx3Rjs7Ozs7Ozs7Ozs7QUNBQSx5RDs7Ozs7Ozs7Ozs7QUNBQSx3Rjs7Ozs7Ozs7Ozs7QUNBQSwyRDs7Ozs7Ozs7Ozs7QUNBQSxvRDs7Ozs7Ozs7Ozs7QUNBQSwyRDs7Ozs7Ozs7Ozs7QUNBQSxzRDs7Ozs7Ozs7Ozs7QUNBQSxzRDs7Ozs7Ozs7Ozs7QUNBQSxvRDs7Ozs7Ozs7Ozs7QUNBQSxxRDs7Ozs7Ozs7Ozs7QUNBQSx3Rjs7Ozs7Ozs7Ozs7QUNBQSxzRDs7Ozs7Ozs7Ozs7QUNBQSx3Rjs7Ozs7Ozs7Ozs7QUNBQSxvRDs7Ozs7Ozs7Ozs7QUNBQSw0RDs7Ozs7Ozs7Ozs7QUNBQSxrRDs7Ozs7Ozs7Ozs7QUNBQSxxRDs7Ozs7Ozs7Ozs7QUNBQSxrRDs7Ozs7Ozs7Ozs7QUNBQSx5RDs7Ozs7Ozs7Ozs7QUNBQSxtRTs7Ozs7Ozs7Ozs7QUNBQSwwRDs7Ozs7Ozs7Ozs7QUNBQSxzRDs7Ozs7Ozs7Ozs7QUNBQSwrRDs7Ozs7Ozs7Ozs7QUNBQSxvRDs7Ozs7Ozs7Ozs7QUNBQSw0RDs7Ozs7Ozs7Ozs7QUNBQSwyRDs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7OztBQ0FBOzs7Ozs7QUFPQTtBQUNBQSxtQkFBTyxDQUFDLDhDQUFELENBQVA7O0FBQ0FBLG1CQUFPLENBQUMsOENBQUQsQ0FBUDs7QUFDQUEsbUJBQU8sQ0FBQyx3REFBRCxDQUFQOztBQUNBQSxtQkFBTyxDQUFDLDhEQUFELENBQVAsQyxDQUVBOzs7QUFDQSxJQUFNQyxDQUFDLEdBQUdELG1CQUFPLENBQUMsb0RBQUQsQ0FBakI7O0FBRUFBLG1CQUFPLENBQUMsZ0dBQUQsQ0FBUDs7QUFDQUUsTUFBTSxDQUFDRCxDQUFQLEdBQVdDLE1BQU0sQ0FB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SWtDLFFBQVEsR0FBR3RILFNBQVMsQ0FBQytELGNBQUQsQ0FBeEI7QUFBQSxZQUEwQ3dELE1BQU0sR0FBR04sY0FBYyxDQUFDLENBQUQsQ0FBakU7O0FBQ0EsWUFBSTFELFNBQVMsQ0FBQ2EsU0FBVixDQUFvQnBCLGNBQXBCLENBQW1DdUUsTUFBbkMsQ0FBSixFQUFnRDtBQUM1Q0Qsa0JBQVEsQ0FBQ0MsTUFBRCxDQUFSLENBQWlCQyxLQUFqQixDQUF1QkYsUUFBdkIsRUFBaUNMLGNBQWMsQ0FBQ0UsS0FBZixDQUFxQixDQUFyQixDQUFqQztBQUNILFNBRkQsTUFFTyxJQUFJdEcsTUFBTSxDQUFDMEcsTUFBRCxDQUFOLENBQWV6RyxLQUFmLENBQXFCLHVCQUFyQixNQUFrRCxJQUF0RCxFQUE0RDtBQUMvRHdHLGtCQUFRLENBQUNwRCxZQUFULENBQXNCTyxJQUF0QixDQUEyQjZDLFFBQTNCLEVBQXFDQyxNQUFyQztBQUNBRCxrQkFBUSxDQUFDbkQsS0FBVDtBQUNILFNBSE0sTUFHQTtBQUNIOUUsV0FBQyxDQUFDb0ksS0FBRixDQUFRLCtDQUErQ3pHLE9BQS9DLENBQXVELE9BQXZELEVBQWdFdUcsTUFBaEUsQ0FBUjtBQUNIO0FBQ0osT0FWRCxNQVVPO0FBQ0gsWUFBSWhFLFNBQUosQ0FBYyxJQUFkLEVBQW9CMEQsY0FBYyxDQUFDLENBQUQsQ0FBbEMsRUFBdUNBLGNBQWMsQ0FBQyxDQUFELENBQXJEO0FBQ0g7QUFDSixLQWZNLENBQVA7QUFnQkgsR0FsQkQ7QUFtQkgsQ0FoT0QsRSIsImZpbGUiOiJhcHAuanMiLCJzb3VyY2VzQ29udGVudCI6WyIgXHQvLyBpbnN0YWxsIGEgSlNPTlAgY2FsbGJhY2sgZm9yIGNodW5rIGxvYWRpbmdcbiBcdGZ1bmN0aW9uIHdlYnBhY2tKc29ucENhbGxiYWNrKGRhdGEpIHtcbiBcdFx0dmFyIGNodW5rSWRzID0gZGF0YVswXTtcbiBcdFx0dmFyIG1vcmVNb2R1bGVzID0gZGF0YVsxXTtcbiBcdFx0dmFyIGV4ZWN1dGVNb2R1bGVzID0gZGF0YVsyXTtcblxuIFx0XHQvLyBhZGQgXCJtb3JlTW9kdWxlc1wiIHRvIHRoZSBtb2R1bGVzIG9iamVjdCxcbiBcdFx0Ly8gdGhlbiBmbGFnIGFsbCBcImNodW5rSWRzXCIgYXMgbG9hZGVkIGFuZCBmaXJlIGNhbGxiYWNrXG4gXHRcdHZhciBtb2R1bGVJZCwgY2h1bmtJZCwgaSA9IDAsIHJlc29sdmVzID0gW107XG4gXHRcdGZvcig7aSA8IGNodW5rSWRzLmxlbmd0aDsgaSsrKSB7XG4gXHRcdFx0Y2h1bmtJZCA9IGNodW5rSWRzW2ldO1xuIFx0XHRcdGlmKE9iamVjdC5wcm90b3R5cGUuaGFzT3duUHJvcGVydHkuY2FsbChpbnN0YWxsZWRDaHVua3MsIGNodW5rSWQpICYmIGluc3RhbGxlZENodW5rc1tjaHVua0lkXSkge1xuIFx0XHRcdFx0cmVzb2x2ZXMucHVzaChpbnN0YWxsZWRDaHVua3NbY2h1bmtJZF1bMF0pO1xuIFx0XHRcdH1cbiBcdFx0XHRpbnN0YWxsZWRDaHVua3NbY2h1bmtJZF0gPSAwO1xuIFx0XHR9XG4gXHRcdGZvcihtb2R1bGVJZCBpbiBtb3JlTW9kdWxlcykge1xuIFx0XHRcdGlmKE9iamVjdC5wcm90b3R5cGUuaGFzT3duUHJvcGVydHkuY2FsbChtb3JlTW9kdWxlcywgbW9kdWxlSWQpKSB7XG4gXHRcdFx0XHRtb2R1bGVzW21vZHVsZUlkXSA9IG1vcmVNb2R1bGVzW21vZHVsZUlkXTtcbiBcdFx0XHR9XG4gXHRcdH1cbiBcdFx0aWYocGFyZW50SnNvbnBGdW5jdGlvbikgcGFyZW50SnNvbnBGdW5jdGlvbihkYXRhKTtcblxuIFx0XHR3aGlsZShyZXNvbHZlcy5sZW5ndGgpIHtcbiBcdFx0XHRyZXNvbHZlcy5zaGlmdCgpKCk7XG4gXHRcdH1cblxuIFx0XHQvLyBhZGQgZW50cnkgbW9kdWxlcyBmcm9tIGxvYWRlZCBjaHVuayB0byBkZWZlcnJlZCBsaXN0XG4gXHRcdGRlZmVycmVkTW9kdWxlcy5wdXNoLmFwcGx5KGRlZmVycmVkTW9kdWxlcywgZXhlY3V0ZU1vZHVsZXMgfHwgW10pO1xuXG4gXHRcdC8vIHJ1biBkZWZlcnJlZCBtb2R1bGVzIHdoZW4gYWxsIGNodW5rcyByZWFkeVxuIFx0XHRyZXR1cm4gY2hlY2tEZWZlcnJlZE1vZHVsZXMoKTtcbiBcdH07XG4gXHRmdW5jdGlvbiBjaGVja0RlZmVycmVkTW9kdWxlcygpIHtcbiBcdFx0dmFyIHJlc3VsdDtcbiBcdFx0Zm9yKHZhciBpID0gMDsgaSA8IGRlZmVycmVkTW9kdWxlcy5sZW5ndGg7IGkrKykge1xuIFx0XHRcdHZhciBkZWZlcnJlZE1vZHVsZSA9IGRlZmVycmVkTW9kdWxlc1tpXTtcbiBcdFx0XHR2YXIgZnVsZmlsbGVkID0gdHJ1ZTtcbiBcdFx0XHRmb3IodmFyIGogPSAxOyBqIDwgZGVmZXJyZWRNb2R1bGUubGVuZ3RoOyBqKyspIHtcbiBcdFx0XHRcdHZhciBkZXBJZCA9IGRlZmVycmVkTW9kdWxlW2pdO1xuIFx0XHRcdFx0aWYoaW5zdGFsbGVkQ2h1bmtzW2RlcElkXSAhPT0gMCkgZnVsZmlsbGVkID0gZmFsc2U7XG4gXHRcdFx0fVxuIFx0XHRcdGlmKGZ1bGZpbGxlZCkge1xuIFx0XHRcdFx0ZGVmZXJyZWRNb2R1bGVzLnNwbGljZShpLS0sIDEpO1xuIFx0XHRcdFx0cmVzdWx0ID0gX193ZWJwYWNrX3JlcXVpcmVfXyhfX3dlYnBhY2tfcmVxdWlyZV9fLnMgPSBkZWZlcnJlZE1vZHVsZVswXSk7XG4gXHRcdFx0fVxuIFx0XHR9XG5cbiBcdFx0cmV0dXJuIHJlc3VsdDtcbiBcdH1cblxuIFx0Ly8gVGhlIG1vZHVsZSBjYWNoZVxuIFx0dmFyIGluc3RhbGxlZE1vZHVsZXMgPSB7fTtcblxuIFx0Ly8gb2JqZWN0IHRvIHN0b3JlIGxvYWRlZCBhbmQgbG9hZGluZyBjaHVua3NcbiBcdC8vIHVuZGVmaW5lZCA9IGNodW5rIG5vdCBsb2FkZWQsIG51bGwgPSBjaHVuayBwcmVsb2FkZWQvcHJlZmV0Y2hlZFxuIFx0Ly8gUHJvbWlzZSA9IGNodW5rIGxvYWRpbmcsIDAgPSBjaHVuayBsb2FkZWRcbiBcdHZhciBpbnN0YWxsZWRDaHVua3MgPSB7XG4gXHRcdFwiYXBwXCI6IDBcbiBcdH07XG5cbiBcdHZhciBkZWZlcnJlZE1vZHVsZXMgPSBbXTtcblxuIFx0Ly8gVGhlIHJlcXVpcmUgZnVuY3Rpb25cbiBcdGZ1bmN0aW9uIF9fd2VicGFja19yZXF1aXJlX18obW9kdWxlSWQpIHtcblxuIFx0XHQvLyBDaGVjayBpZiBtb2R1bGUgaXMgaW4gY2FjaGVcbiBcdFx0aWYoaW5zdGFsbGVkTW9kdWxlc1ttb2R1bGVJZF0pIHtcbiBcdFx0XHRyZXR1cm4gaW5zdGFsbGVkTW9kdWxlc1ttb2R1bGVJZF0uZXhwb3J0cztcbiBcdFx0fVxuIFx0XHQvLyBDcmVhdGUgYSBuZXcgbW9kdWxlIChhbmQgcHV0IGl0IGludG8gdGhlIGNhY2hlKVxuIFx0XHR2YXIgbW9kdWxlID0gaW5zdGFsbGVkTW9kdWxlc1ttb2R1bGVJZF0gPSB7XG4gXHRcdFx0aTogbW9kdWxlSWQsXG4gXHRcdFx0bDogZmFsc2UsXG4gXHRcdFx0ZXhwb3J0czoge31cbiBcdFx0fTtcblxuIFx0XHQvLyBFeGVjdXRlIHRoZSBtb2R1bGUgZnVuY3Rpb25cbiBcdFx0bW9kdWxlc1ttb2R1bGVJZF0uY2FsbChtb2R1bGUuZXhwb3J0cywgbW9kdWxlLCBtb2R1bGUuZXhwb3J0cywgX193ZWJwYWNrX3JlcXVpcmVfXyk7XG5cbiBcdFx0Ly8gRmxhZyB0aGUgbW9kdWxlIGFzIGxvYWRlZFxuIFx0XHRtb2R1bGUubCA9IHRydWU7XG5cbiBcdFx0Ly8gUmV0dXJuIHRoZSBleHBvcnRzIG9mIHRoZSBtb2R1bGVcbiBcdFx0cmV0dXJuIG1vZHVsZS5leHBvcnRzO1xuIFx0fVxuXG5cbiBcdC8vIGV4cG9zZSB0aGUgbW9kdWxlcyBvYmplY3QgKF9fd2VicGFja19tb2R1bGVzX18pXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLm0gPSBtb2R1bGVzO1xuXG4gXHQvLyBleHBvc2UgdGhlIG1vZHVsZSBjYWNoZVxuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5jID0gaW5zdGFsbGVkTW9kdWxlcztcblxuIFx0Ly8gZGVmaW5lIGdldHRlciBmdW5jdGlvbiBmb3IgaGFybW9ueSBleHBvcnRzXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLmQgPSBmdW5jdGlvbihleHBvcnRzLCBuYW1lLCBnZXR0ZXIpIHtcbiBcdFx0aWYoIV9fd2VicGFja19yZXF1aXJlX18ubyhleHBvcnRzLCBuYW1lKSkge1xuIFx0XHRcdE9iamVjdC5kZWZpbmVQcm9wZXJ0eShleHBvcnRzLCBuYW1lLCB7IGVudW1lcmFibGU6IHRydWUsIGdldDogZ2V0dGVyIH0pO1xuIFx0XHR9XG4gXHR9O1xuXG4gXHQvLyBkZWZpbmUgX19lc01vZHVsZSBvbiBleHBvcnRzXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLnIgPSBmdW5jdGlvbihleHBvcnRzKSB7XG4gXHRcdGlmKHR5cGVvZiBTeW1ib2wgIT09ICd1bmRlZmluZWQnICYmIFN5bWJvbC50b1N0cmluZ1RhZykge1xuIFx0XHRcdE9iamVjdC5kZWZpbmVQcm9wZXJ0eShleHBvcnRzLCBTeW1ib2wudG9TdHJpbmdUYWcsIHsgdmFsdWU6ICdNb2R1bGUnIH0pO1xuIFx0XHR9XG4gXHRcdE9iamVjdC5kZWZpbmVQcm9wZXJ0eShleHBvcnRzLCAnX19lc01vZHVsZScsIHsgdmFsdWU6IHRydWUgfSk7XG4gXHR9O1xuXG4gXHQvLyBjcmVhdGUgYSBmYWtlIG5hbWVzcGFjZSBvYmplY3RcbiBcdC8vIG1vZGUgJiAxOiB2YWx1ZSBpcyBhIG1vZHVsZSBpZCwgcmVxdWlyZSBpdFxuIFx0Ly8gbW9kZSAmIDI6IG1lcmdlIGFsbCBwcm9wZXJ0aWVzIG9mIHZhbHVlIGludG8gdGhlIG5zXG4gXHQvLyBtb2RlICYgNDogcmV0dXJuIHZhbHVlIHdoZW4gYWxyZWFkeSBucyBvYmplY3RcbiBcdC8vIG1vZGUgJiA4fDE6IGJlaGF2ZSBsaWtlIHJlcXVpcmVcbiBcdF9fd2VicGFja19yZXF1aXJlX18udCA9IGZ1bmN0aW9uKHZhbHVlLCBtb2RlKSB7XG4gXHRcdGlmKG1vZGUgJiAxKSB2YWx1ZSA9IF9fd2VicGFja19yZXF1aXJlX18odmFsdWUpO1xuIFx0XHRpZihtb2RlICYgOCkgcmV0dXJuIHZhbHVlO1xuIFx0XHRpZigobW9kZSAmIDQpICYmIHR5cGVvZiB2YWx1ZSA9PT0gJ29iamVjdCcgJiYgdmFsdWUgJiYgdmFsdWUuX19lc01vZHVsZSkgcmV0dXJuIHZhbHVlO1xuIFx0XHR2YXIgbnMgPSBPYmplY3QuY3JlYXRlKG51bGwpO1xuIFx0XHRfX3dlYnBhY2tfcmVxdWlyZV9fLnIobnMpO1xuIFx0XHRPYmplY3QuZGVmaW5lUHJvcGVydHkobnMsICdkZWZhdWx0JywgeyBlbnVtZXJhYmxlOiB0cnVlLCB2YWx1ZTogdmFsdWUgfSk7XG4gXHRcdGlmKG1vZGUgJiAyICYmIHR5cGVvZiB2YWx1ZSAhPSAnc3RyaW5nJykgZm9yKHZhciBrZXkgaW4gdmFsdWUpIF9fd2VicGFja19yZXF1aXJlX18uZChucywga2V5LCBmdW5jdGlvbihrZXkpIHsgcmV0dXJuIHZhbHVlW2tleV07IH0uYmluZChudWxsLCBrZXkpKTtcbiBcdFx0cmV0dXJuIG5zO1xuIFx0fTtcblxuIFx0Ly8gZ2V0RGVmYXVsdEV4cG9ydCBmdW5jdGlvbiBmb3IgY29tcGF0aWJpbGl0eSB3aXRoIG5vbi1oYXJtb255IG1vZHVsZXNcbiBcdF9fd2VicGFja19yZXF1aXJlX18ubiA9IGZ1bmN0aW9uKG1vZHVsZSkge1xuIFx0XHR2YXIgZ2V0dGVyID0gbW9kdWxlICYmIG1vZHVsZS5fX2VzTW9kdWxlID9cbiBcdFx0XHRmdW5jdGlvbiBnZXREZWZhdWx0KCkgeyByZXR1cm4gbW9kdWxlWydkZWZhdWx0J107IH0gOlxuIFx0XHRcdGZ1bmN0aW9uIGdldE1vZHVsZUV4cG9ydHMoKSB7IHJldHVybiBtb2R1bGU7IH07XG4gXHRcdF9fd2VicGFja19yZXF1aXJlX18uZChnZXR0ZXIsICdhJywgZ2V0dGVyKTtcbiBcdFx0cmV0dXJuIGdldHRlcjtcbiBcdH07XG5cbiBcdC8vIE9iamVjdC5wcm90b3R5cGUuaGFzT3duUHJvcGVydHkuY2FsbFxuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5vID0gZnVuY3Rpb24ob2JqZWN0LCBwcm9wZXJ0eSkgeyByZXR1cm4gT2JqZWN0LnByb3RvdHlwZS5oYXNPd25Qcm9wZXJ0eS5jYWxsKG9iamVjdCwgcHJvcGVydHkpOyB9O1xuXG4gXHQvLyBfX3dlYnBhY2tfcHVibGljX3BhdGhfX1xuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5wID0gXCIvYnVpbGQvXCI7XG5cbiBcdHZhciBqc29ucEFycmF5ID0gd2luZG93W1wid2VicGFja0pzb25wXCJdID0gd2luZG93W1wid2VicGFja0pzb25wXCJdIHx8IFtdO1xuIFx0dmFyIG9sZEpzb25wRnVuY3Rpb24gPSBqc29ucEFycmF5LnB1c2guYmluZChqc29ucEFycmF5KTtcbiBcdGpzb25wQXJyYXkucHVzaCA9IHdlYnBhY2tKc29ucENhbGxiYWNrO1xuIFx0anNvbnBBcnJheSA9IGpzb25wQXJyYXkuc2xpY2UoKTtcbiBcdGZvcih2YXIgaSA9IDA7IGkgPCBqc29ucEFycmF5Lmxlbmd0aDsgaSsrKSB3ZWJwYWNrSnNvbnBDYWxsYmFjayhqc29ucEFycmF5W2ldKTtcbiBcdHZhciBwYXJlbnRKc29ucEZ1bmN0aW9uID0gb2xkSnNvbnBGdW5jdGlvbjtcblxuXG4gXHQvLyBhZGQgZW50cnkgbW9kdWxlIHRvIGRlZmVycmVkIGxpc3RcbiBcdGRlZmVycmVkTW9kdWxlcy5wdXNoKFtcIi4vYXNzZXRzL2pzL2FwcC5qc1wiLFwidmVuZG9yc35Db3VudERvd25+YXBwXCIsXCJ2ZW5kb3JzfmFwcFwiXSk7XG4gXHQvLyBydW4gZGVmZXJyZWQgbW9kdWxlcyB3aGVuIHJlYWR5XG4gXHRyZXR1cm4gY2hlY2tEZWZlcnJlZE1vZHVsZXMoKTtcbiIsIi8vIGV4dHJhY3RlZCBieSBtaW5pLWNzcy1leHRyYWN0LXBsdWdpbiIsIi8vIGV4dHJhY3RlZCBieSBtaW5pLWNzcy1leHRyYWN0LXBsdWdpbiIsIi8vIGV4dHJhY3RlZCBieSBtaW5pLWNzcy1leHRyYWN0LXBsdWdpbiIsInZhciBtYXAgPSB7XG5cdFwiLi8wNDAzZTA3NWJhMDEzZmEwZDhhOWNlYWMwYTEyMDZhNC5wbmdcIjogXCIuL2Fzc2V0cy9pbWFnZXMvMDQwM2UwNzViYTAxM2ZhMGQ4YTljZWFjMGExMjA2YTQucG5nXCIsXG5cdFwiLi8wNmJjOTRlNmI0YWZjY2I3Y2Q5ZTI5ZGM3MTkyZGJhMF9vcmlnaW5hbC5naWZcIjogXCIuL2Fzc2V0cy9pbWFnZXMvMDZiYzk0ZTZiNGFmY2NiN2NkOWUyOWRjNzE5MmRiYTBfb3JpZ2luYWwuZ2lmXCIsXG5cdFwiLi8xLnBuZ1wiOiBcIi4vYXNzZXRzL2ltYWdlcy8xLnBuZ1wiLFxuXHRcIi4vMTAucG5nXCI6IFwiLi9hc3NldHMvaW1hZ2VzLzEwLnBuZ1wiLFxuXHRcIi4vMi5wbmdcIjogXCIuL2Fzc2V0cy9pbWFnZXMvMi5wbmdcIixcblx0XCIuLzIwLnBuZ1wiOiBcIi4vYXNzZXRzL2ltYWdlcy8yMC5wbmdcIixcblx0XCIuLzI3YTE2OTcwZGExZjgxOGVhMjQxOWY5M2E4YTE2YmU0X29yaWdpbmFsLnBuZ1wiOiBcIi4vYXNzZXRzL2ltYWdlcy8yN2ExNjk3MGRhMWY4MThlYTI0MTlmOTNhOGExNmJlNF9vcmlnaW5hbC5wbmdcIixcblx0XCIuLzMyZmViMGNhMmIzNTU0MzhlNGQ1ZWE4OGEwMWIyNTBlX29yaWdpbmFsLnBuZ1wiOiBcIi4vYXNzZXRzL2ltYWdlcy8zMmZlYjBjYTJiMzU1NDM4ZTRkNWVhODhhMDFiMjUwZV9vcmlnaW5hbC5wbmdcIixcblx0XCIuLzQucG5nXCI6IFwiLi9hc3NldHMvaW1hZ2VzLzQucG5nXCIsXG5cdFwiLi80NTFjMDVhNWRjODE0OGFmZmU4NTQ4OGRmYTRlYzgzOV9vcmlnaW5hbC5qcGdcIjogXCIuL2Fzc2V0cy9pbWFnZXMvNDUxYzA1YTVkYzgxNDhhZmZlODU0ODhkZmE0ZWM4Mzlfb3JpZ2luYWwuanBnXCIsXG5cdFwiLi81NzgyZTg2ODM4YTYyZGQwNWQzMzQ4ZjI4YjQ0YzRhMl9vcmlnaW5hbC5wbmdcIjogXCIuL2Fzc2V0cy9pbWFnZXMvNTc4MmU4NjgzOGE2MmRkMDVkMzM0OGYyOGI0NGM0YTJfb3JpZ2luYWwucG5nXCIsXG5cdFwiLi82ZThlMDcwYWFhNDczMDQxZGYzNjI4YzAyNGE4MWNhYl9vcmlnaW5hbC5wbmdcIjogXCIuL2Fzc2V0cy9pbWFnZXMvNmU4ZTA3MGFhYTQ3MzA0MWRmMzYyOGMwMjRhODFjYWJfb3JpZ2luYWwucG5nXCIsXG5cdFwiLi82Zjc3NGZlY2Y3ZGU1NzQ3NDhmYjBiYjY5MDcyMDkwZl9vcmlnaW5hbC5qcGdcIjogXCIuL2Fzc2V0cy9pbWFnZXMvNmY3NzRmZWNmN2RlNTc0NzQ4ZmIwYmI2OTA3MjA5MGZfb3JpZ2luYWwuanBnXCIsXG5cdFwiLi84OTU0ZWVlZjc0YmUwMDFkZWNkYWM1NjRmNDY1YTUwYV9vcmlnaW5hbC5qcGdcIjogXCIuL2Fzc2V0cy9pbWFnZXMvODk1NGVlZWY3NGJlMDAxZGVjZGFjNTY0ZjQ2NWE1MGFfb3JpZ2luYWwuanBnXCIsXG5cdFwiLi85OWRlNWZlZWY0YjAyYzkzMDljYWU2NzZmNTBmODIwM19vcmlnaW5hbC5naWZcIjogXCIuL2Fzc2V0cy9pbWFnZXMvOTlkZTVmZWVmNGIwMmM5MzA5Y2FlNjc2ZjUwZjgyMDNfb3JpZ2luYWwuZ2lmXCIsXG5cdFwiLi9BZGFwYXRhdGlvbi5wbmdcIjogXCIuL2Fzc2V0cy9pbWFnZXMvQWRhcGF0YXRpb24ucG5nXCIsXG5cdFwiLi9BdmlzRlIucG5nXCI6IFwiLi9hc3NldHMvaW1hZ2VzL0F2aXNGUi5wbmdcIixcblx0XCIuL0F2aXNfZGVzX3Rlc3RldXJzLnBuZ1wiOiBcIi4vYXNzZXRzL2ltYWdlcy9BdmlzX2Rlc190ZXN0ZXVycy5wbmdcIixcblx0XCIuL0Jlc29pbiB2b3VzLnBuZ1wiOiBcIi4vYXNzZXRzL2ltYWdlcy9CZXNvaW4gdm91cy5wbmdcIixcblx0XCIuL0NhcmFjIG1vbnR1cmUucG5nXCI6IFwiLi9hc3NldHMvaW1hZ2VzL0NhcmFjIG1vbnR1cmUucG5nXCIsXG5cdFwiLi9EZXRhaWxzIHRyYWl0ZW1lbnRzLnBuZ1wiOiBcIi4vYXNzZXRzL2ltYWdlcy9EZXRhaWxzIHRyYWl0ZW1lbnRzLnBuZ1wiLFxuXHRcIi4vRMOpdGFpbHMgZGVzIHRyYWl0ZW1lbnRzLnBuZ1wiOiBcIi4vYXNzZXRzL2ltYWdlcy9Ew6l0YWlscyBkZXMgdHJhaXRlbWVudHMucG5nXCIsXG5cdFwiLi9FRC5wbmdcIjogXCIuL2Fzc2V0cy9pbWFnZXMvRUQucG5nXCIsXG5cdFwiLi9GSUdGSU5BTC5naWZcIjogXCIuL2Fzc2V0cy9pbWFnZXMvRklHRklOQUwuZ2lmXCIsXG5cdFwiLi9GUi5wbmdcIjogXCIuL2Fzc2V0cy9pbWFnZXMvRlIucG5nXCIsXG5cdFwiLi9GUjEwLnBuZ1wiOiBcIi4vYXNzZXRzL2ltYWdlcy9GUjEwLnBuZ1wiLFxuXHRcIi4vRlIxMS5wbmdcIjogXCIuL2Fzc2V0cy9pbWFnZXMvRlIxMS5wbmdcIixcblx0XCIuL0ZSMTIucG5nXCI6IFwiLi9hc3NldHMvaW1hZ2VzL0ZSMTIucG5nXCIsXG5cdFwiLi9GUjE0LnBuZ1wiOiBcIi4vYXNzZXRzL2ltYWdlcy9GUjE0LnBuZ1wiLFxuXHRcIi4vRlIyLnBuZ1wiOiBcIi4vYXNzZXRzL2ltYWdlcy9GUjIucG5nXCIsXG5cdFwiLi9GUjMucG5nXCI6IFwiLi9hc3NldHMvaW1hZ2VzL0ZSMy5wbmdcIixcblx0XCIuL0ZSNC5wbmdcIjogXCIuL2Fzc2V0cy9pbWFnZXMvRlI0LnBuZ1wiLFxuXHRcIi4vRlI1LnBuZ1wiOiBcIi4vYXNzZXRzL2ltYWdlcy9GUjUucG5nXCIsXG5cdFwiLi9GUjYucG5nXCI6IFwiLi9hc3NldHMvaW1hZ2VzL0ZSNi5wbmdcIixcblx0XCIuL0ZSNy5wbmdcIjogXCIuL2Fzc2V0cy9pbWFnZXMvRlI3LnBuZ1wiLFxuXHRcIi4vRlI4LnBuZ1wiOiBcIi4vYXNzZXRzL2ltYWdlcy9GUjgucG5nXCIsXG5cdFwiLi9GUjkucG5nXCI6IFwiLi9hc3NldHMvaW1hZ2VzL0ZSOS5wbmdcIixcblx0XCIuL0ZSRlIuanBnXCI6IFwiLi9hc3NldHMvaW1hZ2VzL0ZSRlIuanBnXCIsXG5cdFwiLi9GUmNvdXJiZS5wbmdcIjogXCIuL2Fzc2V0cy9pbWFnZXMvRlJjb3VyYmUucG5nXCIsXG5cdFwiLi9GaWNoaWVyXzQuc3ZnXCI6IFwiLi9hc3NldHMvaW1hZ2VzL0ZpY2hpZXJfNC5zdmdcIixcblx0XCIuL0Zsb3UucG5nXCI6IFwiLi9hc3NldHMvaW1hZ2VzL0Zsb3UucG5nXCIsXG5cdFwiLi9GcmFpc19kZV9wb3J0LnBuZ1wiOiBcIi4vYXNzZXRzL2ltYWdlcy9GcmFpc19kZV9wb3J0LnBuZ1wiLFxuXHRcIi4vSW5mb0ZSLnBuZ1wiOiBcIi4vYXNzZXRzL2ltYWdlcy9JbmZvRlIucG5nXCIsXG5cdFwiLi9MdW5ldHRlcyBhcmFpZ27DqWUucG5nXCI6IFwiLi9hc3NldHMvaW1hZ2VzL0x1bmV0dGVzIGFyYWlnbsOpZS5wbmdcIixcblx0XCIuL015b3BpIG5vYy5wbmdcIjogXCIuL2Fzc2V0cy9pbWFnZXMvTXlvcGkgbm9jLnBuZ1wiLFxuXHRcIi4vTm9zIG1vZFNsZXMucG5nXCI6IFwiLi9hc3NldHMvaW1hZ2VzL05vcyBtb2RTbGVzLnBuZ1wiLFxuXHRcIi4vT1dMX2xvZ28ucG5nXCI6IFwiLi9hc3NldHMvaW1hZ2VzL09XTF9sb2dvLnBuZ1wiLFxuXHRcIi4vT2JqZWN0aWZzLnBuZ1wiOiBcIi4vYXNzZXRzL2ltYWdlcy9PYmplY3RpZnMucG5nXCIsXG5cdFwiLi9PYmplY3RpZnNfYmFubmVyLnBuZ1wiOiBcIi4vYXNzZXRzL2ltYWdlcy9PYmplY3RpZnNfYmFubmVyLnBuZ1wiLFxuXHRcIi4vT3BhcXVlLnBuZ1wiOiBcIi4vYXNzZXRzL2ltYWdlcy9PcGFxdWUucG5nXCIsXG5cdFwiLi9PcmlnaW5lc192ZXJyZXMucG5nXCI6IFwiLi9hc3NldHMvaW1hZ2VzL09yaWdpbmVzX3ZlcnJlcy5wbmdcIixcblx0XCIuL1BhY2tGUi5wbmdcIjogXCIuL2Fzc2V0cy9pbWFnZXMvUGFja0ZSLnBuZ1wiLFxuXHRcIi4vUG91cl9RdWkucG5nXCI6IFwiLi9hc3NldHMvaW1hZ2VzL1BvdXJfUXVpLnBuZ1wiLFxuXHRcIi4vUG91cnF1b2lfT3dsX2V5ZXdlYXIucG5nXCI6IFwiLi9hc3NldHMvaW1hZ2VzL1BvdXJxdW9pX093bF9leWV3ZWFyLnBuZ1wiLFxuXHRcIi4vUm9uZGVfRWNhaWxsZS5wbmdcIjogXCIuL2Fzc2V0cy9pbWFnZXMvUm9uZGVfRWNhaWxsZS5wbmdcIixcblx0XCIuL1RpbWVsaW5lIEZSLnBuZ1wiOiBcIi4vYXNzZXRzL2ltYWdlcy9UaW1lbGluZSBGUi5wbmdcIixcblx0XCIuL1ZJRF8yMDE5MTAxMF8xNjEwNTdfMS5naWZcIjogXCIuL2Fzc2V0cy9pbWFnZXMvVklEXzIwMTkxMDEwXzE2MTA1N18xLmdpZlwiLFxuXHRcIi4vYTY3YTBmNjY1Mzg3NzhmZjFmNDRmMmI2NWNkNDg1ZWNfb3JpZ2luYWwuanBnXCI6IFwiLi9hc3NldHMvaW1hZ2VzL2E2N2EwZjY2NTM4Nzc4ZmYxZjQ0ZjJiNjVjZDQ4NWVjX29yaWdpbmFsLmpwZ1wiLFxuXHRcIi4vYTg0NzE1OTg2NTAxNzgxMTQxZTUwNzQ0NDJiODk3NDZfb3JpZ2luYWwucG5nXCI6IFwiLi9hc3NldHMvaW1hZ2VzL2E4NDcxNTk4NjUwMTc4MTE0MWU1MDc0NDQyYjg5NzQ2X29yaWdpbmFsLnBuZ1wiLFxuXHRcIi4vYjM2YzljZjNkNDRiYTU4ZGIwZTA5MzYzZTRkNjlkMDVfb3JpZ2luYWwucG5nXCI6IFwiLi9hc3NldHMvaW1hZ2VzL2IzNmM5Y2YzZDQ0YmE1OGRiMGUwOTM2M2U0ZDY5ZDA1X29yaWdpbmFsLnBuZ1wiLFxuXHRcIi4vYmFja2dyb3VuZC5qcGdcIjogXCIuL2Fzc2V0cy9pbWFnZXMvYmFja2dyb3VuZC5qcGdcIixcblx0XCIuL2JmMzEyMWRjMjMwOWNmNzgwNDk0NDdiY2JkYTNjMTQ5X29yaWdpbmFsLmpwZ1wiOiBcIi4vYXNzZXRzL2ltYWdlcy9iZjMxMjFkYzIzMDljZjc4MDQ5NDQ3YmNiZGEzYzE0OV9vcmlnaW5hbC5qcGdcIixcblx0XCIuL2NhcmFjIHZlcnJlcy5wbmdcIjogXCIuL2Fzc2V0cy9pbWFnZXMvY2FyYWMgdmVycmVzLnBuZ1wiLFxuXHRcIi4vY2FyYWMucG5nXCI6IFwiLi9hc3NldHMvaW1hZ2VzL2NhcmFjLnBuZ1wiLFxuXHRcIi4vY2hvaXhfdGFpbGxlLnBuZ1wiOiBcIi4vYXNzZXRzL2ltYWdlcy9jaG9peF90YWlsbGUucG5nXCIsXG5cdFwiLi9jb2xsYXBzLnBuZ1wiOiBcIi4vYXNzZXRzL2ltYWdlcy9jb2xsYXBzLnBuZ1wiLFxuXHRcIi4vY29ycmlnZS5wbmdcIjogXCIuL2Fzc2V0cy9pbWFnZXMvY29ycmlnZS5wbmdcIixcblx0XCIuL2R1bW15LmpwZ1wiOiBcIi4vYXNzZXRzL2ltYWdlcy9kdW1teS5qcGdcIixcblx0XCIuL2R1bW15Mi5wbmdcIjogXCIuL2Fzc2V0cy9pbWFnZXMvZHVtbXkyLnBuZ1wiLFxuXHRcIi4vZjQ5MmFjZDRhOTg0NmVlYzUzMmYzMWEyMWJmZjMxNzlfb3JpZ2luYWwucG5nXCI6IFwiLi9hc3NldHMvaW1hZ2VzL2Y0OTJhY2Q0YTk4NDZlZWM1MzJmMzFhMjFiZmYzMTc5X29yaWdpbmFsLnBuZ1wiLFxuXHRcIi4vZmF2aWNvbi5pY29cIjogXCIuL2Fzc2V0cy9pbWFnZXMvZmF2aWNvbi5pY29cIixcblx0XCIuL2ZkM2VkMzlhNTZhMDRmZjc1Y2QwMGIxNzljMDJmNDRhX29yaWdpbmFsLnBuZ1wiOiBcIi4vYXNzZXRzL2ltYWdlcy9mZDNlZDM5YTU2YTA0ZmY3NWNkMDBiMTc5YzAyZjQ0YV9vcmlnaW5hbC5wbmdcIixcblx0XCIuL2ZpbmZyLmdpZlwiOiBcIi4vYXNzZXRzL2ltYWdlcy9maW5mci5naWZcIixcblx0XCIuL2dlbmVfZXRfYmVuZWYucG5nXCI6IFwiLi9hc3NldHMvaW1hZ2VzL2dlbmVfZXRfYmVuZWYucG5nXCIsXG5cdFwiLi9naWYuZ2lmXCI6IFwiLi9hc3NldHMvaW1hZ2VzL2dpZi5naWZcIixcblx0XCIuL2dpZmNhci5naWZcIjogXCIuL2Fzc2V0cy9pbWFnZXMvZ2lmY2FyLmdpZlwiLFxuXHRcIi4vbmV0LnBuZ1wiOiBcIi4vYXNzZXRzL2ltYWdlcy9uZXQucG5nXCIsXG5cdFwiLi9wYXJyYWluYWdlLnBuZ1wiOiBcIi4vYXNzZXRzL2ltYWdlcy9wYXJyYWluYWdlLnBuZ1wiLFxuXHRcIi4vcGVyc29ubmVzX2NvbmNlcm5lZXMucG5nXCI6IFwiLi9hc3NldHMvaW1hZ2VzL3BlcnNvbm5lc19jb25jZXJuZWVzLnBuZ1wiLFxuXHRcIi4vcGxhY2Vob2xkZXIucG5nXCI6IFwiLi9hc3NldHMvaW1hZ2VzL3BsYWNlaG9sZGVyLnBuZ1wiLFxuXHRcIi4vcHJvY2Vzcy5wbmdcIjogXCIuL2Fzc2V0cy9pbWFnZXMvcHJvY2Vzcy5wbmdcIixcblx0XCIuL3F1YW5kX2xlc19wb3J0ZXIucG5nXCI6IFwiLi9hc3NldHMvaW1hZ2VzL3F1YW5kX2xlc19wb3J0ZXIucG5nXCIsXG5cdFwiLi9yZWNhcC5wbmdcIjogXCIuL2Fzc2V0cy9pbWFnZXMvcmVjYXAucG5nXCIsXG5cdFwiLi92ZXJyZXMgamF1bmVzLnBuZ1wiOiBcIi4vYXNzZXRzL2ltYWdlcy92ZXJyZXMgamF1bmVzLnBuZ1wiLFxuXHRcIi4vdmVycmVzIHBvbGFzLnBuZ1wiOiBcIi4vYXNzZXRzL2ltYWdlcy92ZXJyZXMgcG9sYXMucG5nXCJcbn07XG5cblxuZnVuY3Rpb24gd2VicGFja0NvbnRleHQocmVxKSB7XG5cdHZhciBpZCA9IHdlYnBhY2tDb250ZXh0UmVzb2x2ZShyZXEpO1xuXHRyZXR1cm4gX193ZWJwYWNrX3JlcXVpcmVfXyhpZCk7XG59XG5mdW5jdGlvbiB3ZWJwYWNrQ29udGV4dFJlc29sdmUocmVxKSB7XG5cdGlmKCFfX3dlYnBhY2tfcmVxdWlyZV9fLm8obWFwLCByZXEpKSB7XG5cdFx0dmFyIGUgPSBuZXcgRXJyb3IoXCJDYW5ub3QgZmluZCBtb2R1bGUgJ1wiICsgcmVxICsgXCInXCIpO1xuXHRcdGUuY29kZSA9ICdNT0RVTEVfTk9UX0ZPVU5EJztcblx0XHR0aHJvdyBlO1xuXHR9XG5cdHJldHVybiBtYXBbcmVxXTtcbn1cbndlYnBhY2tDb250ZXh0LmtleXMgPSBmdW5jdGlvbiB3ZWJwYWNrQ29udGV4dEtleXMoKSB7XG5cdHJldHVybiBPYmplY3Qua2V5cyhtYXApO1xufTtcbndlYnBhY2tDb250ZXh0LnJlc29sdmUgPSB3ZWJwYWNrQ29udGV4dFJlc29sdmU7XG5tb2R1bGUuZXhwb3J0cyA9IHdlYnBhY2tDb250ZXh0O1xud2VicGFja0NvbnRleHQuaWQgPSBcIi4vYXNzZXRzL2ltYWdlcyBzeW5jIHJlY3Vyc2l2ZSBcXFxcLihwbmd8anBnfGpwZWd8Z2lmfGljb3xzdmd8d2VicCkkXCI7IiwibW9kdWxlLmV4cG9ydHMgPSBcIi9idWlsZC9pbWFnZXMvMDQwM2UwNzViYTAxM2ZhMGQ4YTljZWFjMGExMjA2YTQuZWIwMDc2YWQucG5nXCI7IiwibW9kdWxlLmV4cG9ydHMgPSBcIi9idWlsZC9pbWFnZXMvMDZiYzk0ZTZiNGFmY2NiN2NkOWUyOWRjNzE5MmRiYTBfb3JpZ2luYWwuNjkxMGIxNDYuZ2lmXCI7IiwibW9kdWxlLmV4cG9ydHMgPSBcIi9idWlsZC9pbWFnZXMvMS5lNWZmNTBhMy5wbmdcIjsiLCJtb2R1bGUuZXhwb3J0cyA9IFwiL2J1aWxkL2ltYWdlcy8xMC43YjAzMWViYy5wbmdcIjsiLCJtb2R1bGUuZXhwb3J0cyA9IFwiL2J1aWxkL2ltYWdlcy8yLjEyNDQ4MDQwLnBuZ1wiOyIsIm1vZHVsZS5leHBvcnRzID0gXCIvYnVpbGQvaW1hZ2VzLzIwLjMzZWUzMmRlLnBuZ1wiOyIsIm1vZHVsZS5leHBvcnRzID0gXCIvYnVpbGQvaW1hZ2VzLzI3YTE2OTcwZGExZjgxOGVhMjQxOWY5M2E4YTE2YmU0X29yaWdpbmFsLmQ1MTU1MzMyLnBuZ1wiOyIsIm1vZHVsZS5leHBvcnRzID0gXCIvYnVpbGQvaW1hZ2VzLzMyZmViMGNhMmIzNTU0MzhlNGQ1ZWE4OGEwMWIyNTBlX29yaWdpbmFsLjZhNmExMDYxLnBuZ1wiOyIsIm1vZHVsZS5leHBvcnRzID0gXCIvYnVpbGQvaW1hZ2VzLzQuNjFkMDRkZTIucG5nXCI7IiwibW9kdWxlLmV4cG9ydHMgPSBcIi9idWlsZC9pbWFnZXMvNDUxYzA1YTVkYzgxNDhhZmZlODU0ODhkZmE0ZWM4Mzlfb3JpZ2luYWwuMGI4YWI1M2IuanBnXCI7IiwibW9kdWxlLmV4cG9ydHMgPSBcIi9idWlsZC9pbWFnZXMvNTc4MmU4NjgzOGE2MmRkMDVkMzM0OGYyOGI0NGM0YTJfb3JpZ2luYWwuZWNkYzk1YjkucG5nXCI7IiwibW9kdWxlLmV4cG9ydHMgPSBcIi9idWlsZC9pbWFnZXMvNmU4ZTA3MGFhYTQ3MzA0MWRmMzYyOGMwMjRhODFjYWJfb3JpZ2luYWwuZjk0NjZlZWEucG5nXCI7IiwibW9kdWxlLmV4cG9ydHMgPSBcIi9idWlsZC9pbWFnZXMvNmY3NzRmZWNmN2RlNTc0NzQ4ZmIwYmI2OTA3MjA5MGZfb3JpZ2luYWwuOWRjMWVkYWIuanBnXCI7IiwibW9kdWxlLmV4cG9ydHMgPSBcIi9idWlsZC9pbWFnZXMvODk1NGVlZWY3NGJlMDAxZGVjZGFjNTY0ZjQ2NWE1MGFfb3JpZ2luYWwuNzUyMTJhMzguanBnXCI7IiwibW9kdWxlLmV4cG9ydHMgPSBcIi9idWlsZC9pbWFnZXMvOTlkZTVmZWVmNGIwMmM5MzA5Y2FlNjc2ZjUwZjgyMDNfb3JpZ2luYWwuZmRiM2QwYjYuZ2lmXCI7IiwibW9kdWxlLmV4cG9ydHMgPSBcIi9idWlsZC9pbWFnZXMvQWRhcGF0YXRpb24uNDQ4OTU4ZTEucG5nXCI7IiwibW9kdWxlLmV4cG9ydHMgPSBcIi9idWlsZC9pbWFnZXMvQXZpc0ZSLmUxMjUxYmIyLnBuZ1wiOyIsIm1vZHVsZS5leHBvcnRzID0gXCIvYnVpbGQvaW1hZ2VzL0F2aXNfZGVzX3Rlc3RldXJzLjJhNjdmODc2LnBuZ1wiOyIsIm1vZHVsZS5leHBvcnRzID0gXCIvYnVpbGQvaW1hZ2VzL0Jlc29pbiB2b3VzLmI5ZGY2ZmZmLnBuZ1wiOyIsIm1vZHVsZS5leHBvcnRzID0gXCIvYnVpbGQvaW1hZ2VzL0NhcmFjIG1vbnR1cmUuZTU0MTE0MDYucG5nXCI7IiwibW9kdWxlLmV4cG9ydHMgPSBcIi9idWlsZC9pbWFnZXMvRGV0YWlscyB0cmFpdGVtZW50cy43NDc0ZTg2OS5wbmdcIjsiLCJtb2R1bGUuZXhwb3J0cyA9IFwiL2J1aWxkL2ltYWdlcy9Ew6l0YWlscyBkZXMgdHJhaXRlbWVudHMuZWU3MzFjZGUucG5nXCI7IiwibW9kdWxlLmV4cG9ydHMgPSBcIi9idWlsZC9pbWFnZXMvRUQuZWVhOTZkY2IucG5nXCI7IiwibW9kdWxlLmV4cG9ydHMgPSBcIi9idWlsZC9pbWFnZXMvRklHRklOQUwuMzk2YjQ3NjcuZ2lmXCI7IiwibW9kdWxlLmV4cG9ydHMgPSBcIi9idWlsZC9pbWFnZXMvRlIuNDU2ZWJiM2QucG5nXCI7IiwibW9kdWxlLmV4cG9ydHMgPSBcIi9idWlsZC9pbWFnZXMvRlIxMC4xY2Q3ZmFjMC5wbmdcIjsiLCJtb2R1bGUuZXhwb3J0cyA9IFwiL2J1aWxkL2ltYWdlcy9GUjExLmQ0YjU0YWE1LnBuZ1wiOyIsIm1vZHVsZS5leHBvcnRzID0gXCIvYnVpbGQvaW1hZ2VzL0ZSMTIuOWYzZTFjZTgucG5nXCI7IiwibW9kdWxlLmV4cG9ydHMgPSBcIi9idWlsZC9pbWFnZXMvRlIxNC40NjZkMTNjNC5wbmdcIjsiLCJtb2R1bGUuZXhwb3J0cyA9IFwiL2J1aWxkL2ltYWdlcy9GUjIuMTY3MWU1NjQucG5nXCI7IiwibW9kdWxlLmV4cG9ydHMgPSBcIi9idWlsZC9pbWFnZXMvRlIzLjQ4NGU4ZWI4LnBuZ1wiOyIsIm1vZHVsZS5leHBvcnRzID0gXCIvYnVpbGQvaW1hZ2VzL0ZSNC5jNWM5YWMxYi5wbmdcIjsiLCJtb2R1bGUuZXhwb3J0cyA9IFwiL2J1aWxkL2ltYWdlcy9GUjUuNzU0OWIyN2UucG5nXCI7IiwibW9kdWxlLmV4cG9ydHMgPSBcIi9idWlsZC9pbWFnZXMvRlI2LmJmYjUxN2VhLnBuZ1wiOyIsIm1vZHVsZS5leHBvcnRzID0gXCIvYnVpbGQvaW1hZ2VzL0ZSNy42NGQ0YzJlMC5wbmdcIjsiLCJtb2R1bGUuZXhwb3J0cyA9IFwiL2J1aWxkL2ltYWdlcy9GUjguN2IzNjlkZTEucG5nXCI7IiwibW9kdWxlLmV4cG9ydHMgPSBcIi9idWlsZC9pbWFnZXMvRlI5LjAyYmZkMGRjLnBuZ1wiOyIsIm1vZHVsZS5leHBvcnRzID0gXCIvYnVpbGQvaW1hZ2VzL0ZSRlIuMTAzNjdjNmMuanBnXCI7IiwibW9kdWxlLmV4cG9ydHMgPSBcIi9idWlsZC9pbWFnZXMvRlJjb3VyYmUuNTc4ODljMTQucG5nXCI7IiwibW9kdWxlLmV4cG9ydHMgPSBcIi9idWlsZC9pbWFnZXMvRmljaGllcl80LjhmOGNkZjNmLnN2Z1wiOyIsIm1vZHVsZS5leHBvcnRzID0gXCIvYnVpbGQvaW1hZ2VzL0Zsb3UuNzdlYTFlNDUucG5nXCI7IiwibW9kdWxlLmV4cG9ydHMgPSBcIi9idWlsZC9pbWFnZXMvRnJhaXNfZGVfcG9ydC41ZjVkOWFiNC5wbmdcIjsiLCJtb2R1bGUuZXhwb3J0cyA9IFwiL2J1aWxkL2ltYWdlcy9JbmZvRlIuNGE2YzIwZTkucG5nXCI7IiwibW9kdWxlLmV4cG9ydHMgPSBcIi9idWlsZC9pbWFnZXMvTHVuZXR0ZXMgYXJhaWduw6llLjYzMmJmYjI1LnBuZ1wiOyIsIm1vZHVsZS5leHBvcnRzID0gXCIvYnVpbGQvaW1hZ2VzL015b3BpIG5vYy41NDg5NWZlYS5wbmdcIjsiLCJtb2R1bGUuZXhwb3J0cyA9IFwiL2J1aWxkL2ltYWdlcy9Ob3MgbW9kU2xlcy5jNDAyZWQyNy5wbmdcIjsiLCJtb2R1bGUuZXhwb3J0cyA9IFwiL2J1aWxkL2ltYWdlcy9PV0xfbG9nby41ZGE1M2U0MS5wbmdcIjsiLCJtb2R1bGUuZXhwb3J0cyA9IFwiL2J1aWxkL2ltYWdlcy9PYmplY3RpZnMuMWVjYmNlNmUucG5nXCI7IiwibW9kdWxlLmV4cG9ydHMgPSBcIi9idWlsZC9pbWFnZXMvT2JqZWN0aWZzX2Jhbm5lci44YmM4ODUwZS5wbmdcIjsiLCJtb2R1bGUuZXhwb3J0cyA9IFwiL2J1aWxkL2ltYWdlcy9PcGFxdWUuNjFkNTgwMGYucG5nXCI7IiwibW9kdWxlLmV4cG9ydHMgPSBcIi9idWlsZC9pbWFnZXMvT3JpZ2luZXNfdmVycmVzLjYxZjBmMzE0LnBuZ1wiOyIsIm1vZHVsZS5leHBvcnRzID0gXCIvYnVpbGQvaW1hZ2VzL1BhY2tGUi5lMWZkODM0Ny5wbmdcIjsiLCJtb2R1bGUuZXhwb3J0cyA9IFwiL2J1aWxkL2ltYWdlcy9Qb3VyX1F1aS40NjViZTdiZS5wbmdcIjsiLCJtb2R1bGUuZXhwb3J0cyA9IFwiL2J1aWxkL2ltYWdlcy9Qb3VycXVvaV9Pd2xfZXlld2Vhci40NmEzMjMyMi5wbmdcIjsiLCJtb2R1bGUuZXhwb3J0cyA9IFwiL2J1aWxkL2ltYWdlcy9Sb25kZV9FY2FpbGxlLjA0MTQyOThmLnBuZ1wiOyIsIm1vZHVsZS5leHBvcnRzID0gXCIvYnVpbGQvaW1hZ2VzL1RpbWVsaW5lIEZSLjhjYWQ5NWQyLnBuZ1wiOyIsIm1vZHVsZS5leHBvcnRzID0gXCIvYnVpbGQvaW1hZ2VzL1ZJRF8yMDE5MTAxMF8xNjEwNTdfMS5mOTNmM2FlYS5naWZcIjsiLCJtb2R1bGUuZXhwb3J0cyA9IFwiL2J1aWxkL2ltYWdlcy9hNjdhMGY2NjUzODc3OGZmMWY0NGYyYjY1Y2Q0ODVlY19vcmlnaW5hbC44N2RiNDliYy5qcGdcIjsiLCJtb2R1bGUuZXhwb3J0cyA9IFwiL2J1aWxkL2ltYWdlcy9hODQ3MTU5ODY1MDE3ODExNDFlNTA3NDQ0MmI4OTc0Nl9vcmlnaW5hbC40OTg3NDFmNi5wbmdcIjsiLCJtb2R1bGUuZXhwb3J0cyA9IFwiL2J1aWxkL2ltYWdlcy9iMzZjOWNmM2Q0NGJhNThkYjBlMDkzNjNlNGQ2OWQwNV9vcmlnaW5hbC5jMWQ1MjRjMC5wbmdcIjsiLCJtb2R1bGUuZXhwb3J0cyA9IFwiL2J1aWxkL2ltYWdlcy9iYWNrZ3JvdW5kLjU3MjI4MDg4LmpwZ1wiOyIsIm1vZHVsZS5leHBvcnRzID0gXCIvYnVpbGQvaW1hZ2VzL2JmMzEyMWRjMjMwOWNmNzgwNDk0NDdiY2JkYTNjMTQ5X29yaWdpbmFsLmQyNTdhNTYxLmpwZ1wiOyIsIm1vZHVsZS5leHBvcnRzID0gXCIvYnVpbGQvaW1hZ2VzL2NhcmFjIHZlcnJlcy4yYzdkNzAzNi5wbmdcIjsiLCJtb2R1bGUuZXhwb3J0cyA9IFwiL2J1aWxkL2ltYWdlcy9jYXJhYy4wMjU3ZTAzNS5wbmdcIjsiLCJtb2R1bGUuZXhwb3J0cyA9IFwiL2J1aWxkL2ltYWdlcy9jaG9peF90YWlsbGUuYzUwNWY3ODMucG5nXCI7IiwibW9kdWxlLmV4cG9ydHMgPSBcIi9idWlsZC9pbWFnZXMvY29sbGFwcy4xMzg2ZjgzYy5wbmdcIjsiLCJtb2R1bGUuZXhwb3J0cyA9IFwiL2J1aWxkL2ltYWdlcy9jb3JyaWdlLmM2ZjQ3NDIxLnBuZ1wiOyIsIm1vZHVsZS5leHBvcnRzID0gXCIvYnVpbGQvaW1hZ2VzL2R1bW15LmUwMDc1N2EwLmpwZ1wiOyIsIm1vZHVsZS5leHBvcnRzID0gXCIvYnVpbGQvaW1hZ2VzL2R1bW15Mi5iYTM4ZjUyNy5wbmdcIjsiLCJtb2R1bGUuZXhwb3J0cyA9IFwiL2J1aWxkL2ltYWdlcy9mNDkyYWNkNGE5ODQ2ZWVjNTMyZjMxYTIxYmZmMzE3OV9vcmlnaW5hbC5hNTQxNTNlYi5wbmdcIjsiLCJtb2R1bGUuZXhwb3J0cyA9IFwiL2J1aWxkL2ltYWdlcy9mYXZpY29uLjVlZTc5YjMxLmljb1wiOyIsIm1vZHVsZS5leHBvcnRzID0gXCIvYnVpbGQvaW1hZ2VzL2ZkM2VkMzlhNTZhMDRmZjc1Y2QwMGIxNzljMDJmNDRhX29yaWdpbmFsLjkzMmVmZWJlLnBuZ1wiOyIsIm1vZHVsZS5leHBvcnRzID0gXCIvYnVpbGQvaW1hZ2VzL2ZpbmZyLjZiN2Y3ZGY4LmdpZlwiOyIsIm1vZHVsZS5leHBvcnRzID0gXCIvYnVpbGQvaW1hZ2VzL2dlbmVfZXRfYmVuZWYuMDllOTU1OTIucG5nXCI7IiwibW9kdWxlLmV4cG9ydHMgPSBcIi9idWlsZC9pbWFnZXMvZ2lmLjdjZDQyZmUzLmdpZlwiOyIsIm1vZHVsZS5leHBvcnRzID0gXCIvYnVpbGQvaW1hZ2VzL2dpZmNhci5hNzQ3MGUzMS5naWZcIjsiLCJtb2R1bGUuZXhwb3J0cyA9IFwiL2J1aWxkL2ltYWdlcy9uZXQuYzgxYjhiZDMucG5nXCI7IiwibW9kdWxlLmV4cG9ydHMgPSBcIi9idWlsZC9pbWFnZXMvcGFycmFpbmFnZS5iZjllM2ZkZS5wbmdcIjsiLCJtb2R1bGUuZXhwb3J0cyA9IFwiL2J1aWxkL2ltYWdlcy9wZXJzb25uZXNfY29uY2VybmVlcy5iMjJjNTM5Mi5wbmdcIjsiLCJtb2R1bGUuZXhwb3J0cyA9IFwiL2J1aWxkL2ltYWdlcy9wbGFjZWhvbGRlci41NjMxY2FhYS5wbmdcIjsiLCJtb2R1bGUuZXhwb3J0cyA9IFwiL2J1aWxkL2ltYWdlcy9wcm9jZXNzLjVmNjNmMWE3LnBuZ1wiOyIsIm1vZHVsZS5leHBvcnRzID0gXCIvYnVpbGQvaW1hZ2VzL3F1YW5kX2xlc19wb3J0ZXIuMDkzNTIyOWQucG5nXCI7IiwibW9kdWxlLmV4cG9ydHMgPSBcIi9idWlsZC9pbWFnZXMvcmVjYXAuNjE3NDZlMTIucG5nXCI7IiwibW9kdWxlLmV4cG9ydHMgPSBcIi9idWlsZC9pbWFnZXMvdmVycmVzIGphdW5lcy5jYjQ1Y2M3OS5wbmdcIjsiLCJtb2R1bGUuZXhwb3J0cyA9IFwiL2J1aWxkL2ltYWdlcy92ZXJyZXMgcG9sYXMuNDI2N2Y4ZDUucG5nXCI7IiwiLypcclxuICogV2VsY29tZSB0byB5b3VyIGFwcCdzIG1haW4gSmF2YVNjcmlwdCBmaWxlIVxyXG4gKlxyXG4gKiBXZSByZWNvbW1lbmQgaW5jbHVkaW5nIHRoZSBidWlsdCB2ZXJzaW9uIG9mIHRoaXMgSmF2YVNjcmlwdCBmaWxlXHJcbiAqIChhbmQgaXRzIENTUyBmaWxlKSBpbiB5b3VyIGJhc2UgbGF5b3V0IChiYXNlLmh0bWwudHdpZykuXHJcbiAqL1xyXG5cclxuLy8gYW55IENTUyB5b3UgcmVxdWlyZSB3aWxsIG91dHB1dCBpbnRvIGEgc2luZ2xlIGNzcyBmaWxlIChhcHAuY3NzIGluIHRoaXMgY2FzZSlcclxucmVxdWlyZSgnLi4vY3NzL2FwcC5zY3NzJyk7XHJcbnJlcXVpcmUoJy4uL2Nzcy9iYXNlLmNzcycpO1xyXG5yZXF1aXJlKCcuLi9jc3MvaG9tZVN0eWxlLmNzcycpO1xyXG5yZXF1aXJlKCcuL2pxdWVyeS5jb3VudGRvd24uanMnKTtcclxuXHJcbi8vIE5lZWQgalF1ZXJ5PyBJbnN0YWxsIGl0IHdpdGggXCJ5YXJuIGFkZCBqcXVlcnlcIiwgdGhlbiB1bmNvbW1lbnQgdG8gcmVxdWlyZSBpdC5cclxuY29uc3QgJCA9IHJlcXVpcmUoJ2pxdWVyeScpO1xyXG5cclxucmVxdWlyZSgnYm9vdHN0cmFwL2Rpc3QvanMvYm9vdHN0cmFwLmJ1bmRsZScpO1xyXG5nbG9iYWwuJCA9IGdsb2JhbC5qUXVlcnkgPSAkO1xyXG5cclxuJChkb2N1bWVudCkucmVhZHkoZnVuY3Rpb24oKSB7XHJcbiAgICAkKCdbZGF0YS10b2dnbGU9XCJwb3BvdmVyXCJdJykucG9wb3ZlcigpO1xyXG59KTtcclxuXHJcbmltcG9ydCAnYm9vdHN0cmFwL2Rpc3QvanMvYm9vdHN0cmFwJztcclxuXHJcbmNvbnN0IGltYWdlc0NvbnRleHQgPSByZXF1aXJlLmNvbnRleHQoJy4uL2ltYWdlcycsIHRydWUsIC9cXC4ocG5nfGpwZ3xqcGVnfGdpZnxpY298c3ZnfHdlYnApJC8pO1xyXG5pbWFnZXNDb250ZXh0LmtleXMoKS5mb3JFYWNoKGltYWdlc0NvbnRleHQpOyIsIi8qIVxyXG4gKiBUaGUgRmluYWwgQ291bnRkb3duIGZvciBqUXVlcnkgdjIuMi4wIChodHRwOi8vaGlsaW9zLmdpdGh1Yi5pby9qUXVlcnkuY291bnRkb3duLylcclxuICogQ29weXJpZ2h0IChjKSAyMDE2IEVkc29uIEhpbGlvc1xyXG4gKiBcclxuICogUGVybWlzc2lvbiBpcyBoZXJlYnkgZ3JhbnRlZCwgZnJlZSBvZiBjaGFyZ2UsIHRvIGFueSBwZXJzb24gb2J0YWluaW5nIGEgY29weSBvZlxyXG4gKiB0aGlzIHNvZnR3YXJlIGFuZCBhc3NvY2lhdGVkIGRvY3VtZW50YXRpb24gZmlsZXMgKHRoZSBcIlNvZnR3YXJlXCIpLCB0byBkZWFsIGluXHJcbiAqIHRoZSBTb2Z0d2FyZSB3aXRob3V0IHJlc3RyaWN0aW9uLCBpbmNsdWRpbmcgd2l0aG91dCBsaW1pdGF0aW9uIHRoZSByaWdodHMgdG9cclxuICogdXNlLCBjb3B5LCBtb2RpZnksIG1lcmdlLCBwdWJsaXNoLCBkaXN0cmlidXRlLCBzdWJsaWNlbnNlLCBhbmQvb3Igc2VsbCBjb3BpZXMgb2ZcclxuICogdGhlIFNvZnR3YXJlLCBhbmQgdG8gcGVybWl0IHBlcnNvbnMgdG8gd2hvbSB0aGUgU29mdHdhcmUgaXMgZnVybmlzaGVkIHRvIGRvIHNvLFxyXG4gKiBzdWJqZWN0IHRvIHRoZSBmb2xsb3dpbmcgY29uZGl0aW9uczpcclxuICogXHJcbiAqIFRoZSBhYm92ZSBjb3B5cmlnaHQgbm90aWNlIGFuZCB0aGlzIHBlcm1pc3Npb24gbm90aWNlIHNoYWxsIGJlIGluY2x1ZGVkIGluIGFsbFxyXG4gKiBjb3BpZXMgb3Igc3Vic3RhbnRpYWwgcG9ydGlvbnMgb2YgdGhlIFNvZnR3YXJlLlxyXG4gKiBcclxuICogVEhFIFNPRlRXQVJFIElTIFBST1ZJREVEIFwiQVMgSVNcIiwgV0lUSE9VVCBXQVJSQU5UWSBPRiBBTlkgS0lORCwgRVhQUkVTUyBPUlxyXG4gKiBJTVBMSUVELCBJTkNMVURJTkcgQlVUIE5PVCBMSU1JVEVEIFRPIFRIRSBXQVJSQU5USUVTIE9GIE1FUkNIQU5UQUJJTElUWSwgRklUTkVTU1xyXG4gKiBGT1IgQSBQQVJUSUNVTEFSIFBVUlBPU0UgQU5EIE5PTklORlJJTkdFTUVOVC4gSU4gTk8gRVZFTlQgU0hBTEwgVEhFIEFVVEhPUlMgT1JcclxuICogQ09QWVJJR0hUIEhPTERFUlMgQkUgTElBQkxFIEZPUiBBTlkgQ0xBSU0sIERBTUFHRVMgT1IgT1RIRVIgTElBQklMSVRZLCBXSEVUSEVSXHJcbiAqIElOIEFOIEFDVElPTiBPRiBDT05UUkFDVCwgVE9SVCBPUiBPVEhFUldJU0UsIEFSSVNJTkcgRlJPTSwgT1VUIE9GIE9SIElOXHJcbiAqIENPTk5FQ1RJT04gV0lUSCBUSEUgU09GVFdBUkUgT1IgVEhFIFVTRSBPUiBPVEhFUiBERUFMSU5HUyBJTiBUSEUgU09GVFdBUkUuXHJcbiAqL1xyXG4oZnVuY3Rpb24oZmFjdG9yeSkge1xyXG4gICAgXCJ1c2Ugc3RyaWN0XCI7XHJcbiAgICBpZiAodHlwZW9mIGRlZmluZSA9PT0gXCJmdW5jdGlvblwiICYmIGRlZmluZS5hbWQpIHtcclxuICAgICAgICBkZWZpbmUoWyBcImpxdWVyeVwiIF0sIGZhY3RvcnkpO1xyXG4gICAgfSBlbHNlIHtcclxuICAgICAgICBmYWN0b3J5KGpRdWVyeSk7XHJcbiAgICB9XHJcbn0pKGZ1bmN0aW9uKCQpIHtcclxuICAgIFwidXNlIHN0cmljdFwiO1xyXG4gICAgdmFyIGluc3RhbmNlcyA9IFtdLCBtYXRjaGVycyA9IFtdLCBkZWZhdWx0T3B0aW9ucyA9IHtcclxuICAgICAgICBwcmVjaXNpb246IDEwMCxcclxuICAgICAgICBlbGFwc2U6IGZhbHNlLFxyXG4gICAgICAgIGRlZmVyOiBmYWxzZVxyXG4gICAgfTtcclxuICAgIG1hdGNoZXJzLnB1c2goL15bMC05XSokLy5zb3VyY2UpO1xyXG4gICAgbWF0Y2hlcnMucHVzaCgvKFswLTldezEsMn1cXC8pezJ9WzAtOV17NH0oIFswLTldezEsMn0oOlswLTldezJ9KXsyfSk/Ly5zb3VyY2UpO1xyXG4gICAgbWF0Y2hlcnMucHVzaCgvWzAtOV17NH0oW1xcL1xcLV1bMC05XXsxLDJ9KXsyfSggWzAtOV17MSwyfSg6WzAtOV17Mn0pezJ9KT8vLnNvdXJjZSk7XHJcbiAgICBtYXRjaGVycyA9IG5ldyBSZWdFeHAobWF0Y2hlcnMuam9pbihcInxcIikpO1xyXG4gICAgZnVuY3Rpb24gcGFyc2VEYXRlU3RyaW5nKGRhdGVTdHJpbmcpIHtcclxuICAgICAgICBpZiAoZGF0ZVN0cmluZyBpbnN0YW5jZW9mIERhdGUpIHtcclxuICAgICAgICAgICAgcmV0dXJuIGRhdGVTdHJpbmc7XHJcbiAgICAgICAgfVxyXG4gICAgICAgIGlmIChTdHJpbmcoZGF0ZVN0cmluZykubWF0Y2gobWF0Y2hlcnMpKSB7XHJcbiAgICAgICAgICAgIGlmIChTdHJpbmcoZGF0ZVN0cmluZykubWF0Y2goL15bMC05XSokLykpIHtcclxuICAgICAgICAgICAgICAgIGRhdGVTdHJpbmcgPSBOdW1iZXIoZGF0ZVN0cmluZyk7XHJcbiAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgaWYgKFN0cmluZyhkYXRlU3RyaW5nKS5tYXRjaCgvXFwtLykpIHtcclxuICAgICAgICAgICAgICAgIGRhdGVTdHJpbmcgPSBTdHJpbmcoZGF0ZVN0cmluZykucmVwbGFjZSgvXFwtL2csIFwiL1wiKTtcclxuICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICByZXR1cm4gbmV3IERhdGUoZGF0ZVN0cmluZyk7XHJcbiAgICAgICAgfSBlbHNlIHtcclxuICAgICAgICAgICAgdGhyb3cgbmV3IEVycm9yKFwiQ291bGRuJ3QgY2FzdCBgXCIgKyBkYXRlU3RyaW5nICsgXCJgIHRvIGEgZGF0ZSBvYmplY3QuXCIpO1xyXG4gICAgICAgIH1cclxuICAgIH1cclxuICAgIHZhciBESVJFQ1RJVkVfS0VZX01BUCA9IHtcclxuICAgICAgICBZOiBcInllYXJzXCIsXHJcbiAgICAgICAgbTogXCJtb250aHNcIixcclxuICAgICAgICBuOiBcImRheXNUb01vbnRoXCIsXHJcbiAgICAgICAgZDogXCJkYXlzVG9XZWVrXCIsXHJcbiAgICAgICAgdzogXCJ3ZWVrc1wiLFxyXG4gICAgICAgIFc6IFwid2Vla3NUb01vbnRoXCIsXHJcbiAgICAgICAgSDogXCJob3Vyc1wiLFxyXG4gICAgICAgIE06IFwibWludXRlc1wiLFxyXG4gICAgICAgIFM6IFwic2Vjb25kc1wiLFxyXG4gICAgICAgIEQ6IFwidG90YWxEYXlzXCIsXHJcbiAgICAgICAgSTogXCJ0b3RhbEhvdXJzXCIsXHJcbiAgICAgICAgTjogXCJ0b3RhbE1pbnV0ZXNcIixcclxuICAgICAgICBUOiBcInRvdGFsU2Vjb25kc1wiXHJcbiAgICB9O1xyXG4gICAgZnVuY3Rpb24gZXNjYXBlZFJlZ0V4cChzdHIpIHtcclxuICAgICAgICB2YXIgc2FuaXRpemUgPSBzdHIudG9TdHJpbmcoKS5yZXBsYWNlKC8oWy4/KiteJFtcXF1cXFxcKCl7fXwtXSkvZywgXCJcXFxcJDFcIik7XHJcbiAgICAgICAgcmV0dXJuIG5ldyBSZWdFeHAoc2FuaXRpemUpO1xyXG4gICAgfVxyXG4gICAgZnVuY3Rpb24gc3RyZnRpbWUob2Zmc2V0T2JqZWN0KSB7XHJcbiAgICAgICAgcmV0dXJuIGZ1bmN0aW9uKGZvcm1hdCkge1xyXG4gICAgICAgICAgICB2YXIgZGlyZWN0aXZlcyA9IGZvcm1hdC5tYXRjaCgvJSgtfCEpP1tBLVpdezF9KDpbXjtdKzspPy9naSk7XHJcbiAgICAgICAgICAgIGlmIChkaXJlY3RpdmVzKSB7XHJcbiAgICAgICAgICAgICAgICBmb3IgKHZhciBpID0gMCwgbGVuID0gZGlyZWN0aXZlcy5sZW5ndGg7IGkgPCBsZW47ICsraSkge1xyXG4gICAgICAgICAgICAgICAgICAgIHZhciBkaXJlY3RpdmUgPSBkaXJlY3RpdmVzW2ldLm1hdGNoKC8lKC18ISk/KFthLXpBLVpdezF9KSg6W147XSs7KT8vKSwgcmVnZXhwID0gZXNjYXBlZFJlZ0V4cChkaXJlY3RpdmVbMF0pLCBtb2RpZmllciA9IGRpcmVjdGl2ZVsxXSB8fCBcIlwiLCBwbHVyYWwgPSBkaXJlY3RpdmVbM10gfHwgXCJcIiwgdmFsdWUgPSBudWxsO1xyXG4gICAgICAgICAgICAgICAgICAgIGRpcmVjdGl2ZSA9IGRpcmVjdGl2ZVsyXTtcclxuICAgICAgICAgICAgICAgICAgICBpZiAoRElSRUNUSVZFX0tFWV9NQVAuaGFzT3duUHJvcGVydHkoZGlyZWN0aXZlKSkge1xyXG4gICAgICAgICAgICAgICAgICAgICAgICB2YWx1ZSA9IERJUkVDVElWRV9LRVlfTUFQW2RpcmVjdGl2ZV07XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIHZhbHVlID0gTnVtYmVyKG9mZnNldE9iamVjdFt2YWx1ZV0pO1xyXG4gICAgICAgICAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgICAgICAgICBpZiAodmFsdWUgIT09IG51bGwpIHtcclxuICAgICAgICAgICAgICAgICAgICAgICAgaWYgKG1vZGlmaWVyID09PSBcIiFcIikge1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgdmFsdWUgPSBwbHVyYWxpemUocGx1cmFsLCB2YWx1ZSk7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgICAgICAgICAgICAgaWYgKG1vZGlmaWVyID09PSBcIlwiKSB7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBpZiAodmFsdWUgPCAxMCkge1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHZhbHVlID0gXCIwXCIgKyB2YWx1ZS50b1N0cmluZygpO1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICAgICAgICAgICAgICB9XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIGZvcm1hdCA9IGZvcm1hdC5yZXBsYWNlKHJlZ2V4cCwgdmFsdWUudG9TdHJpbmcoKSk7XHJcbiAgICAgICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICB9XHJcbiAgICAgICAgICAgIGZvcm1hdCA9IGZvcm1hdC5yZXBsYWNlKC8lJS8sIFwiJVwiKTtcclxuICAgICAgICAgICAgcmV0dXJuIGZvcm1hdDtcclxuICAgICAgICB9O1xyXG4gICAgfVxyXG4gICAgZnVuY3Rpb24gcGx1cmFsaXplKGZvcm1hdCwgY291bnQpIHtcclxuICAgICAgICB2YXIgcGx1cmFsID0gXCJzXCIsIHNpbmd1bGFyID0gXCJcIjtcclxuICAgICAgICBpZiAoZm9ybWF0KSB7XHJcbiAgICAgICAgICAgIGZvcm1hdCA9IGZvcm1hdC5yZXBsYWNlKC8oOnw7fFxccykvZ2ksIFwiXCIpLnNwbGl0KC9cXCwvKTtcclxuICAgICAgICAgICAgaWYgKGZvcm1hdC5sZW5ndGggPT09IDEpIHtcclxuICAgICAgICAgICAgICAgIHBsdXJhbCA9IGZvcm1hdFswXTtcclxuICAgICAgICAgICAgfSBlbHNlIHtcclxuICAgICAgICAgICAgICAgIHNpbmd1bGFyID0gZm9ybWF0WzBdO1xyXG4gICAgICAgICAgICAgICAgcGx1cmFsID0gZm9ybWF0WzFdO1xyXG4gICAgICAgICAgICB9XHJcbiAgICAgICAgfVxyXG4gICAgICAgIGlmIChNYXRoLmFicyhjb3VudCkgPiAxKSB7XHJcbiAgICAgICAgICAgIHJldHVybiBwbHVyYWw7XHJcbiAgICAgICAgfSBlbHNlIHtcclxuICAgICAgICAgICAgcmV0dXJuIHNpbmd1bGFyO1xyXG4gICAgICAgIH1cclxuICAgIH1cclxuICAgIHZhciBDb3VudGRvd24gPSBmdW5jdGlvbihlbCwgZmluYWxEYXRlLCBvcHRpb25zKSB7XHJcbiAgICAgICAgdGhpcy5lbCA9IGVsO1xyXG4gICAgICAgIHRoaXMuJGVsID0gJChlbCk7XHJcbiAgICAgICAgdGhpcy5pbnRlcnZhbCA9IG51bGw7XHJcbiAgICAgICAgdGhpcy5vZmZzZXQgPSB7fTtcclxuICAgICAgICB0aGlzLm9wdGlvbnMgPSAkLmV4dGVuZCh7fSwgZGVmYXVsdE9wdGlvbnMpO1xyXG4gICAgICAgIHRoaXMuaW5zdGFuY2VOdW1iZXIgPSBpbnN0YW5jZXMubGVuZ3RoO1xyXG4gICAgICAgIGluc3RhbmNlcy5wdXNoKHRoaXMpO1xyXG4gICAgICAgIHRoaXMuJGVsLmRhdGEoXCJjb3VudGRvd24taW5zdGFuY2VcIiwgdGhpcy5pbnN0YW5jZU51bWJlcik7XHJcbiAgICAgICAgaWYgKG9wdGlvbnMpIHtcclxuICAgICAgICAgICAgaWYgKHR5cGVvZiBvcHRpb25zID09PSBcImZ1bmN0aW9uXCIpIHtcclxuICAgICAgICAgICAgICAgIHRoaXMuJGVsLm9uKFwidXBkYXRlLmNvdW50ZG93blwiLCBvcHRpb25zKTtcclxuICAgICAgICAgICAgICAgIHRoaXMuJGVsLm9uKFwic3RvcGVkLmNvdW50ZG93blwiLCBvcHRpb25zKTtcclxuICAgICAgICAgICAgICAgIHRoaXMuJGVsLm9uKFwiZmluaXNoLmNvdW50ZG93blwiLCBvcHRpb25zKTtcclxuICAgICAgICAgICAgfSBlbHNlIHtcclxuICAgICAgICAgICAgICAgIHRoaXMub3B0aW9ucyA9ICQuZXh0ZW5kKHt9LCBkZWZhdWx0T3B0aW9ucywgb3B0aW9ucyk7XHJcbiAgICAgICAgICAgIH1cclxuICAgICAgICB9XHJcbiAgICAgICAgdGhpcy5zZXRGaW5hbERhdGUoZmluYWxEYXRlKTtcclxuICAgICAgICBpZiAodGhpcy5vcHRpb25zLmRlZmVyID09PSBmYWxzZSkge1xyXG4gICAgICAgICAgICB0aGlzLnN0YXJ0KCk7XHJcbiAgICAgICAgfVxyXG4gICAgfTtcclxuICAgICQuZXh0ZW5kKENvdW50ZG93bi5wcm90b3R5cGUsIHtcclxuICAgICAgICBzdGFydDogZnVuY3Rpb24oKSB7XHJcbiAgICAgICAgICAgIGlmICh0aGlzLmludGVydmFsICE9PSBudWxsKSB7XHJcbiAgICAgICAgICAgICAgICBjbGVhckludGVydmFsKHRoaXMuaW50ZXJ2YWwpO1xyXG4gICAgICAgICAgICB9XHJcbiAgICAgICAgICAgIHZhciBzZWxmID0gdGhpcztcclxuICAgICAgICAgICAgdGhpcy51cGRhdGUoKTtcclxuICAgICAgICAgICAgdGhpcy5pbnRlcnZhbCA9IHNldEludGVydmFsKGZ1bmN0aW9uKCkge1xyXG4gICAgICAgICAgICAgICAgc2VsZi51cGRhdGUuY2FsbChzZWxmKTtcclxuICAgICAgICAgICAgfSwgdGhpcy5vcHRpb25zLnByZWNpc2lvbik7XHJcbiAgICAgICAgfSxcclxuICAgICAgICBzdG9wOiBmdW5jdGlvbigpIHtcclxuICAgICAgICAgICAgY2xlYXJJbnRlcnZhbCh0aGlzLmludGVydmFsKTtcclxuICAgICAgICAgICAgdGhpcy5pbnRlcnZhbCA9IG51bGw7XHJcbiAgICAgICAgICAgIHRoaXMuZGlzcGF0Y2hFdmVudChcInN0b3BlZFwiKTtcclxuICAgICAgICB9LFxyXG4gICAgICAgIHRvZ2dsZTogZnVuY3Rpb24oKSB7XHJcbiAgICAgICAgICAgIGlmICh0aGlzLmludGVydmFsKSB7XHJcbiAgICAgICAgICAgICAgICB0aGlzLnN0b3AoKTtcclxuICAgICAgICAgICAgfSBlbHNlIHtcclxuICAgICAgICAgICAgICAgIHRoaXMuc3RhcnQoKTtcclxuICAgICAgICAgICAgfVxyXG4gICAgICAgIH0sXHJcbiAgICAgICAgcGF1c2U6IGZ1bmN0aW9uKCkge1xyXG4gICAgICAgICAgICB0aGlzLnN0b3AoKTtcclxuICAgICAgICB9LFxyXG4gICAgICAgIHJlc3VtZTogZnVuY3Rpb24oKSB7XHJcbiAgICAgICAgICAgIHRoaXMuc3RhcnQoKTtcclxuICAgICAgICB9LFxyXG4gICAgICAgIHJlbW92ZTogZnVuY3Rpb24oKSB7XHJcbiAgICAgICAgICAgIHRoaXMuc3RvcC5jYWxsKHRoaXMpO1xyXG4gICAgICAgICAgICBpbnN0YW5jZXNbdGhpcy5pbnN0YW5jZU51bWJlcl0gPSBudWxsO1xyXG4gICAgICAgICAgICBkZWxldGUgdGhpcy4kZWwuZGF0YSgpLmNvdW50ZG93bkluc3RhbmNlO1xyXG4gICAgICAgIH0sXHJcbiAgICAgICAgc2V0RmluYWxEYXRlOiBmdW5jdGlvbih2YWx1ZSkge1xyXG4gICAgICAgICAgICB0aGlzLmZpbmFsRGF0ZSA9IHBhcnNlRGF0ZVN0cmluZyh2YWx1ZSk7XHJcbiAgICAgICAgfSxcclxuICAgICAgICB1cGRhdGU6IGZ1bmN0aW9uKCkge1xyXG4gICAgICAgICAgICBpZiAodGhpcy4kZWwuY2xvc2VzdChcImh0bWxcIikubGVuZ3RoID09PSAwKSB7XHJcbiAgICAgICAgICAgICAgICB0aGlzLnJlbW92ZSgpO1xyXG4gICAgICAgICAgICAgICAgcmV0dXJuO1xyXG4gICAgICAgICAgICB9XHJcbiAgICAgICAgICAgIHZhciBoYXNFdmVudHNBdHRhY2hlZCA9ICQuX2RhdGEodGhpcy5lbCwgXCJldmVudHNcIikgIT09IHVuZGVmaW5lZCwgbm93ID0gbmV3IERhdGUoKSwgbmV3VG90YWxTZWNzTGVmdDtcclxuICAgICAgICAgICAgbmV3VG90YWxTZWNzTGVmdCA9IHRoaXMuZmluYWxEYXRlLmdldFRpbWUoKSAtIG5vdy5nZXRUaW1lKCk7XHJcbiAgICAgICAgICAgIG5ld1RvdGFsU2Vjc0xlZnQgPSBNYXRoLmNlaWwobmV3VG90YWxTZWNzTGVmdCAvIDFlMyk7XHJcbiAgICAgICAgICAgIG5ld1RvdGFsU2Vjc0xlZnQgPSAhdGhpcy5vcHRpb25zLmVsYXBzZSAmJiBuZXdUb3RhbFNlY3NMZWZ0IDwgMCA/IDAgOiBNYXRoLmFicyhuZXdUb3RhbFNlY3NMZWZ0KTtcclxuICAgICAgICAgICAgaWYgKHRoaXMudG90YWxTZWNzTGVmdCA9PT0gbmV3VG90YWxTZWNzTGVmdCB8fCAhaGFzRXZlbnRzQXR0YWNoZWQpIHtcclxuICAgICAgICAgICAgICAgIHJldHVybjtcclxuICAgICAgICAgICAgfSBlbHNlIHtcclxuICAgICAgICAgICAgICAgIHRoaXMudG90YWxTZWNzTGVmdCA9IG5ld1RvdGFsU2Vjc0xlZnQ7XHJcbiAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgdGhpcy5lbGFwc2VkID0gbm93ID49IHRoaXMuZmluYWxEYXRlO1xyXG4gICAgICAgICAgICB0aGlzLm9mZnNldCA9IHtcclxuICAgICAgICAgICAgICAgIHNlY29uZHM6IHRoaXMudG90YWxTZWNzTGVmdCAlIDYwLFxyXG4gICAgICAgICAgICAgICAgbWludXRlczogTWF0aC5mbG9vcih0aGlzLnRvdGFsU2Vjc0xlZnQgLyA2MCkgJSA2MCxcclxuICAgICAgICAgICAgICAgIGhvdXJzOiBNYXRoLmZsb29yKHRoaXMudG90YWxTZWNzTGVmdCAvIDYwIC8gNjApICUgMjQsXHJcbiAgICAgICAgICAgICAgICBkYXlzOiBNYXRoLmZsb29yKHRoaXMudG90YWxTZWNzTGVmdCAvIDYwIC8gNjAgLyAyNCkgJSA3LFxyXG4gICAgICAgICAgICAgICAgZGF5c1RvV2VlazogTWF0aC5mbG9vcih0aGlzLnRvdGFsU2Vjc0xlZnQgLyA2MCAvIDYwIC8gMjQpICUgNyxcclxuICAgICAgICAgICAgICAgIGRheXNUb01vbnRoOiBNYXRoLmZsb29yKHRoaXMudG90YWxTZWNzTGVmdCAvIDYwIC8gNjAgLyAyNCAlIDMwLjQzNjgpLFxyXG4gICAgICAgICAgICAgICAgd2Vla3M6IE1hdGguZmxvb3IodGhpcy50b3RhbFNlY3NMZWZ0IC8gNjAgLyA2MCAvIDI0IC8gNyksXHJcbiAgICAgICAgICAgICAgICB3ZWVrc1RvTW9udGg6IE1hdGguZmxvb3IodGhpcy50b3RhbFNlY3NMZWZ0IC8gNjAgLyA2MCAvIDI0IC8gNykgJSA0LFxyXG4gICAgICAgICAgICAgICAgbW9udGhzOiBNYXRoLmZsb29yKHRoaXMudG90YWxTZWNzTGVmdCAvIDYwIC8gNjAgLyAyNCAvIDMwLjQzNjgpLFxyXG4gICAgICAgICAgICAgICAgeWVhcnM6IE1hdGguYWJzKHRoaXMuZmluYWxEYXRlLmdldEZ1bGxZZWFyKCkgLSBub3cuZ2V0RnVsbFllYXIoKSksXHJcbiAgICAgICAgICAgICAgICB0b3RhbERheXM6IE1hdGguZmxvb3IodGhpcy50b3RhbFNlY3NMZWZ0IC8gNjAgLyA2MCAvIDI0KSxcclxuICAgICAgICAgICAgICAgIHRvdGFsSG91cnM6IE1hdGguZmxvb3IodGhpcy50b3RhbFNlY3NMZWZ0IC8gNjAgLyA2MCksXHJcbiAgICAgICAgICAgICAgICB0b3RhbE1pbnV0ZXM6IE1hdGguZmxvb3IodGhpcy50b3RhbFNlY3NMZWZ0IC8gNjApLFxyXG4gICAgICAgICAgICAgICAgdG90YWxTZWNvbmRzOiB0aGlzLnRvdGFsU2Vjc0xlZnRcclxuICAgICAgICAgICAgfTtcclxuICAgICAgICAgICAgaWYgKCF0aGlzLm9wdGlvbnMuZWxhcHNlICYmIHRoaXMudG90YWxTZWNzTGVmdCA9PT0gMCkge1xyXG4gICAgICAgICAgICAgICAgdGhpcy5zdG9wKCk7XHJcbiAgICAgICAgICAgICAgICB0aGlzLmRpc3BhdGNoRXZlbnQoXCJmaW5pc2hcIik7XHJcbiAgICAgICAgICAgIH0gZWxzZSB7XHJcbiAgICAgICAgICAgICAgICB0aGlzLmRpc3BhdGNoRXZlbnQoXCJ1cGRhdGVcIik7XHJcbiAgICAgICAgICAgIH1cclxuICAgICAgICB9LFxyXG4gICAgICAgIGRpc3BhdGNoRXZlbnQ6IGZ1bmN0aW9uKGV2ZW50TmFtZSkge1xyXG4gICAgICAgICAgICB2YXIgZXZlbnQgPSAkLkV2ZW50KGV2ZW50TmFtZSArIFwiLmNvdW50ZG93blwiKTtcclxuICAgICAgICAgICAgZXZlbnQuZmluYWxEYXRlID0gdGhpcy5maW5hbERhdGU7XHJcbiAgICAgICAgICAgIGV2ZW50LmVsYXBzZWQgPSB0aGlzLmVsYXBzZWQ7XHJcbiAgICAgICAgICAgIGV2ZW50Lm9mZnNldCA9ICQuZXh0ZW5kKHt9LCB0aGlzLm9mZnNldCk7XHJcbiAgICAgICAgICAgIGV2ZW50LnN0cmZ0aW1lID0gc3RyZnRpbWUodGhpcy5vZmZzZXQpO1xyXG4gICAgICAgICAgICB0aGlzLiRlbC50cmlnZ2VyKGV2ZW50KTtcclxuICAgICAgICB9XHJcbiAgICB9KTtcclxuICAgICQuZm4uY291bnRkb3duID0gZnVuY3Rpb24oKSB7XHJcbiAgICAgICAgdmFyIGFyZ3VtZW50c0FycmF5ID0gQXJyYXkucHJvdG90eXBlLnNsaWNlLmNhbGwoYXJndW1lbnRzLCAwKTtcclxuICAgICAgICByZXR1cm4gdGhpcy5lYWNoKGZ1bmN0aW9uKCkge1xyXG4gICAgICAgICAgICB2YXIgaW5zdGFuY2VOdW1iZXIgPSAkKHRoaXMpLmRhdGEoXCJjb3VudGRvd24taW5zdGFuY2VcIik7XHJcbiAgICAgICAgICAgIGlmIChpbnN0YW5jZU51bWJlciAhPT0gdW5kZWZpbmVkKSB7XHJcbiAgICAgICAgICAgICAgICB2YXIgaW5zdGFuY2UgPSBpbnN0YW5jZXNbaW5zdGFuY2VOdW1iZXJdLCBtZXRob2QgPSBhcmd1bWVudHNBcnJheVswXTtcclxuICAgICAgICAgICAgICAgIGlmIChDb3VudGRvd24ucHJvdG90eXBlLmhhc093blByb3BlcnR5KG1ldGhvZCkpIHtcclxuICAgICAgICAgICAgICAgICAgICBpbnN0YW5jZVttZXRob2RdLmFwcGx5KGluc3RhbmNlLCBhcmd1bWVudHNBcnJheS5zbGljZSgxKSk7XHJcbiAgICAgICAgICAgICAgICB9IGVsc2UgaWYgKFN0cmluZyhtZXRob2QpLm1hdGNoKC9eWyRBLVpfXVswLTlBLVpfJF0qJC9pKSA9PT0gbnVsbCkge1xyXG4gICAgICAgICAgICAgICAgICAgIGluc3RhbmNlLnNldEZpbmFsRGF0ZS5jYWxsKGluc3RhbmNlLCBtZXRob2QpO1xyXG4gICAgICAgICAgICAgICAgICAgIGluc3RhbmNlLnN0YXJ0KCk7XHJcbiAgICAgICAgICAgICAgICB9IGVsc2Uge1xyXG4gICAgICAgICAgICAgICAgICAgICQuZXJyb3IoXCJNZXRob2QgJXMgZG9lcyBub3QgZXhpc3Qgb24galF1ZXJ5LmNvdW50ZG93blwiLnJlcGxhY2UoL1xcJXMvZ2ksIG1ldGhvZCkpO1xyXG4gICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICB9IGVsc2Uge1xyXG4gICAgICAgICAgICAgICAgbmV3IENvdW50ZG93bih0aGlzLCBhcmd1bWVudHNBcnJheVswXSwgYXJndW1lbnRzQXJyYXlbMV0pO1xyXG4gICAgICAgICAgICB9XHJcbiAgICAgICAgfSk7XHJcbiAgICB9O1xyXG59KTsiXSwic291cmNlUm9vdCI6IiJ9
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
/******/ 		"CountDown": 0
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
/******/ 	deferredModules.push(["./assets/js/jquery.countdown.js","vendors~CountDown~app"]);
/******/ 	// run deferred modules when ready
/******/ 	return checkDeferredModules();
/******/ })
/************************************************************************/
/******/ ({

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
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vd2VicGFjay9ib290c3RyYXAiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2pzL2pxdWVyeS5jb3VudGRvd24uanMiXSwibmFtZXMiOlsiZmFjdG9yeSIsImRlZmluZSIsIiQiLCJpbnN0YW5jZXMiLCJtYXRjaGVycyIsImRlZmF1bHRPcHRpb25zIiwicHJlY2lzaW9uIiwiZWxhcHNlIiwiZGVmZXIiLCJwdXNoIiwic291cmNlIiwiUmVnRXhwIiwiam9pbiIsInBhcnNlRGF0ZVN0cmluZyIsImRhdGVTdHJpbmciLCJEYXRlIiwiU3RyaW5nIiwibWF0Y2giLCJOdW1iZXIiLCJyZXBsYWNlIiwiRXJyb3IiLCJESVJFQ1RJVkVfS0VZX01BUCIsIlkiLCJtIiwibiIsImQiLCJ3IiwiVyIsIkgiLCJNIiwiUyIsIkQiLCJJIiwiTiIsIlQiLCJlc2NhcGVkUmVnRXhwIiwic3RyIiwic2FuaXRpemUiLCJ0b1N0cmluZyIsInN0cmZ0aW1lIiwib2Zmc2V0T2JqZWN0IiwiZm9ybWF0IiwiZGlyZWN0aXZlcyIsImkiLCJsZW4iLCJsZW5ndGgiLCJkaXJlY3RpdmUiLCJyZWdleHAiLCJtb2RpZmllciIsInBsdXJhbCIsInZhbHVlIiwiaGFzT3duUHJvcGVydHkiLCJwbHVyYWxpemUiLCJjb3VudCIsInNpbmd1bGFyIiwic3BsaXQiLCJNYXRoIiwiYWJzIiwiQ291bnRkb3duIiwiZWwiLCJmaW5hbERhdGUiLCJvcHRpb25zIiwiJGVsIiwiaW50ZXJ2YWwiLCJvZmZzZXQiLCJleHRlbmQiLCJpbnN0YW5jZU51bWJlciIsImRhdGEiLCJvbiIsInNldEZpbmFsRGF0ZSIsInN0YXJ0IiwicHJvdG90eXBlIiwiY2xlYXJJbnRlcnZhbCIsInNlbGYiLCJ1cGRhdGUiLCJzZXRJbnRlcnZhbCIsImNhbGwiLCJzdG9wIiwiZGlzcGF0Y2hFdmVudCIsInRvZ2dsZSIsInBhdXNlIiwicmVzdW1lIiwicmVtb3ZlIiwiY291bnRkb3duSW5zdGFuY2UiLCJjbG9zZXN0IiwiaGFzRXZlbnRzQXR0YWNoZWQiLCJfZGF0YSIsInVuZGVmaW5lZCIsIm5vdyIsIm5ld1RvdGFsU2Vjc0xlZnQiLCJnZXRUaW1lIiwiY2VpbCIsInRvdGFsU2Vjc0xlZnQiLCJlbGFwc2VkIiwic2Vjb25kcyIsIm1pbnV0ZXMiLCJmbG9vciIsImhvdXJzIiwiZGF5cyIsImRheXNUb1dlZWsiLCJkYXlzVG9Nb250aCIsIndlZWtzIiwid2Vla3NUb01vbnRoIiwibW9udGhzIiwieWVhcnMiLCJnZXRGdWxsWWVhciIsInRvdGFsRGF5cyIsInRvdGFsSG91cnMiLCJ0b3RhbE1pbnV0ZXMiLCJ0b3RhbFNlY29uZHMiLCJldmVudE5hbWUiLCJldmVudCIsIkV2ZW50IiwidHJpZ2dlciIsImZuIiwiY291bnRkb3duIiwiYXJndW1lbnRzQXJyYXkiLCJBcnJheSIsInNsaWNlIiwiYXJndW1lbnRzIiwiZWFjaCIsImluc3RhbmNlIiwibWV0aG9kIiwiYXBwbHkiLCJlcnJvciJdLCJtYXBwaW5ncyI6IjtRQUFBO1FBQ0E7UUFDQTtRQUNBO1FBQ0E7O1FBRUE7UUFDQTtRQUNBO1FBQ0EsUUFBUSxvQkFBb0I7UUFDNUI7UUFDQTtRQUNBO1FBQ0E7UUFDQTtRQUNBO1FBQ0E7UUFDQTtRQUNBO1FBQ0E7UUFDQTtRQUNBOztRQUVBO1FBQ0E7UUFDQTs7UUFFQTtRQUNBOztRQUVBO1FBQ0E7UUFDQTtRQUNBO1FBQ0E7UUFDQSxpQkFBaUIsNEJBQTRCO1FBQzdDO1FBQ0E7UUFDQSxrQkFBa0IsMkJBQTJCO1FBQzdDO1FBQ0E7UUFDQTtRQUNBO1FBQ0E7UUFDQTtRQUNBO1FBQ0E7O1FBRUE7UUFDQTs7UUFFQTtRQUNBOztRQUVBO1FBQ0E7UUFDQTtRQUNBO1FBQ0E7UUFDQTs7UUFFQTs7UUFFQTtRQUNBOztRQUVBO1FBQ0E7UUFDQTtRQUNBO1FBQ0E7UUFDQTtRQUNBO1FBQ0E7UUFDQTtRQUNBOztRQUVBO1FBQ0E7O1FBRUE7UUFDQTs7UUFFQTtRQUNBO1FBQ0E7OztRQUdBO1FBQ0E7O1FBRUE7UUFDQTs7UUFFQTtRQUNBO1FBQ0E7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SlNPTlAgY2FsbGJhY2sgZm9yIGNodW5rIGxvYWRpbmdcbiBcdGZ1bmN0aW9uIHdlYnBhY2tKc29ucENhbGxiYWNrKGRhdGEpIHtcbiBcdFx0dmFyIGNodW5rSWRzID0gZGF0YVswXTtcbiBcdFx0dmFyIG1vcmVNb2R1bGVzID0gZGF0YVsxXTtcbiBcdFx0dmFyIGV4ZWN1dGVNb2R1bGVzID0gZGF0YVsyXTtcblxuIFx0XHQvLyBhZGQgXCJtb3JlTW9kdWxlc1wiIHRvIHRoZSBtb2R1bGVzIG9iamVjdCxcbiBcdFx0Ly8gdGhlbiBmbGFnIGFsbCBcImNodW5rSWRzXCIgYXMgbG9hZGVkIGFuZCBmaXJlIGNhbGxiYWNrXG4gXHRcdHZhciBtb2R1bGVJZCwgY2h1bmtJZCwgaSA9IDAsIHJlc29sdmVzID0gW107XG4gXHRcdGZvcig7aSA8IGNodW5rSWRzLmxlbmd0aDsgaSsrKSB7XG4gXHRcdFx0Y2h1bmtJZCA9IGNodW5rSWRzW2ldO1xuIFx0XHRcdGlmKE9iamVjdC5wcm90b3R5cGUuaGFzT3duUHJvcGVydHkuY2FsbChpbnN0YWxsZWRDaHVua3MsIGNodW5rSWQpICYmIGluc3RhbGxlZENodW5rc1tjaHVua0lkXSkge1xuIFx0XHRcdFx0cmVzb2x2ZXMucHVzaChpbnN0YWxsZWRDaHVua3NbY2h1bmtJZF1bMF0pO1xuIFx0XHRcdH1cbiBcdFx0XHRpbnN0YWxsZWRDaHVua3NbY2h1bmtJZF0gPSAwO1xuIFx0XHR9XG4gXHRcdGZvcihtb2R1bGVJZCBpbiBtb3JlTW9kdWxlcykge1xuIFx0XHRcdGlmKE9iamVjdC5wcm90b3R5cGUuaGFzT3duUHJvcGVydHkuY2FsbChtb3JlTW9kdWxlcywgbW9kdWxlSWQpKSB7XG4gXHRcdFx0XHRtb2R1bGVzW21vZHVsZUlkXSA9IG1vcmVNb2R1bGVzW21vZHVsZUlkXTtcbiBcdFx0XHR9XG4gXHRcdH1cbiBcdFx0aWYocGFyZW50SnNvbnBGdW5jdGlvbikgcGFyZW50SnNvbnBGdW5jdGlvbihkYXRhKTtcblxuIFx0XHR3aGlsZShyZXNvbHZlcy5sZW5ndGgpIHtcbiBcdFx0XHRyZXNvbHZlcy5zaGlmdCgpKCk7XG4gXHRcdH1cblxuIFx0XHQvLyBhZGQgZW50cnkgbW9kdWxlcyBmcm9tIGxvYWRlZCBjaHVuayB0byBkZWZlcnJlZCBsaXN0XG4gXHRcdGRlZmVycmVkTW9kdWxlcy5wdXNoLmFwcGx5KGRlZmVycmVkTW9kdWxlcywgZXhlY3V0ZU1vZHVsZXMgfHwgW10pO1xuXG4gXHRcdC8vIHJ1biBkZWZlcnJlZCBtb2R1bGVzIHdoZW4gYWxsIGNodW5rcyByZWFkeVxuIFx0XHRyZXR1cm4gY2hlY2tEZWZlcnJlZE1vZHVsZXMoKTtcbiBcdH07XG4gXHRmdW5jdGlvbiBjaGVja0RlZmVycmVkTW9kdWxlcygpIHtcbiBcdFx0dmFyIHJlc3VsdDtcbiBcdFx0Zm9yKHZhciBpID0gMDsgaSA8IGRlZmVycmVkTW9kdWxlcy5sZW5ndGg7IGkrKykge1xuIFx0XHRcdHZhciBkZWZlcnJlZE1vZHVsZSA9IGRlZmVycmVkTW9kdWxlc1tpXTtcbiBcdFx0XHR2YXIgZnVsZmlsbGVkID0gdHJ1ZTtcbiBcdFx0XHRmb3IodmFyIGogPSAxOyBqIDwgZGVmZXJyZWRNb2R1bGUubGVuZ3RoOyBqKyspIHtcbiBcdFx0XHRcdHZhciBkZXBJZCA9IGRlZmVycmVkTW9kdWxlW2pdO1xuIFx0XHRcdFx0aWYoaW5zdGFsbGVkQ2h1bmtzW2RlcElkXSAhPT0gMCkgZnVsZmlsbGVkID0gZmFsc2U7XG4gXHRcdFx0fVxuIFx0XHRcdGlmKGZ1bGZpbGxlZCkge1xuIFx0XHRcdFx0ZGVmZXJyZWRNb2R1bGVzLnNwbGljZShpLS0sIDEpO1xuIFx0XHRcdFx0cmVzdWx0ID0gX193ZWJwYWNrX3JlcXVpcmVfXyhfX3dlYnBhY2tfcmVxdWlyZV9fLnMgPSBkZWZlcnJlZE1vZHVsZVswXSk7XG4gXHRcdFx0fVxuIFx0XHR9XG5cbiBcdFx0cmV0dXJuIHJlc3VsdDtcbiBcdH1cblxuIFx0Ly8gVGhlIG1vZHVsZSBjYWNoZVxuIFx0dmFyIGluc3RhbGxlZE1vZHVsZXMgPSB7fTtcblxuIFx0Ly8gb2JqZWN0IHRvIHN0b3JlIGxvYWRlZCBhbmQgbG9hZGluZyBjaHVua3NcbiBcdC8vIHVuZGVmaW5lZCA9IGNodW5rIG5vdCBsb2FkZWQsIG51bGwgPSBjaHVuayBwcmVsb2FkZWQvcHJlZmV0Y2hlZFxuIFx0Ly8gUHJvbWlzZSA9IGNodW5rIGxvYWRpbmcsIDAgPSBjaHVuayBsb2FkZWRcbiBcdHZhciBpbnN0YWxsZWRDaHVua3MgPSB7XG4gXHRcdFwiQ291bnREb3duXCI6IDBcbiBcdH07XG5cbiBcdHZhciBkZWZlcnJlZE1vZHVsZXMgPSBbXTtcblxuIFx0Ly8gVGhlIHJlcXVpcmUgZnVuY3Rpb25cbiBcdGZ1bmN0aW9uIF9fd2VicGFja19yZXF1aXJlX18obW9kdWxlSWQpIHtcblxuIFx0XHQvLyBDaGVjayBpZiBtb2R1bGUgaXMgaW4gY2FjaGVcbiBcdFx0aWYoaW5zdGFsbGVkTW9kdWxlc1ttb2R1bGVJZF0pIHtcbiBcdFx0XHRyZXR1cm4gaW5zdGFsbGVkTW9kdWxlc1ttb2R1bGVJZF0uZXhwb3J0cztcbiBcdFx0fVxuIFx0XHQvLyBDcmVhdGUgYSBuZXcgbW9kdWxlIChhbmQgcHV0IGl0IGludG8gdGhlIGNhY2hlKVxuIFx0XHR2YXIgbW9kdWxlID0gaW5zdGFsbGVkTW9kdWxlc1ttb2R1bGVJZF0gPSB7XG4gXHRcdFx0aTogbW9kdWxlSWQsXG4gXHRcdFx0bDogZmFsc2UsXG4gXHRcdFx0ZXhwb3J0czoge31cbiBcdFx0fTtcblxuIFx0XHQvLyBFeGVjdXRlIHRoZSBtb2R1bGUgZnVuY3Rpb25cbiBcdFx0bW9kdWxlc1ttb2R1bGVJZF0uY2FsbChtb2R1bGUuZXhwb3J0cywgbW9kdWxlLCBtb2R1bGUuZXhwb3J0cywgX193ZWJwYWNrX3JlcXVpcmVfXyk7XG5cbiBcdFx0Ly8gRmxhZyB0aGUgbW9kdWxlIGFzIGxvYWRlZFxuIFx0XHRtb2R1bGUubCA9IHRydWU7XG5cbiBcdFx0Ly8gUmV0dXJuIHRoZSBleHBvcnRzIG9mIHRoZSBtb2R1bGVcbiBcdFx0cmV0dXJuIG1vZHVsZS5leHBvcnRzO1xuIFx0fVxuXG5cbiBcdC8vIGV4cG9zZSB0aGUgbW9kdWxlcyBvYmplY3QgKF9fd2VicGFja19tb2R1bGVzX18pXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLm0gPSBtb2R1bGVzO1xuXG4gXHQvLyBleHBvc2UgdGhlIG1vZHVsZSBjYWNoZVxuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5jID0gaW5zdGFsbGVkTW9kdWxlcztcblxuIFx0Ly8gZGVmaW5lIGdldHRlciBmdW5jdGlvbiBmb3IgaGFybW9ueSBleHBvcnRzXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLmQgPSBmdW5jdGlvbihleHBvcnRzLCBuYW1lLCBnZXR0ZXIpIHtcbiBcdFx0aWYoIV9fd2VicGFja19yZXF1aXJlX18ubyhleHBvcnRzLCBuYW1lKSkge1xuIFx0XHRcdE9iamVjdC5kZWZpbmVQcm9wZXJ0eShleHBvcnRzLCBuYW1lLCB7IGVudW1lcmFibGU6IHRydWUsIGdldDogZ2V0dGVyIH0pO1xuIFx0XHR9XG4gXHR9O1xuXG4gXHQvLyBkZWZpbmUgX19lc01vZHVsZSBvbiBleHBvcnRzXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLnIgPSBmdW5jdGlvbihleHBvcnRzKSB7XG4gXHRcdGlmKHR5cGVvZiBTeW1ib2wgIT09ICd1bmRlZmluZWQnICYmIFN5bWJvbC50b1N0cmluZ1RhZykge1xuIFx0XHRcdE9iamVjdC5kZWZpbmVQcm9wZXJ0eShleHBvcnRzLCBTeW1ib2wudG9TdHJpbmdUYWcsIHsgdmFsdWU6ICdNb2R1bGUnIH0pO1xuIFx0XHR9XG4gXHRcdE9iamVjdC5kZWZpbmVQcm9wZXJ0eShleHBvcnRzLCAnX19lc01vZHVsZScsIHsgdmFsdWU6IHRydWUgfSk7XG4gXHR9O1xuXG4gXHQvLyBjcmVhdGUgYSBmYWtlIG5hbWVzcGFjZSBvYmplY3RcbiBcdC8vIG1vZGUgJiAxOiB2YWx1ZSBpcyBhIG1vZHVsZSBpZCwgcmVxdWlyZSBpdFxuIFx0Ly8gbW9kZSAmIDI6IG1lcmdlIGFsbCBwcm9wZXJ0aWVzIG9mIHZhbHVlIGludG8gdGhlIG5zXG4gXHQvLyBtb2RlICYgNDogcmV0dXJuIHZhbHVlIHdoZW4gYWxyZWFkeSBucyBvYmplY3RcbiBcdC8vIG1vZGUgJiA4fDE6IGJlaGF2ZSBsaWtlIHJlcXVpcmVcbiBcdF9fd2VicGFja19yZXF1aXJlX18udCA9IGZ1bmN0aW9uKHZhbHVlLCBtb2RlKSB7XG4gXHRcdGlmKG1vZGUgJiAxKSB2YWx1ZSA9IF9fd2VicGFja19yZXF1aXJlX18odmFsdWUpO1xuIFx0XHRpZihtb2RlICYgOCkgcmV0dXJuIHZhbHVlO1xuIFx0XHRpZigobW9kZSAmIDQpICYmIHR5cGVvZiB2YWx1ZSA9PT0gJ29iamVjdCcgJiYgdmFsdWUgJiYgdmFsdWUuX19lc01vZHVsZSkgcmV0dXJuIHZhbHVlO1xuIFx0XHR2YXIgbnMgPSBPYmplY3QuY3JlYXRlKG51bGwpO1xuIFx0XHRfX3dlYnBhY2tfcmVxdWlyZV9fLnIobnMpO1xuIFx0XHRPYmplY3QuZGVmaW5lUHJvcGVydHkobnMsICdkZWZhdWx0JywgeyBlbnVtZXJhYmxlOiB0cnVlLCB2YWx1ZTogdmFsdWUgfSk7XG4gXHRcdGlmKG1vZGUgJiAyICYmIHR5cGVvZiB2YWx1ZSAhPSAnc3RyaW5nJykgZm9yKHZhciBrZXkgaW4gdmFsdWUpIF9fd2VicGFja19yZXF1aXJlX18uZChucywga2V5LCBmdW5jdGlvbihrZXkpIHsgcmV0dXJuIHZhbHVlW2tleV07IH0uYmluZChudWxsLCBrZXkpKTtcbiBcdFx0cmV0dXJuIG5zO1xuIFx0fTtcblxuIFx0Ly8gZ2V0RGVmYXVsdEV4cG9ydCBmdW5jdGlvbiBmb3IgY29tcGF0aWJpbGl0eSB3aXRoIG5vbi1oYXJtb255IG1vZHVsZXNcbiBcdF9fd2VicGFja19yZXF1aXJlX18ubiA9IGZ1bmN0aW9uKG1vZHVsZSkge1xuIFx0XHR2YXIgZ2V0dGVyID0gbW9kdWxlICYmIG1vZHVsZS5fX2VzTW9kdWxlID9cbiBcdFx0XHRmdW5jdGlvbiBnZXREZWZhdWx0KCkgeyByZXR1cm4gbW9kdWxlWydkZWZhdWx0J107IH0gOlxuIFx0XHRcdGZ1bmN0aW9uIGdldE1vZHVsZUV4cG9ydHMoKSB7IHJldHVybiBtb2R1bGU7IH07XG4gXHRcdF9fd2VicGFja19yZXF1aXJlX18uZChnZXR0ZXIsICdhJywgZ2V0dGVyKTtcbiBcdFx0cmV0dXJuIGdldHRlcjtcbiBcdH07XG5cbiBcdC8vIE9iamVjdC5wcm90b3R5cGUuaGFzT3duUHJvcGVydHkuY2FsbFxuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5vID0gZnVuY3Rpb24ob2JqZWN0LCBwcm9wZXJ0eSkgeyByZXR1cm4gT2JqZWN0LnByb3RvdHlwZS5oYXNPd25Qcm9wZXJ0eS5jYWxsKG9iamVjdCwgcHJvcGVydHkpOyB9O1xuXG4gXHQvLyBfX3dlYnBhY2tfcHVibGljX3BhdGhfX1xuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5wID0gXCIvYnVpbGQvXCI7XG5cbiBcdHZhciBqc29ucEFycmF5ID0gd2luZG93W1wid2VicGFja0pzb25wXCJdID0gd2luZG93W1wid2VicGFja0pzb25wXCJdIHx8IFtdO1xuIFx0dmFyIG9sZEpzb25wRnVuY3Rpb24gPSBqc29ucEFycmF5LnB1c2guYmluZChqc29ucEFycmF5KTtcbiBcdGpzb25wQXJyYXkucHVzaCA9IHdlYnBhY2tKc29ucENhbGxiYWNrO1xuIFx0anNvbnBBcnJheSA9IGpzb25wQXJyYXkuc2xpY2UoKTtcbiBcdGZvcih2YXIgaSA9IDA7IGkgPCBqc29ucEFycmF5Lmxlbmd0aDsgaSsrKSB3ZWJwYWNrSnNvbnBDYWxsYmFjayhqc29ucEFycmF5W2ldKTtcbiBcdHZhciBwYXJlbnRKc29ucEZ1bmN0aW9uID0gb2xkSnNvbnBGdW5jdGlvbjtcblxuXG4gXHQvLyBhZGQgZW50cnkgbW9kdWxlIHRvIGRlZmVycmVkIGxpc3RcbiBcdGRlZmVycmVkTW9kdWxlcy5wdXNoKFtcIi4vYXNzZXRzL2pzL2pxdWVyeS5jb3VudGRvd24uanNcIixcInZlbmRvcnN+Q291bnREb3dufmFwcFwiXSk7XG4gXHQvLyBydW4gZGVmZXJyZWQgbW9kdWxlcyB3aGVuIHJlYWR5XG4gXHRyZXR1cm4gY2hlY2tEZWZlcnJlZE1vZHVsZXMoKTtcbiIsIi8qIVxyXG4gKiBUaGUgRmluYWwgQ291bnRkb3duIGZvciBqUXVlcnkgdjIuMi4wIChodHRwOi8vaGlsaW9zLmdpdGh1Yi5pby9qUXVlcnkuY291bnRkb3duLylcclxuICogQ29weXJpZ2h0IChjKSAyMDE2IEVkc29uIEhpbGlvc1xyXG4gKiBcclxuICogUGVybWlzc2lvbiBpcyBoZXJlYnkgZ3JhbnRlZCwgZnJlZSBvZiBjaGFyZ2UsIHRvIGFueSBwZXJzb24gb2J0YWluaW5nIGEgY29weSBvZlxyXG4gKiB0aGlzIHNvZnR3YXJlIGFuZCBhc3NvY2lhdGVkIGRvY3VtZW50YXRpb24gZmlsZXMgKHRoZSBcIlNvZnR3YXJlXCIpLCB0byBkZWFsIGluXHJcbiAqIHRoZSBTb2Z0d2FyZSB3aXRob3V0IHJlc3RyaWN0aW9uLCBpbmNsdWRpbmcgd2l0aG91dCBsaW1pdGF0aW9uIHRoZSByaWdodHMgdG9cclxuICogdXNlLCBjb3B5LCBtb2RpZnksIG1lcmdlLCBwdWJsaXNoLCBkaXN0cmlidXRlLCBzdWJsaWNlbnNlLCBhbmQvb3Igc2VsbCBjb3BpZXMgb2ZcclxuICogdGhlIFNvZnR3YXJlLCBhbmQgdG8gcGVybWl0IHBlcnNvbnMgdG8gd2hvbSB0aGUgU29mdHdhcmUgaXMgZnVybmlzaGVkIHRvIGRvIHNvLFxyXG4gKiBzdWJqZWN0IHRvIHRoZSBmb2xsb3dpbmcgY29uZGl0aW9uczpcclxuICogXHJcbiAqIFRoZSBhYm92ZSBjb3B5cmlnaHQgbm90aWNlIGFuZCB0aGlzIHBlcm1pc3Npb24gbm90aWNlIHNoYWxsIGJlIGluY2x1ZGVkIGluIGFsbFxyXG4gKiBjb3BpZXMgb3Igc3Vic3RhbnRpYWwgcG9ydGlvbnMgb2YgdGhlIFNvZnR3YXJlLlxyXG4gKiBcclxuICogVEhFIFNPRlRXQVJFIElTIFBST1ZJREVEIFwiQVMgSVNcIiwgV0lUSE9VVCBXQVJSQU5UWSBPRiBBTlkgS0lORCwgRVhQUkVTUyBPUlxyXG4gKiBJTVBMSUVELCBJTkNMVURJTkcgQlVUIE5PVCBMSU1JVEVEIFRPIFRIRSBXQVJSQU5USUVTIE9GIE1FUkNIQU5UQUJJTElUWSwgRklUTkVTU1xyXG4gKiBGT1IgQSBQQVJUSUNVTEFSIFBVUlBPU0UgQU5EIE5PTklORlJJTkdFTUVOVC4gSU4gTk8gRVZFTlQgU0hBTEwgVEhFIEFVVEhPUlMgT1JcclxuICogQ09QWVJJR0hUIEhPTERFUlMgQkUgTElBQkxFIEZPUiBBTlkgQ0xBSU0sIERBTUFHRVMgT1IgT1RIRVIgTElBQklMSVRZLCBXSEVUSEVSXHJcbiAqIElOIEFOIEFDVElPTiBPRiBDT05UUkFDVCwgVE9SVCBPUiBPVEhFUldJU0UsIEFSSVNJTkcgRlJPTSwgT1VUIE9GIE9SIElOXHJcbiAqIENPTk5FQ1RJT04gV0lUSCBUSEUgU09GVFdBUkUgT1IgVEhFIFVTRSBPUiBPVEhFUiBERUFMSU5HUyBJTiBUSEUgU09GVFdBUkUuXHJcbiAqL1xyXG4oZnVuY3Rpb24oZmFjdG9yeSkge1xyXG4gICAgXCJ1c2Ugc3RyaWN0XCI7XHJcbiAgICBpZiAodHlwZW9mIGRlZmluZSA9PT0gXCJmdW5jdGlvblwiICYmIGRlZmluZS5hbWQpIHtcclxuICAgICAgICBkZWZpbmUoWyBcImpxdWVyeVwiIF0sIGZhY3RvcnkpO1xyXG4gICAgfSBlbHNlIHtcclxuICAgICAgICBmYWN0b3J5KGpRdWVyeSk7XHJcbiAgICB9XHJcbn0pKGZ1bmN0aW9uKCQpIHtcclxuICAgIFwidXNlIHN0cmljdFwiO1xyXG4gICAgdmFyIGluc3RhbmNlcyA9IFtdLCBtYXRjaGVycyA9IFtdLCBkZWZhdWx0T3B0aW9ucyA9IHtcclxuICAgICAgICBwcmVjaXNpb246IDEwMCxcclxuICAgICAgICBlbGFwc2U6IGZhbHNlLFxyXG4gICAgICAgIGRlZmVyOiBmYWxzZVxyXG4gICAgfTtcclxuICAgIG1hdGNoZXJzLnB1c2goL15bMC05XSokLy5zb3VyY2UpO1xyXG4gICAgbWF0Y2hlcnMucHVzaCgvKFswLTldezEsMn1cXC8pezJ9WzAtOV17NH0oIFswLTldezEsMn0oOlswLTldezJ9KXsyfSk/Ly5zb3VyY2UpO1xyXG4gICAgbWF0Y2hlcnMucHVzaCgvWzAtOV17NH0oW1xcL1xcLV1bMC05XXsxLDJ9KXsyfSggWzAtOV17MSwyfSg6WzAtOV17Mn0pezJ9KT8vLnNvdXJjZSk7XHJcbiAgICBtYXRjaGVycyA9IG5ldyBSZWdFeHAobWF0Y2hlcnMuam9pbihcInxcIikpO1xyXG4gICAgZnVuY3Rpb24gcGFyc2VEYXRlU3RyaW5nKGRhdGVTdHJpbmcpIHtcclxuICAgICAgICBpZiAoZGF0ZVN0cmluZyBpbnN0YW5jZW9mIERhdGUpIHtcclxuICAgICAgICAgICAgcmV0dXJuIGRhdGVTdHJpbmc7XHJcbiAgICAgICAgfVxyXG4gICAgICAgIGlmIChTdHJpbmcoZGF0ZVN0cmluZykubWF0Y2gobWF0Y2hlcnMpKSB7XHJcbiAgICAgICAgICAgIGlmIChTdHJpbmcoZGF0ZVN0cmluZykubWF0Y2goL15bMC05XSokLykpIHtcclxuICAgICAgICAgICAgICAgIGRhdGVTdHJpbmcgPSBOdW1iZXIoZGF0ZVN0cmluZyk7XHJcbiAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgaWYgKFN0cmluZyhkYXRlU3RyaW5nKS5tYXRjaCgvXFwtLykpIHtcclxuICAgICAgICAgICAgICAgIGRhdGVTdHJpbmcgPSBTdHJpbmcoZGF0ZVN0cmluZykucmVwbGFjZSgvXFwtL2csIFwiL1wiKTtcclxuICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICByZXR1cm4gbmV3IERhdGUoZGF0ZVN0cmluZyk7XHJcbiAgICAgICAgfSBlbHNlIHtcclxuICAgICAgICAgICAgdGhyb3cgbmV3IEVycm9yKFwiQ291bGRuJ3QgY2FzdCBgXCIgKyBkYXRlU3RyaW5nICsgXCJgIHRvIGEgZGF0ZSBvYmplY3QuXCIpO1xyXG4gICAgICAgIH1cclxuICAgIH1cclxuICAgIHZhciBESVJFQ1RJVkVfS0VZX01BUCA9IHtcclxuICAgICAgICBZOiBcInllYXJzXCIsXHJcbiAgICAgICAgbTogXCJtb250aHNcIixcclxuICAgICAgICBuOiBcImRheXNUb01vbnRoXCIsXHJcbiAgICAgICAgZDogXCJkYXlzVG9XZWVrXCIsXHJcbiAgICAgICAgdzogXCJ3ZWVrc1wiLFxyXG4gICAgICAgIFc6IFwid2Vla3NUb01vbnRoXCIsXHJcbiAgICAgICAgSDogXCJob3Vyc1wiLFxyXG4gICAgICAgIE06IFwibWludXRlc1wiLFxyXG4gICAgICAgIFM6IFwic2Vjb25kc1wiLFxyXG4gICAgICAgIEQ6IFwidG90YWxEYXlzXCIsXHJcbiAgICAgICAgSTogXCJ0b3RhbEhvdXJzXCIsXHJcbiAgICAgICAgTjogXCJ0b3RhbE1pbnV0ZXNcIixcclxuICAgICAgICBUOiBcInRvdGFsU2Vjb25kc1wiXHJcbiAgICB9O1xyXG4gICAgZnVuY3Rpb24gZXNjYXBlZFJlZ0V4cChzdHIpIHtcclxuICAgICAgICB2YXIgc2FuaXRpemUgPSBzdHIudG9TdHJpbmcoKS5yZXBsYWNlKC8oWy4/KiteJFtcXF1cXFxcKCl7fXwtXSkvZywgXCJcXFxcJDFcIik7XHJcbiAgICAgICAgcmV0dXJuIG5ldyBSZWdFeHAoc2FuaXRpemUpO1xyXG4gICAgfVxyXG4gICAgZnVuY3Rpb24gc3RyZnRpbWUob2Zmc2V0T2JqZWN0KSB7XHJcbiAgICAgICAgcmV0dXJuIGZ1bmN0aW9uKGZvcm1hdCkge1xyXG4gICAgICAgICAgICB2YXIgZGlyZWN0aXZlcyA9IGZvcm1hdC5tYXRjaCgvJSgtfCEpP1tBLVpdezF9KDpbXjtdKzspPy9naSk7XHJcbiAgICAgICAgICAgIGlmIChkaXJlY3RpdmVzKSB7XHJcbiAgICAgICAgICAgICAgICBmb3IgKHZhciBpID0gMCwgbGVuID0gZGlyZWN0aXZlcy5sZW5ndGg7IGkgPCBsZW47ICsraSkge1xyXG4gICAgICAgICAgICAgICAgICAgIHZhciBkaXJlY3RpdmUgPSBkaXJlY3RpdmVzW2ldLm1hdGNoKC8lKC18ISk/KFthLXpBLVpdezF9KSg6W147XSs7KT8vKSwgcmVnZXhwID0gZXNjYXBlZFJlZ0V4cChkaXJlY3RpdmVbMF0pLCBtb2RpZmllciA9IGRpcmVjdGl2ZVsxXSB8fCBcIlwiLCBwbHVyYWwgPSBkaXJlY3RpdmVbM10gfHwgXCJcIiwgdmFsdWUgPSBudWxsO1xyXG4gICAgICAgICAgICAgICAgICAgIGRpcmVjdGl2ZSA9IGRpcmVjdGl2ZVsyXTtcclxuICAgICAgICAgICAgICAgICAgICBpZiAoRElSRUNUSVZFX0tFWV9NQVAuaGFzT3duUHJvcGVydHkoZGlyZWN0aXZlKSkge1xyXG4gICAgICAgICAgICAgICAgICAgICAgICB2YWx1ZSA9IERJUkVDVElWRV9LRVlfTUFQW2RpcmVjdGl2ZV07XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIHZhbHVlID0gTnVtYmVyKG9mZnNldE9iamVjdFt2YWx1ZV0pO1xyXG4gICAgICAgICAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgICAgICAgICBpZiAodmFsdWUgIT09IG51bGwpIHtcclxuICAgICAgICAgICAgICAgICAgICAgICAgaWYgKG1vZGlmaWVyID09PSBcIiFcIikge1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgdmFsdWUgPSBwbHVyYWxpemUocGx1cmFsLCB2YWx1ZSk7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgICAgICAgICAgICAgaWYgKG1vZGlmaWVyID09PSBcIlwiKSB7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBpZiAodmFsdWUgPCAxMCkge1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHZhbHVlID0gXCIwXCIgKyB2YWx1ZS50b1N0cmluZygpO1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICAgICAgICAgICAgICB9XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIGZvcm1hdCA9IGZvcm1hdC5yZXBsYWNlKHJlZ2V4cCwgdmFsdWUudG9TdHJpbmcoKSk7XHJcbiAgICAgICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICB9XHJcbiAgICAgICAgICAgIGZvcm1hdCA9IGZvcm1hdC5yZXBsYWNlKC8lJS8sIFwiJVwiKTtcclxuICAgICAgICAgICAgcmV0dXJuIGZvcm1hdDtcclxuICAgICAgICB9O1xyXG4gICAgfVxyXG4gICAgZnVuY3Rpb24gcGx1cmFsaXplKGZvcm1hdCwgY291bnQpIHtcclxuICAgICAgICB2YXIgcGx1cmFsID0gXCJzXCIsIHNpbmd1bGFyID0gXCJcIjtcclxuICAgICAgICBpZiAoZm9ybWF0KSB7XHJcbiAgICAgICAgICAgIGZvcm1hdCA9IGZvcm1hdC5yZXBsYWNlKC8oOnw7fFxccykvZ2ksIFwiXCIpLnNwbGl0KC9cXCwvKTtcclxuICAgICAgICAgICAgaWYgKGZvcm1hdC5sZW5ndGggPT09IDEpIHtcclxuICAgICAgICAgICAgICAgIHBsdXJhbCA9IGZvcm1hdFswXTtcclxuICAgICAgICAgICAgfSBlbHNlIHtcclxuICAgICAgICAgICAgICAgIHNpbmd1bGFyID0gZm9ybWF0WzBdO1xyXG4gICAgICAgICAgICAgICAgcGx1cmFsID0gZm9ybWF0WzFdO1xyXG4gICAgICAgICAgICB9XHJcbiAgICAgICAgfVxyXG4gICAgICAgIGlmIChNYXRoLmFicyhjb3VudCkgPiAxKSB7XHJcbiAgICAgICAgICAgIHJldHVybiBwbHVyYWw7XHJcbiAgICAgICAgfSBlbHNlIHtcclxuICAgICAgICAgICAgcmV0dXJuIHNpbmd1bGFyO1xyXG4gICAgICAgIH1cclxuICAgIH1cclxuICAgIHZhciBDb3VudGRvd24gPSBmdW5jdGlvbihlbCwgZmluYWxEYXRlLCBvcHRpb25zKSB7XHJcbiAgICAgICAgdGhpcy5lbCA9IGVsO1xyXG4gICAgICAgIHRoaXMuJGVsID0gJChlbCk7XHJcbiAgICAgICAgdGhpcy5pbnRlcnZhbCA9IG51bGw7XHJcbiAgICAgICAgdGhpcy5vZmZzZXQgPSB7fTtcclxuICAgICAgICB0aGlzLm9wdGlvbnMgPSAkLmV4dGVuZCh7fSwgZGVmYXVsdE9wdGlvbnMpO1xyXG4gICAgICAgIHRoaXMuaW5zdGFuY2VOdW1iZXIgPSBpbnN0YW5jZXMubGVuZ3RoO1xyXG4gICAgICAgIGluc3RhbmNlcy5wdXNoKHRoaXMpO1xyXG4gICAgICAgIHRoaXMuJGVsLmRhdGEoXCJjb3VudGRvd24taW5zdGFuY2VcIiwgdGhpcy5pbnN0YW5jZU51bWJlcik7XHJcbiAgICAgICAgaWYgKG9wdGlvbnMpIHtcclxuICAgICAgICAgICAgaWYgKHR5cGVvZiBvcHRpb25zID09PSBcImZ1bmN0aW9uXCIpIHtcclxuICAgICAgICAgICAgICAgIHRoaXMuJGVsLm9uKFwidXBkYXRlLmNvdW50ZG93blwiLCBvcHRpb25zKTtcclxuICAgICAgICAgICAgICAgIHRoaXMuJGVsLm9uKFwic3RvcGVkLmNvdW50ZG93blwiLCBvcHRpb25zKTtcclxuICAgICAgICAgICAgICAgIHRoaXMuJGVsLm9uKFwiZmluaXNoLmNvdW50ZG93blwiLCBvcHRpb25zKTtcclxuICAgICAgICAgICAgfSBlbHNlIHtcclxuICAgICAgICAgICAgICAgIHRoaXMub3B0aW9ucyA9ICQuZXh0ZW5kKHt9LCBkZWZhdWx0T3B0aW9ucywgb3B0aW9ucyk7XHJcbiAgICAgICAgICAgIH1cclxuICAgICAgICB9XHJcbiAgICAgICAgdGhpcy5zZXRGaW5hbERhdGUoZmluYWxEYXRlKTtcclxuICAgICAgICBpZiAodGhpcy5vcHRpb25zLmRlZmVyID09PSBmYWxzZSkge1xyXG4gICAgICAgICAgICB0aGlzLnN0YXJ0KCk7XHJcbiAgICAgICAgfVxyXG4gICAgfTtcclxuICAgICQuZXh0ZW5kKENvdW50ZG93bi5wcm90b3R5cGUsIHtcclxuICAgICAgICBzdGFydDogZnVuY3Rpb24oKSB7XHJcbiAgICAgICAgICAgIGlmICh0aGlzLmludGVydmFsICE9PSBudWxsKSB7XHJcbiAgICAgICAgICAgICAgICBjbGVhckludGVydmFsKHRoaXMuaW50ZXJ2YWwpO1xyXG4gICAgICAgICAgICB9XHJcbiAgICAgICAgICAgIHZhciBzZWxmID0gdGhpcztcclxuICAgICAgICAgICAgdGhpcy51cGRhdGUoKTtcclxuICAgICAgICAgICAgdGhpcy5pbnRlcnZhbCA9IHNldEludGVydmFsKGZ1bmN0aW9uKCkge1xyXG4gICAgICAgICAgICAgICAgc2VsZi51cGRhdGUuY2FsbChzZWxmKTtcclxuICAgICAgICAgICAgfSwgdGhpcy5vcHRpb25zLnByZWNpc2lvbik7XHJcbiAgICAgICAgfSxcclxuICAgICAgICBzdG9wOiBmdW5jdGlvbigpIHtcclxuICAgICAgICAgICAgY2xlYXJJbnRlcnZhbCh0aGlzLmludGVydmFsKTtcclxuICAgICAgICAgICAgdGhpcy5pbnRlcnZhbCA9IG51bGw7XHJcbiAgICAgICAgICAgIHRoaXMuZGlzcGF0Y2hFdmVudChcInN0b3BlZFwiKTtcclxuICAgICAgICB9LFxyXG4gICAgICAgIHRvZ2dsZTogZnVuY3Rpb24oKSB7XHJcbiAgICAgICAgICAgIGlmICh0aGlzLmludGVydmFsKSB7XHJcbiAgICAgICAgICAgICAgICB0aGlzLnN0b3AoKTtcclxuICAgICAgICAgICAgfSBlbHNlIHtcclxuICAgICAgICAgICAgICAgIHRoaXMuc3RhcnQoKTtcclxuICAgICAgICAgICAgfVxyXG4gICAgICAgIH0sXHJcbiAgICAgICAgcGF1c2U6IGZ1bmN0aW9uKCkge1xyXG4gICAgICAgICAgICB0aGlzLnN0b3AoKTtcclxuICAgICAgICB9LFxyXG4gICAgICAgIHJlc3VtZTogZnVuY3Rpb24oKSB7XHJcbiAgICAgICAgICAgIHRoaXMuc3RhcnQoKTtcclxuICAgICAgICB9LFxyXG4gICAgICAgIHJlbW92ZTogZnVuY3Rpb24oKSB7XHJcbiAgICAgICAgICAgIHRoaXMuc3RvcC5jYWxsKHRoaXMpO1xyXG4gICAgICAgICAgICBpbnN0YW5jZXNbdGhpcy5pbnN0YW5jZU51bWJlcl0gPSBudWxsO1xyXG4gICAgICAgICAgICBkZWxldGUgdGhpcy4kZWwuZGF0YSgpLmNvdW50ZG93bkluc3RhbmNlO1xyXG4gICAgICAgIH0sXHJcbiAgICAgICAgc2V0RmluYWxEYXRlOiBmdW5jdGlvbih2YWx1ZSkge1xyXG4gICAgICAgICAgICB0aGlzLmZpbmFsRGF0ZSA9IHBhcnNlRGF0ZVN0cmluZyh2YWx1ZSk7XHJcbiAgICAgICAgfSxcclxuICAgICAgICB1cGRhdGU6IGZ1bmN0aW9uKCkge1xyXG4gICAgICAgICAgICBpZiAodGhpcy4kZWwuY2xvc2VzdChcImh0bWxcIikubGVuZ3RoID09PSAwKSB7XHJcbiAgICAgICAgICAgICAgICB0aGlzLnJlbW92ZSgpO1xyXG4gICAgICAgICAgICAgICAgcmV0dXJuO1xyXG4gICAgICAgICAgICB9XHJcbiAgICAgICAgICAgIHZhciBoYXNFdmVudHNBdHRhY2hlZCA9ICQuX2RhdGEodGhpcy5lbCwgXCJldmVudHNcIikgIT09IHVuZGVmaW5lZCwgbm93ID0gbmV3IERhdGUoKSwgbmV3VG90YWxTZWNzTGVmdDtcclxuICAgICAgICAgICAgbmV3VG90YWxTZWNzTGVmdCA9IHRoaXMuZmluYWxEYXRlLmdldFRpbWUoKSAtIG5vdy5nZXRUaW1lKCk7XHJcbiAgICAgICAgICAgIG5ld1RvdGFsU2Vjc0xlZnQgPSBNYXRoLmNlaWwobmV3VG90YWxTZWNzTGVmdCAvIDFlMyk7XHJcbiAgICAgICAgICAgIG5ld1RvdGFsU2Vjc0xlZnQgPSAhdGhpcy5vcHRpb25zLmVsYXBzZSAmJiBuZXdUb3RhbFNlY3NMZWZ0IDwgMCA/IDAgOiBNYXRoLmFicyhuZXdUb3RhbFNlY3NMZWZ0KTtcclxuICAgICAgICAgICAgaWYgKHRoaXMudG90YWxTZWNzTGVmdCA9PT0gbmV3VG90YWxTZWNzTGVmdCB8fCAhaGFzRXZlbnRzQXR0YWNoZWQpIHtcclxuICAgICAgICAgICAgICAgIHJldHVybjtcclxuICAgICAgICAgICAgfSBlbHNlIHtcclxuICAgICAgICAgICAgICAgIHRoaXMudG90YWxTZWNzTGVmdCA9IG5ld1RvdGFsU2Vjc0xlZnQ7XHJcbiAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgdGhpcy5lbGFwc2VkID0gbm93ID49IHRoaXMuZmluYWxEYXRlO1xyXG4gICAgICAgICAgICB0aGlzLm9mZnNldCA9IHtcclxuICAgICAgICAgICAgICAgIHNlY29uZHM6IHRoaXMudG90YWxTZWNzTGVmdCAlIDYwLFxyXG4gICAgICAgICAgICAgICAgbWludXRlczogTWF0aC5mbG9vcih0aGlzLnRvdGFsU2Vjc0xlZnQgLyA2MCkgJSA2MCxcclxuICAgICAgICAgICAgICAgIGhvdXJzOiBNYXRoLmZsb29yKHRoaXMudG90YWxTZWNzTGVmdCAvIDYwIC8gNjApICUgMjQsXHJcbiAgICAgICAgICAgICAgICBkYXlzOiBNYXRoLmZsb29yKHRoaXMudG90YWxTZWNzTGVmdCAvIDYwIC8gNjAgLyAyNCkgJSA3LFxyXG4gICAgICAgICAgICAgICAgZGF5c1RvV2VlazogTWF0aC5mbG9vcih0aGlzLnRvdGFsU2Vjc0xlZnQgLyA2MCAvIDYwIC8gMjQpICUgNyxcclxuICAgICAgICAgICAgICAgIGRheXNUb01vbnRoOiBNYXRoLmZsb29yKHRoaXMudG90YWxTZWNzTGVmdCAvIDYwIC8gNjAgLyAyNCAlIDMwLjQzNjgpLFxyXG4gICAgICAgICAgICAgICAgd2Vla3M6IE1hdGguZmxvb3IodGhpcy50b3RhbFNlY3NMZWZ0IC8gNjAgLyA2MCAvIDI0IC8gNyksXHJcbiAgICAgICAgICAgICAgICB3ZWVrc1RvTW9udGg6IE1hdGguZmxvb3IodGhpcy50b3RhbFNlY3NMZWZ0IC8gNjAgLyA2MCAvIDI0IC8gNykgJSA0LFxyXG4gICAgICAgICAgICAgICAgbW9udGhzOiBNYXRoLmZsb29yKHRoaXMudG90YWxTZWNzTGVmdCAvIDYwIC8gNjAgLyAyNCAvIDMwLjQzNjgpLFxyXG4gICAgICAgICAgICAgICAgeWVhcnM6IE1hdGguYWJzKHRoaXMuZmluYWxEYXRlLmdldEZ1bGxZZWFyKCkgLSBub3cuZ2V0RnVsbFllYXIoKSksXHJcbiAgICAgICAgICAgICAgICB0b3RhbERheXM6IE1hdGguZmxvb3IodGhpcy50b3RhbFNlY3NMZWZ0IC8gNjAgLyA2MCAvIDI0KSxcclxuICAgICAgICAgICAgICAgIHRvdGFsSG91cnM6IE1hdGguZmxvb3IodGhpcy50b3RhbFNlY3NMZWZ0IC8gNjAgLyA2MCksXHJcbiAgICAgICAgICAgICAgICB0b3RhbE1pbnV0ZXM6IE1hdGguZmxvb3IodGhpcy50b3RhbFNlY3NMZWZ0IC8gNjApLFxyXG4gICAgICAgICAgICAgICAgdG90YWxTZWNvbmRzOiB0aGlzLnRvdGFsU2Vjc0xlZnRcclxuICAgICAgICAgICAgfTtcclxuICAgICAgICAgICAgaWYgKCF0aGlzLm9wdGlvbnMuZWxhcHNlICYmIHRoaXMudG90YWxTZWNzTGVmdCA9PT0gMCkge1xyXG4gICAgICAgICAgICAgICAgdGhpcy5zdG9wKCk7XHJcbiAgICAgICAgICAgICAgICB0aGlzLmRpc3BhdGNoRXZlbnQoXCJmaW5pc2hcIik7XHJcbiAgICAgICAgICAgIH0gZWxzZSB7XHJcbiAgICAgICAgICAgICAgICB0aGlzLmRpc3BhdGNoRXZlbnQoXCJ1cGRhdGVcIik7XHJcbiAgICAgICAgICAgIH1cclxuICAgICAgICB9LFxyXG4gICAgICAgIGRpc3BhdGNoRXZlbnQ6IGZ1bmN0aW9uKGV2ZW50TmFtZSkge1xyXG4gICAgICAgICAgICB2YXIgZXZlbnQgPSAkLkV2ZW50KGV2ZW50TmFtZSArIFwiLmNvdW50ZG93blwiKTtcclxuICAgICAgICAgICAgZXZlbnQuZmluYWxEYXRlID0gdGhpcy5maW5hbERhdGU7XHJcbiAgICAgICAgICAgIGV2ZW50LmVsYXBzZWQgPSB0aGlzLmVsYXBzZWQ7XHJcbiAgICAgICAgICAgIGV2ZW50Lm9mZnNldCA9ICQuZXh0ZW5kKHt9LCB0aGlzLm9mZnNldCk7XHJcbiAgICAgICAgICAgIGV2ZW50LnN0cmZ0aW1lID0gc3RyZnRpbWUodGhpcy5vZmZzZXQpO1xyXG4gICAgICAgICAgICB0aGlzLiRlbC50cmlnZ2VyKGV2ZW50KTtcclxuICAgICAgICB9XHJcbiAgICB9KTtcclxuICAgICQuZm4uY291bnRkb3duID0gZnVuY3Rpb24oKSB7XHJcbiAgICAgICAgdmFyIGFyZ3VtZW50c0FycmF5ID0gQXJyYXkucHJvdG90eXBlLnNsaWNlLmNhbGwoYXJndW1lbnRzLCAwKTtcclxuICAgICAgICByZXR1cm4gdGhpcy5lYWNoKGZ1bmN0aW9uKCkge1xyXG4gICAgICAgICAgICB2YXIgaW5zdGFuY2VOdW1iZXIgPSAkKHRoaXMpLmRhdGEoXCJjb3VudGRvd24taW5zdGFuY2VcIik7XHJcbiAgICAgICAgICAgIGlmIChpbnN0YW5jZU51bWJlciAhPT0gdW5kZWZpbmVkKSB7XHJcbiAgICAgICAgICAgICAgICB2YXIgaW5zdGFuY2UgPSBpbnN0YW5jZXNbaW5zdGFuY2VOdW1iZXJdLCBtZXRob2QgPSBhcmd1bWVudHNBcnJheVswXTtcclxuICAgICAgICAgICAgICAgIGlmIChDb3VudGRvd24ucHJvdG90eXBlLmhhc093blByb3BlcnR5KG1ldGhvZCkpIHtcclxuICAgICAgICAgICAgICAgICAgICBpbnN0YW5jZVttZXRob2RdLmFwcGx5KGluc3RhbmNlLCBhcmd1bWVudHNBcnJheS5zbGljZSgxKSk7XHJcbiAgICAgICAgICAgICAgICB9IGVsc2UgaWYgKFN0cmluZyhtZXRob2QpLm1hdGNoKC9eWyRBLVpfXVswLTlBLVpfJF0qJC9pKSA9PT0gbnVsbCkge1xyXG4gICAgICAgICAgICAgICAgICAgIGluc3RhbmNlLnNldEZpbmFsRGF0ZS5jYWxsKGluc3RhbmNlLCBtZXRob2QpO1xyXG4gICAgICAgICAgICAgICAgICAgIGluc3RhbmNlLnN0YXJ0KCk7XHJcbiAgICAgICAgICAgICAgICB9IGVsc2Uge1xyXG4gICAgICAgICAgICAgICAgICAgICQuZXJyb3IoXCJNZXRob2QgJXMgZG9lcyBub3QgZXhpc3Qgb24galF1ZXJ5LmNvdW50ZG93blwiLnJlcGxhY2UoL1xcJXMvZ2ksIG1ldGhvZCkpO1xyXG4gICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICB9IGVsc2Uge1xyXG4gICAgICAgICAgICAgICAgbmV3IENvdW50ZG93bih0aGlzLCBhcmd1bWVudHNBcnJheVswXSwgYXJndW1lbnRzQXJyYXlbMV0pO1xyXG4gICAgICAgICAgICB9XHJcbiAgICAgICAgfSk7XHJcbiAgICB9O1xyXG59KTsiXSwic291cmNlUm9vdCI6IiJ9
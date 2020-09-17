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
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 9);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/order.js":
/*!*******************************!*\
  !*** ./resources/js/order.js ***!
  \*******************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(function () {
  registerEvent();
});

function registerEvent() {
  var id = '',
      tr_parent = '';
  $(document).on('click', '.btn_delete', function () {
    id = $(this).data('id');
    $('#id').val(id);
    $('#verification').val($(this).data('verification'));
    $('#receivername').val($(this).data('receivername'));
    tr_parent = $(this).parents('tr');
  });
  $(document).on('click', '#click_delete', function () {
    callAjaxDelete(id, tr_parent);
  });
  var valueState = "",
      idState = "";
  $(document).on('click', '#state', function () {
    idState = $(this).val();
    var state = "";

    if ($(this).is(':checked')) {
      state = 1;
    } else {
      state = 0;
    }

    valueState = state;
    $('#confirmChangeState').modal();
  });
  $(document).on('click', '#changeState', function () {
    callAjaxChangeState(idState, valueState);
  });
}

function callAjaxDelete(id, tr_parent) {
  $.ajax({
    type: "POST",
    url: urlDelete,
    data: {
      'id': id
    }
  }).done(function (response) {
    window.scrollTo(0, 0);

    if (response.result) {
      location.reload();
      $('#alertDelete').show();
      $('#alertDelete').addClass('alert-success');
      $('#alertDelete span').html('Delete order success!');
      setTimeout(function () {
        $('#alertDelete').hide();
      }, 3000);
      $(tr_parent).remove();
    } else {
      $('#alertDelete').show();
      $('#alertDelete').addClass('alert-danger');
      $('#alertDelete span').html('Delete order fail!');
      setTimeout(function () {
        $('#alertDelete').hide();
      }, 3000);
    }
  });
}

function callAjaxChangeState(idState, valueState, temp) {
  $.ajax({
    type: "POST",
    url: urlChangeState,
    data: {
      'id': idState,
      'state': valueState
    }
  }).done(function (response) {
    window.scrollTo(0, 0);
    location.reload();

    if (response.result) {
      $('#alertConfirm').show();
      $('#alertConfirm').addClass('alert-success');
      $('#alertConfirm span').html('Change state success!');
      setTimeout(function () {
        $('#alertConfirm').hide();
      }, 3000);
    } else {
      $('#alertConfirm').show();
      $('#alertConfirm').addClass('alert-danger');
      $('#alertConfirm span').html('Change state fail!');
      setTimeout(function () {
        $('#alertConfirm').hide();
      }, 3000);
    }
  });
}

/***/ }),

/***/ 9:
/*!*************************************!*\
  !*** multi ./resources/js/order.js ***!
  \*************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/khanh1996/Code_Laravel/source_doan/webbanlinhkien/resources/js/order.js */"./resources/js/order.js");


/***/ })

/******/ });
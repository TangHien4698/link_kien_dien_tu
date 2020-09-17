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
/******/ 	return __webpack_require__(__webpack_require__.s = 8);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/category.js":
/*!**********************************!*\
  !*** ./resources/js/category.js ***!
  \**********************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(document).ready(function () {
  $(document).on('click', '#click_create', function () {
    var name = $('#cName').val();
    var cat_rewrite = $('#cRewrite').val();

    if (name == "") {
      $('.errorCreate').show();
      setTimeout(function () {
        $('.errorCreate').hide();
      }, 3000);
    } else {
      //close modal
      $('#createCategory').modal('hide');
      $.ajax({
        type: "POST",
        url: urlCreate,
        data: {
          'name': name,
          'cat_rewrite': cat_rewrite
        }
      }).done(function (response) {
        window.scrollTo(0, 0);

        if (response.result) {
          location.reload(); //tra ve new data

          var dataRowCategory = response.dataRowCategory;
          $('table tbody').append(dataRowCategory); //thong bao

          $('#notifi').addClass('alert-success');
          $('#notifi span').html('Create success!');
          $('.notifi').show();
          setTimeout(function () {
            $('.notifi').hide();
          }, 3000);
        } else {
          $('#notifi').addClass('alert-danger');
          $('#notifi span').html('Create fail!');
          $('.notifi').show();
          setTimeout(function () {
            $('.notifi').hide();
          }, 3000);
        }
      });
    }
  });
  var idEdit = "";
  $(document).on('click', '#btn_edit', function () {
    idEdit = $(this).data('id');
    $('#eId').val(idEdit);
    $('#eName').val($(this).data('name'));
    $('#eRewrite').val($(this).data('rewrite'));
  });
  $(document).on('click', '#click_update', function () {
    var name = $('#eName').val();
    var rewrite = $('#eRewrite').val();

    if (name == "" || rewrite == "") {
      $('.errorCreate').show();
      setTimeout(function () {
        $('.errorCreate').hide();
      }, 3000);
    } else {
      $.ajax({
        type: "POST",
        url: urlUpdate,
        data: {
          'id': idEdit,
          'name': name,
          'rewrite': rewrite
        }
      }).done(function (response) {
        window.scrollTo(0, 0);

        if (response.result) {
          location.reload(); //thong bao

          $('#notifi').addClass('alert-success');
          $('#notifi span').html('Edit success!');
          $('.notifi').show();
          setTimeout(function () {
            $('.notifi').hide();
          }, 3000);
        } else {
          $('#notifi').addClass('alert-danger');
          $('#notifi span').html('Edit fail!');
          $('.notifi').show();
          setTimeout(function () {
            $('.notifi').hide();
          }, 3000);
        }
      });
    }
  });
  var idDelete = "",
      currentName = "";
  $(document).on('click', '#btn_delete', function () {
    idDelete = $(this).data('id');
    $('#dId').val(idDelete);
    $('#dName').val($(this).data('name'));
    $('#dName').attr('disabled', true);
    tr_parent = $(this).parents('tr');
  });
  $('#click_delete').on('click', function () {
    $.ajax({
      type: "POST",
      url: urlDelete,
      data: {
        'id': idDelete
      }
    }).done(function (response) {
      window.scrollTo(0, 0);
      location.reload();

      if (response.result) {
        tr_parent.remove();
        $('#notifi').addClass('alert-success');
        $('#notifi span').html('Delete success!');
        $('.notifi').show();
        setTimeout(function () {
          $('.notifi').hide();
        }, 3000);
      } else {
        $('#notifi').addClass('alert-danger');
        $('#notifi span').html('Delete fail!');
        $('.notifi').show();
        setTimeout(function () {
          $('.notifi').hide();
        }, 3000);
      }
    });
  });
});

/***/ }),

/***/ 8:
/*!****************************************!*\
  !*** multi ./resources/js/category.js ***!
  \****************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/khanh1996/Code_Laravel/source_doan/webbanlinhkien/resources/js/category.js */"./resources/js/category.js");


/***/ })

/******/ });
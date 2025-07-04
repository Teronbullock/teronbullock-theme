/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/assets/js/block-variations.js":
/*!*******************************************!*\
  !*** ./src/assets/js/block-variations.js ***!
  \*******************************************/
/***/ (() => {

eval("wp.domReady(function () {\n  // create a block object\n  const tbBlockVariation = [\n    {\n      name: 'core/group',\n      value: {\n        name: 'group-section',\n        title: 'Section',\n        description: 'A group of blocks that can be used as a section.',\n        attributes: {\n          tagName: 'section',\n          className: 'section-group',\n          style: {\n            spacing: {\n              padding: {\n                top: '6.75rem',\n                bottom: '6.75rem',\n              },\n            },\n          },\n        },\n      },\n    },\n    {\n      name: 'core/group',\n      value: {\n        name: 'group-backdrop-shadow',\n        title: 'Group w/ Backdrop Shadow',\n        description: 'A group of blocks with a backdrop shadow.',\n        attributes: {\n          tagName: 'div',\n          className: 'has-backdrop-shadow',\n        },\n      },\n    },\n    {\n      name: 'core/columns',\n      value: {\n        name: 'col-mobile-wrap',\n        title: 'Columns With Mobile Wrap',\n        description: 'Columns with mobile wrap.',\n        innerBlocks: [\n          ['core/column'],\n          ['core/column'],\n          ['core/column'],\n          ['core/column'],\n          ['core/column'],\n        ],\n        attributes: {\n          tagName: 'div',\n          className: 'wp-block-columns--tb-mobile-wrap',\n          style: {\n            spacing: {\n              margin: {\n                bottom: '3.5rem',\n              },\n            },\n          },\n        },\n      },\n    },\n    {\n      name: 'tb-theme/query-card',\n      value: {\n        name: 'tb-theme/query-card-img',\n        title: 'TB: Query Card with Image',\n        description: 'TB Query card with image.',\n        innerBlocks: [\n          [\n            'core/post-featured-image',\n            {\n              aspectRatio: '16/9',\n              scale: 'fill',\n              style: {\n                spacing: {\n                  margin: { bottom: '1rem' },\n                },\n                border: { radius: '8px' },\n              },\n            },\n          ],\n          [\n            'core/post-title',\n            {\n              style: {\n                spacing: {\n                  margin: { bottom: '1rem' },\n                },\n                elements: {\n                  link: {\n                    color: { text: 'var:preset|color|black' },\n                  },\n                },\n              },\n              textColor: 'black',\n              fontSize: 'medium',\n            },\n          ],\n          ['tb-theme/category-display-block'],\n        ],\n      },\n    },\n  ];\n\n  // loop through the tb block variation array\n  tbBlockVariation.forEach(block => {\n    // register the block variation\n    wp.blocks.registerBlockVariation(block.name, block.value);\n  });\n});\n\n\n//# sourceURL=webpack://teronbullock/./src/assets/js/block-variations.js?");

/***/ }),

/***/ "./src/assets/js/header-script.js":
/*!****************************************!*\
  !*** ./src/assets/js/header-script.js ***!
  \****************************************/
/***/ (() => {

eval("(function ($) {\n  $(function () {\n    // Get the navbar\n    const header = $('[data-js=\"header\"]');\n    const body = $('body');\n\n    // Get the offset position of the navbar\n    if (\n      $(body).hasClass('home') ||\n      $(body).hasClass('page-template-wp-custom-template-portfolio-pathways')\n    ) {\n      // scroll listener\n      $(window).on('scroll', function (e) {\n        // if scroll is greater than 70px\n        if (window.scrollY >= 70 && window.innerWidth > 769) {\n          // remove class from header\n          $(header).removeClass('top');\n        } else {\n          $(header).addClass('top');\n        }\n      });\n    } else {\n      header.remove('top');\n    }\n  });\n})(jQuery);\n\n\n//# sourceURL=webpack://teronbullock/./src/assets/js/header-script.js?");

/***/ }),

/***/ "./src/assets/js/main.js":
/*!*******************************!*\
  !*** ./src/assets/js/main.js ***!
  \*******************************/
/***/ (() => {

eval("document.addEventListener('DOMContentLoaded', function() {\n\n  const projectNavBtnAll = document.querySelector('#project-nav--all');\n  const projectNavBtnWP = document.querySelector('#project-nav--wp');\n  const projectNavBtnJS = document.querySelector('#project-nav--js');\n  const body = document.querySelector('body'); \n  const bodyClasses = body.classList;\n\n\n  if ( bodyClasses.contains( 'tax-project_category' ) && bodyClasses.contains( 'term-javascript' ) ) {\n    projectNavBtnJS.classList.add( 'active' );\n  } else if (bodyClasses.contains( 'tax-project_category' ) && bodyClasses.contains( 'term-wordpress' ) ) {\n    projectNavBtnWP.classList.add( 'active' );\n  } else if ( bodyClasses.contains( 'post-type-archive-project' ) ) {\n    projectNavBtnAll.classList.add( 'active' ); \n  }\n\n});\n\n\n//# sourceURL=webpack://teronbullock/./src/assets/js/main.js?");

/***/ }),

/***/ "./src/assets/js/project-loop-script.js":
/*!**********************************************!*\
  !*** ./src/assets/js/project-loop-script.js ***!
  \**********************************************/
/***/ (() => {

eval("(function($) {\n  $(function() {\n    let postCard = $('.tb-post-card'); \n\n\n    class ProjectLoop {\n      constructor(el) {\n        this.el = el;\n        this.init();\n\n        console.log('ProjectLoop class initialized', el);\n      }\n\n      init() {\n      }\n    }\n\n\n\n    $(postCard).each(function(){\n      new ProjectLoop(this);\n    });\n\n  }); \n})(jQuery); \n\n//# sourceURL=webpack://teronbullock/./src/assets/js/project-loop-script.js?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	__webpack_modules__["./src/assets/js/main.js"]();
/******/ 	__webpack_modules__["./src/assets/js/block-variations.js"]();
/******/ 	__webpack_modules__["./src/assets/js/header-script.js"]();
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./src/assets/js/project-loop-script.js"]();
/******/ 	
/******/ })()
;
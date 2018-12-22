require("../less/style.less");

import $ from 'jquery';
window.jQuery = $;

import {
    jarallax,
    jarallaxElement,
    jarallaxVideo
} from 'jarallax';


require("flexslider");
require("masonry-layout");


var jQueryBridget = require('jquery-bridget');
var Masonry = require('masonry-layout');
// make Masonry a jQuery plugin
jQueryBridget('masonry', Masonry, $ );

var key = pageData && pageData.key ? pageData.key: "";
console.log("key:" + key);

switch (key) {
    case 'list':
        require("./list.js").init();
        break;
    default:
}
    

//console.log("testsss");
$(document).ready(function(){
    $('.flexslider').flexslider({
        animation: "slide"
    });

    // $('.banner.jarallax').jarallax({
    //     speed: 0.5,
    //     imgWidth: 1366,
    //     imgHeight: 768
    // });
    jarallax(document.querySelectorAll('.banner.jarallax'), {
        speed: 0.5,
        imgWidth: 1366,
        imgHeight: 768
    });
});


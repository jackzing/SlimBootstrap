// import $ from 'jquery';
var $ = require('jquery');

var init = function () {
    $(document).ready(function(){
        $('.grid-container').masonry({
          // options...
          itemSelector: '.grid-item',
          // columnWidth: 150
        });

        $(".detail__tab-title").click(function(){
            $(".detail__tab-title").attr("data-tab-status", "closed");
            $(this).attr("data-tab-status", "open");
            $(".tab-container").hide();
            var panel = "." + $(this).attr("data-tab-key");
            $(panel).show();
        });
    });
}

module.exports = {
   'init' : init
};

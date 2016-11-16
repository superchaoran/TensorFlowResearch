$(window).on("load",function() {
    "use strict";

    $('body').removeClass('rtl');

    if ($('.top-modern').length) {
        var $this = $('.top-modern ul.icons-pack > li:last-child'),
            color = $this.find('a').css('border-left-color'),
            new_color = color.replace(/rgb/i, "rgba");

        new_color = new_color.replace(/\)/i, ',0.3)');
        $this.css('border-right', '1px solid ' + new_color);
    }

});
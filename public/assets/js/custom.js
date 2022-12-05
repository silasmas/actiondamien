/**
 * Custom javascript for the "Action Damien" website
 * 
 * @author Xanders Samoth
 * @see https://www.linkedin.com/in/xanders-samoth-b2770737/
 * 
 */

$(function () {
    /* MULTILINE TEXT TRUNCATION */
    $('.paragraph-ellipsis').each(function () {
        $(this).find('.paragraph').ellipsis({
            lines: 3,             // force ellipsis after a certain number of lines. Default is 'auto'
            ellipClass: 'ellip',  // class used for ellipsis wrapper and to namespace ellip line
            responsive: true      // set to true if you want ellipsis to update on window resize. Default is false
        });

        var _this = $(this).find('.paragraph').get(0);

        $(this).find('.roll-block a').on('click', function () {
            $(_this).ellipsis({ellipClass: '_ellip'});
            $(this).html('');

            return false;
        });

        $(this).find('.paragraph2').ellipsis({
            lines: 2,             // force ellipsis after a certain number of lines. Default is 'auto'
            ellipClass: 'ellip',  // class used for ellipsis wrapper and to namespace ellip line
            responsive: true      // set to true if you want ellipsis to update on window resize. Default is false
        });

        var _this2 = $(this).find('.paragraph2').get(0);

        $(this).find('.roll-block a').on('click', function () {
            $(_this2).ellipsis({ellipClass: '_ellip'});
            $(this).html('');

            return false;
        });

        $(this).find('.paragraph3').ellipsis({
            lines: 5,             // force ellipsis after a certain number of lines. Default is 'auto'
            ellipClass: 'ellip',  // class used for ellipsis wrapper and to namespace ellip line
            responsive: true      // set to true if you want ellipsis to update on window resize. Default is false
        });

        var _this3 = $(this).find('.paragraph3').get(0);

        $(this).find('.roll-block a').on('click', function () {
            $(_this3).ellipsis({ellipClass: '_ellip'});
            $(this).html('');

            return false;
        });
    });

    $('.counter').each(function () {
        $(this).prop('Counter', 0).animate({Counter: $(this).text()}, {
            duration: 4000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }    
        });    
    });    

    // Auto-resize textarea
    autosize($('textarea'));
});

/**
 * Custom jQuery plugins
 */
(function ($) {
    /* FORMAT NUMBERS THAT HAVE MORE THAN 3 DIGITS */
    $.fn.thousandFormatter = function (_char) {
        this.each(function () {
            var element = $(this).get(0);
            var elementText = parseInt(element.textContent);

            console.log(elementText);

            element.innerHTML = elementText.replace(/\B(?=(\d{3})+(?!\d))/g, _char);

        });

        return this;
    };
})(jQuery)
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

    /* FORMAT NUMBERS THAT HAVE MORE THAN 3 DIGITS */
    function numberFormatter(el) {
        var element = document.querySelector(el);

        if (this !== null) {
            var num = parseInt($(element).html());
            var si = [{ value: 1, symbol: '' }, { value: 1E3, symbol: 'k' }, { value: 1E6, symbol: 'M' }, { value: 1E9, symbol: 'G' }, { value: 1E12, symbol: 'T' }, { value: 1E15, symbol: 'P' }, { value: 1E18, symbol: 'E' }];
            var rx = /\.0+$|(\.[0-9]*[1-9])0+$/;
            var i;

            for (i = si.length - 1; i > 0; i--) {
                if (num >= si[i].value) {
                    break;
                }
            }

            $(this).html((num / si[i].value).toFixed(1).replace(rx, '$1') + si[i].symbol);
        }
    }

    /* FORMAT THOUSAND ASPECT */
    function thousandFormatter(el) {
        var element = document.querySelector(el);

        if (navigator.language == 'fr') {
            return element.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ' ');

        } else {
            return element.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
        }
    }

    $('.counter').each(function () {
        $(this).prop('Counter', 0).animate({Counter: $(this).text()}, {
            duration: 4000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }    
        });    
    });    

    // Format aspect of number thounds
    thousandFormatter('.counter');
    // Auto-resize textarea
    autosize($('textarea'));
});
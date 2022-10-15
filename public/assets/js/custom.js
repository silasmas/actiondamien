/**
 * Custom javascript for the "Action Damien" website
 * 
 * @author Silasmas
 * @see https://silasmas.com
 * 
 */

$(function () {
    /* FORMAT NUMBERS THAT HAVE MORE THAN 3 DIGITS */
    function numberFormatter(el) {
        var element = document.querySelector(el);

        if (this !== null) {
            var num = parseInt($(element).html());
            var si = [{ value: 1, symbol: '' },
                      { value: 1E3, symbol: 'k' },
                      { value: 1E6, symbol: 'M' },
                      { value: 1E9, symbol: 'G' },
                      { value: 1E12, symbol: 'T' },
                      { value: 1E15, symbol: 'P' },
                      { value: 1E18, symbol: 'E' }];
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

    $('.counter').each(function () {
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        }, {
            duration: 4000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });

});
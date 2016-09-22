(function($) {
    'use strict';
    var isSelected = false;
    //Document ready
    $(function() {
        var numSC = $('#numSC');

        $('#specialChars').change(function() {
            isSelected = !isSelected;
            if (isSelected)
                numSC.css('visibility', 'visible');
            else
                numSC.css('visibility', 'hidden');

        });
    });
})(jQuery);

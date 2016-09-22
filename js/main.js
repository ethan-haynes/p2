(function($) {
    'use strict';
    var isSelectedSC = false;
    var isSelectedCaps = false;
    //Document ready
    $(function() {
        var numSC = $('#numSC');
        var caps = $('#caps');

        $('#specialChars').change(function() {
            isSelectedSC = changeVisibility(isSelectedSC, numSC);
        });

        $('#uppercase').change(function() {
            isSelectedCaps = changeVisibility(isSelectedCaps, caps);
        });

        var changeVisibility = function(boolean, id) {
            boolean = !boolean;
            if (boolean)
                id.css('visibility', 'visible');
            else
                id.css('visibility', 'hidden');
            return boolean;
        };
    });
})(jQuery);

$(document).ready(function() {
    try {
        $(':input:visible:first').focus();
        $('#archive-list li:even').addClass("odd");
        $('.field-group, .field-group input, .field-group select').bind('click', function(event) {
            if (event.type == 'click') {
                if ($(this).hasClass('field-group')) {
                    var fg = $(this);
                    if ($(this).children('.datefield').length == 1) {
                        // Do not select 1st input so date picker will work.
                    } else {
                        $(this).find('input, select').slice(0, 1).focus();
                    }
                } else {
                    var fg = $(this).parents('.field-group');
                    $(this).focus();
                }
                fg.not('.focused-field').addClass('focused-field').children('.field-help').slideDown('fast');
                $('.focused-field').not(fg).removeClass('focused-field').children('.field-help').slideUp('fast');
            }
            event.stopPropagation();
        });
        $('label').bind('click', function(event) {
            if (event.type == 'click') {
                var fg = $(this).next();

                if (fg.children('.datefield').length == 1) {
                    // Do not select 1st input so date picker will work.
                } else {
                    fg.find('input, select').slice(0, 1).focus();
                }
                fg.not('.focused-field').addClass('focused-field').children('.field-help').slideDown('fast');
                $('.focused-field').not(fg).removeClass('focused-field').children('.field-help').slideUp('fast');
            }
            event.stopPropagation();
        });
        // Allow select inputs to be width:auto up to 500px (because max-width doesn't work in IE7)
        $("select").each(function() {
            $(this).css("width", "auto");
            if ($(this).width() > 500) {
                $(this).css("width", "500px");
            }
        });

    } catch (e) {
        console.log(e);
    }
});
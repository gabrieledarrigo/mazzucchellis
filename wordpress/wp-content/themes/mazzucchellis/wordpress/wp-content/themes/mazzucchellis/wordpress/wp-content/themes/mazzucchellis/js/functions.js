/* 
 * Invio di Email
 */
$(document).ready(function() {
    // Home page visualization for mobile devices
    if ($(window).width() < 479 && window.location.pathname === '/') {
        $('#article-container article:not(:first)').css('display', 'none');
    }

    // Mobile browser detections.
    var isMobile = function() {
        if (navigator.userAgent.match(/Android/i) ||
                navigator.userAgent.match(/webOS/i) ||
                navigator.userAgent.match(/iPhone/i) ||
                navigator.userAgent.match(/iPad/i) ||
                navigator.userAgent.match(/iPod/i) ||
                navigator.userAgent.match(/BlackBerry/) ||
                navigator.userAgent.match(/Windows Phone/i) ||
                navigator.userAgent.match(/ZuneWP7/i)
                ) {
            return true;
        } else {
            return false;
        }
    };

    // DropDown Menu.
    if (isMobile()) {
        $('.menu-button').on('click', function(event) {
            var text = $(this).text();
            if ($(this).find('.menu-wrapper').hasClass('opened')) {
                $(this).find('.menu-wrapper').fadeOut('fast').removeClass('opened');
            } else {
                $('.menu-button .menu-wrapper').fadeOut();
                $(this).find('.menu-wrapper').fadeIn('fast').addClass('opened').off();
            }
        });
    } else {
        $('.menu-button').hover(function() {
            $(this).find('.menu-wrapper').fadeIn('fast');
        }, function() {
            $(this).find('.menu-wrapper').fadeOut('fast');
        });
    }

    // Back on Top Button.
    $('a[href="#top"]').click(function() {
        $("html, body").animate({
            scrollTop: 0
        }, "slow");
        return false;
    });

    // Social Button.
    $('.share-this').hover(function() {
        $(this).find('.social-button-small').fadeIn();
    }, function() {
        $(this).find('.social-button-small').fadeOut();
    });

    // Form Submit.
    $("#frmContatti").submit(function() {
        var name = $('#inptNome').val();
        var email = $('#inptMail').val();
        var subject = $('#inptSoggetto').val();
        var text = $('#txtMsg').val();
        var dataString = 'inptNome=' + name + '&inptMail=' + email + '&inptSoggetto=' + subject + '&txtMsg=' + text;

        $.ajax({
            type: "POST",
            url: "http://mazzucchellis.com/wordpress/wp-content/themes/mazzucchellis/mail.php",
            data: dataString,
            success: function() {
                $('#frmContatti').html("<div id='message'></div>");
                $('#message').html("<h2>Richiesta inviata!</h2>")
                        .append("<p>Ti contatteremo al più presto.</p>")
                        .hide()
                        .fadeIn(1500, function() {
                    $('#message')
                            .append("<p>Mazzucchellis</p>");
                });
            }
        });
        return false;
    });
});

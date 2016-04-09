$(document).ready(function() {
    try {
        var domains = ['hotmail.co.uk', 'yahoo.co.uk', 'yahoo.com.tw', 'yahoo.com.au', 'yahoo.com.mx', 'gmail.com', 'hotmail.com', 'yahoo.com', 'aol.com', 'comcast.net', 'msn.com', 'seznam.cz', 'sbcglobal.net', 'live.com', 'bellsouth.net', 'hotmail.fr', 'verizon.net', 'mail.ru', 'btinternet.com', 'cox.net', 'yahoo.com.br', 'bigpond.com', 'att.net', 'yahoo.fr', 'mac.com', 'ymail.com', 'googlemail.com', 'earthlink.net', 'xtra.co.nz', 'me.com', 'yahoo.gr', 'walla.com', 'yahoo.es', 'charter.net', 'shaw.ca', 'live.nl', 'yahoo.ca', 'orange.fr', 'optonline.net', 'gmx.de', 'wanadoo.fr', 'optusnet.com.au', 'rogers.com', 'web.de', 'ntlworld.com', 'juno.com', 'yahoo.com.sg', 'rocketmail.com', 'yandex.ru', 'yahoo.co.in', 'centrum.cz', 'live.co.uk', 'sympatico.ca', 'libero.it', 'walla.co.il', 'bigpond.net.au', 'yahoo.com.hk', 'ig.com.br', 'live.com.au', 'free.fr', 'sky.com', 'uol.com.br', 'abv.bg', 'live.fr', 'terra.com.br', 'hotmail.it', 'tiscali.co.uk', 'rediffmail.com', 'aim.com', 'blueyonder.co.uk', 'telus.net', 'bol.com.br', 'hotmail.es', 'email.cz', 'windowslive.com', 'talktalk.net', 'home.nl', 't-online.de', 'yahoo.de', 'telenet.be', '163.com', 'embarqmail.com', 'windstream.net', 'roadrunner.com', 'bluewin.ch', 'skynet.be', 'laposte.net', 'yahoo.it', 'qq.com', 'live.dk', 'planet.nl', 'hetnet.nl', 'gmx.net', 'mindspring.com', 'rambler.ru', 'iinet.net.au', 'eircom.net', 'yahoo.com.ar', 'wp.pl', 'mail.com'];
        var tdomains = [];
        $('#MERGE0').on('blur', function() {
            $(this).mailcheck({
                domains: domains,
                topLevelDomains: tdomains,
                suggested: function(element, suggestion) {
                    var msg = 'Hmm, did you mean ' + suggestion.full + '?';
                    if ($('#MERGE0_mailcheck').length > 0) {
                        $('#MERGE0_mailcheck').html(msg);
                    } else {
                        element.after('<div id="MERGE0_mailcheck" class="errorText">' + msg + '</div>');
                    }
                },
                empty: function(element) {
                    if ($('#MERGE0_mailcheck').length > 0) {
                        $('#MERGE0_mailcheck').remove();
                    }
                    return;
                }
            });
        });
    } catch (e) {
        console.log(e);
    }
});
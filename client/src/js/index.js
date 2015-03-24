module.exports = (function () {
    'use strict';

    var namespace = require('./namespace');

    // // @echo ENV

    namespace('site', {
        onLoad: function () {
            $l.dom.setEvent(
                $l(['.xscroll-link']),
                'click',
                function (ev, elem) {
                    var targetElement = $l(elem.getAttribute('href'));
                    var targetPosition = $l.css.top(targetElement);

                    $l.anim.set({
                        object:   document.body,
                        property: 'scrollTop',
                        from:     null,
                        to:       targetPosition - 50,
                        time:     800,
                        unit:     '',
                        reset:    false
                    });

                    return false;
                }
            );
        }
    });

    $l.ready(site.onLoad);

}).call(this);

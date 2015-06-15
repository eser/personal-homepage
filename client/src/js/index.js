module.exports = (function () {
    'use strict';

    var namespace = require('./namespace');

    // // @echo ENV

    namespace('site', {
        onLoad: function () {

            $l.ui.scrollView.set($l(['.xsmalltag']));

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

            var pItems = $l(['.p-item']);
            $l.css.setTransition(pItems, ['background-color 2s ease']);

            $l.dom.setEvent(
                $l(['#p-filter a']),
                'click',
                function (ev, elem) {
                    $l.css.removeClass($l('#p-filter a.btn-act'), 'btn-act');
                    $l.css.addClass(elem, 'btn-act');

                    var p_filter = elem.getAttribute('rel');

                    $l.each(pItems, function (i, pItem) {
                        var p_property = pItem.getAttribute('rel');

                        if (p_property == p_filter && p_filter != 'all') {
                            $l.css.setProperty(pItem, { background: '#F0F0F0' });
                        } else if (p_filter != 'all') {
                            $l.css.setProperty(pItem, { background: 'none' });
                        } else {
                            $l.css.setProperty(pItem, { background: 'none' });
                        }
                    });

                    return false;
                }
            );

            var showmore = $l('.showmore');
            if (showmore !== null) {
                $l.dom.setEvent(
                    $l('.showmore'),
                    'click',
                    function (ev, elem) {
                        var target = $l.dom.selectByClass(elem.getAttribute('rel'));
                        $l.css.removeClass(target, 'hide');
                        // $l.css.addClass(target, 'in');
                        $l.css.show(target);

                        $l.dom.remove(elem.parentElement);

                        $l.ui.scrollView.reveal();
                    }
                );
            }

            var sharp = $l.id('sharp'),
                tick = 0,
                states = ['#_', '#'];
            if (sharp !== null) {
                $l.timers.set({
                    timeout: 500,
                    reset: true,
                    ontick: function () {
                        sharp.textContent = states[tick++ % states.length];
                    }
                });
            }
        }
    });

    $l.ready(site.onLoad);

}).call(this);

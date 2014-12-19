$l.ready(function() {
    $l.dom.setEvent(
        $l(['.xscroll-link']),
        'click',
        function(ev, elem) {
            var targetElement = $l(elem.getAttribute('href'));
            var targetPosition = $l.css.top(targetElement);

            $l.anim.set({
                object:   document.body,
                property: 'scrollTop',
                from:     null,
                to:       targetPosition,
                time:     800,
                unit:     '',
                reset:    false
            });

            return false;
        }
    );
});

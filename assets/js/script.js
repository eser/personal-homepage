$l.ready(function() {
    var navHeader = $l('#nav-header');
    var lastHeaderState = 0;

    $l.dom.setEvent(
        window,
        'scroll',
        function() {
            var scrollTop = ((document.documentElement && document.documentElement.scrollTop) || document.body.scrollTop);

            if (scrollTop > 350) {
                if (lastHeaderState === 0) {
                    $l.css.addClass(document.body, 'floating');
                    $l.css.addClass(navHeader, 'navbar-fixed-top');
                    $l.css.removeClass(navHeader, 'navbar-static-top');
                    lastHeaderState = 1;
                }
            } else if (lastHeaderState === 1) {
                $l.css.removeClass(document.body, 'floating');
                $l.css.removeClass(navHeader, 'navbar-fixed-top');
                $l.css.addClass(navHeader, 'navbar-static-top');
                lastHeaderState = 0;
            }
        }
    );

    $l.dom.setEvent(
        $l(['.xscroll-link']),
        'click',
        function(ev, elem) {
            var targetElement = $l(elem.getAttribute('href'));

            var targetPosition = targetElement.getBoundingClientRect().top +
                ((document.documentElement && document.documentElement.scrollTop) || document.body.scrollTop);

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

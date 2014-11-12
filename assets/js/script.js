$l.ready(function() {
    var navHeader = $l('#nav-header');
    var lastHeaderState = 0;
    var scrollRootElement = document.body;

    $l.dom.setEvent(
        window,
        'scroll',
        function() {
            if (scrollRootElement.scrollTop > 500) {
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

            var targetPosition = targetElement.getBoundingClientRect().top + scrollRootElement.scrollTop;
            // if (targetPosition > 500 && lastHeaderState === 0) {
            //     targetPosition -= 51;
            // }

            $l.anim.set({
                object:   scrollRootElement,
                property: 'scrollTop',
                to:       targetPosition,
                time:     1200
            });

            return false;
        }
    );
});

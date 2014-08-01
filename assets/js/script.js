$l.ready(function() {
    var bodyJqueryWrapper = $(document.body);
    var navHeader = $l('#nav-header');
    var lastHeaderState = 0;

    $l.dom.setEvent(
        window,
        'scroll',
        function() {
            if (document.body.scrollTop > 500) {
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

            var targetPosition = targetElement.getBoundingClientRect().top + document.body.scrollTop;
            if (targetPosition > 500 && lastHeaderState === 0) {
                targetPosition -= 51;
            }

            bodyJqueryWrapper.animate(
                { scrollTop: targetPosition },
                500
            );

            return false;
        }
    );
});

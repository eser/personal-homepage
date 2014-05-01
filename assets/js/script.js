$(function() {
    $('#search-form').submit(function() {
        alert('It\'s currently disabled. Please try search on google instead.');
        return false;
    });
    
    $('.xscroll-link').click(function() {
        var that = $(this);
        
        $('html, body').animate(
            { scrollTop: $(this.hash).offset().top },
            500
        );
        
        // return false;
    });

    $('#p-filter a').click(function() {
        var that = $(this);
        $('#p-filter a.btn-act').removeClass('btn-act');
        that.addClass('btn-act');

        var p_filter = that.attr('rel');

        $('.p-item').each(function() {
            var that2 = $(this);

            var p_property = that2.attr('rel');
            if (p_property == p_filter && p_filter != 'all') {
                that2.fadeTo(300, 1);
                $('img', this).fadeTo(300, 1);
                that2.removeClass('item-off');
            } else if (p_filter != 'all') {
                that2.fadeTo(300, 0.3);
                $('img', this).fadeTo(300, 0.2);
                that2.addClass('item-off');
            } else {
                that2.fadeTo(300, 1);
                $('img', this).fadeTo(300, 1);
                that2.removeClass('item-off');
            }
        });
        
        return false;
    });

    $('.showmore').click(function() {
        var that = $(this);
        
        $('.' + that.attr('rel')).fadeIn();
        that.parent().remove();
    });
});
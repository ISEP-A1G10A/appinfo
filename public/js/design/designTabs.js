$(window).scroll(function () {
    //get the window scrollTop on scroll
    var st = $(window).scrollTop();
    /* we use each() to iterate on every section and
      check if the offset position is in relative condition to the
      scrollTop value
    */
    $('.home-section').each(function (index) {
        var offsetTop = $(this).offset().top,
            h = $(this).height() - 100;
        //this condition satisfies that this section is currently on the viewport
        if (st >= offsetTop - 100 && st < offsetTop + h) {
            /*find the nav <a> that has the same index to this section
            currently on the viewport and
            show its border-bottom by setting its width.
            */
            $('.home-sub-nav-item-menu a').eq(index).css({
                'color': '#ffb300', 'border-bottom': 'solid #ffb300 2px'

            });
        } else {
            //hide the border-bottom
            $('.home-sub-nav-item-menu a').eq(index).css({
                'color': 'white', 'border-bottom': 'solid #1D383E 2px'
            });
        }
    });
}).trigger('scroll');

$('home-sub-nav-item-menu a').click(function () {
    /* click has no index argument compared to each() function
    so we have to get it with index() */
    var index = $(this).index(),
        $target = $('.home-section').eq(index); // find the target section
    //animate scrolling to the target section
    $('html, body').stop(true, true).animate({
        scrollTop: $target.offset().top
    }, 'slow');
});
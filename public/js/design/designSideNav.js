$(".design-sideNav-link, .design-sideNav-sublink").hover(
    function () {
        $(this).removeClass('out').addClass('in');
    },
    function () {
        $(this).removeClass('in').addClass('out');
    }
);
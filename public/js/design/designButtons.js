$(".design-btn-flat").hover(
    function () {
        $(this).removeClass('out').addClass('in');
    },
    function () {
        $(this).removeClass('in').addClass('out');
    }
);

$(".design-btn-raised").hover(
    function () {
        $(this).removeClass('out').addClass('in');
    },
    function () {
        $(this).removeClass('in').addClass('out');
    }
);
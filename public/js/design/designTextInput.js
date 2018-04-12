$(".design-textInput-classic").focusin(
    function () {
        $(this).removeClass('not-focus').addClass('focus');
    }
).focusout(
    function () {
        $(this).removeClass('focus').addClass('not-focus');
    }
);
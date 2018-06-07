function sendRecovery() {
    if(!$(".forgotPass-btn").hasClass('forgotPass-btn-disabled')) {
        var myString =
            '<div class="design-form forgotPass-form">' +
            '<div class="forgotPass-title">Entrez le code reçu</div>' +
            '<input type="text" class="forgotPass-input">' +
            '<div class="forgotPass-btns">' +
            '<a class="design-btn-raised forgotPass-btn" onclick=""> ENVOYER </a>' +
            '</div>' +
            '</div>';
        $(".forgotPass-btn").css('background-color', 'gray').removeClass('design-btn-raised').addClass('forgotPass-btn-disabled');
        $(".forgotPass").append(myString);
    }
}
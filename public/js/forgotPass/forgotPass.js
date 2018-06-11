function sendRecovery() {
    var btn = $(".forgotPass-btn");
    if(!btn.hasClass('forgotPass-btn-disabled')) {
        var form =
            '<div class="design-form forgotPass-form">' +
            '<div class="forgotPass-title">Entrez le code reçu</div>' +
            '<input type="text" class="forgotPass-input">' +
            '<div class="forgotPass-btns">' +
            '<a class="design-btn-raised forgotPass-btn" onclick=""> ENVOYER </a>' +
            '</div>' +
            '</div>';
        btn.css('background-color', 'gray').removeClass('design-btn-raised').addClass('forgotPass-btn-disabled');
        $(".forgotPass").append(form);
        var email = $(".forgotPass-input").val();
        $.ajax({type: "POST", url: "appinfo/public/forgot-password/", data: {email: email, subject: "Password reset"}})

    }
}
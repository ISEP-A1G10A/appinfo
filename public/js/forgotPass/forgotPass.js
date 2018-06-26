function sendRecovery() {
    const btn = $(".forgotPass-btn");
    if(!btn.hasClass('forgotPass-btn-disabled')) {
        const form =
            '<div class="design-form forgotPass-form">' +
            '<div class="forgotPass-title">Entrez le code reçu</div>' +
            '<input type="text" class="forgotPass-input">' +
            '<div class="forgotPass-btns">' +
            '<a class="design-btn-raised forgotPass-btn" onclick=""> ENVOYER </a>' +
            '</div>' +
            '</div>';
        btn.css('background-color', 'gray').removeClass('design-btn-raised').addClass('forgotPass-btn-disabled');
        $(".forgotPass").append(form);
        const email = $(".forgotPass-input").val();
        /*const reset_url = ;*/
        const message = "Click to reset password: "/* + reset_url*/;
            $.ajax({
                type: "POST",
                url: "appinfo/public/forgot-password/",
                data: {email: email, subject: "Password reset", message: message, action: "sendRecovery"}
            });

    }
}
<div class="signIn">
    <div class="design-form signIn-form">
        <div class="design-form-title signIn-form-title">Connexion</div>
        <form action="<?php echo new URL("form/connection/") ?>" method="post" class="design-form-inputs">
            <input name="email" class="design-textInput-classic" type="text" placeholder="Email"><br>
            <input name="password" class="design-textInput-classic" type="password" placeholder="Password"><br>
            <div class="design-form-btns">
                <input class="design-btn-raised signIn-form-btn" type="submit" value="CONNEXION">
            </div>
        </form>
        <hr class="design-form-hr">
        <div class="design-form-links">
            <a class="design-btn-flat design-form-link signIn-form-forget-password" href="<?php echo new URL("forgot-password") ?>">Mot de passe oublié ?</a>
        </div>
    </div>
</div>

<div class="signIn">
    <div class="design-form signIn-form">
        <div class="design-form-title signIn-form-title"><?php echo ucfirst($this->s[$this->page]["title"]) ?></div>
        <?php $this->displayErrors() ?>
        <form action="<?php echo new URL("sign-in/") ?>" method="post" class="design-form-inputs">
            <input name="form" value="connection" type="hidden">
            <input name="email" class="design-textInput-classic<?php $this->gotErrorEmail() ?>" type="text"
                   placeholder="<?php echo $this->getPlaceholderEmail() ?>"
                   value="<?php echo $this->getFormValue("connection", "email") ?>"><br>
            <input name="password" class="design-textInput-classic<?php $this->gotErrorPassword() ?>" type="password"
                   placeholder="<?php echo $this->getPlaceholderPassword() ?>"
                   value="<?php echo $this->getFormValue("connection", "password") ?>"><br>
            <div class="design-form-btns">
                <input class="design-btn-raised signIn-form-btn" type="submit"
                       value="<?php echo strtoupper($this->s[$this->page]["title"]) ?>">
            </div>
        </form>
        <hr class="design-form-hr">
        <div class="design-form-links">
            <a class="design-btn-flat design-form-link signIn-form-forget-password"
               href="<?php echo new URL("forgot-password/") ?>"><?php echo $this->s[$this->page]["forget_password"] ?>
                ?</a>
        </div>
    </div>
</div>
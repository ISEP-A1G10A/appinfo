<div class="forget-password">
    <div class="design-form signIn-form">
        <div class="design-form-title signIn-form-title"><?php echo ucfirst($this->s[$this->page]["title"]) ?></div>
        <?php $this->displayErrors() ?>
        <form action="<?php echo new URL("forgot-password/") ?>" method="post" class="design-form-inputs">
            <input name="form" value="Forgot" type="hidden">
            <input name="email" class="design-textInput-classic<?php $this->gotErrorEmail() ?>" type="text"
                   placeholder="<?php echo $this->getPlaceholderEmail() ?>"
                   value="<?php echo $this->getFormValue("forgot", "email") ?>"><br>
            <div class="design-form-btns">
                <input class="design-btn-raised signIn-form-btn" type="submit"
                       value="<?php echo strtoupper($this->s[$this->page]["submit"]) ?>">
            </div>
        </form>
        <hr class="design-form-hr">
    </div>
</div>
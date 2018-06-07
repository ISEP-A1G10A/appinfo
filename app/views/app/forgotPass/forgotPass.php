<div class="forgotPage">
    <div class="forgotPass">
        <div class="design-form forgotPass-form">
            <div class="forgotPass-title"><?php echo ucfirst($this->s[$this->page]["form_title"]) ?></div>
            <div class="forgotPass-form-text"><?php echo ucfirst($this->s[$this->page]["form_text"]) ?></div>
            <input type="text" class="forgotPass-input">
            <div class="forgotPass-btns">
                <a class="design-btn-raised forgotPass-btn"
                   onclick="sendRecovery()"><?php echo strtoupper($this->s[$this->page]["send_password"]) ?>
                </a>
            </div>
        </div>
    </div>
</div>
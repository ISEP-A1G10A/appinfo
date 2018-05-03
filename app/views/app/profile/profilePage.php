<div class="profile">
    <div class="profile-form">
        <div class="profile-form-title"><?php echo ucfirst($this->s[$this->page]["title"]) ?></div>
        <?php $this->displayErrors() ?>
        <form action="<?php echo new URL("profile/") ?>" method="post" class="profile-inputs">
            <input name="form" value="connection" type="hidden">

            <div class="profile-form-text"><?php echo ucfirst($this->s[$this->page]["first_name"]) ?></div>
            <input name="first-name" class="design-textInput-classic<?php $this->gotErrorEmail() ?>" type="text"
                   placeholder="<?php echo ucfirst($this->s[$this->page]["first_name"]) ?>"
                   value="<?php echo $this->getFormValue("connection", "email") ?>"><br>

            <div class="profile-form-text"><?php echo ucfirst($this->s[$this->page]["last_name"]) ?></div>
            <input name="last-name" class="design-textInput-classic<?php $this->gotErrorEmail() ?>" type="text"
                   placeholder="<?php echo ucfirst($this->s[$this->page]["last_name"]) ?>"
                   value="<?php echo $this->getFormValue("connection", "email") ?>"><br>

            <div class="profile-form-text"><?php echo ucfirst($this->s[$this->page]["email"]) ?></div>
            <input name="email" class="design-textInput-classic<?php $this->gotErrorEmail() ?>" type="text"
                   placeholder="<?php echo $this->getPlaceholderEmail() ?>"
                   value="<?php echo $this->getFormValue("connection", "email") ?>"><br>

            <div class="profile-form-text"><?php echo ucfirst($this->s[$this->page]["phone"]) ?></div>
            <input name="phone" class="design-textInput-classic<?php $this->gotErrorEmail() ?>" type="text"
                   placeholder="<?php echo ucfirst($this->s[$this->page]["phone"]) ?>"
                   value="<?php echo $this->getFormValue("connection", "email") ?>"><br>

            <div class="profile-form-text"><?php echo ucfirst($this->s[$this->page]["password"]) ?></div>
            <input name="password" class="design-textInput-classic<?php $this->gotErrorPassword() ?>" type="password"
                   placeholder="<?php echo $this->getPlaceholderPassword() ?>"
                   value="<?php echo $this->getFormValue("connection", "password") ?>"><br>
            <div class="design-form-btns">
                <input class="design-btn-raised signIn-form-btn" type="submit"
                       value="<?php echo strtoupper($this->s[$this->page]["submit"]) ?>">
            </div>
        </form>
    </div>
</div>
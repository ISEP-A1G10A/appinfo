<div class="profile">
    <div class="profile-forms">
        <div class="design-form profile-form-data">
            <form action="<?php echo new URL("profile/") ?>" method="post" class="profile-inputs">
                <input name="form" value="profile" type="hidden">

                <div class="profile-form-title"><?php echo strtoupper($this->s[$this->page]["data_title"]) ?></div>
                <?php $this->displayErrors() ?>
                <div class="profile-form-text"><?php echo ucfirst($this->s[$this->page]["first_name"]) ?></div>
                <input name="first-name" class="profile-form-input" type="text"
                       placeholder="<?php echo ucfirst($this->s[$this->page]["first_name"]) ?>"
                       value="<?php echo $_SESSION["user"]["first_name"] ?>"><br>

                <div class="profile-form-text"><?php echo ucfirst($this->s[$this->page]["last_name"]) ?></div>
                <input name="last-name" class="profile-form-input" type="text"
                       placeholder="<?php echo ucfirst($this->s[$this->page]["last_name"]) ?>"
                       value="<?php echo $_SESSION["user"]["last_name"] ?>"><br>

                <div class="profile-form-text"><?php echo ucfirst($this->s[$this->page]["email"]) ?></div>
                <input name="email" class="profile-form-input" type="email"
                       placeholder="<?php echo $this->getPlaceholderEmail() ?>"
                       value="<?php echo $_SESSION["user"]["email"] ?>"><br>

                <div class="profile-form-text"><?php echo ucfirst($this->s[$this->page]["phone"]) ?></div>
                <input name="phone" class="profile-form-input" type="text"
                       placeholder="<?php echo ucfirst($this->s[$this->page]["phone"]) ?>"
                       value="<?php echo $_SESSION["user"]["phone"] ?>"><br>

                <div class="profile-form-btns design-form-btns">
                    <input class="design-btn-raised profile-form-reset-btn" type="reset"
                           value="<?php echo strtoupper($this->s[$this->page]["reset"]) ?>">

                    <input class="design-btn-raised profile-form-submit-btn" type="submit"
                           value="<?php echo strtoupper($this->s[$this->page]["submit"]) ?>">

                </div>
            </form>
        </div>

        <div class="design-form profile-form-password">
            <form action="" method="post" class="profile-inputs">


                <div class="profile-form-title"><?php echo strtoupper($this->s[$this->page]["password_title"]) ?></div>
                <?php $this->displayErrors() ?>
                <div class="profile-form-text"><?php echo ucfirst($this->s[$this->page]["old_password"]) ?></div>
                <input name="password" class="profile-form-input" type="password"
                       placeholder=""
                       value=""><br>

                <div class="profile-form-text"><?php echo ucfirst($this->s[$this->page]["password"]) ?></div>
                <input name="password" class="profile-form-input" type="password"
                       placeholder=""
                       value=""><br>

                <div class="profile-form-text"><?php echo ucfirst($this->s[$this->page]["repeat_password"]) ?></div>
                <input name="password" class="profile-form-input" type="password"
                       placeholder=""
                       value=""><br>

                <div class="profile-form-btns design-form-btns">
                    <input class="design-btn-raised profile-form-reset-btn" type="reset"
                           value="<?php echo strtoupper($this->s[$this->page]["reset"]) ?>">

                    <input class="design-btn-raised profile-form-submit-btn" type="submit"
                           value="<?php echo strtoupper($this->s[$this->page]["submit"]) ?>">
                </div>

            </form>
        </div>
    </div>
</div>
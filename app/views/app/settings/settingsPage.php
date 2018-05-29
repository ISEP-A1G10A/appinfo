<div class="settings">
    <div class="settings-forms">
        <div class="design-form settings-form-data">
            <form action="<?php echo new URL("houses/" . $this->id . "/settings/") ?>" method="post" class="settings-inputs">
                <input name="form" value="settings" type="hidden">

                <div class="settings-form-title"><?php echo strtoupper($this->s[$this->page]["house"]) ?></div>
                <?php $this->displayErrors("settings") ?>
                <input name="house-label" class="settings-form-input" type="text"
                       value="<?php echo $this->homes[$this->id - 1][0]?>">

                <input name="house-address-line-1" class="settings-form-input" type="text"
                       value="<?php echo $this->homes[$this->id - 1][1]?>">

                <input name="house-address-line-2" class="settings-form-input" type="text"
                       value="<?php echo $this->homes[$this->id - 1][2]?>">

                <input name="house-address-zip-code" class="settings-form-input" type="text"
                       value="<?php echo $this->homes[$this->id - 1][3]?>">

                <input name="house-address-city" class="settings-form-input" type="text"
                       value="<?php echo $this->homes[$this->id - 1][4]?>">

                <input name="house-address-country" class="settings-form-input" type="text"
                       value="<?php echo $this->homes[$this->id - 1][5]?>">

                <input name="house-surface" class="settings-form-input" type="text"
                       value="<?php echo $this->homes[$this->id - 1][6]?>">

                <div class="settings-form-title"><?php echo strtoupper($this->s[$this->page]["rooms"]) ?></div>

                <?php foreach ($this->homes[$this->id - 1][7] as $room) { ?>
                    <div>
                        <input name="<?php echo $room[0] ?>" class="settings-form-input"
                               value="<?php echo ucfirst($room[1]) ?>">
                    </div>
                <?php } ?>

                <input name="new-room" class="settings-form-input"
                       placeholder="<?php echo ucfirst($this->s[$this->page]["new"]) ?>">

                <!--TODO add human-->

                <div class="settings-form-title"><?php echo strtoupper($this->s[$this->page]["people"]) ?></div>

                <input name="new-human" class="settings-form-input"
                       placeholder=<?php echo ucfirst($this->s[$this->page]["new"]) ?>>

                <div class="settings-form-btns design-form-btns">
                    <input class="design-btn-raised settings-form-reset-btn" type="reset"
                           value="<?php echo strtoupper($this->s[$this->page]["reset"]) ?>">

                    <input class="design-btn-raised settings-form-submit-btn" type="submit"
                           value="<?php echo strtoupper($this->s[$this->page]["submit"]) ?>">
                </div>
            </form>
        </div>
    </div>
</div>
<div class="room-form">

    <!--CHANGE SENSOR FORM-->

    <div class="design-form form-inputs">
        <div class="form-label">
            <?php
            echo $room[1];
            ?>
        </div>
        <form action="<?php echo new URL("houses/" . $this->id . "/settings/") ?>" method="post">
            <input name="form" value="sensor" type="hidden">
            <?php
            foreach ($room[2] as $sensor){
                require "formInput.php";
            }
            if(!sizeof($room[2]) == 0){
                require "settingsButtons.php";
            }
            ?>
        </form>
    </div>

    <!--NEW SENSOR FORM-->

    <div class="design-form form-new-input">
        <form action="<?php echo new URL("settings/") ?>" method="post">
            <input name="form" value="new-sensor" type="hidden">
            <input name="new" placeholder="Nouveau capteur">

            <div class="profile-form-btns design-form-btns">

                <input class="design-btn-raised profile-form-submit-btn" type="submit"
                       value="<?php echo strtoupper($this->s[$this->page]["submit"]) ?>">

            </div>
        </form>
    </div>

</div>
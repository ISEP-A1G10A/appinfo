<div class="settings">
    <div class="settings-forms">
        <div class="design-form settings-form-data">
            <form action="<?php echo new URL("houses/" . $this->id . "/settings/") ?>" method="post"
                  class="settings-inputs">
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

                <div class="surface-div">
                    <div class="settings-text">Surface:</div>

                    <input name="house-surface" class="settings-form-input-surface" type="text"
                           value="<?php echo $this->homes[$this->id - 1][6]?>">
                    <div class="settings-text">m².</div>
                </div>

                <div class="settings-form-btns design-form-btns">
                    <input class="design-btn-raised settings-form-reset-btn" type="reset"
                           value="<?php echo strtoupper($this->s[$this->page]["reset"]) ?>">

                    <input class="design-btn-raised settings-form-submit-btn" type="submit"
                           value="<?php echo strtoupper($this->s[$this->page]["submit"]) ?>">
                </div>
            </form>

            <div class="settings-bottom-inputs">
                <div class="settings-form-title"><?php echo strtoupper($this->s[$this->page]["rooms"]) ?></div>


                <?php foreach ($this->homes[$this->id - 1][7] as $room) { ?>
                    <div class="<?php echo $room[0] ?> settings-room">
                        <input id="<?php echo $room[0]?>" class="settings-room-input" value="<?php echo ucfirst($room[1]) ?>"
                               onkeypress="return editRoom(event, <?php echo $room[0] ?>, <?php echo $this->id ?>);">
                        <img class="delete-button" onclick="deleteRoom(<?php echo $room[0] ?>, <?php echo $this->id ?>)"
                             src="<?php echo new URL("img/icons/delete.png") ?>">
                    </div>
                <?php } ?>
                <div class="new-div"></div>
                <input name="new-room" class="settings-new-room-input"
                       onkeypress="return addRoom(event, <?php echo $this->id ?>);"
                       placeholder="<?php echo ucfirst($this->s[$this->page]["new_room"]) ?>">

                <div class="settings-form-title"><?php echo strtoupper($this->s[$this->page]["people"]) ?></div>

                <?php foreach ($this->users[$this->id - 1] as $user) { ?>
                    <div class="<?php echo $user[0][2]?> users-names">
                        <input type="text" id="first-<?php echo $user[0][2]?>" class="settings-first-name-input" value="<?php echo $user[0][0] ?>"
                               onkeypress="return editFirstName(event, <?php echo $this->id ?>, <?php echo $user[0][2]?>)">
                        <input type="text" id="last-<?php echo $user[0][2]?>" class="settings-last-name-input" value="<?php echo $user[0][1] ?>"
                               onkeypress="return editLastName(event, <?php echo $this->id ?>, <?php echo $user[0][2]?>);">
                        <img src="<?php echo new URL("img/icons/delete.png") ?>" class="delete-button"
                             onclick="deleteUser(<?php echo $user[0][2]?>, <?php echo $this->id ?>)">
                    </div>


                <?php } ?>

                <div class="users-names">
                    <input type="text" class="settings-new-name-input" id="new-first"
                           placeholder="<?php echo ucfirst($this->s[$this->page]["new_first"]) ?>">

                    <input type="text" class="settings-new-name-input" id="new-last"
                           placeholder="<?php echo ucfirst($this->s[$this->page]["new_last"]) ?>"
                           onkeypress="return addUser(event, <?php echo $this->id?>)">
                </div>
            </div>
        </div>
    </div>
</div>
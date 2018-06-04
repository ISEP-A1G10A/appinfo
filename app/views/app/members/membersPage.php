<div class="part-add-member">
    <form action="<?php echo new URL("members/") ?>" method="post" class="form">
        <input name="form" value="members" type="hidden">
        <?php $this->displayErrors("infos") ?>

        <input name="first_name" class="add-member-form-input" type="text"
               placeholder="<?php echo ucfirst($this->s[$this->page]["first_name"]) ?>"
               value="">

        <input name="last_name" class="add-member-form-input" type="text"
               placeholder="<?php echo ucfirst($this->s[$this->page]["last_name"]) ?>"
               value="">


        <select name="type" class="part-add-member-type type-option">
            <option class="type-option2"
                    value="1"><?php echo ucfirst($this->s[$this->page]["1"]) ?></option>
            <option class="type-option2"
                    value="2"><?php echo ucfirst($this->s[$this->page]["2"]) ?></option>
            <option class="type-option2"
                    value="3"><?php echo ucfirst($this->s[$this->page]["3"]) ?></option>
        </select>

        <input name="email" class="add-member-form-input" <?php $this->gotErrorEmail() ?> type="text"
               placeholder="<?php echo ucfirst($this->s[$this->page]["email"]) ?>"
               value=""><br>

        <input name="phone" class="add-member-form-input" type="text"
               placeholder="<?php echo ucfirst($this->s[$this->page]["phone"]) ?>"
               value="">

        <input name="password" class="add-member-form-input" type="text"
               placeholder="<?php echo ucfirst($this->s[$this->page]["password"]) ?>"
               value="">

        <input class="design-btn-raised navConnected-web-disconnect-btn add-member-btn" type="submit"
               value="<?php echo strtoupper($this->s[$this->page]["add"]) ?>">
    </form>
</div>


<div class="part-members-table">
    <?php
    $colums = [
        "id",
        "first_name",
        "last_name",
        "type",
        "email",
        "phone"
    ]
    ?>
    <table class="members-table">
        <tbody class="members-tbody">
        <tr class="members-tr">
            <?php
            foreach ($colums as $colum) {
                require "colum.php";
            }
            ?>
        </tr>
        <?php
        foreach ($this->members as $member) {
            require "row.php";
        }
        ?>
        </tbody>
    </table>
</div>

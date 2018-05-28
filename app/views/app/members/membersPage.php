<div class="part-add-member">
    <form action="<?php echo new URL("members/") ?>" method="post" class="form">
        <input name="form" value="members" type="hidden">
        <?php $this->displayErrors("infos")?>
        <input name="first-name" class="add-member-form-input" type="text"
               placeholder="<?php echo ucfirst($this->s[$this->page]["first_name"]) ?>"
               value="<?php echo $this->getFormValue("members", "first-name") ?>">

        <input name="first-name" class="add-member-form-input" type="text"
               placeholder="<?php echo ucfirst($this->s[$this->page]["last_name"]) ?>"
               value="<?php echo $this->getFormValue("members", "last-name") ?>">


        <select class="part-add-member-type type-option" >
            <option class="type-option2"
                    value="<?php echo $this->getFormValue("members", "type") ?>"><?php echo ucfirst($this->s[$this->page]["user"]) ?></option>
            <option class="type-option2"
                    value="<?php echo $this->getFormValue("members", "type") ?>"><?php echo ucfirst($this->s[$this->page]["adminsys"]) ?></option>
            <option class="type-option2"
                    value="<?php echo $this->getFormValue("members", "type") ?>"><?php echo ucfirst($this->s[$this->page]["adminsav"]) ?></option>
        </select>

        <input name="first-name" class="add-member-form-input"<?php $this->gotErrorEmail() ?> type="text"
               placeholder="<?php echo ucfirst($this->s[$this->page]["email"]) ?>"
               value="<?php echo $this->getFormValue("members", "email") ?>"><br>

        <input name="first-name" class="add-member-form-input" type="text"
               placeholder="<?php echo ucfirst($this->s[$this->page]["phone"]) ?>"
               value="<?php echo $this->getFormValue("members", "phone") ?>">

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

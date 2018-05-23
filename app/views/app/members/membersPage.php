<div class="part-add-member">

    <input name="first-name" class="add-member-form-input" type="text"
           placeholder="<?php echo ucfirst($this->s[$this->page]["first_name"]) ?>"
           value="">
    <input name="first-name" class="add-member-form-input" type="text"
           placeholder="<?php echo ucfirst($this->s[$this->page]["last_name"]) ?>"
           value="">
    <form method="post" class="part-add-member-type">
        <select class="type-option" id="">
            <option class="type-option2" value=""><?php echo ucfirst($this->s[$this->page]["user"]) ?></option>
            <option class="type-option2" value=""><?php echo ucfirst($this->s[$this->page]["adminsys"]) ?></option>
            <option class="type-option2" value=""><?php echo ucfirst($this->s[$this->page]["adminsav"]) ?></option>
        </select>
    </form>
    <input name="first-name" class="add-member-form-input" type="text"
           placeholder="<?php echo ucfirst($this->s[$this->page]["email"]) ?>"
           value="">
    <input name="first-name" class="add-member-form-input" type="text"
           placeholder="<?php echo ucfirst($this->s[$this->page]["phone"]) ?>"
           value="">
    <input class="design-btn-raised navConnected-web-disconnect-btn add-member-btn" type="submit"
           value="<?php echo strtoupper($this->s[$this->page]["add"]) ?>">
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

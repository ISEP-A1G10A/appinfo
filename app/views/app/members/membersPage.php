<div class="part_add_member">

    <input name="first-name" class="profile-form-input" type="text"
           placeholder="<?php echo ucfirst($this->s[$this->page]["first_name"]) ?>"
           value="">
    <input name="first-name" class="profile-form-input" type="text"
           placeholder="<?php echo ucfirst($this->s[$this->page]["last_name"]) ?>"
           value="">
    <form method="post" action="" class="part_add_member_type">
        <label class="">Type :</label>
        <select id="le_nom">
            <option value="ta_valeur">Utilisateur</option>
            <option value="ta_valeur">2</option>
            <option value="ta_valeur">3</option>
        </select>
    </form>
    <input name="first-name" class="profile-form-input" type="text"
           placeholder="<?php echo ucfirst($this->s[$this->page]["email"]) ?>"
           value="">
    <input name="first-name" class="profile-form-input" type="text"
           placeholder="<?php echo ucfirst($this->s[$this->page]["phone"]) ?>"
           value="">
    <input class="design-btn-raised navConnected-web-disconnect-btn add_member_btn" type="submit"
           value="<?php echo strtoupper($this->s[$this->page]["add"]) ?>">
</div>


<div class="part_members_table">
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
<div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br><br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br><br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br><br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br><br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br><br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br><br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br><br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br><br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

</div>
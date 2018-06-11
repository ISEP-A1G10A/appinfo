<div class="part-add-house">
    <form action="<?php echo new URL("houses/") ?>" method="post" class="form">
        <input name="form" value="houses" type="hidden">
        <?php $this->displayErrors("infos") ?>

        <input name="main_user" class="add-house-form-input id-form" type="number"
               placeholder="<?php echo ucfirst($this->s[$this->page]["id"]) ?>"
               value="">

        <select name="type" class="part-add-house-type type-option">
            <option class="type-option2"
                    value="1"><?php echo ucfirst($this->s[$this->page]["house"]) ?></option>
            <option class="type-option2"
                    value="2"><?php echo ucfirst($this->s[$this->page]["flat"]) ?></option>
        </select>

        <input name="surface" class="add-house-form-input surface-form" type="text"
               placeholder="<?php echo ucfirst($this->s[$this->page]["surface"]) ?>"
               value="">


        <input name="address_line_1" class="add-house-form-input" type="text"
               placeholder="<?php echo ucfirst($this->s[$this->page]["address_line_1"]) ?>"
               value="">

        <input name="address_line_2" class="add-house-form-input" type="text"
               placeholder="<?php echo ucfirst($this->s[$this->page]["address_line_2"]) ?>"
               value="">


        <input name="address_zip_code" class="add-house-form-input zip-form" type="text"
               placeholder="<?php echo ucfirst($this->s[$this->page]["address_zip_code"]) ?>"
               value="">

        <input name="address_city" class="add-house-form-input city-form" type="text"
               placeholder="<?php echo ucfirst($this->s[$this->page]["address_city"]) ?>"
               value="">
        <input name="address_country" class="add-house-form-input country-form" type="text"
               placeholder="<?php echo ucfirst($this->s[$this->page]["address_country"]) ?>"
               value="">

        <input name="label" class="add-house-form-input" type="text"
               placeholder="<?php echo ucfirst($this->s[$this->page]["last_name"]) ?>"
               value="">


        <input class="design-btn-raised navConnected-web-disconnect-btn add-house-btn" type="submit"
               value="<?php echo strtoupper($this->s[$this->page]["add"]) ?>">


    </form>
</div>


<div class="part-houses-table">
    <?php
    $colums = [
        "id",
        "last_name",
        "first_name",
        "home_type",
        "surface",
        "address_line_1",
        "address_line_2",
        "address_zip_code",
        "address_city",
        "address_country",
        "label",
    ]
    ?>
    <table class="houses-table">
        <tbody class="houses-tbody">
        <tr class="houses-tr">
            <?php
            foreach ($colums as $colum) {
                require "colum.php";
            }
            ?>
        </tr>
        <?php
        foreach ($this->houses as $house) {
            require "row.php";
        }
        ?>
        </tbody>
    </table>
</div>

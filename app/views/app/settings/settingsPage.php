<div class="settings">
    <div class="settings-forms">
        <?php
        foreach ($_SESSION["user"]["houses"][$this->id - 1][2] as $room){
            require "roomForm.php";
        }
        ?>
    </div>
</div>
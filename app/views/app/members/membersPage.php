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

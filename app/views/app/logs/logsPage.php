<?php
$colums = [
    "date",
    "hour",
    "type",
    "session-id",
    "ip-address",
    "value",
]
?>
<table class="logs-table">
    <tbody class="logs-tbody">
    <tr class="logs-tr">
        <?php
        foreach ($colums as $colum) {
            require "colum.php";
        }
        ?>
    </tr>
    <?php
    foreach ($this->getLogs() as $row) {
        require "row.php";
    }
    ?>
    </tbody>
</table>

<tr class="members-tr members-row">
    <?php
    foreach ($colums as $colum) {
        echo '<td class="members-td members-colum-' . $colum . '">' . $house[$colum] . '</td>';
    }
    ?>
</tr>
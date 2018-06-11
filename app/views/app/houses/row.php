<tr class="houses-tr houses-row">
    <?php
    foreach ($colums as $colum) {
        echo '<td class="houses-td houses-colum-' . $colum . '">' . $house[$colum] . '</td>';
    }
    ?>
</tr>
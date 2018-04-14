<tr class="logs-tr logs-row">
    <?php
    foreach ($colums as $colum) {
        echo '<td class="logs-td logs-colum-' . $colum . '">' . $row[$colum] . '</td>';
    }
    ?>
</tr>
<th class="logs-th logs-colum-<?php echo $colum?>">
    <div class="logs-title">
        <?php echo ucfirst($this->s[$this->page][$colum]) ?>
    </div>
    <div class="logs-search">
        <input class="logs-search-input" id="input_<?php echo $colum ?>" type="text" placeholder="<?php echo ucfirst($this->s[$this->page]["search"]) ?> ...">
    </div>
</th>
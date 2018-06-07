<th class="houses-th houses-colum-<?php echo $colum?>">
    <div class="houses-title">
        <?php echo ucfirst($this->s[$this->page][$colum]) ?>
    </div>
    <div class="houses-search">
        <input class="houses-search-input" id="input_<?php echo $colum ?>" type="text" placeholder="<?php echo ucfirst($this->s[$this->page]["search"]) ?> ...">
    </div>
</th>
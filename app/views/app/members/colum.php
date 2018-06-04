<th class="members-th members-colum-<?php echo $colum?>">
<div class="members-title">
    <?php echo ucfirst($this->s[$this->page][$colum]) ?>
</div>
<div class="members-search">
    <input class="members-search-input" id="input_<?php echo $colum ?>" type="text" placeholder="<?php echo ucfirst($this->s[$this->page]["search"]) ?> ...">
</div>
</th>
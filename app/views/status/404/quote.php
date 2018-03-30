<?php
$quote = $this->getQuote();
?>

<div class="quote">
    <span class="quote-text">« <?= $quote[0] ?> »</span><br>
    <span class="quote-movie"><?= $quote[1] ?></span>
    <span class="quote-hyphen">-</span>
    <span class="quote-author"><?= $quote[2] ?></span>
</div>

<div class="design-mobileNav-section-title"><?php echo strtoupper($house[1]) ?></div>
<a class="design-mobileNav-link<?php echo Regex::urlMatchPattern("houses/" . $house[0] . "/sensors") ? " current" : "" ?>"
   href="<?php echo new URL("houses/" . $house[0] . "/sensors/") ?>">
    <img class="design-mobileNav-icon" src="<?php echo new URL("img/icons/sensors.png") ?>"/>
    <span>
    <?php echo ucfirst($this->s["navs"]["connected"]["sensors"]) ?>
    </span>
</a>
<a class="design-mobileNav-link<?php echo Regex::urlMatchPattern("houses/" . $house[0] . "/settings") ? " current" : "" ?>"
   href="<?php echo new URL("houses/" . $house[0] . "/settings/") ?>">
    <img class="design-mobileNav-icon" src="<?php echo new URL("img/icons/settings.png") ?>"/>
    <span>
    <?php echo ucfirst($this->s["navs"]["connected"]["settings"]) ?>
    </span>
</a>
<hr class="design-mobileNav-hr">

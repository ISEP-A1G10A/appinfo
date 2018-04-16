<div class="design-sideNav-section-title"><?php echo strtoupper($house[1]) ?></div>
<!--<a class="design-sideNav-link">-->
<!--    <img class="design-sideNav-icon" src="--><?php //echo new URL("img/icons/home.png") ?><!--"/>-->
<!--    <span>-->
<!--        --><?php //echo $house[1] ?>
<!--    </span>-->
<!--</a>-->
<a class="design-sideNav-link<?php echo Regex::urlMatchPattern("houses/" . $house[0] . "/sensors") ? " current" : "" ?>"
   href="<?php echo new URL("houses/" . $house[0] . "/sensors/") ?>">
    <img class="design-sideNav-icon" src="<?php echo new URL("img/icons/sensors.png") ?>"/>
    <span>
    <?php echo ucfirst($this->s["navs"]["connected"]["sensors"]) ?>
    </span>
</a>
<a class="design-sideNav-link<?php echo Regex::urlMatchPattern("houses/" . $house[0] . "/settings") ? " current" : "" ?>"
   href="<?php echo new URL("houses/" . $house[0] . "/settings/") ?>">
    <img class="design-sideNav-icon" src="<?php echo new URL("img/icons/settings.png") ?>"/>
    <span>
    <?php echo ucfirst($this->s["navs"]["connected"]["settings"]) ?>
    </span>
</a>
<hr class="design-sideNav-hr">
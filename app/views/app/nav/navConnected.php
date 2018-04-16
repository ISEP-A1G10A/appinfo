<nav class="navConnected-web-nav">
    <div class="navConnected-web-top">
        <span class="navConnected-web-left">
            <a class="navConnected-web-logo-link" href="<?php echo new URL("home/") ?>">
                <img class="navConnected-web-logo" src="<?php echo new URL("img/logos/domisep_mini.png") ?>"
                     alt="logo"/>
                <span class="navConnected-web-title">LUXO</span>
            </a>
        </span>
        <span class="navConnected-web-right">
            <span class="design-btn-flat navConnected-web-lang-btn">FR</span>
            <span class="design-btn-flat navConnected-web-lang-btn">EN</span>
            <a class="design-btn-raised navConnected-web-disconnect-btn"
               href="<?php echo new URL("sign-in/") ?>"><?php echo strtoupper($this->s["navs"]["connected"]["connection"]) ?></a>
        </span>
    </div>
    <div class="design-sideNav">
        <a class="design-sideNav-link<?php echo Regex::urlMatchPattern("profile") ? " current" : "" ?>"
           href="<?php echo new URL("profile/") ?>">
            <img class="design-sideNav-icon" src="<?php echo new URL("img/icons/profile.png") ?>"/>
            <span><?php echo ucfirst($this->s["navs"]["connected"]["profile"]) ?></span>
        </a>
        <hr class="design-sideNav-hr">
        <!--<div>--> <!--class="navConnected-web-houses"-->
        <?php
        foreach ($_SESSION["user"]["houses"] as $house) {
            require "navConnectedHouse.php";
        }
        ?>
        <!--</div>-->
        <a class="design-sideNav-link<?php echo Regex::urlMatchPattern("help") ? " current" : "" ?>"
           href="<?php echo new URL("help/") ?>">
            <img class="design-sideNav-icon" src="<?php echo new URL("img/icons/help-circle.png") ?>"/>
            <span><?php echo ucfirst($this->s["navs"]["connected"]["help"]) ?></span>
        </a>
    </div>
</nav>
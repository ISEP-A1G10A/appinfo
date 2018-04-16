<nav class="navConnected-web">
    <div class="navConnected-web-top">
        <span class="navConnected-web-left">
            <a class="navConnected-web-logo-link" href="<?php echo new URL("home/") ?>">
                <img class="navConnected-web-logo" src="<?php echo new URL("img/logos/domisep_mini.png") ?>"
                     alt="logo"/>
                <span class="navConnected-web-title">LUXO</span>
            </a>
        </span>
        <span class="navConnected-web-right">
            <form action="<?php echo new URL(true) ?>" method="post">
                <input name="form" value="nav-lang" type="hidden">
                <span class="design-btn-flat navConnected-web-lang-btn">FR</span>
                <span class="design-btn-flat navConnected-web-lang-btn">EN</span>
            </form>
            <form action="<?php echo new URL("sign-in/") ?>" method="post">
                <input name="form" value="nav-deconnection" type="hidden">
                <input type="submit"
                       class="design-btn-raised navConnected-web-disconnect-btn"
                       value="<?php echo strtoupper($this->s["navs"]["connected"]["deconnection"]) ?>"/>
            </form>
        </span>
    </div>
    <div class="design-sideNav">
        <a class="design-sideNav-link<?php echo Regex::urlMatchPattern("profile") ? " current" : "" ?>"
           href="<?php echo new URL("profile/") ?>">
            <img class="design-sideNav-icon" src="<?php echo new URL("img/icons/profile.png") ?>"/>
            <span><?php echo ucfirst($this->s["navs"]["connected"]["profile"]) ?></span>
        </a>
        <hr class="design-sideNav-hr">
        <?php
        foreach ($_SESSION["user"]["houses"] as $house) {
            require "navConnectedHouse.php";
        }
        ?>
        <a class="design-sideNav-link<?php echo Regex::urlMatchPattern("help") ? " current" : "" ?>"
           href="<?php echo new URL("help/") ?>">
            <img class="design-sideNav-icon" src="<?php echo new URL("img/icons/help-circle.png") ?>"/>
            <span><?php echo ucfirst($this->s["navs"]["connected"]["help"]) ?></span>
        </a>
    </div>
</nav>
<nav class="navConnected-mobile design-mobileNav">
    <div class="design-mobileNav-top">
        <img class="design-mobileNav-top-hamburger" src="<?php echo new URL("img/icons/hamburger.png") ?>">
        <span class="design-mobileNav-top-title"><?php echo ucfirst($this->s[$this->page]["title"]) ?></span>
    </div>
    <div class="design-mobileNav-side">
        <a class="design-mobileNav-link<?php echo Regex::urlMatchPattern("home") ? " current" : "" ?>"
           href="<?php echo new URL("home/") ?>">
            <img class="design-mobileNav-icon" src="<?php echo new URL("img/icons/explore.png") ?>"/>
            <span><?php echo ucfirst($this->s["navs"]["connected"]["home"]) ?></span>
        </a>
        <a class="design-mobileNav-link<?php echo Regex::urlMatchPattern("profile") ? " current" : "" ?>"
           href="<?php echo new URL("profile/") ?>">
            <img class="design-mobileNav-icon" src="<?php echo new URL("img/icons/profile.png") ?>"/>
            <span><?php echo ucfirst($this->s["navs"]["connected"]["profile"]) ?></span>
        </a>
        <hr class="design-mobileNav-hr">
        <?php
        foreach ($_SESSION["user"]["houses"] as $house) {
            require "navConnectedMobileHouse.php";
        }
        ?>
        <a class="design-mobileNav-link<?php echo Regex::urlMatchPattern("help") ? " current" : "" ?>"
           href="<?php echo new URL("help/") ?>">
            <img class="design-mobileNav-icon" src="<?php echo new URL("img/icons/help-circle.png") ?>"/>
            <span><?php echo ucfirst($this->s["navs"]["connected"]["help"]) ?></span>
        </a>
        <div class="design-mobileNav-bottom">
        <form action="<?php echo new URL(true) ?>" method="post" class="design-mobileNav-bottom-lang">
            <input name="form" value="nav-lang" type="hidden">
            <span class="design-btn-raised design-mobileNav-lang-btn">FR</span>
            <span class="design-btn-raised design-mobileNav-lang-btn">EN</span>
        </form>
        <form action="<?php echo new URL("sign-in/") ?>" method="post">
            <input name="form" value="nav-deconnection" type="hidden">
            <button class="design-btn-raised navConnected-mobile-deconnection">
                <img class="design-mobileNav-icon" src="<?php echo new URL("img/icons/power.png") ?>"/>
                <span><?php echo ucfirst($this->s["navs"]["connected"]["deconnection"]) ?></span>
            </button>
        </form>
        </div>
    </div>
    <div class="design-mobileNav-cache">
    </div>
</nav>
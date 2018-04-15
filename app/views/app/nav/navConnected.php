<nav class="navConnected-nav">
    <div class="navConnected-top">
        <span class="navConnected-left">
            <a class="navConnected-logo-link" href="<?php echo new URL("home/") ?>">
                <img class="navConnected-logo" src="<?php echo new URL("img/logos/domisep_mini.png") ?>" alt="logo"/>
                <span class="navConnected-title">LUXO</span>
            </a>
        </span>
        <span class="navConnected-right">
            <span class="design-btn-flat navConnected-lang-btn">FR</span>
            <span class="design-btn-flat navConnected-lang-btn">EN</span>
            <a class="design-btn-raised navConnected-disconnect-btn" href="<?php echo new URL("sign-in/") ?>"><?php echo strtoupper($this->s["navs"]["connected"]["connection"])?></a>
        </span>
    </div>
    <div class="navConnected-side">
        <a class="navConnected-link design-btn-flat">
            <img class="navConnected-icon" src="<?php echo new URL("img/icons/home-circle.png") ?>"/>
            <span class="navConnected-text"><?php echo ucfirst($this->s["navs"]["connected"]["home"])?></span>
        </a>
        <div class="navConnected-houses">
            <div class="navConnected-text"><?php echo strtoupper($this->s["navs"]["connected"]["houses"])?></div>
            <?php
            foreach ($_SESSION["user"]["houses"] as $house){
                require "navConnectedHouse.php";
            }
            ?>
        </div>
        <a class="navConnected-link design-btn-flat">
            <img class="navConnected-icon" src="<?php echo new URL("img/icons/account-circle.png") ?>"/>
            <span class="navConnected-text"><?php echo ucfirst($this->s["navs"]["connected"]["profile"])?></span>
        </a>
        <a class="navConnected-link design-btn-flat">
            <img class="navConnected-icon" src="<?php echo new URL("img/icons/help-circle.png") ?>"/>
            <span class="navConnected-text"><?php echo ucfirst($this->s["navs"]["connected"]["help"])?></span>
        </a>
    </div>
</nav>
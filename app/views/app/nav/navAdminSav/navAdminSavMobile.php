<nav class="navConnected-mobile design-mobileNav">
    <div class="design-mobileNav-top">
        <img class="design-mobileNav-top-hamburger" src="<?php echo new URL("img/icons/hamburger.png") ?>">
        <span class="design-mobileNav-top-title"><?php echo ucfirst($this->s[$this->page]["title"]) ?></span>
    </div>
    <div class="design-mobileNav-side">
        <a class="design-mobileNav-link<?php echo Regex::urlMatchPattern("logs") | Regex::urlMatchPattern("home") ? " current" : "" ?>"
           href="<?php echo new URL("logs/") ?>">
            <img class="design-mobileNav-icon" src="<?php echo new URL("img/icons/profile.png") ?>"/>
            <span><?php echo ucfirst($this->s["navs"]["adminsys"]["logs"]) ?></span>
        </a>
        <a class="design-mobileNav-link<?php echo Regex::urlMatchPattern("logs-debug") ? " current" : "" ?>"
           href="<?php echo new URL("logs-debug/") ?>">
            <img class="design-mobileNav-icon" src="<?php echo new URL("img/icons/profile.png") ?>"/>
            <span><?php echo ucfirst($this->s["navs"]["adminsys"]["logs_debug"]) ?></span>
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
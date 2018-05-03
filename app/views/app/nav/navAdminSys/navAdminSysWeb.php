<nav class="navConnected-web design-topNav">
    <div class="design-topNav">
        <span class="design-topNav-left">
            <a class="design-topNav-logo-link" href="<?php echo new URL("home/") ?>">
                <img class="design-topNav-logo" src="<?php echo new URL("img/logos/domisep_mini.png") ?>"
                     alt="logo"/>
                <span class="design-topNav-title">LUXO</span>
            </a>
        </span>
        <span class="design-topNav-right">
            <form action="<?php echo new URL(true) ?>" method="post">
                <input name="form" value="nav-lang" type="hidden">
                <input name="fr" type="submit" class="design-btn-flat design-topNav-lang-btn" value="FR">
                <input name="fr" type="submit" class="design-btn-flat design-topNav-lang-btn" value="EN">
            </form>
            <form action="<?php echo new URL("sign-in/") ?>" method="post">
                <input name="form" value="nav-deconnection" type="hidden">
                <input type="submit"
                       class="design-btn-raised navConnected-web-disconnect-btn"
                       value="<?php echo strtoupper($this->s["navs"]["adminsys"]["deconnection"]) ?>"/>
            </form>
        </span>
    </div>
    <div class="design-sideNav">
        <a class="design-sideNav-link<?php echo Regex::urlMatchPattern("logs") | Regex::urlMatchPattern("home") ? " current" : "" ?>"
           href="<?php echo new URL("logs/") ?>">
            <img class="design-sideNav-icon" src="<?php echo new URL("img/icons/profile.png") ?>"/>
            <span><?php echo ucfirst($this->s["navs"]["adminsys"]["logs"]) ?></span>
        </a>
        <a class="design-sideNav-link<?php echo Regex::urlMatchPattern("logs-debug") ? " current" : "" ?>"
           href="<?php echo new URL("logs-debug/") ?>">
            <img class="design-sideNav-icon" src="<?php echo new URL("img/icons/profile.png") ?>"/>
            <span><?php echo ucfirst($this->s["navs"]["adminsys"]["logs_debug"]) ?></span>
        </a>
    </div>
</nav>
<nav class="design-topNav">
    <span class="design-topNav-left">
        <a class="design-topNav-logo-link" href="<?php echo new URL("home/") ?>">
            <img class="design-topNav-logo" src="<?php echo new URL("img/logos/domisep_mini.png") ?>" alt="logo"/>
            <span class="design-topNav-title">LUXO</span>
        </a>
    </span>
    <span class="design-topNav-right">
        <form action="<?php echo new URL(true) ?>" method="post">
            <input name="form" value="nav-lang" type="hidden">
            <input name="fr" class="design-btn-flat design-topNav-lang-btn" type="submit" value="FR">
            <input name="en" class="design-btn-flat design-topNav-lang-btn" type="submit" value="EN">
        </form>
        <a class="design-btn-raised navShowcase-connect-btn" href="<?php echo new URL("sign-in/") ?>"><?php echo strtoupper($this->s["navs"]["showcase"]["connection"])?></a>
    </span>
</nav>
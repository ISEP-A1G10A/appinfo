<nav class="navShowcase-nav">
    <span class="navShowcase-left">
        <a class="navShowcase-logo-link" href="<?php echo new URL("home/") ?>">
            <img class="navShowcase-logo" src="<?php echo new URL("img/logos/domisep_mini.png") ?>" alt="logo"/>
            <span class="navShowcase-title">LUXO</span>
        </a>
    </span>
    <span class="navShowcase-right">
        <form action="<?php echo new URL(true) ?>" method="post">
            <input name="form" value="nav-lang" type="hidden">
            <input name="fr" class="design-btn-flat navShowcase-lang-btn" type="submit" value="FR">
            <input name="en" class="design-btn-flat navShowcase-lang-btn" type="submit" value="EN">
        </form>
        <a class="design-btn-raised navShowcase-connect-btn" href="<?php echo new URL("sign-in/") ?>"><?php echo strtoupper($this->s["navs"]["showcase"]["connection"])?></a>
    </span>
</nav>
<!--<nav class="navShowcase-mobile-nav">-->
<!--    <div class="navShowcase-mobile-toggle">-->
<!--        <input type="checkbox" />-->
<!--        <span></span>-->
<!--        <span></span>-->
<!--        <span></span>-->
<!--        <ul class="navShowcase-mobile-menu">-->
<!--            <a class="navShowcase-mobile-menu-item" href="#"><li>Home</li></a>-->
<!--            <a class="navShowcase-mobile-menu-item" href="#"><li>About</li></a>-->
<!--            <a class="navShowcase-mobile-menu-item" href="#"><li>Info</li></a>-->
<!--            <a class="navShowcase-mobile-menu-item" href="#"><li>Contact</li></a>-->
<!--        </ul>-->
<!--    </div>-->
<!--</nav>-->
<nav class="navShowcase-nav">
    <span class="navShowcase-left">
        <a class="navShowcase-logo-link" href="<?php echo new URL("home/") ?>">
            <img class="navShowcase-logo" src="<?php echo new URL("img/logos/domisep_mini.png") ?>" alt="logo"/>
            <span class="navShowcase-title">LUXO</span>
        </a>
    </span>
    <span class="navShowcase-right">
        <form action="<?php echo new URL(true) ?>" method="post">
            <input name="form" value="nav-showcase" type="hidden">
            <input name="fr" class="design-btn-flat navShowcase-lang-btn" type="submit" value="FR">
            <input name="en" class="design-btn-flat navShowcase-lang-btn" type="submit" value="EN">
        </form>
        <a class="design-btn-raised navShowcase-connect-btn" href="<?php echo new URL("sign-in/") ?>">CONNEXION</a>
    </span>
</nav>
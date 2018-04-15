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
            <a class="design-btn-raised navConnected-connect-btn" href="<?php echo new URL("sign-in/") ?>">DÉCONNEXION</a>
        </span>
    </div>
    <div class="navConnected-side">
        <a class="navConnected-link">
            <img class="navConnected-icon" src="<?php echo new URL("img/icons/home-circle.png") ?>"/>
            <span class="navConnected-text">Acceuil</span>
        </a>
        <div class="navConnected-houses">
            <div class="navConnected-text">
                MAISONS
            </div>
            <a class="navConnected-link">
                <img class="navConnected-icon" src="<?php echo new URL("img/icons/home.png") ?>"/>
                <span class="navConnected-text"><?php echo $_SESSION["user"]["houses"][0][1] ?></span>
            </a>
        </div>
        <a class="navConnected-link">
            <img class="navConnected-icon" src="<?php echo new URL("img/icons/account-circle.png") ?>"/>
            <span class="navConnected-text">Profil</span>
        </a>
        <a class="navConnected-link">
            <img class="navConnected-icon" src="<?php echo new URL("img/icons/help-circle.png") ?>"/>
            <span class="navConnected-text">Aide</span>
        </a>
    </div>
</nav>
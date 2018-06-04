<div class="home-showcase-title">

    <div class="home-text">
        <div class="home-title">La Domotique vue par <strong>Domisep</strong><br></div class="home-title">
        Domisep est une entreprise qui permet un contrôle sécurisé et ergonomique de toute habitation<br>
        <a class="home-link" href="#section1"> En savoir plus</a>
    </div>
</div>
<div class="home-sub-nav">

    <div class="home-sub-nav-item-menu">
        <a href="#section1" class="design-home-btn"><span class="home-item-menu">Fonctionnalités</span></a>
    </div>
    <div class="home-sub-nav-item-menu">
        <a href="#section2" class="design-home-btn"><span class="home-item-menu">S'inscrire</span></a>
    </div>
    <div class="home-sub-nav-item-menu">
        <a href="#section3" class="design-home-btn"><span class="home-item-menu">Nos clients</span></a>
    </div>
</div>
<div id="section1" class="home-section">
    <div class="home-section1-group">
        <div class="home-section1-bloc">
            <img src="<?php echo new URL("css/home/section1/capter.jpg") ?>"/>
            <div class="home-section1-bloc-txt">
                <span class="home-section1-bloc-title"><?php echo $this->s[$this->page]["section1"]["bloc1_title"]?></span>
                <p><?php echo $this->s[$this->page]["section1"]["bloc1_description"]?></p>
            </div>
        </div>
        <div class="home-section1-bloc">
            <img src="<?php echo new URL("css/home/section1/transferer1.jpg") ?>"/>
            <div class="home-section1-bloc-txt">
                <span class="home-section1-bloc-title"><?php echo $this->s[$this->page]["section1"]["bloc2_title"]?></span>
                <p><?php echo $this->s[$this->page]["section1"]["bloc2_description"]?></p>
            </div>
        </div>
        <div class="home-section1-bloc">
            <img src="<?php echo new URL("css/home/section1/visualiser.jpg") ?>"/>
            <div class="home-section1-bloc-txt">
                <span class="home-section1-bloc-title"><?php echo $this->s[$this->page]["section1"]["bloc3_title"]?></span>
                <p><?php echo $this->s[$this->page]["section1"]["bloc3_description"]?></p>
            </div>
        </div>
    </div>
    <div class="home-section1-group">
        <div class="home-section1-bloc">
            <img src="<?php echo new URL("css/home/section1/economie.jpg") ?>"/>
            <div class="home-section1-bloc-txt">
                <span class="home-section1-bloc-title"><?php echo $this->s[$this->page]["section1"]["bloc4_title"]?></span>
                <p><?php echo $this->s[$this->page]["section1"]["bloc4_description"]?></p>
            </div>
        </div>
        <div class="home-section1-bloc">
            <img src="<?php echo new URL("css/home/section1/securité.jpg") ?>"/>
            <div class="home-section1-bloc-txt">
                <span class="home-section1-bloc-title"><?php echo $this->s[$this->page]["section1"]["bloc5_tile"]?></span>
                <p><?php echo ($this->s[$this->page]["section1"]["bloc5_description"])?></p>
            </div>
        </div>
        <div class="home-section1-bloc">
            <img src="<?php echo new URL("css/home/section1/ecologie.jpg") ?>"/>
            <div class="home-section1-bloc-txt">
                <span class="home-section1-bloc-title"><?php echo $this->s[$this->page]["section1"]["bloc6_title"]?></span>
                <p><?php echo $this->s[$this->page]["section1"]["bloc6_description"]?></p>
            </div>
        </div>
    </div>
</div>
<div id="section2" class="home-section">
    <h1 class="home-section2-title"><?php echo $this->s[$this->page]["section2"]["section2_title"]?></h1>
    <div class="home-section2-bloc">
        <h2 class="home-section2-subtitle"><?php echo $this->s[$this->page]["section2"]["section2_subtitle1"]?></h2>
        <p><?php echo $this->s[$this->page]["section2"]["section2_description1"]?></p>
    </div>
    <div class="home-section2-bloc">
        <h2 class="home-section2-subtitle"><?php echo $this->s[$this->page]["section2"]["section2_subtitle2"]?></h2>
        <p><?php echo $this->s[$this->page]["section2"]["section2_description2"]?></p>
    </div>
    <div class="home-section2-bloc">
        <h2 class="home-section2-subtitle"><?php echo $this->s[$this->page]["section2"]["section2_subtitle3"]?></h2>
        <p><?php echo $this->s[$this->page]["section2"]["section2_description3"]?></p>
    </div>
</div>
<div id="section3" class="home-section">
    <span class="home-section3-title"><?php echo $this->s[$this->page]["section3"]["section3_title"]?></span>
    <div class="home-section3-bloc">
        <img class="home-section3-image" src="<?php echo new URL("img/home/section3/alanA.png") ?>"
             alt="A client's photo" width="200">
        <p class="home-section3-people"><?php echo $this->s[$this->page]["section3"]["section3_people1"]?></p>
        <p class="home-section3-commentary"><?php echo $this->s[$this->page]["section3"]["section3_commentary1"]?></p>
    </div>
    <div class="home-section3-bloc">
        <img class="home-section3-image" src="<?php echo new URL("img/home/section3/isabelleD.png") ?>"
             alt=" A client's photo" width="200">
        <p class="home-section3-people"><?php echo $this->s[$this->page]["section3"]["section3_people2"]?></p>
        <p class="home-section3-commentary"> <?php echo $this->s[$this->page]["section3"]["section3_commentary2"]?></p>
    </div>
    <div class="home-section3-bloc">
        <img class="home-section3-image" src="<?php echo new URL("img/home/section3/danielD.png") ?>"
             alt=" A client's photo" width="200">
        <p class="home-section3-people"><?php echo $this->s[$this->page]["section3"]["section3_people3"]?></p>
        <p class="home-section3-commentary"><?php echo $this->s[$this->page]["section3"]["section3_commentary3"]?></p>
    </div>
</div>
<footer class="home-footer">
    <div class="home-footer-left">
        <div class="home-footer-left-links">
            <a href="<?php echo new URL("404") ?>"><?php echo $this->s[$this->page]["footer"]["term_of_use"] ?></a>
            <span class="home-footer-left-links-separator">|</span>
            <a href="<?php echo new URL("404") ?>"><?php echo $this->s[$this->page]["footer"]["privacy_policy"] ?></a>
        </div>
        <div class="home-footer-left-copyright">Copyright © 2018. All Rights Reserved.</div>
    </div>
    <div class="home-footer-right">
        <div class="home-footer-right-powered-by">Powered by</div>
        <div class="home-footer-right-logo">
            <img src="<?php echo new URL("img/logos/moongetters.png") ?>">
        </div>
    </div>
</footer>

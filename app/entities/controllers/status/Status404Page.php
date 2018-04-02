<?php

class Status404Page extends Page {
    public function __construct($lang) {
        $this->initializationStrings($lang);
    }

    private static $quotes = [
        ["Tu sais quand les types de 130 kilos disent certaines choses, ceux de 60 les écoutent", "Cent mille dollars au soleil", "Michel Audiard"],
        ["La chance peut pas toujours taper au même endroit, moi je lui demande que la dernière heure", "Cent mille dollars au soleil", "Michel Audiard"],
        ["Quand un chauffeur veut un congé ou de l'augmentation, il vient me trouver, je l'écoute et... je le vire !", "Cent mille dollars au soleil", "Michel Audiard"],
        ["Seulement on a dû arrêter la fabrication, y a des clients qui devenaient aveugles. Alors ça faisait des histoires ...", "Les tontons flingueurs", "Michel Audiard"],
        ["Le mexicain l'avait achetée en viager à un procureur à la retraite. Après trois mois, l'accident bête. Une affaire ...", "Les tontons flingueurs", "Michel Audiard"],
        ["Trois morts subites en moins d'une demi-heure, ah ça part sévère les droits de succession", "Les tontons flingueurs", "Michel Audiard"],
        ["Qu'est ce qu'on fait ? On se risque sur le bizarre ?", "Les tontons flingueurs", "Michel Audiard"],
        ["Quand on parle pognon, à partir d'un certain chiffre, tout le monde écoute", "Le pacha", "Michel Audiard"],
    ];

    public function render() {
        Logger::log404();
        require "../app/views/status/404/status404.php";
    }

    private function getQuote() {
        return self::$quotes[array_rand(self::$quotes)];
    }
}
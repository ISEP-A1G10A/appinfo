<?php
require "verificationFunctions.php";

class SensorsPage extends AppPage {

    private $id;

    public function __construct($lang, $id) {
        $this->initilization("sensors", $lang, "connected");

        $this->addToCssFiles([
            "sensors/sensors.css"
        ]);
        $this->id = $id;
    }


    private $homes = [];
    protected function renderContent() {
        foreach ($_SESSION["user"]["houses"] as $house){
            array_push($this->homes, HomeTable::getAllAllById($house[0])[0]);
        }
        require "../app/views/app/sensors/sensorsPage.php";
    }


}
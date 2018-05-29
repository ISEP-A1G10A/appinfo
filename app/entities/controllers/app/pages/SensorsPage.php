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


    protected function renderContent() {
        require "../app/views/app/sensors/sensorsPage.php";
    }


}
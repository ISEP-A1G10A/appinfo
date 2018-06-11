<?php
require "verificationFunctions.php";

class SensorsPage extends AppPage {

    private $id;

    public function __construct($lang, $id) {
        $this->initilization("sensors", $lang, "connected");

        if(isset ($_POST["form"]) && $_POST["form"] === "sensors"){
            if(isset($_POST["new-sensor"]) && isEmpty($_POST["new-sensor"])){
                $this->errors["sensor_label_empty"] = $this->s["formErrors"]["sensors"]["sensor_label_empty"];
            }
            if(isset($_POST["new-sensor-type"]) && isEmpty($_POST["new-sensor-type"])){
                $this->errors["sensor_type_empty"] = $this->s["formErrors"]["sensors"]["sensor_type_empty"];
            }
            if($this->errors === []){
                $roomId = RoomTable::getIdByLabel($_POST["new-sensor-room"]);
                GearTable::addGear($_POST["new-sensor-type"], $_POST["new-sensor"], $roomId);
            }

        }elseif (isset($_POST["action"]) && $_POST["action"] === "deleteSensor"){
            $this->deleteGearById($_POST["id"]);
        }
        if(isset($_POST["action"]) && $_POST["action"] === "editSensor"){
            $this->setLabelById($_POST["label"], $_POST["id"]);
        }
        if(isset($_POST["action"]) && $_POST["action"] === "toggleState"){
            $this->toggleStateById($_POST["id"]);
        }


        $this->addToCssFiles([
            "sensors/sensors.css"
        ]);
        $this->addToJsFiles([
            "sensors/sensorsPage.js"
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

    private function displayErrors($form) {
        if (isset($_POST["form"]) && $_POST["form"] === $form) {
            $errorTexts = [];
            $display = false;
            foreach ($this->errors as $name => $text) {
                $display = true;
                array_push($errorTexts, "<span class='design-form-error'><img class='design-form-error-logo' src='" . new URL("img/icons/cancel.png") . "'>" . $text . "</span>");
            }
            if ($display) {
                echo "<div class='design-form-errors profile-form-errors'>";
                foreach ($errorTexts as $errorText) {
                    echo $errorText;
                }
                echo "</div>";
            }
        }
    }

    public function deleteGearById($id){
        GearTable::deleteGearById($id);
    }

    public function setLabelById($label, $id){
        GearTable::setLabelById($label, $id);
    }

    public function toggleStateById($id){
        GearTable::toggleStateById($id);
    }


}
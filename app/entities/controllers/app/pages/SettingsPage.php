<?php
require "verificationFunctions.php";

class SettingsPage extends AppPage {

    private $id;

    public function __construct($lang, $id) {
        $this->initilization("settings", $lang, "connected");

        if (isset($_POST["form"]) && $_POST["form"] === "new-sensor") {
            if (!isset($_POST["new"]) || isEmpty($_POST["new"])) {
                $this->errors["new_sensor_empty"] = $this->s["formErrors"]["new-sensor"]["new_sensor_empty"];
            }/*
            if ($this->errors === []) {
                TODO call request for new row
                UserTable::setAllById($_SESSION["user"]["id"], $_POST["first_name"], $_POST["last_name"], $_POST["email"], $_POST["phone"]);
            }*/
        }

        if (isset($_POST["form"]) && $_POST["form"] === "sensor") {
            if (!isset($_POST["sensor"]) || isEmpty($_POST["sensor"])) {
                $this->errors["sensor_empty"] = $this->s["formErrors"]["sensor"]["sensor_empty"];
            }
            if ($this->errors === []) {
                $roomIds = RoomTable::getAllIdsByHome($id);
                foreach ($roomIds as $roomId){
                    GearTable::setAllLabelsByRoom($roomId, $_POST["sensor"]);
                }
            }
        }

        $this->addToCssFiles([
            "settings/settings.css"
        ]);
        $this->id = $id;
    }

    protected function renderContent() {
        require "../app/views/app/settings/settingsPage.php";
    }

}
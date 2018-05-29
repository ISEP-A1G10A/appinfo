<?php
require "verificationFunctions.php";

class SettingsPage extends AppPage {

    private $id;

    public function __construct($lang, $id) {
        $this->initilization("settings", $lang, "connected");

        if (isset($_POST["form"]) && $_POST["form"] === "settings") {
            if (!isset($_POST["house-label"]) || isEmpty($_POST["house-label"])) {
                $this->errors["house_label_empty"] = $this->s["formErrors"]["settings"]["house_label_empty"];
            }
            if (!isset($_POST["house-address-line-1"]) || isEmpty($_POST["house-address-line-1"])) {
                $this->errors["house_address_line_1_empty"] = $this->s["formErrors"]["settings"]["house_address_line_1_empty"];
            }
            if (!isset($_POST["house-address-zip-code"]) || isEmpty($_POST["house-address-zip-code"])) {
                $this->errors["house_address_zip_code_empty"] = $this->s["formErrors"]["settings"]["house_address_zip_code_empty"];
            }
            if (!isset($_POST["house-address-city"]) || isEmpty($_POST["house-address-city"])) {
                $this->errors["house_address_city_empty"] = $this->s["formErrors"]["settings"]["house_address_city_empty"];
            }
            if (!isset($_POST["house-address-country"]) || isEmpty($_POST["house-address-country"])) {
                $this->errors["house_address_country_empty"] = $this->s["formErrors"]["settings"]["house_address_country_empty"];
            }
            if (!isset($_POST["house-surface"]) || isEmpty($_POST["house-surface"])) {
                $this->errors["house_surface_empty"] = $this->s["formErrors"]["settings"]["house_surface_empty"];
            }
            $houses = [];
            foreach ($_SESSION["user"]["houses"] as $house){
                array_push($houses, HomeTable::getAllAllById($house[0])[0]);
            }
            foreach ($houses[$id - 1][7] as $room){
                if(!isset($_POST[$room[0]]) || isEmpty($_POST[$room[0]])){
                    $this->errors["room_empty"] = $this->s["formErrors"]["settings"]["room_empty"];
                }
            }

            if ($this->errors === []) {
                HomeTable::setAllById($id, $_POST["house-label"], $_POST["house-address-line-1"], $_POST["house-address-line-2"], $_POST["house-address-zip-code"], $_POST['house-address-city'], $_POST['house-address-country'], $_POST['house-surface']);
                foreach ($houses[$id - 1][7] as $room){
                    RoomTable::setLabelById($room[0], $_POST[$room[0]]);
                }
                if(isset($_POST["new-room"]) && !isEmpty($_POST["new-room"])){
                    RoomTable::addRoom($_POST["new-room"], $id);
                }
            }
        }

        $this->addToCssFiles([
            "settings/settings.css"
        ]);
        $this->id = $id;
    }

    private $homes = [];

    protected function renderContent() {
        foreach ($_SESSION["user"]["houses"] as $house){
            array_push($this->homes, HomeTable::getAllAllById($house[0])[0]);
        }
        require "../app/views/app/settings/settingsPage.php";
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
}
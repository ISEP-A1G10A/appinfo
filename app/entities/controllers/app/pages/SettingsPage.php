<?php
require "verificationFunctions.php";

class SettingsPage extends AppPage {

    private $id;
    private $homes = [];
    private $users = [];

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

            if ($this->errors === []) {
                HomeTable::setAllById($id, $_POST["house-label"], $_POST["house-address-line-1"], $_POST["house-address-line-2"], $_POST["house-address-zip-code"], $_POST['house-address-city'], $_POST['house-address-country'], $_POST['house-surface']);
            }
        }elseif (isset($_POST["name"]) && $_POST["name"] === "deleteRoom"){
            $this->deleteRoomById($_POST["id"]);
        }
        if(isset($_POST["name"]) && $_POST["name"] === "editRoom"){
            $this->setLabelById($_POST["id"], $_POST["label"]);
        }
        if(isset($_POST["name"]) && $_POST["name"] === "addRoom"){

            $this->addRoom($_POST["label"], $_POST["home"]);
        }
        if(isset($_POST["name"]) && $_POST["name"] === "deleteUser"){
            $this->deleteUser($_POST["user"]);
        }
        if(isset($_POST["name"]) && $_POST["name"] === "editFirstName"){
            $this->setFirstNameById($_POST["id"], $_POST["label"]);
        }
        if(isset($_POST["name"]) && $_POST["name"] === "editLastName"){
            $this->setLastNameById($_POST["id"], $_POST["label"]);
        }
        if(isset($_POST["name"]) && $_POST["name"] === "addUser"){
            $this->addUser($_POST["first_name"], $_POST["last_name"], $_POST["home"]);

        }


        $this->addToCssFiles([
            "settings/settings.css"
        ]);
        $this->addToJsFiles([
            "settings/settingsPage.js"
        ]);
        $this->id = $id;
    }



    protected function renderContent() {

        $this->setHomesAndUsers();

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

    public function setHomesAndUsers(){
        foreach ($_SESSION["user"]["houses"] as $house){
            $ids = [];
            $dump = [];
            array_push($this->homes, HomeTable::getAllAllById($house[0])[0]);
            array_push($ids, HomeTable::getMainUserById(($house[0])[0]), LinkUserHomeTable::getUserByHome($house[0]));
            array_push($dump, UserTable::getNamesById($ids[0]));
            foreach ($ids[1] as $id){
                array_push($dump, UserTable::getNamesById($id));
            }
            array_push($this->users, $dump);
        }
    }

    public function deleteRoomById($id){
        RoomTable::deleteRoomById($id);
    }

    public function setLabelById($id, $label){
        RoomTable::setLabelById($id,$label);
    }

    public function addRoom($label, $home){
        RoomTable::addRoom($label, $home);
    }

    public function deleteUser($user){
        UserTable::deleteUserById($user);
        LinkUserHomeTable::deleteLinkByUser($user);
    }

    public function setFirstNameById($id, $name){
        UserTable::setFirstNameById($id, $name);
    }

    public function setLastNameById($id, $name){
        UserTable::setLastNameById($id, $name);
    }

    public function addUser($first_name, $last_name,$home){
        UserTable::addUser($first_name, $last_name);
        $user = UserTable::getIdByNames($first_name, $last_name);
        LinkUserHomeTable::addLink($user, $home);
    }
}
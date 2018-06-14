<?php
require "../app/db/api/functions.php";

class TestApiPage extends Page {

    public function render() {
        getFrames();
        header('Content-Type: application/json');
        getData();
    }
}
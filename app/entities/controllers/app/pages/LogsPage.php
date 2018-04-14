<?php

class LogsPage extends AppPage {
    public function __construct($lang) {
        $this->initilization("logs", $lang, "adminsys");
        $this->addToCssFiles([
            "logs/logsPage.css"
        ]);
        $this->addToJsFiles([
            "logs/logsPage.js"
        ]);
    }

    protected function renderContent() {
        require "../app/views/app/logs/logsPage.php";
    }

    private function getLogs() {
        $logs = [];
        $fp = fopen("../app/logs/log.txt", "r") or die("Couldn't open File");
        while (!feof($fp)) { //Continue loading strings till the end of file
            $line = fgets($fp, 1024); // Load one complete line
            $line = explode(" ", $line);
            if (count($line) >= 5) {
                array_push($logs, [
                    "date"       => $line[0],
                    "hour"       => $line[1],
                    "type"       => trim($line[2], "[]"),
                    "session-id" => $line[3],
                    "ip-address" => $line[4],
                    "value"      => $line[5]
                ]);
            }
        }
        return array_reverse($logs);
    }
}
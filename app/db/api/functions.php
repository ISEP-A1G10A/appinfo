<?php

function getFrames() {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://projets-tomcat.isep.fr:8080/appService?ACTION=GETLOG&TEAM=G10A");
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $data = curl_exec($ch);
    curl_close($ch);
    echo "Raw Data:<br />";
    echo("$data");
    tab($data);
}

function tab($data) {
    $data_tab = str_split($data, 33);
    array_pop($data_tab);
    echo "<br/>Tabular Data:<br />";
    for ($i = 0, $size = count($data_tab); $i < $size; $i++) {
        echo "Trame $i: $data_tab[$i]<br />";
    }
    uncode($data_tab);
}

function uncode($data_tab) {
    foreach ($data_tab as $item) {
        list($t, $o, $r, $c, $n, $v, $a, $x, $year, $month, $day, $hour, $min, $sec) = sscanf($item, "%1s%4s%1s%1s%2s%4s%4s%2s%4s%2s%2s%2s%2s%2s");
        echo("<br/>$t,$o,$r,$c,$n,$v,$a,$x,$year,$month,$day,$hour,$min,$sec<br/>");
        GearEventTable::addEvent($t,$o,$r,$c,$n,$v,$a,$x,$year,$month,$day,$hour,$min,$sec);
    }
    $trame = $data_tab[1];
}
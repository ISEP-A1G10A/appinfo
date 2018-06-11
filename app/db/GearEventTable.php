<?php

abstract class GearEventTable extends Table {
    public static function addEvent($t, $o, $r, $c, $n, $v, $a, $x, $year, $month, $day, $hour, $min, $sec) {
        $request = self::prepare('SELECT date_time FROM gear_event WHERE id=(SELECT MAX(id) FROM gear_event)');
        $request->execute();
        $results = $request->fetchAll(PDO::FETCH_ASSOC);
        if (count($results) > 0) {
            $last_date = date_parse($results[0]["date_time"]);
        } else {
            $last_date = null;
        }
        $request = self::prepare("INSERT INTO gear_event (user,frame_type,card_number,request_type,sensor_type,sensor_number,value,frame_number,checksum,date_time)
VALUES (:user,:frame_type,:card_number,:request_type,:sensor_type,:sensor_number,:value,:frame_number,:checksum,:date_time)");
        //$date = $year . $month . $day . $hour . $min . $sec;
        //date_format($date, 'Y-m-d H:i:s');
        if ($last_date == null || $last_date < date_parse($year . "-" . $month . "-" . $day . " " . $hour . ":" . $min . ":" . $sec)) {
            $request->execute([
                ':user' => 1,
                ':frame_type' => $t,
                ':card_number' => $o,
                ':request_type' => $r,
                ':sensor_type' => $c,
                ':sensor_number' => $n,
                ':value' => $v,
                ':frame_number' => $a,
                ':checksum' => $x,
                ':date_time' => $year . $month . $day . $hour . $min . $sec,
            ]);
        }
    }
}

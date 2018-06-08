<?php

abstract class GearEventTable extends Table {
    public static function addEvent($t, $o, $r, $c, $n, $v, $a, $x, $year, $month, $day, $hour, $min, $sec) {
        $request = self::prepare("INSERT INTO gear_event (gear,action,data,user,frame_type,card_number,request_type,sensor_type,sensor_number,value,frame_number,checksum,date_time) 
VALUES (:gear,:action,:data,:user,:frame_type,:card_number,:request_type,:sensor_type,:sensor_number,:value,:frame_number,:checksum,:date_time)");
        $request->execute([
            ':gear' => null,
            ':action' => null,
            ':data' => null,
            ':user' => 1,
            'frame_type' => $t,
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
<?php
/**
 * @param $string string to test
 * @param $end string to compare
 * @return bool
 */
function endswith($string, $end) {
    return substr($string, -strlen($end)) === $end;
}

/**
 * @param $string string to test
 * @param $start string to compare
 * @return bool
 */
function startswith($string, $start) {
    return substr($string, 0, strlen($start)) === $start;
}
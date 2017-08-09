<?php
error_reporting(E_ALL ^ E_NOTICE);
function push_value(&$array, $value) {
$array[] = $value;
}
$array = array();
push_value($array,'foo');

var_dump($array);
?>
<?php

$re = '/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%£^&*-]).{8,}$/';
$str = 'sdjkfhkJHGBK65265£';

preg_match($re, $str, $matches, PREG_OFFSET_CAPTURE, 0);

// Print the entire match result
var_dump($matches);
?>
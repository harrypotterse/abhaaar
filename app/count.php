<?php

require_once '../Classes/Achieve.php';
require_once '../FileConnection/Data_connection.php';
$class = new Achieve();
$sec = trim(filter_var($_POST['sec'], FILTER_SANITIZE_STRING));
try {
    if ($sec == "الرئيسية"):
        $id = "3";
        $query = "SELECT * FROM `counter_db` where id = $id ";
        $array = array();
        $value = "count";
        define("row", $value);
        $rows = $class->sql_feth($Data_communication, $query, $array);
        foreach ($rows as $key):
            (int) $index = $key[row];
            $vist = $index + 1;
            $time = time();
            $array = array($vist, $time);
            $query = "UPDATE `counter_db` SET `count` = ? , `time` = ?   WHERE `counter_db`.`id` =$id;";
            $class->sql($Data_communication, $query, $array);
        endforeach;
    endif;
    if ($sec == "من نحن"):
        $id = "2";
        $query = "SELECT * FROM `counter_db` where id = $id ";
        $array = array();
        $value = "count";
        define("row", $value);
        $rows = $class->sql_feth($Data_communication, $query, $array);
        foreach ($rows as $key):
            (int) $index = $key[row];
            $vist = $index + 1;
            $time = time();
            $array = array($vist, $time);
            $query = "UPDATE `counter_db` SET `count` = ? , `time` = ?   WHERE `counter_db`.`id` =$id;";
            $class->sql($Data_communication, $query, $array);
        endforeach;

    endif;
    if ($sec == "خدماتنا"):
        $id = "1";
        $query = "SELECT * FROM `counter_db` where id = $id ";
        $array = array();
        $value = "count";
        define("row", $value);
        $rows = $class->sql_feth($Data_communication, $query, $array);
        foreach ($rows as $key):
            (int) $index = $key[row];
            $vist = $index + 1;
            $time = time();
            $array = array($vist, $time);
            $query = "UPDATE `counter_db` SET `count` = ? , `time` = ?   WHERE `counter_db`.`id` =$id;";
            $class->sql($Data_communication, $query, $array);
        endforeach;
    endif;
    if ($sec == "أفضل العروض"):
        $id = "5";
        $query = "SELECT * FROM `counter_db` where id = $id ";
        $array = array();
        $value = "count";
        define("row", $value);
        $rows = $class->sql_feth($Data_communication, $query, $array);
        foreach ($rows as $key):
            (int) $index = $key[row];
            $vist = $index + 1;
            $time = time();
            $array = array($vist, $time);
            $query = "UPDATE `counter_db` SET `count` = ? , `time` = ?   WHERE `counter_db`.`id` =$id;";
            $class->sql($Data_communication, $query, $array);
        endforeach;
    endif;
    if ($sec == "المدونه"):
        $id = "4";
        $query = "SELECT * FROM `counter_db` where id = $id ";
        $array = array();
        $value = "count";
        define("row", $value);
        $rows = $class->sql_feth($Data_communication, $query, $array);
        foreach ($rows as $key):
            (int) $index = $key[row];
            $vist = $index + 1;
            $time = time();
            $array = array($vist, $time);
            $query = "UPDATE `counter_db` SET `count` = ? , `time` = ?   WHERE `counter_db`.`id` =$id;";
            $class->sql($Data_communication, $query, $array);
        endforeach;
    endif;
} catch (PDOException $exc) {
    $Data_communication = null;
} finally {
    $Data_communication = null;
}


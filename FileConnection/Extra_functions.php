<?php

function count_comant($cnn, $id) {
    $sql = "SELECT * FROM `gallery` where idg= ? ";
    $array = array($id);
    try {
        $sth = $cnn->prepare($sql);
        $sth->execute($array);
        echo $sth->rowCount();
    } catch (Exception $exc) {
        echo $exc->getTraceAsString();
    } finally {
        
    }
}

function id_g($cnn, $id) {
    $query = "select * from pictures  where id =?  ";
    $sth = $cnn->prepare($query);
    $array = array($id);
    $sth->execute($array);
    $xssa = $sth->fetchAll();
    foreach ($xssa as $ll):
        echo $ll['Title'];
    endforeach;
}

function rowCount($cnn, $sql, $id) {
    $array = array($id);
    try {
        $sth = $cnn->prepare($sql);
        $sth->execute($array);
        echo $sth->rowCount();
    } catch (Exception $exc) {
        echo $exc->getTraceAsString();
    } finally {
        
    }
}

function rowCount_int($cnn, $sql, $id) {
    $array = array($id);
    try {
        $sth = $cnn->prepare($sql);
        $sth->execute($array);
        return $sth->rowCount();
    } catch (Exception $exc) {
        echo $exc->getTraceAsString();
    } finally {
        
    }
}

function data_mysql($date) {
    if (!empty($date)) {
        $timestamp = strtotime($date);
        if ($timestamp === FALSE) {
            $timestamp = strtotime(str_replace('/', '-', $date));
        }
        return $date = date('Y-m-d', $timestamp);
    }
}

function data_mysql__($date) {
    if (!empty($date)) {
        $timestamp = strtotime($date);
        if ($timestamp === FALSE) {
            $timestamp = strtotime(str_replace('/', '-', $date));
        }
        return $date = date('Y-M-d', $timestamp);
    }
}

function set_lang($sql_eng, $sql_ar) {
    if ($_SESSION['lang'] == "ar") {
        return $sql_ar;
    } elseif ($_SESSION['lang'] == "eng") {
        return $sql_eng;
    } else {
        return $sql_ar;
    }
}

function set_first_cher($firstCharacter) {
    return $firstCharacter = strtoupper(substr($firstCharacter, 0, 1));
}

function set_first_cher_arabic($firstCharacter) {
    return $firstCharacter = strtoupper(substr($firstCharacter, 0, 2));
}

function set_first_cher_coler($firstCharacter) {
    $firstCharacter = strtoupper(substr($firstCharacter, 0, 1));
#    $array = array("#2aa556", "#40b7ff", "#ff7f40", "#ff40a0", "#ff4040", "#acb4b3", "#3d8346", "#2b4970", "#2b706d", "#217618", "#27dd93", "#7727dd", "#27badd", "#c0c7b1", "#e8c177", "#77e2e8", "#e877b5", "#7f3b60", "#3b4c7f", "#7f3b7c", "#0e97db", "#0edb9a", "##5796b6", "#b66957", "#3b7e7f", "#27aadd");
    $array = array("#2aa556", "#40b7ff", "#ff7f40", "#ff40a0", "#ff4040", "#acb4b3", "#3d8346", "#2b4970", "#2b706d", "#217618", "#27dd93", "#7727dd", "#27badd", "#c0c7b1", "#e8c177", "#77e2e8", "#e877b5", "#7f3b60", "#3b4c7f", "#7f3b7c", "#0e97db", "#0edb9a", "##5796b6", "#b66957", "#3b7e7f", "#27aadd");

    if ($firstCharacter == 'A' && $firstCharacter == 'ب') {
        return $style = "style=\"background:$array[0];width: 50px;height: 50px;font-size: 39px;font-family: tahoma;border-radius: 26px;\" ";
    }
    if ($firstCharacter == 'B') {
        return $style = "style=\"background:$array[1];width: 50px;height: 50px;font-size: 39px;font-family: tahoma;border-radius: 26px;\" ";
    }
    if ($firstCharacter == 'C') {
        return $style = "style=\"background:$array[2];width: 50px;height: 50px;font-size: 39px;font-family: tahoma;border-radius: 26px;\" ";
    }
    if ($firstCharacter == 'D') {
        return $style = "style=\"background:$array[3];width: 50px;height: 50px;font-size: 39px;font-family: tahoma;border-radius: 26px;\" ";
    }
    if ($firstCharacter == 'E') {
        return $style = "style=\"background:$array[4];width: 50px;height: 50px;font-size: 39px;font-family: tahoma;border-radius: 26px;\" ";
    }
    if ($firstCharacter == 'F') {
        return $style = "style=\"background:$array[5];width: 50px;height: 50px;font-size: 39px;font-family: tahoma;border-radius: 26px;\" ";
    }
    if ($firstCharacter == 'J') {
        return $style = "style=\"background:$array[6];width: 50px;height: 50px;font-size: 39px;font-family: tahoma;border-radius: 26px;\" ";
    }
    if ($firstCharacter == 'K') {
        return $style = "style=\"background:$array[7];width: 50px;height: 50px;font-size: 39px;font-family: tahoma;border-radius: 26px;\" ";
    }
    if ($firstCharacter == 'L') {
        return $style = "style=\"background:$array[8];width: 50px;height: 50px;font-size: 39px;font-family: tahoma;border-radius: 26px;\" ";
    }
    if ($firstCharacter == 'M') {
        return $style = "style=\"background:$array[9];width: 50px;height: 50px;font-size: 39px;font-family: tahoma;border-radius: 26px;\" ";
    }
    if ($firstCharacter == 'N') {
        return $style = "style=\"background:$array[10];width: 50px;height: 50px;font-size: 39px;font-family: tahoma;border-radius: 26px;\" ";
    }
    if ($firstCharacter == 'O') {
        return $style = "style=\"background:$array[11];width: 50px;height: 50px;font-size: 39px;font-family: tahoma;border-radius: 26px;\" ";
    }
    if ($firstCharacter == 'P') {
        return $style = "style=\"background:$array[12];width: 50px;height: 50px;font-size: 39px;font-family: tahoma;border-radius: 26px;\" ";
    }
    if ($firstCharacter == 'Q') {
        return $style = "style=\"background:$array[13];width: 50px;height: 50px;font-size: 39px;font-family: tahoma;border-radius: 26px;\" ";
    }
    if ($firstCharacter == 'R') {
        return $style = "style=\"background:$array[14];width: 50px;height: 50px;font-size: 39px;font-family: tahoma;border-radius: 26px;\" ";
    }
    if ($firstCharacter == 'S') {
        return $style = "style=\"background:$array[15];width: 50px;height: 50px;font-size: 39px;font-family: tahoma;border-radius: 26px;\" ";
    }
    if ($firstCharacter == 'T') {
        return $style = "style=\"background:$array[16];width: 50px;height: 50px;font-size: 39px;font-family: tahoma;border-radius: 26px;\" ";
    }
    if ($firstCharacter == 'U') {
        return $style = "style=\"background:$array[17];width: 50px;height: 50px;font-size: 39px;font-family: tahoma;border-radius: 26px;\" ";
    }
    if ($firstCharacter == 'V') {
        return $style = "style=\"background:$array[18];width: 50px;height: 50px;font-size: 39px;font-family: tahoma;border-radius: 26px;\" ";
    }
    if ($firstCharacter == 'W') {
        return $style = "style=\"background:$array[19];width: 50px;height: 50px;font-size: 39px;font-family: tahoma;border-radius: 26px;\" ";
    }
    if ($firstCharacter == 'X') {
        return $style = "style=\"background:$array[20];width: 50px;height: 50px;font-size: 39px;font-family: tahoma;border-radius: 26px;\" ";
    }
    if ($firstCharacter == 'W') {
        return $style = "style=\"background:$array[21];width: 50px;height: 50px;font-size: 39px;font-family: tahoma;border-radius: 26px;\" ";
    }
    if ($firstCharacter == 'Z') {
        return $style = "style=\"background:$array[22];width: 50px;height: 50px;font-size: 39px;font-family: tahoma;border-radius: 26px;\" ";
    }
    if ($firstCharacter == 'H') {
        return $style = "style=\"background:$array[23];width: 50px;height: 50px;font-size: 39px;font-family: tahoma;border-radius: 26px;\" ";
    }
    if ($firstCharacter == 'I') {
        return $style = "style=\"background:$array[24];width: 50px;height: 50px;font-size: 39px;font-family: tahoma;border-radius: 26px;\" ";
    }
    if ($firstCharacter == 'Y') {
        return $style = "style=\"background:$array[25];width: 50px;height: 50px;font-size: 39px;font-family: tahoma;border-radius: 26px;\" ";
    }

    return $style = "style=\"background:$array[25];width: 50px;height: 50px;font-size: 39px;font-family: tahoma;border-radius: 26px;\" ";
}

function set_first_cher_coler_arabic($firstCharacter) {
    $firstCharacter = strtoupper(substr($firstCharacter, 0, 2));
#    $array = array("#2aa556", "#40b7ff", "#ff7f40", "#ff40a0", "#ff4040", "#acb4b3", "#3d8346", "#2b4970", "#2b706d", "#217618", "#27dd93", "#7727dd", "#27badd", "#c0c7b1", "#e8c177", "#77e2e8", "#e877b5", "#7f3b60", "#3b4c7f", "#7f3b7c", "#0e97db", "#0edb9a", "##5796b6", "#b66957", "#3b7e7f", "#27aadd");
    $array = array("#2aa556", "#40b7ff", "#ff7f40", "#ff40a0", "#ff4040", "#acb4b3", "#3d8346", "#2b4970", "#2b706d", "#217618", "#27dd93", "#7727dd", "#27badd", "#c0c7b1", "#e8c177", "#77e2e8", "#e877b5", "#7f3b60", "#3b4c7f", "#7f3b7c", "#0e97db", "#0edb9a", "##5796b6", "#b66957", "#3b7e7f", "#27aadd");

    if ($firstCharacter == 'ه') {
        return $style = "style=\"background:$array[0];width: 50px;height: 50px;font-size: 39px;font-family: tahoma;border-radius: 26px;\" ";
    }
    if ($firstCharacter == 'ل') {
        return $style = "style=\"background:$array[1];width: 50px;height: 50px;font-size: 39px;font-family: tahoma;border-radius: 26px;\" ";
    }
    if ($firstCharacter == 'ح') {
        return $style = "style=\"background:$array[2];width: 50px;height: 50px;font-size: 39px;font-family: tahoma;border-radius: 26px;\" ";
    }
    if ($firstCharacter == 'م') {
        return $style = "style=\"background:$array[3];width: 50px;height: 50px;font-size: 39px;font-family: tahoma;border-radius: 26px;\" ";
    }
    if ($firstCharacter == 'ق') {
        return $style = "style=\"background:$array[4];width: 50px;height: 50px;font-size: 39px;font-family: tahoma;border-radius: 26px;\" ";
    }
    if ($firstCharacter == 'و') {
        return $style = "style=\"background:$array[5];width: 50px;height: 50px;font-size: 39px;font-family: tahoma;border-radius: 26px;\" ";
    }
    if ($firstCharacter == 'ش') {
        return $style = "style=\"background:$array[6];width: 50px;height: 50px;font-size: 39px;font-family: tahoma;border-radius: 26px;\" ";
    }
    if ($firstCharacter == 'ر') {
        return $style = "style=\"background:$array[7];width: 50px;height: 50px;font-size: 39px;font-family: tahoma;border-radius: 26px;\" ";
    }
    if ($firstCharacter == 'ب') {
        return $style = "style=\"background:$array[8];width: 50px;height: 50px;font-size: 39px;font-family: tahoma;border-radius: 26px;\" ";
    }
    if ($firstCharacter == 'ت') {
        return $style = "style=\"background:$array[9];width: 50px;height: 50px;font-size: 39px;font-family: tahoma;border-radius: 26px;\" ";
    }
    if ($firstCharacter == 'س') {
        return $style = "style=\"background:$array[10];width: 50px;height: 50px;font-size: 39px;font-family: tahoma;border-radius: 26px;\" ";
    }
    if ($firstCharacter == 'ك') {
        return $style = "style=\"background:$array[11];width: 50px;height: 50px;font-size: 39px;font-family: tahoma;border-radius: 26px;\" ";
    }
    if ($firstCharacter == 'ن') {
        return $style = "style=\"background:$array[12];width: 50px;height: 50px;font-size: 39px;font-family: tahoma;border-radius: 26px;\" ";
    }
    if ($firstCharacter == 'خ') {
        return $style = "style=\"background:$array[13];width: 50px;height: 50px;font-size: 39px;font-family: tahoma;border-radius: 26px;\" ";
    }
    if ($firstCharacter == 'ص') {
        return $style = "style=\"background:$array[14];width: 50px;height: 50px;font-size: 39px;font-family: tahoma;border-radius: 26px;\" ";
    }
    if ($firstCharacter == 'س') {
        return $style = "style=\"background:$array[15];width: 50px;height: 50px;font-size: 39px;font-family: tahoma;border-radius: 26px;\" ";
    }
    if ($firstCharacter == 'ف') {
        return $style = "style=\"background:$array[16];width: 50px;height: 50px;font-size: 39px;font-family: tahoma;border-radius: 26px;\" ";
    }
    if ($firstCharacter == 'ا') {
        return $style = "style=\"background:$array[17];width: 50px;height: 50px;font-size: 39px;font-family: tahoma;border-radius: 26px;\" ";
    }
    if ($firstCharacter == 'ع') {
        return $style = "style=\"background:$array[18];width: 50px;height: 50px;font-size: 39px;font-family: tahoma;border-radius: 26px;\" ";
    }
    if ($firstCharacter == 'ض') {
        return $style = "style=\"background:$array[19];width: 50px;height: 50px;font-size: 39px;font-family: tahoma;border-radius: 26px;\" ";
    }
    if ($firstCharacter == 'ج') {
        return $style = "style=\"background:$array[20];width: 50px;height: 50px;font-size: 39px;font-family: tahoma;border-radius: 26px;\" ";
    }
    if ($firstCharacter == 'د') {
        return $style = "style=\"background:$array[21];width: 50px;height: 50px;font-size: 39px;font-family: tahoma;border-radius: 26px;\" ";
    }
    if ($firstCharacter == 'غ') {
        return $style = "style=\"background:$array[22];width: 50px;height: 50px;font-size: 39px;font-family: tahoma;border-radius: 26px;\" ";
    }
    if ($firstCharacter == 'ط') {
        return $style = "style=\"background:$array[23];width: 50px;height: 50px;font-size: 39px;font-family: tahoma;border-radius: 26px;\" ";
    }
    if ($firstCharacter == 'ز') {
        return $style = "style=\"background:$array[24];width: 50px;height: 50px;font-size: 39px;font-family: tahoma;border-radius: 26px;\" ";
    }
    if ($firstCharacter == 'ي') {
        return $style = "style=\"background:$array[25];width: 50px;height: 50px;font-size: 39px;font-family: tahoma;border-radius: 26px;\" ";
    }
    if ($firstCharacter == 'ث') {
        return $style = "style=\"background:$array[25];width: 50px;height: 50px;font-size: 39px;font-family: tahoma;border-radius: 26px;\" ";
    }
    if ($firstCharacter == 'ظ') {
        return $style = "style=\"background:$array[25];width: 50px;height: 50px;font-size: 39px;font-family: tahoma;border-radius: 26px;\" ";
    }

    return $style = "style=\"background:$array[25];width: 50px;height: 50px;font-size: 39px;font-family: tahoma;border-radius: 26px;\" ";
}

function SESSION_protact($Data_communication, $SESSION) {
    try {
        $SESSION = htmlentities($SESSION);
        $user = filter_var($SESSION, FILTER_SANITIZE_STRING);

        $hash = $_SESSION['name_xhas'] = password_hash(user_admin($Data_communication, $SESSION), PASSWORD_DEFAULT);
        if (password_verify($user, $hash)) {
            session_regenerate_id();
            return (bool) $_SESSION['auth'] = true;
        } else {
            session_regenerate_id(true);
            return (bool) $_SESSION['auth'] = FALSE;
        }
    } catch (Exception $ex) {
        $Data_communication = null;
    } finally {
        $Data_communication = null;
    }
}

function user_admin($Data_communication, $username) {
    //-----------------------------------------------
    $sql = "SELECT * FROM user_admin  WHERE user=? ";
    $query = $Data_communication->prepare($sql);
    $query->execute(array($username));
    if ($query->rowCount() >= 1) {
        return $username;
        // return TRUE;
    } else {
        //  return FALSE; 
    }
}

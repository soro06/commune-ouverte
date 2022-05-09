<?php

/**
 * Create on : 
 * By : Korgho Issa
 * For :  custom function 
 *
 */
function get_updated_file($dir, &$results = array(), $time) {
    $files = scandir($dir);

    foreach ($files as $key => $value) {
        $path = realpath($dir . DIRECTORY_SEPARATOR . $value);
        if (!is_dir($path)) {
            if (filemtime($path) >= $time)
                $results[] = array('fpath' => $path, 'fupdatedon' => date('d/m/Y h:i', filemtime($path)));
        } else if ($value != "." && $value != ".." && $value != '.git') {
            get_updated_file($path, $results, $time);
        }
    }

    return $results;
}

function gl_array_filter_by_value($array, $index, $value) {
    $newarray = array();
    if (is_array($array) && count($array) > 0) {
        foreach (array_keys($array) as $key) {
            $temp[$key] = $array[$key][$index];

            if ($temp[$key] == $value) {
                $newarray[$key] = $array[$key];
            }
        }
    }
    return $newarray;
}

function mysql_format_date($date, $format = null) {
    if (is_null($format)) {
        $session = \Config\Services::session();
        $format = $session->format_date;
    }
    if ($date == null || $date == '' || $date == '0000-00-00') {
        return '';
    }
    $newformat = '';
    switch (strtolower($format)) {
        case 'dd/mm/yyyy':
            $newformat = date("d/m/Y", strtotime($date));
            break;
        case 'mm/dd/yyyy':
            $newformat = date("m/d/Y", strtotime($date));
            break;
        case 'yyyy/mm/dd':
            $newformat = date("Y/m/d", strtotime($date));
            break;
        case 'dd.mm.yyyy':
            $newformat = date("d.m.Y", strtotime($date));
            break;
        case 'mm.dd.yyyy':
            $newformat = date("m.d.Y", strtotime($date));
            break;
        case 'yyyy.mm.dd':
            $newformat = date("Y.m.d", strtotime($date));
            break;
        case 'dd-mm-yyyy':
            $newformat = date("d-m-Y", strtotime($date));
            break;
        case 'mm-dd-yyyy':
            $newformat = date("m-d-Y", strtotime($date));
            break;
        case 'yyyy-mm-dd':
            $newformat = date("Y-m-d", strtotime($date));
            break;
        default:
            break;
    }
    return $newformat;
}

function mysql_format_datetime($date, $format = null) {
    if (is_null($format)) {
        $session = \Config\Services::session();
        $format = $session->settings_display_format_date;
    }

    if ($date == null || $date == '' || $date == '0000-00-00 00:00:00') {
        return '';
    }
    $newformat = '';
    switch (strtolower($format)) {
        case 'dd/mm/yyyy':
            $newformat = date("d/m/Y H:i", strtotime($date));
            break;
        case 'mm/dd/yyyy':
            $newformat = date("m/d/Y H:i", strtotime($date));
            break;
        case 'yyyy/mm/dd':
            $newformat = date("Y/m/d H:i", strtotime($date));
            break;
        case 'dd.mm.yyyy':
            $newformat = date("d.m.Y H:i", strtotime($date));
            break;
        case 'mm.dd.yyyy':
            $newformat = date("m.d.Y H:i", strtotime($date));
            break;
        case 'yyyy.mm.dd':
            $newformat = date("Y.m.d H:i", strtotime($date));
            break;
        case 'dd-mm-yyyy':
            $newformat = date("d-m-Y H:i", strtotime($date));
            break;
        case 'mm-dd-yyyy':
            $newformat = date("m-d-Y H:i", strtotime($date));
            break;
        case 'yyyy-mm-dd':
            $newformat = date("Y-m-d H:i", strtotime($date));
            break;
        default:
            break;
    }

    return $newformat;
}

function to_mysql_date($datetime, $format = null) {
    if (is_null($format)) {
        $session = \Config\Services::session();
        $format = $session->format_date;
    }
    if ($datetime == null || $datetime == '' || $datetime == '0000-00-00') {
        return '';
    }
    $datetime = str_replace('.', '/', $datetime);
    $datetime = str_replace('-', '/', $datetime);
    $format = str_replace('.', '/', $format);
    $format = str_replace('-', '/', $format);
    switch (strtolower($format)) {
        case 'dd/mm/yyyy':
            $myDateTime = DateTime::createFromFormat('d/m/Y', $datetime);
            break;
        case 'mm/dd/yyyy':
            $myDateTime = DateTime::createFromFormat('m/d/Y', $datetime);
            break;
        default:
            break;
    }
    if (!$myDateTime) {
        return '';
    } else {
        return $myDateTime->format('Y-m-d');
    }
}

function to_mysql_datetime($datetime, $format = null) {
    if (is_null($format)) {
        $session = \Config\Services::session();
        $format = $session->format_date;
    }
    if ($datetime == null || $datetime == '' || $datetime == '0000-00-00') {
        return '';
    }
    $datetime = str_replace('.', '/', $datetime);
    $datetime = str_replace('-', '/', $datetime);
    $format = str_replace('.', '/', $format);
    $format = str_replace('-', '/', $format);

    switch (strtolower($format)) {
        case 'dd/mm/yyyy':
            $myDateTime = DateTime::createFromFormat('d/m/Y H:i', $datetime);
            break;
        case 'mm/dd/yyyy':
            $myDateTime = DateTime::createFromFormat('m/d/Y H:i', $datetime);
            break;
        default:
            break;
    }
    return $myDateTime->format('Y-m-d H:i:s');
}

function format_money($number, $currency = 'XOF') {
    switch ($currency) {
        case 'XOF':
            $number = number_format($number, 0, '.', ' ');
            break;
        default:
            $number = number_format($number, 0, '.', ' ');
            break;
    }
    return $number;
}
?>


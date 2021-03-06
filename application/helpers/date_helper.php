<?php
function get_current_date($format = null)
{
    $date = new DateTime();
    $date->setTimezone(new DateTimeZone('Asia/Jakarta'));
    if (!is_null($format))
        return $date->format($format);
    return $date->format('Y-m-d H:i:s ');
}

function get_current_date_img($format = null)
{
    $date = new DateTime();
    $date->setTimezone(new DateTimeZone('Asia/Jakarta'));
    if (isset($format))
        return $date->format($format);
    return $date->format('YmdHis');
}



function check_session()
{
    if (isset($_SESSION['Admin'])) {
        return true;
    } else {
        redirect("Admin");
    }
}

function check_session_pemilik()
{
    if (isset($_SESSION['pemilik'])) {
        return true;
    } else {
        redirect("landing");
    }
}
<?php

$app_name = 'Kkn-App';
function shield($data)
{
    return htmlspecialchars($data);
}
function redirect($url)
{
    return header("location:$url");
}
function active_menu($route)
{
    $page = shield($_GET['page']);
    foreach ($route as $r) {
        if ($page == $r) {
            echo 'active';
            break;
        }
    }
}

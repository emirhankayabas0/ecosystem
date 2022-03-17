<?php

function controller($controllerName)
{
    $controllerName = strtolower($controllerName);
    return PATH . '/app/controller/' . $controllerName . '.php';
}

function view($viewName)
{
    return PATH . '/app/view/' . setting('theme') . "/" . $viewName . '.php';
}

function route($index)
{
    global $route;
    return isset($route[$index]) ? $route[$index] : false;
}

function setting($name)
{
    global $settings;
    return isset($settings[$name]) ? $settings[$name] : false;
}

function seflink($text)
{
    $find = array("/Ğ/", "/Ü/", "/Ş/", "/İ/", "/Ö/", "/Ç/", "/ğ/", "/ü/", "/ş/", "/ı/", "/ö/", "/ç/");
    $degis = array("G", "U", "S", "I", "O", "C", "g", "u", "s", "i", "o", "c");
    $text = preg_replace("/[^0-9a-zA-ZÄzÜŞİÖÇğüşıöç]/", " ", $text);
    $text = preg_replace($find, $degis, $text);
    $text = preg_replace("/ +/", " ", $text);
    $text = preg_replace("/ /", "-", $text);
    $text = preg_replace("/\s/", "", $text);
    $text = strtolower($text);
    $text = preg_replace("/^-/", "", $text);
    $text = preg_replace("/-$/", "", $text);
    return $text;
}

function session($name)
{
    return isset($_SESSION[$name]) ? $_SESSION[$name] : false;
}

function appInformation($service)
{
    if ($service == "mail") {
        return "Outbox";
    } elseif ($service == "chat") {
        return "Talk";
    } elseif ($service == "chat") {
        return "Talk";
    } elseif ($service == "weather") {
        return "Hava Durumu";
    } elseif ($service == "picture") {
        return "Resim Yükle";
    } elseif ($service == "currencies") {
        return "Finans";
    } elseif ($service == "movie") {
        return "Movie Jump";
    } elseif ($service == "news") {
        return "Haberler";
    } elseif ($service == "translate") {
        return "Çeviri";
    } elseif ($service == "coronavirus") {
        return "Koronavirüs";
    } else {
        return "Hesabım";
    }
}

function random_string()
{
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $str = str_shuffle($chars);
    return $str;
}
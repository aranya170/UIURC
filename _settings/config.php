<?php

// Site data
define('SITE_NAME', 'UIU Robotics');
define('SITE_TAGLINE', 'A Step Towards Infinity');
define('SITE_DESCRIPTION', 'UIU Robotics is a student-run club of undergraduate and graduate students from United International University. The purpose of the Organization is to explore new engineering technology, learn crucial skills and promote the field of robotics.');

define('IS_PRODUCTION', false);

// Codes for the website, not changeable.
//
// ob_start("minifier"); // Start to minify HTML
session_start(); // Start session
// 
// Absolute path (Idea from WordPress)
if (!defined("ABSPATH")) {
    define("ABSPATH", dirname(__FILE__) . '/../');
}

date_default_timezone_set("Asia/Dhaka");
// Production phase secret keys
// log file settings
include ABSPATH . '_settings/log.php';
// Alert settings
include ABSPATH . '_settings/alert.php';

// if production false then don't show error messages in the browser but redirect to 500 error page
if (!IS_PRODUCTION) {
    // Development environment: show all errors
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);
} else {
    // Optionally, log errors to a file for debugging in production
    ini_set('log_errors', '1');
    ini_set('error_log', ABSPATH . 'logs/error.log');

    // Set error reporting level
    error_reporting(E_ALL);

    // Hide errors from being displayed on the webpage
    ini_set('display_errors', 0);
    // if log file or directory doesn't exist, create them
    if (!file_exists(ABSPATH . 'logs')) {
        mkdir(ABSPATH . 'logs', 0777, true);
    }
}

// Custom functions

function redirectTo($url)
{
    header("Location: $url");
    exit();
}

function generateSelectOptions($options, $selectedValue = null)
{
    foreach ($options as $value => $label) {
        $isSelected = $value == $selectedValue ? ' selected' : '';
        echo "<option value=\"$value\"$isSelected>$label</option>";
    }
}

function url($path)
{
    // Determine the protocol (HTTP or HTTPS)
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

    // Get the server name
    $serverName = $_SERVER['SERVER_NAME'];

    // Get the unknown port
    $port = $_SERVER['SERVER_PORT'] == 80 ? '' : ($_SERVER['SERVER_PORT'] == 443 ? '' : ':' . $_SERVER['SERVER_PORT']);

    // Construct the full URL
    $fullUrl = $protocol . $serverName . $port . $path;

    return $fullUrl;
}
function errorPage($error_code = 000)
{
    $error_codes = [
        000 => "Unknown Error",
        400 => "Bad Request",
        401 => "Unauthorized",
        403 => "Forbidden",
        404 => "Not Found",
        405 => "Method Not Allowed",
        500 => "Internal Server Error",
        502 => "Bad Gateway",
        503 => "Service Unavailable",
        504 => "Gateway Timeout"
    ];

    if (array_key_exists($error_code, $error_codes)) {
        $error_message = $error_codes[$error_code];
    } else {
        $error_message = "Unknown Error";
    }

    http_response_code($error_code);
    if (file_exists(ABSPATH . "/error/$error_code.php")) {
        include ABSPATH . "/error/$error_code.php";
    } else {
        echo "
                <h1>$error_message</h1>
                <p>Something went wrong.</p>
                <hr>
                <address>UIU Robotics Club</address>
                ";
    }
    exit();
}
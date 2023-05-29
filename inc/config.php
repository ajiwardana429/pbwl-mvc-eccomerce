<?php

// Laporan error
error_reporting(E_ALL);

// Mulai sesi
session_start();

// Url -
define("URL", "http://localhost/SI2/PBWL-ECCOMERCE/pbwl-mvc-eccomerce/");
define("AST", URL . "/layouts/assets");
define("AUTHOR", "Aji Wardana");
define("FOOTER", "Copyright &copy; 2023. Designed by " . AUTHOR);

// Path root
define("ROOT", dirname(__DIR__) . DIRECTORY_SEPARATOR);

// Autoload
require_once ROOT. "vendor/autoload.php";

// Whoops
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();
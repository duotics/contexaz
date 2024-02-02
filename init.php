<?php
if (!isset($_SESSION)) session_start(); //SESSION START
define('_JEXEC', 1); // Definir Constante para Verificar ejecución

$rootM = __DIR__; //Route Main App Folder, path is this file created
$rootP = dirname(__DIR__, 1); //Route Parent Main App Folder, one up level
require $rootM . '/vendor/autoload.php'; //Autoload init
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__); //Dotenv Init
$dotenv->load(); //Dotenv Loadvard

//Configurations, load system vars and paths vars
include("configs/config.php");

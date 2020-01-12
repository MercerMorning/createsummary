<?php
require_once ROOT . '/vendor/autoload.php';
class_alias('\RedBeanPHP\R', '\R');
R::setup( 'mysql:host=localhost;dbname=creatsummary',
        'root', '' );
session_start();
?>

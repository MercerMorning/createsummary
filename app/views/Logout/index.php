<?php
require_once CONF . '/DB.php';

unset($_SESSION['logged_user']);

header('Location: /');

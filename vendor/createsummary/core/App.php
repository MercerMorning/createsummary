<?php

namespace createsummary;


class App {

    public static $app;

    public function __construct() {
        $query = trim($_SERVER['QUERY_STRING'], '/');
        session_start();
        Router::dispatch($query);
    }

}

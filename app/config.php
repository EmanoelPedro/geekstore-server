<?php



// DEFAULT DATABASE

define("DATA_LAYER_CONFIG", [
    "driver" =>  getenv('CONF_DB_DRIVER'),
    "host" => getenv('CONF_DB_HOST'),
    "port" => getenv('CONF_DB_PORT'),
    "dbname" => getenv('CONF_DB_NAME'),
    "username" => getenv('CONF_DB_USER'),
    "passwd" => getenv('CONF_DB_PASS'),
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]);
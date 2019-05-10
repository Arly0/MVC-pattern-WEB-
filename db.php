<?php


class db
{
    public static function getConnect()
    {
        // takes parametrs for connect to db
        $params = include_once ('config/db_params.php');

        // pdo connection to DB
        $db = new PDO("mysql:host={$params['host']};dbname={$params['dbname']}", $params['user'], $params['pass']);

        return $db;
    }
}
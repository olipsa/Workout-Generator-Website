<?php


namespace core;


use PDO;
use PDOException;

class Database
{
    public \PDO $conn;
    /**
     * Database constructor.
     */
    public function __construct()
    {

            $dbconn = new \mysqli("localhost","root","root","proiecttw");

    }
}
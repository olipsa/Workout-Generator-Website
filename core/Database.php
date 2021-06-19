<?php


namespace core;


use mysqli;
use PDO;
use PDOException;

class Database
{
    public mysqli $dbconn;
    /**
     * Database constructor.
     */
    public function __construct()
    {

            $dbconn = new mysqli("localhost","root","root","proiecttw");

    }
}
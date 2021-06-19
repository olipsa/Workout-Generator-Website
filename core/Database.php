<?php


namespace core;


use mysqli;
use PDO;
use PDOException;

class Database
{
    public \PDO $pdo;
    /**
     * Database constructor.
     */
    public function __construct()
    {
        try {
            $this->pdo= new PDO("mysql:host=localhost;dbname=proiecttw", "root", "root");
            // set the PDO error mode to exception
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully\n";
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }

    }
    public function applyMigrations()
    {
        $this->createMigrationTable();
        $appliedMigrations=$this->getAppliedMigrations();

        $files=scandir(Application::$ROOT_DIR.'/migrations');
        $toApplyMigrations=array_diff($files,$appliedMigrations);
        foreach ($toApplyMigrations as $migration)
            if($migration==='.' ||$migration==='..'){
                continue;
            }

        require_once Application::$ROOT_DIR.'/migrations/'.$migration;
        $className=pathinfo($migration,PATHINFO_FILENAME);
        var_dump($className);


    }
    public function createMigrationTable()
    {
        $this->pdo->exec("CREATE TABLE IF NOT EXISTS migrations(
            id INT AUTO_INCREMENT PRIMARY KEY,
            migration VARCHAR(255),
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP 
            ) ENGINE=INNODB;");

    }
    public function getAppliedMigrations()
    {
        $statement=$this->pdo->prepare("SELECT migration FROM migrations");
        $statement->execute();
        return $statement->fetchAll(\PDO::FETCH_COLUMN);
    }
}
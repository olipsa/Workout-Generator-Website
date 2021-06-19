<?php


namespace core;


abstract class DBModel extends Model
{
    abstract public function getTableName(): string;

    abstract public function getAttributes(): array;

    public function save(): bool
    {
        $tableName = $this->getTableName();
        $attributes = $this->getAttributes();
        $params = array_map(fn($attr)=>":$attr", $attributes);
        $statement = self::prepare("INSERT INTO $tableName (".implode(',',$attributes).")
                VALUES(".implode(',',$params).")");
        foreach ($attributes as $attribute)
        {
            $statement->bindValue(":$attribute",$this->{$attribute});
        }
        echo '<pre>';
        var_dump($statement);
        echo '</pre>';
        $statement->execute();
        return true;
    }

    public static function prepare($sql)
    {
        return Application::$app->db->pdo->prepare($sql);
    }
}
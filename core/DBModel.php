<?php


namespace core;


abstract class DBModel extends Model
{
    abstract public function getTableName(): string;

    abstract public function getAttributes(): array;

    public function save()
    {
        $tableName = $this->getTableName();
        $attributes = $this->getAttributes();
        $params = array_map(fn($attr)=>":attr", $attributes);
        $statement = self::prepare("INSERT INTO $tableName (".implode(',',$attributes).")
                VALUES(".implode(',',$params).")");
        var_dump($statement,$params,$attributes);
        foreach ($attributes as $attribute)
        {
            $statement->bindValue(":$attribute",$this->{$attribute});
        }

        $statement->execute();
        return true;
    }

    public static function prepare($sql)
    {
        return Application::$app->db->pdo->prepare($sql);
    }
}
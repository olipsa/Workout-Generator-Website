<?php


namespace core;


abstract class DBModel extends Model
{
    abstract public function getTableName(): string;

    abstract public function getAttributes(): array;

    abstract public function getPrimaryKey(): string;

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

    public function findOne($where)
    {
        $tableName = static::getTableName(); //can't call self, Abstract class
        $attributes = array_keys($where);
        $sql = implode("AND ",array_map(fn($attr)=> "$attr = :$attr", $attributes));
        $statement = self::prepare("SELECT * FROM $tableName WHERE $sql");
        foreach($where as $key => $item){
            $statement->bindValue(":$key", $item);
        }

        $statement->execute();
        return $statement->fetchObject(static::class);
    }

    public static function prepare($sql)
    {
        return Application::$app->db->pdo->prepare($sql);
    }
}
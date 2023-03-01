<?php
namespace Models;
class Model {

    public static function create($tableName, $columns, $values, $conn) {
        $columns_names = implode(",", $columns);
        $placeholders = implode(",", array_fill(0, count($values), "?"));
        $res = $conn->prepare("INSERT INTO $tableName ($columns_names) VALUES ($placeholders)");
        $res->execute($values);
    }

    public static function update($tableName, $columns, $values, $id, $conn) {
        $columns_values = [];
        for($i = 0; $i < count($columns);  $i++) {
            array_push($columns_values, "$columns[$i] = $values[$i]");
        }
        $string = implode(",", $columns_values);

        $conn->query("UPDATE $tableName SET $string WHERE id = $id");
    }

    public static function delete($tableName, $id, $conn){
        $conn->query("DELETE FROM $tableName WHERE id = $id");
    }
    public static function getAll($tableName, $conn){
       return $conn->query("SELECT * FROM $tableName");
    }
    public static function getById($tableName, $id, $conn){
        $req = $conn->query("SELECT * FROM $tableName WHERE id = $id");
        return $req->fetch();
    }
}
?>
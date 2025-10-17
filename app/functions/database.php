<?php 

function connect(){
    $pdo = new \PDO("mysql:host=localhost;dbname=phpudemy;charset=utf8", 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    return $pdo;
}

function create($table, $fields){

    $pdo = connect();
    
    if(!is_array($fields)){
        $fields = (array) $fields;
    }
    $sql = "insert into {$table}";
    $sql .= "(". implode(',', array_keys($fields)) . ")";
    $sql .= " values(". ":" . implode(',:', array_keys($fields)) . ")";
    $insert = $pdo->prepare($sql);
    return $insert->execute($fields);
}

function all($table){
    $pdo = connect();
    $sql = "select * from {$table}";
    $list = $pdo->query($sql);
    $list->execute();

    return $list->fetchAll();
}

function update(){

}

function find($table,$field,$value){
    $pdo = connect();

    $value = filter_var($value, FILTER_SANITIZE_NUMBER_INT);

    $sql = "select * from {$table} where {$field} = :{$field}";
    $find = $pdo->prepare($sql);
    $find->bindValue($field,$value);
    $find->execute();

    return $find->fetch();
}

function delete(){

}
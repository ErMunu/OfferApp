<?php

class QueryBuilder
{
    protected  $pdo;
    private $user;

    public function __construct($pdo)
    {
        $this -> pdo = $pdo;
        $this -> user = $_SESSION['username'];
    }

    public function checkCredentials($username, $password)
    {
        $statement = $this -> pdo -> prepare("select * from users where username = '{$username}' and password = '{$password}'");
        $statement -> execute();
        return $statement -> fetchAll(PDO::FETCH_CLASS);
    }

    public function selectAll($table)
    {

        if($this->user === 'admin')
        {
            $statement = $this -> pdo -> prepare("select * from {$table} order by id desc");
        } else {
            $statement = $this -> pdo -> prepare("select * from {$table} where username = '$this->user' order by id desc");
        }

        $statement -> execute();

        return $statement -> fetchAll(PDO::FETCH_CLASS);
    }

    public function selectID($table,$id)
    {
        if($this->user === 'admin')
        {
            $statement = $this -> pdo -> prepare("select * from {$table} where id={$id}");
        } else {
            $statement = $this -> pdo -> prepare("select * from {$table} where id={$id} and username = '$this->user'");

        }

        $statement -> execute();

        return $statement -> fetchAll(PDO::FETCH_CLASS);
    }

    public function insert($table, $parameters)
    {
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );

        try {
            $statement = $this -> pdo -> prepare($sql);

            $statement -> execute($parameters);

            $last_id = $this -> pdo ->lastInsertId();
            return $last_id;

        } catch (Exception $e){
            die($e -> getMessage());

        }
    }

    public function update($table, $parameters, $id)
    {
        $keys = "";

        foreach (array_keys($parameters) as $key)
        {
            if (!empty([$key]) || $key != "" || $key != NULL)
            {
                $keys .= "`$key` = :$key ,";
            }
        }
        $keys = trim($keys,",");
        $sql = "UPDATE `$table` SET $keys where `id` = $id";
          
        try {
            $statement = $this -> pdo -> prepare($sql);
            $statement -> execute($parameters);

        } catch (Exception $e){
            die($e -> getMessage());

        }

    }

    public function delete($table1, $key, $value)
    {
        try {
                $statement = $this -> pdo -> prepare("delete from {$table1} where {$key} = {$value}");
                $statement -> execute();
            } catch (Exception $e){
                die($e -> getMessage());

        }
    }
}
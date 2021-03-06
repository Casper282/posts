<?php
namespace App\Db\Components;
use PDO;
use PDOException;

class Connection{
    public static function make($config){
        try{
            return new PDO(
                "mysql:host={$config['host']};dbName={$config['db']}",
                $config['login'],
                $config['password'],
                $config['opt']
            );
        }
        catch (PDOException $e){
            die($e->getMessage());
        }
    }
}
<?php
namespace app\models;

use Exception;
use \PDO;

class Model
{
    public $pdo;

    public function __construct()
    {
        $dsn = _DBTYPE . ':host=' ._HOST. ';dbname=' . _DBNAME . ';options=' . _CHARSET;

        try{
            $this->pdo = new PDO($dsn, _DBUSER, _DBPASSWORD);
            $this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (Exception $e) {
            var_dump("DB 접속 중 에러가 발생 하였습니다. : ". $e->getMessage());
        }
    }
}

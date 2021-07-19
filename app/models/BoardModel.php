<?php
namespace app\models;

use app\models\Model;
use \PDO;

class BoardModel extends Model
{
    public function selectList($id, $pageNo)
    {
        $sql = 'SELECT id, title FROM board ';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}

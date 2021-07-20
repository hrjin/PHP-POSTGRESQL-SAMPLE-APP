<?php
namespace app\models;

use DateTimeZone;
use Exception;
use PDO;

class BoardModel extends Model
{
    public function selectList($id, $pageNo)
    {
        $sql = 'SELECT id, title, writer FROM board ';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function insertBoard($title, $content)
    {
        $date = date("Y-m-d H:i:s");

        try {
            $sql = "INSERT INTO board (title, content, writer, created) VALUES (?, ?, ?, ?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([$title, $content, 'hrjin', $date]);
        } catch (Exception $exception) {
            var_dump("글 등록 중 에러 발생 : ".$exception->getMessage());
        }
    }

    public function getBoardInfo($id)
    {
        $sql = "SELECT * FROM board WHERE id = '$id'";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }
}

<?php
namespace app\controllers;

use function MongoDB\BSON\toJSON;

class BoardController extends Controller
{
    public function index($id, $pageNo)
    {
        $model = new \app\models\BoardModel();
        $list = $model->selectList($id, $pageNo);

        require_once 'app/views/board/index.php';
    }

}

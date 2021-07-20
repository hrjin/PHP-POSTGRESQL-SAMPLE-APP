<?php
namespace app\controllers;

use app\models\BoardModel;

/**
 * Board Controller 클래스
 *
 * Class BoardController
 * @package app\controllers
 */
class BoardController extends Controller
{
    /**
     * 메인 페이지이자 게시판 목록 조회 페이지
     *
     * @param $id
     * @param $pageNo
     *
     */
    public function index($id, $pageNo)
    {
        $model = new BoardModel();
        $list = $model->selectList($id, $pageNo);

        require_once 'app/views/board/index.php';
    }


    /**
     * 글쓰기 페이지로 이동
     *
     * @param $id
     * @param $pageNo
     */
    public function writeView($id, $pageNo) {
        require_once 'app/views/board/write.php';
    }


    /**
     * 게시글 저장
     *
     * @param $id
     * @param $pageNo
     */
    public function insertBoard($id, $pageNo) {
        $model = new BoardModel();

        if(isset($_POST["submit_insert_board"])) {
            $model -> insertBoard($_POST["title"], $_POST["content"]);
        }

        header('location:/board/index');
    }

    public function view($id, $pageNo) {
        $model = new BoardModel();
        $info = $model -> getBoardInfo($id);

        require_once 'app/views/board/get.php';
    }
}

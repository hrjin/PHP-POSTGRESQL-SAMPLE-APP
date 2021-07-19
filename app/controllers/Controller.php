<?php
namespace app\controllers;

class Controller
{
    public function __construct($menu, $action, $id, $pageNo)
    {
        if (!file_exists(_ROOT.'/app/models/'.$menu.'Model.php')) {
            var_dump('Model Class not found.(app/models/'.$menu.'Model.php)');
            exit();
        }

        $this->$action($id, $pageNo);
    }

}

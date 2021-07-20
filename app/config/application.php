<?php
namespace app\config;

class application
{
    public $action;

    public function __construct()
    {
        $requestUri = $_SERVER['REQUEST_URI'];
        $getUrl = '';

        if (isset($requestUri)) {
            $getUrl = rtrim($requestUri, '/');
            $getUrl = filter_var($getUrl, FILTER_SANITIZE_URL);
        }

        $getParams = explode('/', $getUrl);

        $params['menu']     = isset($getParams[1]) && $getParams[1] != '' ? $getParams[1] : 'board';
        $params['action']   = isset($getParams[2]) && $getParams[2] != '' ? $getParams[2] : 'index';
        $params['id']      = isset($getParams[3]) && $getParams[3] != '' ? $getParams[3] : null;
        $params['pageNum']  = isset($getParams[4]) && $getParams[4] != '' ? $getParams[4] : null;

        if (!file_exists('app/controllers/'. $params['menu'] .'Controller.php')) {
            echo "해당 컨트롤러가 존재하지 않습니다.";
            exit();
        }

        $controllerName = '\app\controllers\\'.$params['menu'].'controller';
        new $controllerName($params['menu'], $params['action'], $params['id'], $params['pageNum']);
    }

}

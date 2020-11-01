<?php
/**
 * Created by PhpStorm.
 * User: Юрий
 * Date: 25.03.2019
 * Time: 5:37
 */

namespace app\engine;


class Request
{

    protected $requestString;
    protected $method;
    protected $controllerName;
    protected $actionName;
    protected $params;

    public function __construct()
    {
        $this->requestString = $_SERVER['REQUEST_URI'];
        $this->method = $_SERVER['REQUEST_METHOD'];
        $this->parseRequest();
        //var_dump($this->actionName);
        //var_dump($this->requestString);
    }

    private function parseRequest()
    {
        $url = explode('/', $this->requestString);
        $this->controllerName =$url [1];
        $this->actionName = $url[2];
        $this->params = $_REQUEST;

        /*
        var_dump($this->requestString);
        var_dump($url);*/
    }

    /**
     * @return mixed
     */
    public function getRequestString()
    {
        return $this->requestString;
    }

    /**
     * @return mixed
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @return mixed
     */
    public function getControllerName()
    {

        return $this->controllerName;
    }

    /**
     * @return mixed
     */
    public function getActionName()
    {
        return $this->actionName;
    }

    /**
     * @return mixed
     */
    public function getParams()
    {
        return $this->params;
    }

}
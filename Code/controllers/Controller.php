<?php


namespace app\controllers;


use app\engine\php;
use app\interfaces\IRenderer;
use app\model\Basket;
use app\model\Users;
use http\Client\Curl\User;


class Controller implements IRenderer
{
    private $action;
    private $defaultAction = "index";
    private $layout = "main";
    private $useLayout = true;
    private $renderer;

    public function __construct($renderer)
    {
        $this->renderer = $renderer;
    }

    public function runAction($action = null)
    {


        $this->action = $action ?: $this->defaultAction;


        $method = "action" . ucfirst($this->action);


        if (method_exists($this, $method)) {
            $this->$method();
        } else {
            echo "404";
        }

    }



    public function render($template, $params = [])
    {
        if ($this->useLayout) {
            return $this->renderTemplate("layouts/{$this->layout}",
                ['content' => $this->renderTemplate($template, $params),
                    'count' => Basket::getCountWhere('session_id', session_id()),
                    'auth' => Users::isAuth(),
                    'username' => Users::getName(),]);
        } else {
            return $this->renderTemplate($template, $params);
        }
    }

    public function renderTemplate($template, $params = [])
    {

        return $this->renderer->renderTemplate($template, $params);
    }

    /*
    public function renderTwig($template, $params = [])
    {
        if ($this->useLayout) {
            return $this->renderTemplateTwig("layouts/{$this->layout}",['content' => $this->renderTemplateTwig($template, $params)]);
        } else {
            return $this->renderTemplateTwig($template, $params);
        }
    }

    public function renderTemplateTwig($template, $params = [])
    {
        $loader = new \Twig\Loader\FilesystemLoader('../twig');
        $twig = new \Twig\Environment($loader);

        echo $twig->render($template . ".tmpl", $params);
    }*/
}
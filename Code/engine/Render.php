<?php
/**
 * Created by PhpStorm.
 * User: Юрий
 * Date: 21.03.2019
 * Time: 4:48
 */

namespace app\engine;


use app\interfaces\IRenderer;

class Render implements IRenderer
{
    public function renderTemplate($template, $params = [])
    {
        ob_start();
        extract($params);
        $templatePath = TEMPLATE_DIR . $template . ".php";
        include $templatePath;
        return ob_get_clean();
    }
}
<?php

namespace app\controllers;


use app\model\Products;

class ProductControllerTwig extends Controller
{



    public function actionIndex()
    {
        $catalog = Products::getAll();
        echo $this->renderTwig("catalog",['catalog'=>$catalog]);

    }

    public function actionCard()
    {
        $id = $_GET['id'];
        $product = Products::getOne($id);
        echo $this->renderTwig("card", ['product' => $product]);
    }


}
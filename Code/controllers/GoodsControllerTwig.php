<?php

namespace app\controllers;


use app\model\Goods;

class GoodsControllerTwig extends Controller
{



    public function actionIndex()
    {
        $catalog = Goods::getAll();
        echo $this->renderTwig("goodsCatalog",['catalog'=>$catalog]);

    }

    public function actionCard()
    {
        $id = $_GET['id'];
        $goods = Goods::getOne($id);
        //var_dump($goods);
        echo $this->renderTwig("goodCard", ['good' => $goods]);
    }


}
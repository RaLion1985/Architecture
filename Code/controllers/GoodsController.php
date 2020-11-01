<?php

namespace app\controllers;


use app\model\Goods;

class GoodsController extends Controller
{



    public function actionIndex()
    {
        $catalog = Goods::getAll();
        echo $this->render("goodsCatalog.tmpl",['catalog'=>$catalog]);

    }

    public function actionCard()
    {
        $id = $_GET['id'];
        $goods = Goods::getOne($id);
        //var_dump($goods);
        echo $this->render("goodCard", ['good' => $goods]);
    }


}
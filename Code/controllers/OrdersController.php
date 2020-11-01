<?php
/**
 * Created by PhpStorm.
 * User: Юрий
 * Date: 06.04.2019
 * Time: 19:11
 */

namespace app\controllers;

use app\model\Users;
use app\model\Orders;
use app\engine\Request;


class OrdersController extends Controller
{
    public function actionIndex()
    {
        $ordersCatalog = Orders::getAll();
        //var_dump($ordersCatalog);
        echo $this->render("orders",['orders'=>$ordersCatalog]);

    }

    public function actionOrderEdit()
    {
        $id = (new Request())->getParams()['id'];
        $order = Orders::getOne($id);
        echo $this->render("OrderEdit", ['order' => $order]);
    }

    public function actionChangeStatus() {
        $id = (new Request())->getParams()['id'];

        Orders::changeStatus($id);

            //header('Content-Type: application/json');
            echo json_encode(['response' => 1]);

    }
    public function actionMakeOrder (){

        $params = [
            'session'=>$_POST['session'],
        'name'=>$_POST['name'],
        'lastname'=>$_POST['lastName'],
        'phone'=>$_POST['phone'],
        ];
        Orders::makeOrder($params);
        session_destroy();
        echo $this->render('MakeOrder',[]);

    }
}
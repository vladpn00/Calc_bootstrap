<?php
/**
 * Created by PhpStorm.
 * User: aaz
 * Date: 21.07.16
 * Time: 15:51
 */
namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\TestForm;

class TestController extends Controller
{
    public function actionTest()
    {
        $model = new TestForm();
        
        $req = Yii::$app->request;

       if ($model->load($req->post())&& $model->validate() && $req->isAjax)
        {
            return $model->calc();
        }
        elseif (!$req->isAjax)
        {
            return $this->render('test', ['model' => $model]);

        }
    }
}
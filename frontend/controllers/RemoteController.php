<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use app\models\Value;

class RemoteController extends Controller
{
    public function actionIndex()
    {
        $value = Value::getLastValue();
       
        return $this->render('values', ['value' => $value]);
    }

    public function actionAddValue($sensor1, $sensor2, $sensor3, $sensor4)
    {      
        Value::addValue($sensor1, $sensor2, $sensor3, $sensor4);

        return $this->redirect("/frontend/web/remote");
    }
}
?>
<?php

namespace frontend\controllers;

use yii\rest\ActiveController;
use yii\data\ActiveDataProvider;
use app\models\Value;

class ValueController extends ActiveController
{
    public $modelClass = 'app\models\Value';

    /*public function actionTest()
    {
        return new ActiveDataProvider([
            'query' => Value::find(),
        ]);
    }*/

    public function actions()
    {
        $actions = parent::actions();

        unset($actions['index'], $actions['view'], $actions['update'], $actions['delete'], $actions['options']);

        return $actions;
    }
}

?>

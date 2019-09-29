<?php

namespace app\models;

use yii\db\ActiveRecord;

class Value extends ActiveRecord
{
    public static function tableName()
    {
        return '{{Value}}';
    }

    public function rules()
    {
        return [
            ['Sensor_1', 'default', 'value' => 0],
            ['Sensor_2', 'default', 'value' => 0],
            ['Sensor_3', 'default', 'value' => 0],
            ['Sensor_4', 'default', 'value' => 0],
            ['Date', 'default', 'value' => '2019-01-01']
        ];
    }

    public static function getLastValue()
    {
        return static::find()->orderBy(['Value_id' => SORT_DESC])->limit(1)->one();
    }

    public static function addValue($sensor1, $sensor2, $sensor3, $sensor4)
    {
        $value = new Value();
        
        $value->Sensor_1 = $sensor1;
        $value->Sensor_2 = $sensor2;
        $value->Sensor_3 = $sensor3;
        $value->Sensor_4 = $sensor4;
        $value->Date = date();

        $value->save();   
    }
}
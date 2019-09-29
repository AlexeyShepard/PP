<?php
use yii\helpers\html;
use yii\helpers\url;
?>

<!DOCTYPE HTML>
<html>
<header>
    <meta http-equiv="Refresh" content="1" URL="http://pp/frontend/web/remote"/>
</header>
<h2>Remote sensor control</h2>
ver 1.0 2019-Sep-23 <br> <br>

<table border="1">
<tr>
    <th>basket</th>
    <th>Sensor 1</th>
    <th>Sensor 2</th>
    <th>Sensor 3</th>
    <th>Sensor 4</th>
</tr>
<tr>   
    <td>basket</td>
    <td><?= Html::encode($value->Sensor_1) ?></td>
    <td><?= Html::encode($value->Sensor_2) ?></td>
    <td><?= Html::encode($value->Sensor_3) ?></td>
    <td><?= Html::encode($value->Sensor_4) ?></td>
</tr>
</table>

Дата: <?= Html::encode($value->Date) ?> <br>
<a href="wwww.artonit.ru">www.artonit.ru</a> <br> <br>
</html>
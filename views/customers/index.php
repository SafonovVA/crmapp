<?php

use yii\data\ArrayDataProvider;
use yii\widgets\ListView;

/**
 * @var ArrayDataProvider $records
 */


echo ListView::widget([
    'options' => [
      'class' => 'list-view',
      'id' => 'search_results',
    ],
    'itemView' => '_customer',
    'dataProvider' => $records
]);
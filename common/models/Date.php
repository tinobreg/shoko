<?php

namespace common\models;

use Yii;
use \common\models\base\Date as BaseDate;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "date".
 */
class Date extends BaseDate
{
    const STATUS_INACTIVE = 1;
    const STATUS_ACTIVE = 2;
    const STATUS_DONE = 3;
}

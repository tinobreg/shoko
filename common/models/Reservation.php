<?php

namespace common\models;

use Yii;
use \common\models\base\Reservation as BaseReservation;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "reservation".
 */
class Reservation extends BaseReservation
{

public function behaviors()
    {
        return ArrayHelper::merge(
            parent::behaviors(),
            [
                # custom behaviors
            ]
        );
    }

    public function rules()
    {
        return ArrayHelper::merge(
             parent::rules(),
             [
                  # custom validation rules
             ]
        );
    }
}

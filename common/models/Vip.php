<?php

namespace common\models;

use Yii;
use \common\models\base\Vip as BaseVip;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "vip".
 */
class Vip extends BaseVip
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

<?php

namespace common\models;

use Yii;
use \common\models\base\VipManager as BaseVipManager;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "vip_manager".
 */
class VipManager extends BaseVipManager
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

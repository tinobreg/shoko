<?php

namespace common\models;

use Yii;
use \common\models\base\UserData as BaseUserData;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "user_data".
 */
class UserData extends BaseUserData
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

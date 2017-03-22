<?php

namespace common\models;

use Yii;
use \common\models\base\ListFriday as BaseListFriday;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "list_friday".
 */
class ListFriday extends BaseListFriday
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

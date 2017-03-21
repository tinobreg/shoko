<?php

namespace common\models;

use Yii;
use \common\models\base\Table as BaseTable;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "table".
 */
class Table extends BaseTable
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

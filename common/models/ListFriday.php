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
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idListFriday' => Yii::t('app', '#'),
            'idUser' => Yii::t('app', 'Usuario'),
            'name' => Yii::t('app', 'Nombre'),
            'lastName' => Yii::t('app', 'Apellido'),
            'phone' => Yii::t('app', 'Telefono'),
            'instagram' => Yii::t('app', 'Instagram'),
            'birthday' => Yii::t('app', 'Cumpleaños'),
            'idDate' => Yii::t('app', 'Fecha')
        ];
    }
}

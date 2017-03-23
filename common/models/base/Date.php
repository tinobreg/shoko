<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace common\models\base;

use Yii;

/**
 * This is the base-model class for table "date".
 *
 * @property integer $idDate
 * @property integer $date
 * @property integer $status
 *
 * @property \common\models\Reservation[] $reservations
 * @property string $aliasModel
 */
abstract class Date extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'date';
    }


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date', 'status'], 'required'],
            [['date', 'status'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idDate' => 'Id Date',
            'date' => 'Date',
            'status' => 'Estado'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReservations()
    {
        return $this->hasMany(\common\models\Reservation::className(), ['idDate' => 'idDate']);
    }




}

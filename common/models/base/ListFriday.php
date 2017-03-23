<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace common\models\base;

use Yii;

/**
 * This is the base-model class for table "list_friday".
 *
 * @property integer $idListFriday
 * @property integer $idUser
 * @property string $name
 * @property string $lastName
 * @property string $phone
 * @property string $instagram
 * @property integer $birthday
 * @propertu integer $idDate
 *
 * @property \common\models\User $idUser0
 * @property string $aliasModel
 */
abstract class ListFriday extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'list_friday';
    }


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idUser', 'name', 'lastName', 'phone', 'idDate'], 'required'],
            [['idUser', 'birthday', 'idDate'], 'integer'],
            [['name', 'lastName', 'phone', 'instagram'], 'string', 'max' => 255],
            [['idUser'], 'exist', 'skipOnError' => true, 'targetClass' => \common\models\User::className(), 'targetAttribute' => ['idUser' => 'id']]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idListFriday' => Yii::t('app', 'Id List Friday'),
            'idUser' => Yii::t('app', 'Id User'),
            'name' => Yii::t('app', 'Name'),
            'lastName' => Yii::t('app', 'Last Name'),
            'phone' => Yii::t('app', 'Phone'),
            'instagram' => Yii::t('app', 'Instagram'),
            'birthday' => Yii::t('app', 'Birthday'),
            'idDate' => Yii::t('app', 'Fecha')
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUser0()
    {
        return $this->hasOne(\common\models\User::className(), ['id' => 'idUser']);
    }




}
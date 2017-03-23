<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ListForm extends Model
{
    public $name;
    public $lastName;
    public $phone;
    public $instagram;
    public $birthday;
    public $listOwner;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'lastName', 'phone', 'birthday'], 'required', 'message'=>'{attribute} no puede estar vacío.'],
            [['name', 'lastName', 'phone', 'instagram', 'listOwner', 'birthday'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'name'=>'Nombre',
            'lastName'=>'Apellido',
            'phone'=>'Telefono',
            'instagram'=>'Instagram',
            'birthday'=>'Cumpleaños',
            'listOwner'=>'Lista'
        ];
    }
}

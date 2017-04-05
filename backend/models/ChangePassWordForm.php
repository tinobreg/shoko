<?php
namespace backend\models;

use Yii;
use yii\base\Model;
use common\models\User;

/**
 * Login form
 */
class ChangePassWordForm extends Model
{
    public $oldPassword;
    public $newPassword;
    public $newPasswordRepeat;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['newPassword', 'oldPassword', 'newPasswordRepeat'], 'required','message'=>'{attribute} no puede estar vacío.'],
            // rememberMe must be a boolean value
            ['oldPassword', 'validatePassword'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'newPassword'=>'Nueva Contraseña',
            'oldPassword' => 'Vieja Contraseña',
            'newPasswordRepeat' => 'Repetir Nueva Contraseña'
        ];
    }

    /**
     * Validates the password.
     * This method serves as the inline validation for password.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */
    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();
            if (!$user || !$user->validatePassword($this->oldPassword)) {
                $this->addError($attribute, 'Incorrect password.');
            }
        }
    }


    public function changePassword()
    {
        if($this->newPassword === $this->newPasswordRepeat){
            $user = User::findById(Yii::$app->user->id);
            $user->setPassword($this->newPassword);
            if($user->save()){
                return true;
            }
            return false;
        }
    }
}

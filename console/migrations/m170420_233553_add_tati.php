<?php

use yii\db\Migration;

class m170420_233553_add_tati extends Migration
{
    public function up()
    {
        $user = new \common\models\User();
        $user->email = 'tati_f1999@hotmail.com';
        $user->username = 'tfernandez';
        $user->setPassword('123456');
        $user->generateAuthKey();
        $user->status = \common\models\User::STATUS_ACTIVE;
        $user->created_at = time();
        $user->updated_at = time();
        $user->idUserType =  \common\models\User::USER_USER;
        if($user->save()){
            $userData =  new \common\models\UserData();
            $userData->idUser = $user->id;
            $userData->listName = 'Taty Fernandez';
            $userData->fullName = 'Tatiana Fernandez';
            $userData->save();


            $auth = Yii::$app->authManager;
            $auth->revoke($auth->getRole('shokoUser'), $user->id);
            $auth->assign($auth->getRole('shokoUser'), $user->id);
        }
    }

    public function down()
    {
        return true;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}

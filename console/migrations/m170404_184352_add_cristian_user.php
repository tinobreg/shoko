<?php

use yii\db\Migration;

class m170404_184352_add_cristian_user extends Migration
{
    public function up()
    {
        $user = new \common\models\User();
        $user->email = 'exis.cs@live.com.ar';
        $user->username = 'cseijo';
        $user->setPassword('123456');
        $user->generateAuthKey();
        $user->status = \common\models\User::STATUS_ACTIVE;
        $user->created_at = time();
        $user->updated_at = time();
        $user->idUserType =  \common\models\User::USER_USER;
        if($user->save()){
            $userData =  new \common\models\UserData();
            $userData->idUser = $user->id;
            $userData->listName = 'Cristian Seijo';
            $userData->fullName = 'Cristian Seijo';
            $userData->save();
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

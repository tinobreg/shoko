<?php

use yii\db\Migration;

class m170405_174900_add_cristian_permisos extends Migration
{
    public function up()
    {
        //Create Roles
        $auth = Yii::$app->authManager;

        $user = \common\models\User::findByUsername('cseijo');
        $auth->revoke($auth->getRole('shokoUser'), $user->id);
        $auth->assign($auth->getRole('shokoUser'), $user->id);

        return true;
    }

    public function down()
    {

        return false;
    }
}

<?php

use yii\db\Migration;

class m170404_171342_add_roles extends Migration
{
    public function up()
    {
        $this->addColumn('user','idUserType', $this->integer()->notNull());

        $auth = Yii::$app->authManager;
        //Create Roles
        $managerRole = $auth->createRole('shokoManager');
        $managerRole->description = 'Manager Role for Shoko';

        $userRole = $auth->createRole('shokoUser');
        $userRole->description = 'User Role for Shoko';

        $auth->remove($managerRole);
        $auth->remove($userRole);

        $auth->add($managerRole);
        $auth->add($userRole);

        $auth->addChild($managerRole, $userRole);


        $user = \common\models\User::find()->all();
        foreach ($user as $u){
            if($u->primaryKey == 1 || $u->primaryKey == 14){
                $u->idUserType = \common\models\User::USER_MANAGER;
                $auth->revoke($managerRole, $u->primaryKey);
                $auth->assign($managerRole, $u->primaryKey);
            }else{
                $u->idUserType = \common\models\User::USER_USER;
                $auth->revoke($userRole, $u->primaryKey);
                $auth->assign($userRole, $u->primaryKey);
            }
            $u->save();
        }
    }

    public function down()
    {
        $auth = Yii::$app->authManager;
        $managerRole = $auth->createRole('shokoManager');
        $managerRole->description = 'Manager Role for Shoko';

        $userRole = $auth->createRole('shokoUser');
        $userRole->description = 'User Role for Shoko';

        $auth->remove($managerRole);
        $auth->remove($userRole);

        $this->dropColumn('user','idUserType');
    }
}
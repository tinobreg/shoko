<?php

use yii\db\Migration;

class m170322_001555_add_users extends Migration
{
    public function safeUp()
    {

        $users = [
            [
                'username'=>'Martin Obregon',
                'email'=>'tinobreg@gmail.com',
                'listName'=>'Martin Obregon',
            ],
            [
                'username'=>'Lucas Ballerini',
                'email'=>'luc-1408@hotmail.com',
                'listName'=>'Lucas Ballerini',
            ],
            [
                'username'=>'Astrid Carosella',
                'email'=>'as.carosella@hotmail.com',
                'listName'=>'Astrid Carosella',
            ],
            [
                'username'=>'Mariano De Luca',
                'email'=>'marianoluisdeluca@gmail.com',
                'listName'=>'Mariano De Luca',
            ],
            [
                'username'=>'Abril Scazzuso',
                'email'=>'abrucecilia12@hotmail.com',
                'listName'=>'Abril Scazzuso',
            ],
            [
                'username'=>'Felipe Sosena',
                'email'=>'felipe.sosena@gmail.com',
                'listName'=>'Feli Sosena',
            ],
            [
                'username'=>'Cristian Prado Maüle',
                'email'=>'cpradomaule@hotmail.com',
                'listName'=>'Cristian Prado',
            ],
            [
                'username'=>'Gonzalo Rosica',
                'email'=>'gonzalo.rosica@gmail.com',
                'listName'=>'Gonza Rosica',
            ],
            [
                'username'=>'Luca Barrera',
                'email'=>'luca_barrera@live.com.ar',
                'listName'=>'Luca Barrera',
            ],
            [
                'username'=>'Josefina Caeiro',
                'email'=>'jochhe1507@gmail.com',
                'listName'=>'Astrid Carosella',
            ],
            [
                'username'=>'Nicolas Landa',
                'email'=>'niclanda321@gmail.com',
                'listName'=>'Nicolas Landa',
            ],
            [
                'username'=>'Agustin Gris',
                'email'=>'agus_eventos@hotmail.com',
                'listName'=>'Agus Gris',
            ]
        ];


        foreach ($users as $u){
            $user = new \common\models\User();
            $user->email = $u['email'];
            $user->username = $u['username'];
            $user->setPassword('123456');
            $user->generateAuthKey();
            $user->status = \common\models\User::STATUS_ACTIVE;
            $user->created_at = time();
            $user->updated_at = time();
            if($user->save()){
                $userData =  new \common\models\UserData();
                $userData->idUser = $user->id;
                $userData->listName = $u['listName'];
                $userData->save();
            }

        }
        return true;
    }

    public function safeDown()
    {
        return true;
    }
}

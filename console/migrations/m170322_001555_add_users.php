<?php

use yii\db\Migration;

class m170322_001555_add_users extends Migration
{
    public function safeUp()
    {

        $users = [
            [
                'username'=>'mobregon',
                'fullName'=>'Martin Obregon',
                'email'=>'tinobreg@gmail.com',
                'listName'=>'Martin Obregon',
            ],
            [
                'username'=>'lballerini',
                'fullName'=>'Lucas Ballerini',
                'email'=>'luc-1408@hotmail.com',
                'listName'=>'Lucas Ballerini',
            ],
            [
                'username'=>'acarosella',
                'fullName'=>'Astrid Carosella',
                'email'=>'as.carosella@hotmail.com',
                'listName'=>'Astrid Carosella',
            ],
            [
                'username'=>'mdeluca',
                'fullName'=>'Mariano De Luca',
                'email'=>'marianoluisdeluca@gmail.com',
                'listName'=>'Mariano De Luca',
            ],
            [
                'username'=>'ascazzuso',
                'fullName'=>'Abril Scazzuso',
                'email'=>'abrucecilia12@hotmail.com',
                'listName'=>'Abril Scazzuso',
            ],
            [
                'username'=>'fsosena',
                'fullName'=>'Felipe Sosena',
                'email'=>'felipe.sosena@gmail.com',
                'listName'=>'Feli Sosena',
            ],
            [
                'username'=>'cprado',
                'fullName'=>'Cristian Prado Maüle',
                'email'=>'cpradomaule@hotmail.com',
                'listName'=>'Cristian Prado',
            ],
            [
                'username'=>'grosica',
                'fullName'=>'Gonzalo Rosica',
                'email'=>'gonzalo.rosica@gmail.com',
                'listName'=>'Gonza Rosica',
            ],
            [
                'username'=>'lbarrera',
                'fullName'=>'Luca Barrera',
                'email'=>'luca_barrera@live.com.ar',
                'listName'=>'Luca Barrera',
            ],
            [
                'username'=>'jcaeiro',
                'fullName'=>'Josefina Caeiro',
                'email'=>'jochhe1507@gmail.com',
                'listName'=>'Astrid Carosella',
            ],
            [
                'username'=>'nlanda',
                'fullName'=>'Nicolas Landa',
                'email'=>'niclanda321@gmail.com',
                'listName'=>'Nicolas Landa',
            ],
            [
                'username'=>'agris',
                'fullName'=>'Agustin Gris',
                'email'=>'agus_eventos@hotmail.com',
                'listName'=>'Agus Gris',
            ],
            [
                'username'=>'gsalibe',
                'fullName'=>'Gaston Salibe',
                'email'=>'gsalibe@gmail.com',
                'listName'=>'Gaston Salibe',
            ],
            [
                'username'=>'ggrau',
                'fullName'=>'Gonzalo Grau',
                'email'=>'barrasgonza@hotmail.com',
                'listName'=>'Gonza Kravi',
            ],
            [
                'username'=>'ccapria',
                'fullName'=>'Camila Capria',
                'email'=>'cam_capria@hotmail.com',
                'listName'=>'Cami Capria',
            ],
            [
                'username'=>'nversace',
                'fullName'=>'Narella Versace',
                'email'=>'nareversace@hotmail.com',
                'listName'=>'Nare Versace',
            ],
            [
                'username'=>'mmocciola',
                'fullName'=>'Matheus Mocciola',
                'email'=>'matheusmocciola10@gmail.com',
                'listName'=>'Matheus Mocciola',
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
                $userData->fullName = $u['fullName'];
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

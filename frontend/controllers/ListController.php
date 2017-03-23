<?php
namespace frontend\controllers;

use common\models\Date;
use common\models\ListFriday;
use common\models\User;
use frontend\models\ListForm;
use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

/**
 * Site controller
 */
class ListController extends Controller
{

    /**
     * Displays homepage.
     * @param $idUser integer
     * @param $idDate integer
     * @return mixed
     */
    public function actionIndex($idUser)
    {
        $user = User::findById($idUser);
        $date = Date::findOne(['status'=>Date::STATUS_ACTIVE]);
        $model = new ListForm();
        $model->listOwner = $user->userData0->listName;
        if ($model->load(Yii::$app->request->post())){
            if($model->validate()) {
                $list = new ListFriday();
                $list->name = $model->name;
                $list->lastName = $model->lastName;
                $list->birthday = (int)strtotime($model->birthday);
                $list->instagram = $model->instagram;
                $list->phone =  $model->phone;
                $list->idUser = $idUser;
                $list->idDate = $date->idDate;
                if($list->save()){
                    Yii::$app->session->setFlash('success', 'Ya estás anotado/a en lista');
                } else {
                    Yii::$app->session->setFlash('error', 'Por favor verifica tus datos');
                    echo '<pre>';
                    var_dump($list->getErrors());
                        echo '</pre>';
                    return $this->render('index', ['model'=>$model]);
                }
            }else{
                Yii::$app->session->setFlash('error', 'Hubo un error, por favor intenta de nuevo.');
            }
            return $this->refresh();
        }
        return $this->render('index', ['model'=>$model]);
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }
}

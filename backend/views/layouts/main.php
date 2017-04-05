<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'Shoko Administrador',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Inicio', 'url' => ['/site/index']]
    ];
    $users = \common\models\User::find()->where(['status'=>\common\models\User::STATUS_ACTIVE])->all();
    $items = [];

    foreach($users as $u){
        $items[]=['label' => $u->userData0->listName, 'url' => ['/list/index', 'idUser'=>$u->id]];
    }

    if(!Yii::$app->user->isGuest){
        $menuItems []=['label' => 'Listas', 'url' => ['/list/index']];
        $menuItems []=['label' => 'Datos', 'url'=>['/list/all-data']];
        if(Yii::$app->user->can('shokoManager')) {
            $menuItems [] = ['label' => 'Otras Listas', 'items' => $items];
        }
    }

    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Ingresar', 'url' => ['/site/login']];
    } else {
        $userItems [] = ['label' => 'Editar Información', 'url'=>['/user/update-info']];
        $userItems [] = ['label' => 'Cambiar contraseña', 'url'=>['/user/update-pass']];
        if(Yii::$app->user->can('shokoManager')) {
            $userItems [] = ['label' => 'Administrar Usuarios', 'url'=>['/user/index']];
        }
        $userItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Cerrar Sesion',
                ['class' => 'btn btn-danger btn-block']
            )
            . Html::endForm()
            . '</li>';

        $menuItems[] = ['label' => Yii::$app->user->identity->userData0->fullName, 'items' => $userItems];
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Shoko Listas <?= date('Y') ?></p>

        <p class="pull-right">Desarrollado por <a href="http://www.tinobreg.com">Martin Obregon</a></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

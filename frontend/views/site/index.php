<?php

use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $users /common/models/User[] */

$this->title = '.: Shôko Bs As :.';
?>
<div class="site-index" style="min-height: 600px">
    <div class="body-content">
        <div class="row text-center">
            <div class="col-xs-12" style="padding: 40px 0">
                <h1>Bienvenido a la revolución!</h1>
                <p class="lead">Av. La Plata 735 - Caballito - Buenos Aires</p>
            </div>
        </div>

        <div class="row" style="padding-bottom: 20px">
            <div class="col-xs-12 text-center">
                <h2>Listas :</h2>
            </div>
        </div>
        <div class="row" style="padding-bottom: 20px">
            <?php foreach($users as $user){?>
                <div class="col-xs-6 col-sm-3">
                    <?=\yii\helpers\Html::a($user->userData0->listName, ['list/index', 'idUser'=>$user->id], ['class'=>'btn btn-block btn-shoko', 'style'=>'margin-bottom: 15px']);?>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

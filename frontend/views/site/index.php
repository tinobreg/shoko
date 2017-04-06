<?php
/* @var $this yii\web\View */
/* @var $users /common/models/User[] */

use \yii\helpers\Url;

$this->title = '.: Shôko Bs As :.';
?>
<div class="site-index" style="min-height: 600px">
    <div class="body-content">
        <div class="row text-center">
            <div class="col-xs-12" style="padding: 40px 0">
                <h1>Bienvenido a la revolución!</h1>
                <p class="lead" style="text-decoration: line-through">Av. La Plata 735 - Caballito - Buenos Aires</p>
                <p class="lead">SOLO POR ESTE VIERNES TE ESPERAMOS EN</p>
                <h2>Av. CASARES 4015 y SARMIENTO (Brooklyn) - PALERMO - Buenos Aires</h2>
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
                    <?=\yii\helpers\Html::a($user->userData0->listName, Url::to(['list/index', 'idUser'=>$user->id, 'list'=>seoParam($user->userData0->listName)]), ['class'=>'btn btn-block btn-shoko', 'style'=>'margin-bottom: 15px']);?>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

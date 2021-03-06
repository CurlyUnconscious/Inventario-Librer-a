<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Autor */

$this->title = 'Actualizar Autor: ' . $model->nombre." ".$model->apellidos;
$this->params['breadcrumbs'][] = ['label' => 'Autors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nombre." ".$model->apellidos, 'url' => ['view', 'id' => $model->nombre." ".$model->apellidos]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="autor-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

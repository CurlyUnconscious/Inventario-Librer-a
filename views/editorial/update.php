<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Editorial */

$this->title = 'Actualizar Editorial: ' . $model->editorial;
$this->params['breadcrumbs'][] = ['label' => 'Editoriales', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->editorial, 'url' => ['view', 'id' => $model->editorial]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="editorial-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

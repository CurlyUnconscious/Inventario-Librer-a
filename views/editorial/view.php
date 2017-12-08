<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Editorial */

$this->title = $model->editorial;
$this->params['breadcrumbs'][] = ['label' => 'Editoriales', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="editorial-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id_editorial], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Borrar', ['delete', 'id' => $model->id_editorial], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Seguro de Borrar este elemento?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_editorial',
            'editorial',
        ],
    ]) ?>

</div>

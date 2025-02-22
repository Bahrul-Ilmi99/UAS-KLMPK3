<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Distributor $model */

$this->title = 'Create Distributor';
$this->params['breadcrumbs'][] = ['label' => 'Distributors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="distributor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

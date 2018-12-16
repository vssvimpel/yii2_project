<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MassageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Massages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="massage-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Massage', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'text:ntext',
            'name',
            'email:email',
            'views',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

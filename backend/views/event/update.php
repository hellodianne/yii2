<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Event */

$this->title = 'Update Event: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Events', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="event-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
      'model' => $model,
      'occasion' => $occasion,
      'location' => $location,
      'venue' => $venue,
      'eventType' => $eventType,
      'eventCategory' => $eventCategory,
      // 'eventStatus' => $eventStatus,
      'matchSystem' => $matchSystem,
      'sort' => $sort,
      'order' => $order,
    ]) ?>

</div>

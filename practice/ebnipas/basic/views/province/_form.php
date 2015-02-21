<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\region;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\province */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="province-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'province_code')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'province_description')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'region_id')->textInput() ?>
	
		<?php
	$region=region::find()->all();
	//use yii\helpers\ArrayHelper;
	$listData=ArrayHelper::map($region,'id','region_description');
	
	echo $form->field($model,'region')->dropDownList(
										$listData,
										['prompt'=>'Select..']);
						
	?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

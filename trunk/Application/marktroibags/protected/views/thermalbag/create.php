<?php
/* @var $this ThermalbagController */
/* @var $model Thermalbag */

$this->breadcrumbs=array(
	'Thermalbags'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Thermalbag', 'url'=>array('index')),
	array('label'=>'Manage Thermalbag', 'url'=>array('admin')),
);
?>

<h1>Create Thermalbag</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
/* @var $this ThermalbagController */
/* @var $model Thermalbag */

$this->breadcrumbs=array(
	'Thermalbags'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Thermalbag', 'url'=>array('index')),
	array('label'=>'Create Thermalbag', 'url'=>array('create')),
	array('label'=>'View Thermalbag', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Thermalbag', 'url'=>array('admin')),
);
?>

<h1>Update Thermalbag <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
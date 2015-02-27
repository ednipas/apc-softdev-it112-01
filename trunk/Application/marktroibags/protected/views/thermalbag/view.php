<?php
/* @var $this ThermalbagController */
/* @var $model Thermalbag */

$this->breadcrumbs=array(
	'Thermalbags'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Thermalbag', 'url'=>array('index')),
	array('label'=>'Create Thermalbag', 'url'=>array('create')),
	array('label'=>'Update Thermalbag', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Thermalbag', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Thermalbag', 'url'=>array('admin')),
);
?>

<h1>View Thermalbag #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'description',
		'admin_id',
	),
)); ?>

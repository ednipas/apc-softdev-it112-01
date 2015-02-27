<?php
/* @var $this BackpackController */
/* @var $model Backpack */

$this->breadcrumbs=array(
	'Backpacks'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Backpack', 'url'=>array('index')),
	array('label'=>'Create Backpack', 'url'=>array('create')),
	array('label'=>'Update Backpack', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Backpack', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Backpack', 'url'=>array('admin')),
);
?>

<h1>View Backpack #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'description',
		'admin_id',
	),
)); ?>

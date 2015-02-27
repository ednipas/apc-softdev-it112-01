<?php
/* @var $this Ecobag1Controller */
/* @var $model Ecobag1 */

$this->breadcrumbs=array(
	'Ecobag1s'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Ecobag1', 'url'=>array('index')),
	array('label'=>'Create Ecobag1', 'url'=>array('create')),
	array('label'=>'Update Ecobag1', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Ecobag1', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ecobag1', 'url'=>array('admin')),
);
?>

<h1>View Ecobag1 #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'description',
		'admin_id',
	),
)); ?>

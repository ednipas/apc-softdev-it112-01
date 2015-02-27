<?php
/* @var $this BackpackController */
/* @var $model Backpack */

$this->breadcrumbs=array(
	'Backpacks'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Backpack', 'url'=>array('index')),
	array('label'=>'Create Backpack', 'url'=>array('create')),
	array('label'=>'View Backpack', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Backpack', 'url'=>array('admin')),
);
?>

<h1>Update Backpack <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
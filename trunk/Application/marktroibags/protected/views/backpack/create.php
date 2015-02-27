<?php
/* @var $this BackpackController */
/* @var $model Backpack */

$this->breadcrumbs=array(
	'Backpacks'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Backpack', 'url'=>array('index')),
	array('label'=>'Manage Backpack', 'url'=>array('admin')),
);
?>

<h1>Create Backpack</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
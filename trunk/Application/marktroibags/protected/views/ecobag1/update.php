<?php
/* @var $this Ecobag1Controller */
/* @var $model Ecobag1 */

$this->breadcrumbs=array(
	'Ecobag1s'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ecobag1', 'url'=>array('index')),
	array('label'=>'Create Ecobag1', 'url'=>array('create')),
	array('label'=>'View Ecobag1', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Ecobag1', 'url'=>array('admin')),
);
?>

<h1>Update Ecobag1 <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
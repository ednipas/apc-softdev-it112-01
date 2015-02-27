<?php
/* @var $this Ecobag1Controller */
/* @var $model Ecobag1 */

$this->breadcrumbs=array(
	'Ecobag1s'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ecobag1', 'url'=>array('index')),
	array('label'=>'Manage Ecobag1', 'url'=>array('admin')),
);
?>

<h1>Create Ecobag1</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
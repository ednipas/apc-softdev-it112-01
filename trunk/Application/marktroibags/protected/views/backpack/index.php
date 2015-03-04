<?php
/* @var $this BackpackController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Backpacks',
);

$this->menu=array(
	array('label'=>'Create Backpack', 'url'=>array('create')),
	array('label'=>'Manage Backpack', 'url'=>array('admin')),
);
?>

<h1>Backpacks</h1>

<img src="css/Backpack.png" width="225" height="310" align="center">
<?php echo CHtml::button('Add to Cart', array('submit' => array('controller/action'))); ?>

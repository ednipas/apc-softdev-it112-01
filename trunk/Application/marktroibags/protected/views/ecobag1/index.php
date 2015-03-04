<?php
/* @var $this Ecobag1Controller */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ecobag1s',
);

$this->menu=array(
	array('label'=>'Create Ecobag1', 'url'=>array('create')),
	array('label'=>'Manage Ecobag1', 'url'=>array('admin')),
);
?>


<h1>Ecobags</h1>


<img src="css/eco_bag.png" width="330" height="310" align="center">
<?php echo CHtml::button('Add to Cart', array('submit' => array('controller/action'))); ?>
<img src="css/recyclable.jpg" width="330" height="310" align="center">
<?php echo CHtml::button('Add to Cart', array('submit' => array('controller/action'))); ?>
<img src="css/Katcha_bag.jpg" width="330" height="325" align="center">
<?php echo CHtml::button('Add to Cart', array('submit' => array('controller/action'))); ?>



<?php
/* @var $this ProductController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Products',
);

$this->menu=array(
	array('label'=>'Create Product', 'url'=>array('create')),
	array('label'=>'Manage Product', 'url'=>array('admin')),
);
?>

<h1>Products</h1>
<div id="sidebar">
		<?php $this->widget('ext.CDropDownMenu.CDropDownMenu',array(
            'style' => 'vertical', // or default or navbar(
			'items'=>array(
				array('label'=>'Backpacks', 'url'=>array('/student/admin')),
				array('label'=>'Shoulder Bags','url'=>array('/product'),
                    'items'=>array(
                            array('label'=>'Eco-bags', 'url'=>array('/site/contact')),
                          ),
                         
                                        ),
                array('label'=>'Clutch Bags','url'=>array(''),
                          
                                        ),
                                        
                            
				array('label'=>'Sports/Travel','url'=>array('/grades')),
                array('label'=>'Others ','url'=>array('/account')),
                array('label'=>'Promotional','url'=>array('/grades')),
			
			),
		)); ?>
	</div>



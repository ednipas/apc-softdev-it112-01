<?php
/* @var $this SiteController 
<p>Congratulations! You have successfully created your Yii application.</p> 

<p>You may change the content of this page by modifying the following two files:</p>
<ul>
	<li>View file: <code><?php echo __FILE__; ?></code></li>
	<li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>
<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p>
*/
$this->pageTitle=Yii::app()->name;
?>

<h1>Welcome to the Mark Troi Bags Online</h1>

<div id="sidebar">
		<?php $this->widget('ext.CDropDownMenu.CDropDownMenu',array(
            'style' => 'vertical', // or default or navbar(
			'items'=>array(
				array('label'=>'Backpacks', 'url'=>array('/student/admin')),
				array('label'=>'Shoulder Bags','url'=>array('/section'),
                         
                                        ),
                array('label'=>'Clutch Bags','url'=>array(''),
                          
                                        ),
                                        
                            
				array('label'=>'Sports/Travel','url'=>array('/grades')),
                array('label'=>'Others ','url'=>array('/account')),
                array('label'=>'Promotional','url'=>array('/grades')),
			
			),
		)); ?>
	</div>



 
<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p>





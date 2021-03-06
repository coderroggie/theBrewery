<?php /* @var $this Controller */ 

	$baseUrl = Yii::app()->request->baseUrl;
	$clientScript = Yii::app()->clientScript;

	// Minify JavaScript Files:
	Yii::app()->minScript->generateScriptMap('minFiles'); //Generate scriptMap for specified group
	Yii::app()->minScript->generateScriptMap(); //Generate scriptMap for all groups
	
	$clientScript->registerCoreScript('jquery');
	
	$clientScript->registerScriptFile('resources/js/external/handlebars.js');
	$clientScript->registerScriptFile('resources/js/external/handlebars.js');
	$clientScript->registerScriptFile('resources/js/billy.js');
	
	$clientScript->registerCssFile($baseUrl.'/resources/css/screen.css');
	
	$clientScript->registerCssFile($baseUrl.'/resources/css/main.css');
	$clientScript->registerCssFile($baseUrl.'/resources/css/form.css');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'Spirits', 'url'=>array('/spirits/spirits')),
				array('label'=>'Layout Demo', 'url'=>array('/resources/breweryIdea/demo.html')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y').' '.CHtml::encode(Yii::app()->name).' | All Rights Reserved.' ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<title><?php echo $title_for_layout; ?> - <?php echo __d('croogo', 'Croogo'); ?></title>
		<?php

		echo $this->Html->css(array(
//			'croogo-bootstrap',
//			'croogo-bootstrap-responsive',
				'admin'
		));
		echo $this->Layout->js();
		echo $this->Html->script(array(
//			'/croogo/js/html5',
			'jquery/jquery.min',
			'jquery/jquery.slug',
			'croogo-bootstrap.js',
			'underscore-min',
			'admin',
		));

		echo $this->fetch('script');
		echo $this->fetch('css');

		?>
	</head>
	<body class="popup">
		<div class="<?php echo $this->Layout->cssClass('container'); ?>">
			<div class="<?php echo $this->Layout->cssClass('row'); ?>">
				<div id="content" class="<?php echo $this->Layout->cssClass('columnFull'); ?>">
					<?php echo $this->Layout->sessionFlash(); ?>
					<?php echo $this->fetch('content'); ?>
				</div>
			</div>
		</div>
		<?php
		echo $this->Blocks->get('scriptBottom');
		echo $this->Js->writeBuffer();
		?>
	</body>
</html>

<?php $this->beginContent('//layouts/main'); ?>
	<?php
	$this->widget('bootstrap.widgets.TbButtonGroup', array(
			'type'=>'list',
			'buttons'=>$this->menu,
            'htmlOptions'=>array('class'=>'button-menu'),
		)
	);
	?>
<div class="pull-right">
	<div id="content">
		<?php echo $content; ?>
	</div><!-- content -->
</div>
<?php $this->endContent(); ?>

<?php echo $this->Form->create('Company'); ?>
	<fieldset>
		<legend><?php echo __('Editar empresa'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Actualizar')); ?>



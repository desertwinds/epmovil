<?php  echo $this->Html->css('cake.previous'); ?>
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Editar usuario'); ?></legend>
	<?php
		echo $this->Form->input('id');
                echo $this->Form->input('name', array('label' => 'Nombre'));
		echo $this->Form->input('type', array('options' => array(
                    'Superusuario' => 'Superusuario', 'Administrador' => 'Administrador',
                    'Ventas' => 'Ventas', 'Distribuidor' => 'Distribuidor'),
                    'label' => 'Tipo de usuario'));
		echo $this->Form->input('Company', array('label' => 'Empresa(s)', 'multiple' => 'checkbox'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Actualizar')); ?>


<?php echo $this->Html->script('jquery-1.6.2.min'); ?>
<?php echo $this->Html->script('jquery-ui.min'); ?>
<?php echo $this->Html->script('jquery.ui.datepicker-es'); ?>
<?php echo $this->Form->create('Order'); ?>
	<fieldset>
		<legend><?php echo __('Modificar pedido'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('client_id');
		echo $this->Form->input('operador');
		echo $this->Form->input('distribuidor');
		echo $this->Form->input('company_id');
		echo $this->Form->input('factura', array('readonly' => true));
		echo $this->Form->input('envio', array('dateFormat' => 'DMY',
                    'separator' => ' de ', 'minYear' => date('Y'), 
                    'maxYear' => date('Y') + 1));
		echo $this->Form->input('comentario');
		echo $this->Form->input('status', array('options' => array(
                    'En proceso' => 'En proceso', 'Cancelada' => 'Cancelada',
                    'Entregada' => 'Entregada')));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>


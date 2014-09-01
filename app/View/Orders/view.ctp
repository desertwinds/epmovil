<?php  echo $this->Html->css('cake.previous');?>
<div class="orders view">
<h2><?php echo __('Pedido'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($order['Order']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cliente'); ?></dt>
		<dd>
			<?php echo $this->Html->link($order['Client']['name'], array('controller' => 'clients', 'action' => 'view', $order['Client']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Operador'); ?></dt>
		<dd>
			<?php echo h($order['operador']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Distribuidor'); ?></dt>
		<dd>
			<?php echo h($order['distribuidor']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Empresa'); ?></dt>
		<dd>
			<?php echo h($order['Company']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Factura'); ?></dt>
		<dd>
			<?php echo h($order['Order']['factura']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha de emisión'); ?></dt>
		<dd>
			<?php echo h($order['Order']['emision']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha de envio'); ?></dt>
		<dd>
			<?php echo h($order['Order']['envio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado'); ?></dt>
		<dd>
			<?php echo h($order['Order']['status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Pedido'), array('action' => 'edit', $order['Order']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Cancelar pedido'), array('action' => 'delete', $order['Order']['id']), array(), __('¿Seguro que deseas cancelar el pedido?')); ?> </li>

	</ul>
</div>

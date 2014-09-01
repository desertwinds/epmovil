<?php  echo $this->Html->css('cake.previous');?>
<div class="clients view">
<h2><?php echo __('Cliente'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
                <dd>
			<?php echo h($client['Client']['id']); ?>
			&nbsp;
                </dd>
		<dt><?php echo __('Nombre'); ?></dt>
                <dd>
			<?php echo h($client['Client']['name']); ?>
			&nbsp;
                </dd>
		<dt><?php echo __('RIF'); ?></dt>
                <dd>
			<?php echo h($client['Client']['rif']); ?>
			&nbsp;
                </dd>
		<dt><?php echo __('Teléfono'); ?></dt>
                <dd>
			<?php echo h($client['Client']['telefono']); ?>
			&nbsp;
                </dd>
		<dt><?php echo __('Dirección'); ?></dt>
                <dd>
			<?php echo h($client['Client']['direccion']); ?>
			&nbsp;
                </dd>
		<dt><?php echo __('Referencia'); ?></dt>
                <dd>
			<?php echo h($client['Client']['referencia']); ?>
			&nbsp;
                </dd>
		<dt><?php echo __('Contacto'); ?></dt>
                <dd>
			<?php echo h($client['Client']['contacto']); ?>
			&nbsp;
                </dd>
		<dt><?php echo __('Comentario'); ?></dt>
                <dd>
			<?php echo h($client['Client']['comentario']); ?>
			&nbsp;
                </dd>
	</dl>
</div>
<?php if($level === 'Superusuario'): ?>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $client['Client']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $client['Client']['id']), array(), __('¿Seguro quieres eliminar al clinte %s?', $client['Client']['name'])); ?> </li>
	</ul>
</div>
<?php endif;?>
<div class="related">
	<h3><?php echo __('Pedidos anteriores'); ?></h3>
	<?php if (!empty($client['Order'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>

		<th><?php echo __('Operador'); ?></th>
		<th><?php echo __('Distribuidor'); ?></th>
		<th><?php echo __('Company Id'); ?></th>
		<th><?php echo __('Factura'); ?></th>
		<th><?php echo __('Emision'); ?></th>
		<th><?php echo __('Envio'); ?></th>
		<th><?php echo __('Comentario'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($client['Order'] as $order): ?>
		<tr>

			<td><?php echo $order['operador']; ?></td>
			<td><?php echo $order['distribuidor']; ?></td>
			<td><?php echo $order['company_id']; ?></td>
			<td><?php echo $order['factura']; ?></td>
			<td><?php echo $order['emision']; ?></td>
			<td><?php echo $order['envio']; ?></td>
			<td><?php echo $order['comentario']; ?></td>
			<td><?php echo $order['status']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'orders', 'action' => 'view', $order['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	
</div>

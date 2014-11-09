<div class="orders index">
	<h2><?php echo __('Pedidos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('client_id'); ?></th>
			<th><?php echo $this->Paginator->sort('operador'); ?></th>
			<th><?php echo $this->Paginator->sort('distribuidor'); ?></th>
			<th><?php echo $this->Paginator->sort('company_id'); ?></th>
			<th><?php echo $this->Paginator->sort('factura'); ?></th>
			<th><?php echo $this->Paginator->sort('emision'); ?></th>
			<th><?php echo $this->Paginator->sort('envio'); ?></th>
			<th><?php echo $this->Paginator->sort('status', 'Estado'); ?></th>
			<th class="actions"></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($orders as $order): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($order['Client']['name'], array('controller' => 'clients', 'action' => 'view', $order['Client']['id'])); ?>
		</td>
		<td><?php echo h($order['operador']['name']); ?>&nbsp;</td>
		<td><?php echo h($order['distribuidor']['name']); ?>&nbsp;</td>
		<td>
			<?php echo h($order['Company']['name']); ?>
		</td>
		<td><?php echo h($order['Order']['factura']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['emision']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['envio']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['status']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $order['Order']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Página {:page} de {:pages}, mostrando {:current} órdenes de un total de {:count}, comenzando en la órden {:start}, terminando en {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('Siguiente') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nuevo pedido'), array('action' => 'add')); ?></li>
	</ul>
</div>



<div class="clients index">
	<h2><?php echo __('Clientes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name', 'Nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('rif', 'RIF'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono', 'Teléfono'); ?></th>
			<th><?php echo $this->Paginator->sort('direccion', 'Dirección'); ?></th>
			<th><?php echo $this->Paginator->sort('referencia'); ?></th>
			<th><?php echo $this->Paginator->sort('contacto'); ?></th>
			<th><?php echo $this->Paginator->sort('comentario'); ?></th>
			<th class="actions"></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($clients as $client): ?>
	<tr>
		<td><?php echo h($client['Client']['id']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['name']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['rif']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['telefono']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['direccion']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['referencia']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['contacto']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['comentario']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $client['Client']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $client['Client']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $client['Client']['id']), array(), __('Seguro quieres eliminar el cliente %s?', $client['Client']['name'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Página {:page} de {:pages}, mostrando {:current} cliente(s) de un total de {:count}, comenzando en el cliente {:start}, terminando en el {:end}')
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
		<li><?php echo $this->Html->link(__('Nuevo Cliente'), array('action' => 'add')); ?></li>
	</ul>
</div>

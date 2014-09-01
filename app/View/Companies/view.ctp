<?php  echo $this->Html->css('cake.previous');?>
<div class="companies view">
<h2><?php echo __('Empresa'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($company['Company']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($company['Company']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar empresa'), array('action' => 'edit', $company['Company']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar empresa'), array('action' => 'delete', $company['Company']['id']), array(), __('¿Seguro que desea eliminar la empresa %s?', $company['Company']['name'])); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva empresa'), array('action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Usuarios relacionados'); ?></h3>
	<?php if (!empty($company['User'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Nombre'); ?></th>
                <th><?php echo __('Tipo');?></th>
		<th class="actions"></th>
	</tr>
	<?php foreach ($company['User'] as $user): ?>
		<tr>
			<td><?php echo $user['name']; ?></td>
                        <td><?php echo $user['type']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>

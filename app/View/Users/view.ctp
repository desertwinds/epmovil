<?php  echo $this->Html->css('cake.previous');?>
<div class="users view">
<h2><?php echo __('Usuario'); ?></h2>
        <dl>
		<dt><?php echo __('Id'); ?></dt>
                <dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
                </dd>
		<dt><?php echo __('Nombre'); ?></dt>
                <dd>
			<?php echo h($user['User']['name']); ?>
			&nbsp;
                </dd>
		
		<dt><?php echo __('Tipo'); ?></dt>
                <dd>
			<?php echo h($user['User']['type']); ?>
			&nbsp;
                </dd>
        </dl>           
	
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php if ($level === 'Superusuario'){
                    echo $this->Html->link(__('Editar'), array('action' => 'edit', $user['User']['id']));
                    }?>
                <li><?php    echo $this->Html->link(__('Cambiar contraseña'), array('action' => 'changePassword', $user['User']['id']));?> </li>
		<li><?php if($level === 'Superusuario')
                    echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $user['User']['id']), array(), __('¿Seguro quieres eliminar al usuario %s?', $user['User']['name'])); ?> </li>
	</ul>
</div>
<?php if($level === 'Superusuario'): ?>
<div class="related">
	<h3><?php echo __('Empresas relacionadas'); ?></h3>
	<?php if (!empty($user['Company'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	<?php foreach ($user['Company'] as $company): ?>
		<tr>
			<td><?php echo $company['id']; ?></td>
			<td><?php echo $company['name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'companies', 'action' => 'view', $company['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'companies', 'action' => 'edit', $company['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'companies', 'action' => 'delete', $company['id']), array(), __('Are you sure you want to delete # %s?', $company['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>
<?php endif; ?>
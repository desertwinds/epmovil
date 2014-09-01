<div class="companiesUsers view">
<h2><?php echo __('Companies User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($companiesUser['CompaniesUser']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company'); ?></dt>
		<dd>
			<?php echo $this->Html->link($companiesUser['Company']['name'], array('controller' => 'companies', 'action' => 'view', $companiesUser['Company']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($companiesUser['User']['name'], array('controller' => 'users', 'action' => 'view', $companiesUser['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Companies User'), array('action' => 'edit', $companiesUser['CompaniesUser']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Companies User'), array('action' => 'delete', $companiesUser['CompaniesUser']['id']), array(), __('Are you sure you want to delete # %s?', $companiesUser['CompaniesUser']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Companies User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>

<div class="clientecontatos view">
<h2><?php  echo __('Clientecontato'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($clientecontato['Clientecontato']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cliente'); ?></dt>
		<dd>
			<?php echo $this->Html->link($clientecontato['Cliente']['id'], array('controller' => 'clientes', 'action' => 'view', $clientecontato['Cliente']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($clientecontato['Clientecontato']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefone'); ?></dt>
		<dd>
			<?php echo h($clientecontato['Clientecontato']['telefone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($clientecontato['Clientecontato']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Departamento'); ?></dt>
		<dd>
			<?php echo h($clientecontato['Clientecontato']['departamento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($clientecontato['Clientecontato']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($clientecontato['Clientecontato']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Clientecontato'), array('action' => 'edit', $clientecontato['Clientecontato']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Clientecontato'), array('action' => 'delete', $clientecontato['Clientecontato']['id']), null, __('Are you sure you want to delete # %s?', $clientecontato['Clientecontato']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientecontatos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Clientecontato'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
	</ul>
</div>

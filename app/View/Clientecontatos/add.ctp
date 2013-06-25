<div class="clientecontatos form">
<?php echo $this->Form->create('Clientecontato'); ?>
	<fieldset>
		<legend><?php echo __('Add Clientecontato'); ?></legend>
	<?php
		echo $this->Form->input('cliente_id');
		echo $this->Form->input('nome');
		echo $this->Form->input('telefone');
		echo $this->Form->input('email');
		echo $this->Form->input('departamento');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Clientecontatos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
	</ul>
</div>

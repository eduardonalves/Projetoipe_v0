<div class="clienteenderecoentregas form">
<?php echo $this->Form->create('Clienteenderecoentrega'); ?>
	<fieldset>
		<legend><?php echo __('Edit Clienteenderecoentrega'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('cliente_id');
		echo $this->Form->input('logradouro');
		echo $this->Form->input('complemento');
		echo $this->Form->input('bairro');
		echo $this->Form->input('cidade');
		echo $this->Form->input('uf');
		echo $this->Form->input('cep');
		echo $this->Form->input('telefone');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Clienteenderecoentrega.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Clienteenderecoentrega.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Clienteenderecoentregas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
	</ul>
</div>

<div class="clienteenderecoentregas form">
<?php echo $this->Form->create('Clienteenderecoentrega'); ?>
	<fieldset>
		<legend><?php echo __('Add Clienteenderecoentrega'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Clienteenderecoentregas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
	</ul>
</div>

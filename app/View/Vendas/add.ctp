<div class="vendas form">
<?php echo $this->Form->create('Venda'); ?>
	<fieldset>
		<legend><?php echo __('Add Venda'); ?></legend>
	<?php
		echo $this->Form->input('cliente_id');
		echo $this->Form->input('valortotal');
		echo $this->Form->input('valorfrete');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Vendas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fretes'), array('controller' => 'fretes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Frete'), array('controller' => 'fretes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Itemvendas'), array('controller' => 'itemvendas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Itemvenda'), array('controller' => 'itemvendas', 'action' => 'add')); ?> </li>
	</ul>
</div>

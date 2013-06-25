<div class="fretes form">
<?php echo $this->Form->create('Frete'); ?>
	<fieldset>
		<legend><?php echo __('Edit Frete'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('venda_id');
		echo $this->Form->input('cliente_id');
		echo $this->Form->input('valor');
		echo $this->Form->input('data');
		echo $this->Form->input('datasolicitacao');
		echo $this->Form->input('datarecebimento');
		echo $this->Form->input('status');
		echo $this->Form->input('Veiculo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Frete.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Frete.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Fretes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Vendas'), array('controller' => 'vendas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Venda'), array('controller' => 'vendas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Veiculos'), array('controller' => 'veiculos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Veiculo'), array('controller' => 'veiculos', 'action' => 'add')); ?> </li>
	</ul>
</div>

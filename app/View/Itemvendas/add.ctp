<div class="itemvendas form">
<?php echo $this->Form->create('Itemvenda'); ?>
	<fieldset>
		<legend><?php echo __('Add Itemvenda'); ?></legend>
	<?php
		echo $this->Form->input('venda_id');
		echo $this->Form->input('produto_id');
		echo $this->Form->input('quantidade');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Itemvendas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Vendas'), array('controller' => 'vendas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Venda'), array('controller' => 'vendas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Produtos'), array('controller' => 'produtos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Produto'), array('controller' => 'produtos', 'action' => 'add')); ?> </li>
	</ul>
</div>

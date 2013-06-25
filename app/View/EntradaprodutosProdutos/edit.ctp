<div class="entradaprodutosProdutos form">
<?php echo $this->Form->create('EntradaprodutosProduto'); ?>
	<fieldset>
		<legend><?php echo __('Edit Entradaprodutos Produto'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('entradaproduto_id');
		echo $this->Form->input('produto_id');
		echo $this->Form->input('quantidade');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('EntradaprodutosProduto.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('EntradaprodutosProduto.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Entradaprodutos Produtos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Entradaprodutos'), array('controller' => 'entradaprodutos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entradaproduto'), array('controller' => 'entradaprodutos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Produtos'), array('controller' => 'produtos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Produto'), array('controller' => 'produtos', 'action' => 'add')); ?> </li>
	</ul>
</div>

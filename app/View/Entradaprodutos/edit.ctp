<div class="entradaprodutos form">
<?php echo $this->Form->create('Entradaproduto'); ?>
	<fieldset>
		<legend><?php echo __('Edit Entradaproduto'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('usina_id');
		echo $this->Form->input('data');
		echo $this->Form->input('Produto');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Entradaproduto.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Entradaproduto.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Entradaprodutos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Usinas'), array('controller' => 'usinas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usina'), array('controller' => 'usinas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Produtos'), array('controller' => 'produtos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Produto'), array('controller' => 'produtos', 'action' => 'add')); ?> </li>
	</ul>
</div>

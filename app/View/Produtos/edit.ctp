<div class="produtos form">
<?php echo $this->Form->create('Produto'); ?>
	<fieldset>
		<legend><?php echo __('Edit Produto'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('descricao');
		echo $this->Form->input('tipo');
		echo $this->Form->input('usina_id');
		echo $this->Form->input('valortonelada');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Produto.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Produto.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Produtos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Usinas'), array('controller' => 'usinas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usina'), array('controller' => 'usinas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Itemvendas'), array('controller' => 'itemvendas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Itemvenda'), array('controller' => 'itemvendas', 'action' => 'add')); ?> </li>
	</ul>
</div>

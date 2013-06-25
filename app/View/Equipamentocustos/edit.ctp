<div class="equipamentocustos form">
<?php echo $this->Form->create('Equipamentocusto'); ?>
	<fieldset>
		<legend><?php echo __('Edit Equipamentocusto'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('equipamento_id');
		echo $this->Form->input('descricao');
		echo $this->Form->input('data');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Equipamentocusto.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Equipamentocusto.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Equipamentocustos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Equipamentos'), array('controller' => 'equipamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipamento'), array('controller' => 'equipamentos', 'action' => 'add')); ?> </li>
	</ul>
</div>

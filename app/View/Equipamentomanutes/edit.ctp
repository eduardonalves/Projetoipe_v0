<div class="equipamentomanutes form">
<?php echo $this->Form->create('Equipamentomanute'); ?>
	<fieldset>
		<legend><?php echo __('Edit Equipamentomanute'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('equipamento_id');
		echo $this->Form->input('descricao');
		echo $this->Form->input('valor');
		echo $this->Form->input('datainicio');
		echo $this->Form->input('datafim');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Equipamentomanute.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Equipamentomanute.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Equipamentomanutes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Equipamentos'), array('controller' => 'equipamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipamento'), array('controller' => 'equipamentos', 'action' => 'add')); ?> </li>
	</ul>
</div>

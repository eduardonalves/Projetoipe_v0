<div class="tiposequips form">
<?php echo $this->Form->create('Tiposequip'); ?>
	<fieldset>
		<legend><?php echo __('Edit Tiposequip'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('tipo');
		echo $this->Form->input('Locacaoequipamento');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Tiposequip.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Tiposequip.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tiposequips'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Equipamentos'), array('controller' => 'equipamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipamento'), array('controller' => 'equipamentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Itenslocs'), array('controller' => 'itenslocs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Itensloc'), array('controller' => 'itenslocs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locacaoequipamentos'), array('controller' => 'locacaoequipamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Locacaoequipamento'), array('controller' => 'locacaoequipamentos', 'action' => 'add')); ?> </li>
	</ul>
</div>

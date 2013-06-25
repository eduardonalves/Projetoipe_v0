<div class="modelosequips form">
<?php echo $this->Form->create('Modelosequip'); ?>
	<fieldset>
		<legend><?php echo __('Edit Modelosequip'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('modelo');
		echo $this->Form->input('Locacaoequip');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Modelosequip.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Modelosequip.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Modelosequips'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Equipamentos'), array('controller' => 'equipamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipamento'), array('controller' => 'equipamentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locacaoequips'), array('controller' => 'locacaoequips', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Locacaoequip'), array('controller' => 'locacaoequips', 'action' => 'add')); ?> </li>
	</ul>
</div>

<div class="locacaoequips form">
<?php echo $this->Form->create('Locacaoequip'); ?>
	<fieldset>
		<legend><?php echo __('Edit Locacaoequip'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('Equipamento');
		echo $this->Form->input('Projeto');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Locacaoequip.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Locacaoequip.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Locacaoequips'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Equipamentos'), array('controller' => 'equipamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipamento'), array('controller' => 'equipamentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projetos'), array('controller' => 'projetos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projeto'), array('controller' => 'projetos', 'action' => 'add')); ?> </li>
	</ul>
</div>

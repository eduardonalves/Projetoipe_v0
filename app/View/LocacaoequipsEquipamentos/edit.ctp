<div class="locacaoequipsEquipamentos form">
<?php echo $this->Form->create('LocacaoequipsEquipamento'); ?>
	<fieldset>
		<legend><?php echo __('Edit Locacaoequips Equipamento'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('locacaoequip_id');
		echo $this->Form->input('equipamento_id');
		echo $this->Form->input('quantidade');
		echo $this->Form->input('datasolicitacao');
		echo $this->Form->input('datainicio');
		echo $this->Form->input('datafim');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('LocacaoequipsEquipamento.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('LocacaoequipsEquipamento.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Locacaoequips Equipamentos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Locacaoequips'), array('controller' => 'locacaoequips', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Locacaoequip'), array('controller' => 'locacaoequips', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Equipamentos'), array('controller' => 'equipamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipamento'), array('controller' => 'equipamentos', 'action' => 'add')); ?> </li>
	</ul>
</div>

<div class="locacaoequipsTiposequips form">
<?php echo $this->Form->create('LocacaoequipsTiposequip'); ?>
	<fieldset>
		<legend><?php echo __('Edit Locacaoequips Tiposequip'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('locacaoequip_id');
		echo $this->Form->input('tiposequip_id');
		echo $this->Form->input('datainicio');
		echo $this->Form->input('datafim');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('LocacaoequipsTiposequip.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('LocacaoequipsTiposequip.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Locacaoequips Tiposequips'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Locacaoequips'), array('controller' => 'locacaoequips', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Locacaoequip'), array('controller' => 'locacaoequips', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tiposequips'), array('controller' => 'tiposequips', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tiposequip'), array('controller' => 'tiposequips', 'action' => 'add')); ?> </li>
	</ul>
</div>

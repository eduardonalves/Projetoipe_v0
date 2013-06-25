<div class="itenslocas form">
<?php echo $this->Form->create('Itensloca'); ?>
	<fieldset>
		<legend><?php echo __('Edit Itensloca'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('locacaoequipamento_id');
		echo $this->Form->input('tiposequip_id');
		echo $this->Form->input('qtd');
		echo $this->Form->input('datainicio');
		echo $this->Form->input('datafim');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Itensloca.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Itensloca.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Itenslocas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Locacaoequipamentos'), array('controller' => 'locacaoequipamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Locacaoequipamento'), array('controller' => 'locacaoequipamentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tiposequips'), array('controller' => 'tiposequips', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tiposequip'), array('controller' => 'tiposequips', 'action' => 'add')); ?> </li>
	</ul>
</div>

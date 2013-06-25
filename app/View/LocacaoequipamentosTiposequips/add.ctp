<div class="locacaoequipamentosTiposequips form">
<?php echo $this->Form->create('LocacaoequipamentosTiposequip'); ?>
	<fieldset>
		<legend><?php echo __('Add Locacaoequipamentos Tiposequip'); ?></legend>
	<?php
		echo $this->Form->input('locacaoequipamento_id');
		echo $this->Form->input('tiposequip_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Locacaoequipamentos Tiposequips'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Locacaoequipamentos'), array('controller' => 'locacaoequipamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Locacaoequipamento'), array('controller' => 'locacaoequipamentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tiposequips'), array('controller' => 'tiposequips', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tiposequip'), array('controller' => 'tiposequips', 'action' => 'add')); ?> </li>
	</ul>
</div>

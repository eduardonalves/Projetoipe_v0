<div class="locacaotiposequipsTiposequips form">
<?php echo $this->Form->create('LocacaotiposequipsTiposequip'); ?>
	<fieldset>
		<legend><?php echo __('Add Locacaotiposequips Tiposequip'); ?></legend>
	<?php
		echo $this->Form->input('locacaotiposequip_id');
		echo $this->Form->input('tiposequip_id');
		echo $this->Form->input('datainicio');
		echo $this->Form->input('datafim');
		echo $this->Form->input('solicitante');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Locacaotiposequips Tiposequips'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Locacaotiposequips'), array('controller' => 'locacaotiposequips', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Locacaotiposequip'), array('controller' => 'locacaotiposequips', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tiposequips'), array('controller' => 'tiposequips', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tiposequip'), array('controller' => 'tiposequips', 'action' => 'add')); ?> </li>
	</ul>
</div>

<div class="locacaotiposequips form">
<?php echo $this->Form->create('Locacaotiposequip'); ?>
	<fieldset>
		<legend><?php echo __('Add Locacaotiposequip'); ?></legend>
	<?php
		echo $this->Form->input('projeto_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('Tiposequip');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Locacaotiposequips'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Tiposequips'), array('controller' => 'tiposequips', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tiposequip'), array('controller' => 'tiposequips', 'action' => 'add')); ?> </li>
	</ul>
</div>

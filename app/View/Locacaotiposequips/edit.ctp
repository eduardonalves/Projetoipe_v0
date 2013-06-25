<div class="locacaotiposequips form">
<?php echo $this->Form->create('Locacaotiposequip'); ?>
	<fieldset>
		<legend><?php echo __('Edit Locacaotiposequip'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Locacaotiposequip.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Locacaotiposequip.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Locacaotiposequips'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Tiposequips'), array('controller' => 'tiposequips', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tiposequip'), array('controller' => 'tiposequips', 'action' => 'add')); ?> </li>
	</ul>
</div>

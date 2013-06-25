<div class="fretesVeiculos form">
<?php echo $this->Form->create('FretesVeiculo'); ?>
	<fieldset>
		<legend><?php echo __('Edit Fretes Veiculo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('frete_id');
		echo $this->Form->input('veiculo_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('FretesVeiculo.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('FretesVeiculo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Fretes Veiculos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Fretes'), array('controller' => 'fretes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Frete'), array('controller' => 'fretes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Veiculos'), array('controller' => 'veiculos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Veiculo'), array('controller' => 'veiculos', 'action' => 'add')); ?> </li>
	</ul>
</div>

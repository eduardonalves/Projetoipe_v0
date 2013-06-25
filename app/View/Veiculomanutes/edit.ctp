<div class="veiculomanutes form">
<?php echo $this->Form->create('Veiculomanute'); ?>
	<fieldset>
		<legend><?php echo __('Edit Veiculomanute'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('veiculo_id');
		echo $this->Form->input('descricao');
		echo $this->Form->input('valor');
		echo $this->Form->input('datainicio');
		echo $this->Form->input('datafim');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Veiculomanute.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Veiculomanute.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Veiculomanutes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Veiculos'), array('controller' => 'veiculos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Veiculo'), array('controller' => 'veiculos', 'action' => 'add')); ?> </li>
	</ul>
</div>

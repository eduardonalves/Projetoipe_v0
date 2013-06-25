<div class="veiculomanutes form">
<?php echo $this->Form->create('Veiculomanute'); ?>
	<fieldset>
		<legend><?php echo __('Add Veiculomanute'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Veiculomanutes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Veiculos'), array('controller' => 'veiculos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Veiculo'), array('controller' => 'veiculos', 'action' => 'add')); ?> </li>
	</ul>
</div>

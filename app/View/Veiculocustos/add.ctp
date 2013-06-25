<div class="veiculocustos form">
<?php echo $this->Form->create('Veiculocusto'); ?>
	<fieldset>
		<legend><?php echo __('Add Veiculocusto'); ?></legend>
	<?php
		echo $this->Form->input('veiculo_id');
		echo $this->Form->input('id_funcionario');
		echo $this->Form->input('descricao');
		echo $this->Form->input('valor');
		echo $this->Form->input('data');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Veiculocustos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Veiculos'), array('controller' => 'veiculos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Veiculo'), array('controller' => 'veiculos', 'action' => 'add')); ?> </li>
	</ul>
</div>

<div class="veiculos form">
<?php echo $this->Form->create('Veiculo'); ?>
	<fieldset>
		<legend><?php echo __('Add Veiculo'); ?></legend>
	<?php
		echo $this->Form->input('modelo');
		echo $this->Form->input('fabricante');
		echo $this->Form->input('quilometragem');
		echo $this->Form->input('valorhoralocacao');
		echo $this->Form->input('valordialocacao');
		echo $this->Form->input('status');
		echo $this->Form->input('origem');
		echo $this->Form->input('acao');
		echo $this->Form->input('Frete');
		echo $this->Form->input('Projeto');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Veiculos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Veiculocustos'), array('controller' => 'veiculocustos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Veiculocusto'), array('controller' => 'veiculocustos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Veiculomanutes'), array('controller' => 'veiculomanutes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Veiculomanute'), array('controller' => 'veiculomanutes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fretes'), array('controller' => 'fretes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Frete'), array('controller' => 'fretes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projetos'), array('controller' => 'projetos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projeto'), array('controller' => 'projetos', 'action' => 'add')); ?> </li>
	</ul>
</div>

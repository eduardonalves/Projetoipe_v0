<div class="rotas form">
<?php echo $this->Form->create('Rota'); ?>
	<fieldset>
		<legend><?php echo __('Add Rota'); ?></legend>
	<?php
		echo $this->Form->input('rotaprincipal');
		echo $this->Form->input('distancia');
		echo $this->Form->input('tempoestimado');
		echo $this->Form->input('tolerancia');
		echo $this->Form->input('horariopartida');
		echo $this->Form->input('horariochegada');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Rotas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Rotashorariostrafegos'), array('controller' => 'rotashorariostrafegos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rotashorariostrafego'), array('controller' => 'rotashorariostrafegos', 'action' => 'add')); ?> </li>
	</ul>
</div>

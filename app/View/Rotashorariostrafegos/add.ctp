<div class="rotashorariostrafegos form">
<?php echo $this->Form->create('Rotashorariostrafego'); ?>
	<fieldset>
		<legend><?php echo __('Add Rotashorariostrafego'); ?></legend>
	<?php
		echo $this->Form->input('rota_id');
		echo $this->Form->input('horarioinicio');
		echo $this->Form->input('horariofim');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Rotashorariostrafegos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Rotas'), array('controller' => 'rotas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rota'), array('controller' => 'rotas', 'action' => 'add')); ?> </li>
	</ul>
</div>

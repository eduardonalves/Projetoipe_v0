<div class="locacaoveiculos form">
<?php echo $this->Form->create('Locacaoveiculo'); ?>
	<fieldset>
		<legend><?php echo __('Edit Locacaoveiculo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('datasolicitacao');
		echo $this->Form->input('datainicio');
		echo $this->Form->input('datafim');
		echo $this->Form->input('Veiculo');
		echo $this->Form->input('Projeto');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Locacaoveiculo.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Locacaoveiculo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Locacaoveiculos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Veiculos'), array('controller' => 'veiculos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Veiculo'), array('controller' => 'veiculos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projetos'), array('controller' => 'projetos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projeto'), array('controller' => 'projetos', 'action' => 'add')); ?> </li>
	</ul>
</div>

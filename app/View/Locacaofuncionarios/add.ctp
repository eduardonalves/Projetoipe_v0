<div class="locacaofuncionarios form">
<?php echo $this->Form->create('Locacaofuncionario'); ?>
	<fieldset>
		<legend><?php echo __('Add Locacaofuncionario'); ?></legend>
	<?php
		echo $this->Form->input('datasolicitacao');
		echo $this->Form->input('datainicio');
		echo $this->Form->input('datafim');
		echo $this->Form->input('Funcionario');
		echo $this->Form->input('Projeto');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Locacaofuncionarios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Funcionarios'), array('controller' => 'funcionarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Funcionario'), array('controller' => 'funcionarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projetos'), array('controller' => 'projetos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projeto'), array('controller' => 'projetos', 'action' => 'add')); ?> </li>
	</ul>
</div>

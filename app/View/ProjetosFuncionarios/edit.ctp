<div class="projetosFuncionarios form">
<?php echo $this->Form->create('ProjetosFuncionario'); ?>
	<fieldset>
		<legend><?php echo __('Edit Projetos Funcionario'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('projeto_id');
		echo $this->Form->input('funcionario_id');
		echo $this->Form->input('datasolicitacao');
		echo $this->Form->input('dataincicio');
		echo $this->Form->input('datafim');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ProjetosFuncionario.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ProjetosFuncionario.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Projetos Funcionarios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Projetos'), array('controller' => 'projetos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projeto'), array('controller' => 'projetos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Funcionarios'), array('controller' => 'funcionarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Funcionario'), array('controller' => 'funcionarios', 'action' => 'add')); ?> </li>
	</ul>
</div>

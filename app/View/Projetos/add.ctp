<div class="projetos form">
<?php echo $this->Form->create('Projeto'); ?>
	<fieldset>
		<legend><?php echo __('Add Projeto'); ?></legend>
	<?php
		echo $this->Form->input('nome');
		echo $this->Form->input('cliente_id');
		echo $this->Form->input('valorcomercial');
		echo $this->Form->input('valoreengenharia');
		echo $this->Form->input('custoatual');
		echo $this->Form->input('status');
		echo $this->Form->input('percentualconcluido');
		echo $this->Form->input('Equipamento');
		echo $this->Form->input('Funcionario');
		echo $this->Form->input('Locacaoequip');
		echo $this->Form->input('Locacaofuncionario');
		echo $this->Form->input('Locacaoveiculo');
		echo $this->Form->input('Veiculo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Projetos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Alocacaoequipamentos'), array('controller' => 'alocacaoequipamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alocacaoequipamento'), array('controller' => 'alocacaoequipamentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Itensprojetosequipamentos'), array('controller' => 'itensprojetosequipamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Itensprojetosequipamento'), array('controller' => 'itensprojetosequipamentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locacaoequipamentos'), array('controller' => 'locacaoequipamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Locacaoequipamento'), array('controller' => 'locacaoequipamentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Equipamentos'), array('controller' => 'equipamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipamento'), array('controller' => 'equipamentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Funcionarios'), array('controller' => 'funcionarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Funcionario'), array('controller' => 'funcionarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locacaoequips'), array('controller' => 'locacaoequips', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Locacaoequip'), array('controller' => 'locacaoequips', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locacaofuncionarios'), array('controller' => 'locacaofuncionarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Locacaofuncionario'), array('controller' => 'locacaofuncionarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locacaoveiculos'), array('controller' => 'locacaoveiculos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Locacaoveiculo'), array('controller' => 'locacaoveiculos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Veiculos'), array('controller' => 'veiculos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Veiculo'), array('controller' => 'veiculos', 'action' => 'add')); ?> </li>
	</ul>
</div>

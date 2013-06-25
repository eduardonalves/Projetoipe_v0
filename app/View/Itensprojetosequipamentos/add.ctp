<div class="itensprojetosequipamentos form">
<?php echo $this->Form->create('Itensprojetosequipamento'); ?>
	<fieldset>
		<legend><?php echo __('Add Itensprojetosequipamento'); ?></legend>
	<?php
		echo $this->Form->input('projeto_id');
		echo $this->Form->input('equipamento_id');
		echo $this->Form->input('datainicio');
		echo $this->Form->input('datafim');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Itensprojetosequipamentos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Projetos'), array('controller' => 'projetos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projeto'), array('controller' => 'projetos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Equipamentos'), array('controller' => 'equipamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipamento'), array('controller' => 'equipamentos', 'action' => 'add')); ?> </li>
	</ul>
</div>

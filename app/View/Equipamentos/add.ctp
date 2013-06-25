<div class="equipamentos form">
<?php echo $this->Form->create('Equipamento'); ?>
	<fieldset>
		<legend><?php echo __('Add Equipamento'); ?></legend>
	<?php
		echo $this->Form->input('tiposequip_id');
		echo $this->Form->input('modelo');
		echo $this->Form->input('fabricante');
		echo $this->Form->input('urimetrodatainicio');
		echo $this->Form->input('urimetrodatafim');
		echo $this->Form->input('valorhoralocacao');
		echo $this->Form->input('valordialocacao');
		echo $this->Form->input('status');
		echo $this->Form->input('origem');
		echo $this->Form->input('acao');
		echo $this->Form->input('Projeto');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Equipamentos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Tiposequips'), array('controller' => 'tiposequips', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tiposequip'), array('controller' => 'tiposequips', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Equipamentocustos'), array('controller' => 'equipamentocustos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipamentocusto'), array('controller' => 'equipamentocustos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Equipamentomanutes'), array('controller' => 'equipamentomanutes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipamentomanute'), array('controller' => 'equipamentomanutes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Itensprojetosequipamentos'), array('controller' => 'itensprojetosequipamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Itensprojetosequipamento'), array('controller' => 'itensprojetosequipamentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projetos'), array('controller' => 'projetos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projeto'), array('controller' => 'projetos', 'action' => 'add')); ?> </li>
	</ul>
</div>

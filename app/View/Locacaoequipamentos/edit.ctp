<div class="locacaoequipamentos form">
<?php echo $this->Form->create('Locacaoequipamento'); ?>
	<fieldset>
		<legend><?php echo __('Edit Locacaoequipamento'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('projeto_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('datasolicitacao');
		echo $this->Form->input('status');
		echo $this->Form->input('Tiposequip');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Locacaoequipamento.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Locacaoequipamento.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Locacaoequipamentos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Projetos'), array('controller' => 'projetos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projeto'), array('controller' => 'projetos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Itenslocs'), array('controller' => 'itenslocs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Itensloc'), array('controller' => 'itenslocs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tiposequips'), array('controller' => 'tiposequips', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tiposequip'), array('controller' => 'tiposequips', 'action' => 'add')); ?> </li>
	</ul>
</div>

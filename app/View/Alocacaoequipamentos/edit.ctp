<div class="alocacaoequipamentos form">
<?php echo $this->Form->create('Alocacaoequipamento'); ?>
	<fieldset>
		<legend><?php echo __('Edit Alocacaoequipamento'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('projeto_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('data');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Alocacaoequipamento.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Alocacaoequipamento.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Alocacaoequipamentos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Projetos'), array('controller' => 'projetos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projeto'), array('controller' => 'projetos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Itensprojetosequipamentos'), array('controller' => 'itensprojetosequipamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Itensprojetosequipamento'), array('controller' => 'itensprojetosequipamentos', 'action' => 'add')); ?> </li>
	</ul>
</div>

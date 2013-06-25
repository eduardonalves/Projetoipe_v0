<div class="projetosLocacaofuncionarios form">
<?php echo $this->Form->create('ProjetosLocacaofuncionario'); ?>
	<fieldset>
		<legend><?php echo __('Edit Projetos Locacaofuncionario'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('projeto_id');
		echo $this->Form->input('locacaofuncionario_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ProjetosLocacaofuncionario.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ProjetosLocacaofuncionario.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Projetos Locacaofuncionarios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Projetos'), array('controller' => 'projetos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projeto'), array('controller' => 'projetos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locacaofuncionarios'), array('controller' => 'locacaofuncionarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Locacaofuncionario'), array('controller' => 'locacaofuncionarios', 'action' => 'add')); ?> </li>
	</ul>
</div>

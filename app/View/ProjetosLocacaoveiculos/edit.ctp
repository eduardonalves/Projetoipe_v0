<div class="projetosLocacaoveiculos form">
<?php echo $this->Form->create('ProjetosLocacaoveiculo'); ?>
	<fieldset>
		<legend><?php echo __('Edit Projetos Locacaoveiculo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('projeto_id');
		echo $this->Form->input('locacaoveiculo_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ProjetosLocacaoveiculo.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ProjetosLocacaoveiculo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Projetos Locacaoveiculos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Projetos'), array('controller' => 'projetos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projeto'), array('controller' => 'projetos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locacaoveiculos'), array('controller' => 'locacaoveiculos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Locacaoveiculo'), array('controller' => 'locacaoveiculos', 'action' => 'add')); ?> </li>
	</ul>
</div>

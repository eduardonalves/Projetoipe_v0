<div class="projetosLocacaoveiculos form">
<?php echo $this->Form->create('ProjetosLocacaoveiculo'); ?>
	<fieldset>
		<legend><?php echo __('Add Projetos Locacaoveiculo'); ?></legend>
	<?php
		echo $this->Form->input('projeto_id');
		echo $this->Form->input('locacaoveiculo_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Projetos Locacaoveiculos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Projetos'), array('controller' => 'projetos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projeto'), array('controller' => 'projetos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locacaoveiculos'), array('controller' => 'locacaoveiculos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Locacaoveiculo'), array('controller' => 'locacaoveiculos', 'action' => 'add')); ?> </li>
	</ul>
</div>

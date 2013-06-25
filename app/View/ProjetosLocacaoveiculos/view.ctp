<div class="projetosLocacaoveiculos view">
<h2><?php  echo __('Projetos Locacaoveiculo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($projetosLocacaoveiculo['ProjetosLocacaoveiculo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Projeto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($projetosLocacaoveiculo['Projeto']['id'], array('controller' => 'projetos', 'action' => 'view', $projetosLocacaoveiculo['Projeto']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Locacaoveiculo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($projetosLocacaoveiculo['Locacaoveiculo']['id'], array('controller' => 'locacaoveiculos', 'action' => 'view', $projetosLocacaoveiculo['Locacaoveiculo']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Projetos Locacaoveiculo'), array('action' => 'edit', $projetosLocacaoveiculo['ProjetosLocacaoveiculo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Projetos Locacaoveiculo'), array('action' => 'delete', $projetosLocacaoveiculo['ProjetosLocacaoveiculo']['id']), null, __('Are you sure you want to delete # %s?', $projetosLocacaoveiculo['ProjetosLocacaoveiculo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Projetos Locacaoveiculos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projetos Locacaoveiculo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projetos'), array('controller' => 'projetos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projeto'), array('controller' => 'projetos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locacaoveiculos'), array('controller' => 'locacaoveiculos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Locacaoveiculo'), array('controller' => 'locacaoveiculos', 'action' => 'add')); ?> </li>
	</ul>
</div>

<div class="projetosLocacaofuncionarios view">
<h2><?php  echo __('Projetos Locacaofuncionario'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($projetosLocacaofuncionario['ProjetosLocacaofuncionario']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Projeto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($projetosLocacaofuncionario['Projeto']['id'], array('controller' => 'projetos', 'action' => 'view', $projetosLocacaofuncionario['Projeto']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Locacaofuncionario'); ?></dt>
		<dd>
			<?php echo $this->Html->link($projetosLocacaofuncionario['Locacaofuncionario']['id'], array('controller' => 'locacaofuncionarios', 'action' => 'view', $projetosLocacaofuncionario['Locacaofuncionario']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Projetos Locacaofuncionario'), array('action' => 'edit', $projetosLocacaofuncionario['ProjetosLocacaofuncionario']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Projetos Locacaofuncionario'), array('action' => 'delete', $projetosLocacaofuncionario['ProjetosLocacaofuncionario']['id']), null, __('Are you sure you want to delete # %s?', $projetosLocacaofuncionario['ProjetosLocacaofuncionario']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Projetos Locacaofuncionarios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projetos Locacaofuncionario'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projetos'), array('controller' => 'projetos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projeto'), array('controller' => 'projetos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locacaofuncionarios'), array('controller' => 'locacaofuncionarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Locacaofuncionario'), array('controller' => 'locacaofuncionarios', 'action' => 'add')); ?> </li>
	</ul>
</div>

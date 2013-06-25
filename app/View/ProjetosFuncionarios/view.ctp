<div class="projetosFuncionarios view">
<h2><?php  echo __('Projetos Funcionario'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($projetosFuncionario['ProjetosFuncionario']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Projeto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($projetosFuncionario['Projeto']['id'], array('controller' => 'projetos', 'action' => 'view', $projetosFuncionario['Projeto']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Funcionario'); ?></dt>
		<dd>
			<?php echo $this->Html->link($projetosFuncionario['Funcionario']['id'], array('controller' => 'funcionarios', 'action' => 'view', $projetosFuncionario['Funcionario']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datasolicitacao'); ?></dt>
		<dd>
			<?php echo h($projetosFuncionario['ProjetosFuncionario']['datasolicitacao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dataincicio'); ?></dt>
		<dd>
			<?php echo h($projetosFuncionario['ProjetosFuncionario']['dataincicio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datafim'); ?></dt>
		<dd>
			<?php echo h($projetosFuncionario['ProjetosFuncionario']['datafim']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($projetosFuncionario['ProjetosFuncionario']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($projetosFuncionario['ProjetosFuncionario']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Projetos Funcionario'), array('action' => 'edit', $projetosFuncionario['ProjetosFuncionario']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Projetos Funcionario'), array('action' => 'delete', $projetosFuncionario['ProjetosFuncionario']['id']), null, __('Are you sure you want to delete # %s?', $projetosFuncionario['ProjetosFuncionario']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Projetos Funcionarios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projetos Funcionario'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projetos'), array('controller' => 'projetos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projeto'), array('controller' => 'projetos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Funcionarios'), array('controller' => 'funcionarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Funcionario'), array('controller' => 'funcionarios', 'action' => 'add')); ?> </li>
	</ul>
</div>

<div class="projetosVeiculos view">
<h2><?php  echo __('Projetos Veiculo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($projetosVeiculo['ProjetosVeiculo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Projeto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($projetosVeiculo['Projeto']['id'], array('controller' => 'projetos', 'action' => 'view', $projetosVeiculo['Projeto']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Veiculo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($projetosVeiculo['Veiculo']['id'], array('controller' => 'veiculos', 'action' => 'view', $projetosVeiculo['Veiculo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datasolicitacao'); ?></dt>
		<dd>
			<?php echo h($projetosVeiculo['ProjetosVeiculo']['datasolicitacao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datainicio'); ?></dt>
		<dd>
			<?php echo h($projetosVeiculo['ProjetosVeiculo']['datainicio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datafim'); ?></dt>
		<dd>
			<?php echo h($projetosVeiculo['ProjetosVeiculo']['datafim']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($projetosVeiculo['ProjetosVeiculo']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($projetosVeiculo['ProjetosVeiculo']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Projetos Veiculo'), array('action' => 'edit', $projetosVeiculo['ProjetosVeiculo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Projetos Veiculo'), array('action' => 'delete', $projetosVeiculo['ProjetosVeiculo']['id']), null, __('Are you sure you want to delete # %s?', $projetosVeiculo['ProjetosVeiculo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Projetos Veiculos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projetos Veiculo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projetos'), array('controller' => 'projetos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projeto'), array('controller' => 'projetos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Veiculos'), array('controller' => 'veiculos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Veiculo'), array('controller' => 'veiculos', 'action' => 'add')); ?> </li>
	</ul>
</div>

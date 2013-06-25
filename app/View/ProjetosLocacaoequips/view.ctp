<div class="projetosLocacaoequips view">
<h2><?php  echo __('Projetos Locacaoequip'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($projetosLocacaoequip['ProjetosLocacaoequip']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Projeto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($projetosLocacaoequip['Projeto']['id'], array('controller' => 'projetos', 'action' => 'view', $projetosLocacaoequip['Projeto']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Locacaoequip'); ?></dt>
		<dd>
			<?php echo $this->Html->link($projetosLocacaoequip['Locacaoequip']['id'], array('controller' => 'locacaoequips', 'action' => 'view', $projetosLocacaoequip['Locacaoequip']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Projetos Locacaoequip'), array('action' => 'edit', $projetosLocacaoequip['ProjetosLocacaoequip']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Projetos Locacaoequip'), array('action' => 'delete', $projetosLocacaoequip['ProjetosLocacaoequip']['id']), null, __('Are you sure you want to delete # %s?', $projetosLocacaoequip['ProjetosLocacaoequip']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Projetos Locacaoequips'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projetos Locacaoequip'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projetos'), array('controller' => 'projetos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projeto'), array('controller' => 'projetos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locacaoequips'), array('controller' => 'locacaoequips', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Locacaoequip'), array('controller' => 'locacaoequips', 'action' => 'add')); ?> </li>
	</ul>
</div>

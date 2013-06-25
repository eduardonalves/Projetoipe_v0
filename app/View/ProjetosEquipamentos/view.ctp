<div class="projetosEquipamentos view">
<h2><?php  echo __('Projetos Equipamento'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($projetosEquipamento['ProjetosEquipamento']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Projeto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($projetosEquipamento['Projeto']['id'], array('controller' => 'projetos', 'action' => 'view', $projetosEquipamento['Projeto']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Equipamento'); ?></dt>
		<dd>
			<?php echo $this->Html->link($projetosEquipamento['Equipamento']['id'], array('controller' => 'equipamentos', 'action' => 'view', $projetosEquipamento['Equipamento']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Projetos Equipamento'), array('action' => 'edit', $projetosEquipamento['ProjetosEquipamento']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Projetos Equipamento'), array('action' => 'delete', $projetosEquipamento['ProjetosEquipamento']['id']), null, __('Are you sure you want to delete # %s?', $projetosEquipamento['ProjetosEquipamento']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Projetos Equipamentos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projetos Equipamento'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projetos'), array('controller' => 'projetos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projeto'), array('controller' => 'projetos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Equipamentos'), array('controller' => 'equipamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipamento'), array('controller' => 'equipamentos', 'action' => 'add')); ?> </li>
	</ul>
</div>

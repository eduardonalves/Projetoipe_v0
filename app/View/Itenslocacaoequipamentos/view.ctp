<div class="itenslocacaoequipamentos view">
<h2><?php  echo __('Itenslocacaoequipamento'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($itenslocacaoequipamento['Itenslocacaoequipamento']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Projeto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($itenslocacaoequipamento['Projeto']['id'], array('controller' => 'projetos', 'action' => 'view', $itenslocacaoequipamento['Projeto']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Equipamento'); ?></dt>
		<dd>
			<?php echo $this->Html->link($itenslocacaoequipamento['Equipamento']['id'], array('controller' => 'equipamentos', 'action' => 'view', $itenslocacaoequipamento['Equipamento']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datainicio'); ?></dt>
		<dd>
			<?php echo h($itenslocacaoequipamento['Itenslocacaoequipamento']['datainicio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datafim'); ?></dt>
		<dd>
			<?php echo h($itenslocacaoequipamento['Itenslocacaoequipamento']['datafim']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Itenslocacaoequipamento'), array('action' => 'edit', $itenslocacaoequipamento['Itenslocacaoequipamento']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Itenslocacaoequipamento'), array('action' => 'delete', $itenslocacaoequipamento['Itenslocacaoequipamento']['id']), null, __('Are you sure you want to delete # %s?', $itenslocacaoequipamento['Itenslocacaoequipamento']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Itenslocacaoequipamentos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Itenslocacaoequipamento'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projetos'), array('controller' => 'projetos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projeto'), array('controller' => 'projetos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Equipamentos'), array('controller' => 'equipamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipamento'), array('controller' => 'equipamentos', 'action' => 'add')); ?> </li>
	</ul>
</div>

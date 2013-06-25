<div class="itensprojetosequipamentos view">
<h2><?php  echo __('Itensprojetosequipamento'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($itensprojetosequipamento['Itensprojetosequipamento']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Projeto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($itensprojetosequipamento['Projeto']['id'], array('controller' => 'projetos', 'action' => 'view', $itensprojetosequipamento['Projeto']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Equipamento'); ?></dt>
		<dd>
			<?php echo $this->Html->link($itensprojetosequipamento['Equipamento']['id'], array('controller' => 'equipamentos', 'action' => 'view', $itensprojetosequipamento['Equipamento']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datainicio'); ?></dt>
		<dd>
			<?php echo h($itensprojetosequipamento['Itensprojetosequipamento']['datainicio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datafim'); ?></dt>
		<dd>
			<?php echo h($itensprojetosequipamento['Itensprojetosequipamento']['datafim']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($itensprojetosequipamento['Itensprojetosequipamento']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($itensprojetosequipamento['Itensprojetosequipamento']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($itensprojetosequipamento['Itensprojetosequipamento']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Itensprojetosequipamento'), array('action' => 'edit', $itensprojetosequipamento['Itensprojetosequipamento']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Itensprojetosequipamento'), array('action' => 'delete', $itensprojetosequipamento['Itensprojetosequipamento']['id']), null, __('Are you sure you want to delete # %s?', $itensprojetosequipamento['Itensprojetosequipamento']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Itensprojetosequipamentos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Itensprojetosequipamento'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projetos'), array('controller' => 'projetos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projeto'), array('controller' => 'projetos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Equipamentos'), array('controller' => 'equipamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipamento'), array('controller' => 'equipamentos', 'action' => 'add')); ?> </li>
	</ul>
</div>

<div class="alocacaoequipamentos view">
<h2><?php  echo __('Alocacaoequipamento'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($alocacaoequipamento['Alocacaoequipamento']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Projeto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($alocacaoequipamento['Projeto']['id'], array('controller' => 'projetos', 'action' => 'view', $alocacaoequipamento['Projeto']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($alocacaoequipamento['User']['username'], array('controller' => 'users', 'action' => 'view', $alocacaoequipamento['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data'); ?></dt>
		<dd>
			<?php echo h($alocacaoequipamento['Alocacaoequipamento']['data']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($alocacaoequipamento['Alocacaoequipamento']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($alocacaoequipamento['Alocacaoequipamento']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Alocacaoequipamento'), array('action' => 'edit', $alocacaoequipamento['Alocacaoequipamento']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Alocacaoequipamento'), array('action' => 'delete', $alocacaoequipamento['Alocacaoequipamento']['id']), null, __('Are you sure you want to delete # %s?', $alocacaoequipamento['Alocacaoequipamento']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Alocacaoequipamentos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alocacaoequipamento'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projetos'), array('controller' => 'projetos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projeto'), array('controller' => 'projetos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Itensprojetosequipamentos'), array('controller' => 'itensprojetosequipamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Itensprojetosequipamento'), array('controller' => 'itensprojetosequipamentos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Itensprojetosequipamentos'); ?></h3>
	<?php if (!empty($alocacaoequipamento['Itensprojetosequipamento'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Alocacaoequipamento Id'); ?></th>
		<th><?php echo __('Equipamento Id'); ?></th>
		<th><?php echo __('Datainicio'); ?></th>
		<th><?php echo __('Datafim'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($alocacaoequipamento['Itensprojetosequipamento'] as $itensprojetosequipamento): ?>
		<tr>
			<td><?php echo $itensprojetosequipamento['id']; ?></td>
			<td><?php echo $itensprojetosequipamento['alocacaoequipamento_id']; ?></td>
			<td><?php echo $itensprojetosequipamento['equipamento_id']; ?></td>
			<td><?php echo $itensprojetosequipamento['datainicio']; ?></td>
			<td><?php echo $itensprojetosequipamento['datafim']; ?></td>
			<td><?php echo $itensprojetosequipamento['created']; ?></td>
			<td><?php echo $itensprojetosequipamento['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'itensprojetosequipamentos', 'action' => 'view', $itensprojetosequipamento['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'itensprojetosequipamentos', 'action' => 'edit', $itensprojetosequipamento['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'itensprojetosequipamentos', 'action' => 'delete', $itensprojetosequipamento['id']), null, __('Are you sure you want to delete # %s?', $itensprojetosequipamento['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Itensprojetosequipamento'), array('controller' => 'itensprojetosequipamentos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

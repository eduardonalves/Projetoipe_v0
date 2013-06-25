<div class="itensprojetosequipamentos index">
	<h2><?php echo __('Itensprojetosequipamentos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('projeto_id'); ?></th>
			<th><?php echo $this->Paginator->sort('locacaoequipamento_id'); ?></th>
			<th><?php echo $this->Paginator->sort('equipamento_id'); ?></th>
			<th><?php echo $this->Paginator->sort('datainicio'); ?></th>
			<th><?php echo $this->Paginator->sort('datafim'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($itensprojetosequipamentos as $itensprojetosequipamento): ?>
	<tr>
		<td><?php echo h($itensprojetosequipamento['Itensprojetosequipamento']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($itensprojetosequipamento['Projeto']['id'], array('controller' => 'projetos', 'action' => 'view', $itensprojetosequipamento['Projeto']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($itensprojetosequipamento['Locacaoequipamento']['id'], array('controller' => 'locacaoequipamentos', 'action' => 'view', $itensprojetosequipamento['Locacaoequipamento']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($itensprojetosequipamento['Equipamento']['id'], array('controller' => 'equipamentos', 'action' => 'view', $itensprojetosequipamento['Equipamento']['id'])); ?>
		</td>
		<td><?php echo h($itensprojetosequipamento['Itensprojetosequipamento']['datainicio']); ?>&nbsp;</td>
		<td><?php echo h($itensprojetosequipamento['Itensprojetosequipamento']['datafim']); ?>&nbsp;</td>
		<td><?php echo h($itensprojetosequipamento['Itensprojetosequipamento']['status']); ?>&nbsp;</td>
		<td><?php echo h($itensprojetosequipamento['Itensprojetosequipamento']['created']); ?>&nbsp;</td>
		<td><?php echo h($itensprojetosequipamento['Itensprojetosequipamento']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $itensprojetosequipamento['Itensprojetosequipamento']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $itensprojetosequipamento['Itensprojetosequipamento']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $itensprojetosequipamento['Itensprojetosequipamento']['id']), null, __('Are you sure you want to delete # %s?', $itensprojetosequipamento['Itensprojetosequipamento']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Itensprojetosequipamento'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Projetos'), array('controller' => 'projetos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projeto'), array('controller' => 'projetos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Equipamentos'), array('controller' => 'equipamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipamento'), array('controller' => 'equipamentos', 'action' => 'add')); ?> </li>
	</ul>
</div>

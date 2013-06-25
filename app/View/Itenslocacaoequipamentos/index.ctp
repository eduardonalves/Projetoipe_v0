<div class="itenslocacaoequipamentos index">
	<h2><?php echo __('Itenslocacaoequipamentos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('projeto_id'); ?></th>
			<th><?php echo $this->Paginator->sort('equipamento_id'); ?></th>
			<th><?php echo $this->Paginator->sort('datainicio'); ?></th>
			<th><?php echo $this->Paginator->sort('datafim'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($itenslocacaoequipamentos as $itenslocacaoequipamento): ?>
	<tr>
		<td><?php echo h($itenslocacaoequipamento['Itenslocacaoequipamento']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($itenslocacaoequipamento['Projeto']['id'], array('controller' => 'projetos', 'action' => 'view', $itenslocacaoequipamento['Projeto']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($itenslocacaoequipamento['Equipamento']['id'], array('controller' => 'equipamentos', 'action' => 'view', $itenslocacaoequipamento['Equipamento']['id'])); ?>
		</td>
		<td><?php echo h($itenslocacaoequipamento['Itenslocacaoequipamento']['datainicio']); ?>&nbsp;</td>
		<td><?php echo h($itenslocacaoequipamento['Itenslocacaoequipamento']['datafim']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $itenslocacaoequipamento['Itenslocacaoequipamento']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $itenslocacaoequipamento['Itenslocacaoequipamento']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $itenslocacaoequipamento['Itenslocacaoequipamento']['id']), null, __('Are you sure you want to delete # %s?', $itenslocacaoequipamento['Itenslocacaoequipamento']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Itenslocacaoequipamento'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Projetos'), array('controller' => 'projetos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projeto'), array('controller' => 'projetos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Equipamentos'), array('controller' => 'equipamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipamento'), array('controller' => 'equipamentos', 'action' => 'add')); ?> </li>
	</ul>
</div>

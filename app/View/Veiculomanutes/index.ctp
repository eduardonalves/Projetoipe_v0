<div class="veiculomanutes index">
	<h2><?php echo __('Veiculomanutes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('veiculo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('descricao'); ?></th>
			<th><?php echo $this->Paginator->sort('valor'); ?></th>
			<th><?php echo $this->Paginator->sort('datainicio'); ?></th>
			<th><?php echo $this->Paginator->sort('datafim'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($veiculomanutes as $veiculomanute): ?>
	<tr>
		<td><?php echo h($veiculomanute['Veiculomanute']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($veiculomanute['Veiculo']['id'], array('controller' => 'veiculos', 'action' => 'view', $veiculomanute['Veiculo']['id'])); ?>
		</td>
		<td><?php echo h($veiculomanute['Veiculomanute']['descricao']); ?>&nbsp;</td>
		<td><?php echo h($veiculomanute['Veiculomanute']['valor']); ?>&nbsp;</td>
		<td><?php echo h($veiculomanute['Veiculomanute']['datainicio']); ?>&nbsp;</td>
		<td><?php echo h($veiculomanute['Veiculomanute']['datafim']); ?>&nbsp;</td>
		<td><?php echo h($veiculomanute['Veiculomanute']['created']); ?>&nbsp;</td>
		<td><?php echo h($veiculomanute['Veiculomanute']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $veiculomanute['Veiculomanute']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $veiculomanute['Veiculomanute']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $veiculomanute['Veiculomanute']['id']), null, __('Are you sure you want to delete # %s?', $veiculomanute['Veiculomanute']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Veiculomanute'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Veiculos'), array('controller' => 'veiculos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Veiculo'), array('controller' => 'veiculos', 'action' => 'add')); ?> </li>
	</ul>
</div>

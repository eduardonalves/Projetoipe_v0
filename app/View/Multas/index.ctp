<div class="multas index">
	<h2><?php echo __('Multas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('descricao'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo'); ?></th>
			<th><?php echo $this->Paginator->sort('valor'); ?></th>
			<th><?php echo $this->Paginator->sort('data'); ?></th>
			<th><?php echo $this->Paginator->sort('local'); ?></th>
			<th><?php echo $this->Paginator->sort('vencimento'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($multas as $multa): ?>
	<tr>
		<td><?php echo h($multa['Multa']['id']); ?>&nbsp;</td>
		<td><?php echo h($multa['Multa']['descricao']); ?>&nbsp;</td>
		<td><?php echo h($multa['Multa']['tipo']); ?>&nbsp;</td>
		<td><?php echo h($multa['Multa']['valor']); ?>&nbsp;</td>
		<td><?php echo h($multa['Multa']['data']); ?>&nbsp;</td>
		<td><?php echo h($multa['Multa']['local']); ?>&nbsp;</td>
		<td><?php echo h($multa['Multa']['vencimento']); ?>&nbsp;</td>
		<td><?php echo h($multa['Multa']['created']); ?>&nbsp;</td>
		<td><?php echo h($multa['Multa']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $multa['Multa']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $multa['Multa']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $multa['Multa']['id']), null, __('Are you sure you want to delete # %s?', $multa['Multa']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Multa'), array('action' => 'add')); ?></li>
	</ul>
</div>

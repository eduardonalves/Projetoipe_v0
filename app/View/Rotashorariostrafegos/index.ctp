<div class="rotashorariostrafegos index">
	<h2><?php echo __('Rotashorariostrafegos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('rota_id'); ?></th>
			<th><?php echo $this->Paginator->sort('horarioinicio'); ?></th>
			<th><?php echo $this->Paginator->sort('horariofim'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($rotashorariostrafegos as $rotashorariostrafego): ?>
	<tr>
		<td><?php echo h($rotashorariostrafego['Rotashorariostrafego']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($rotashorariostrafego['Rota']['id'], array('controller' => 'rotas', 'action' => 'view', $rotashorariostrafego['Rota']['id'])); ?>
		</td>
		<td><?php echo h($rotashorariostrafego['Rotashorariostrafego']['horarioinicio']); ?>&nbsp;</td>
		<td><?php echo h($rotashorariostrafego['Rotashorariostrafego']['horariofim']); ?>&nbsp;</td>
		<td><?php echo h($rotashorariostrafego['Rotashorariostrafego']['created']); ?>&nbsp;</td>
		<td><?php echo h($rotashorariostrafego['Rotashorariostrafego']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $rotashorariostrafego['Rotashorariostrafego']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $rotashorariostrafego['Rotashorariostrafego']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $rotashorariostrafego['Rotashorariostrafego']['id']), null, __('Are you sure you want to delete # %s?', $rotashorariostrafego['Rotashorariostrafego']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Rotashorariostrafego'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Rotas'), array('controller' => 'rotas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rota'), array('controller' => 'rotas', 'action' => 'add')); ?> </li>
	</ul>
</div>

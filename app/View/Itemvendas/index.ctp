<div class="itemvendas index">
	<h2><?php echo __('Itemvendas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('venda_id'); ?></th>
			<th><?php echo $this->Paginator->sort('produto_id'); ?></th>
			<th><?php echo $this->Paginator->sort('quantidade'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($itemvendas as $itemvenda): ?>
	<tr>
		<td><?php echo h($itemvenda['Itemvenda']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($itemvenda['Venda']['id'], array('controller' => 'vendas', 'action' => 'view', $itemvenda['Venda']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($itemvenda['Produto']['id'], array('controller' => 'produtos', 'action' => 'view', $itemvenda['Produto']['id'])); ?>
		</td>
		<td><?php echo h($itemvenda['Itemvenda']['quantidade']); ?>&nbsp;</td>
		<td><?php echo h($itemvenda['Itemvenda']['created']); ?>&nbsp;</td>
		<td><?php echo h($itemvenda['Itemvenda']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $itemvenda['Itemvenda']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $itemvenda['Itemvenda']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $itemvenda['Itemvenda']['id']), null, __('Are you sure you want to delete # %s?', $itemvenda['Itemvenda']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Itemvenda'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Vendas'), array('controller' => 'vendas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Venda'), array('controller' => 'vendas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Produtos'), array('controller' => 'produtos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Produto'), array('controller' => 'produtos', 'action' => 'add')); ?> </li>
	</ul>
</div>

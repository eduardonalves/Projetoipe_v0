<div class="fretes index">
	<h2><?php echo __('Fretes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('venda_id'); ?></th>
			<th><?php echo $this->Paginator->sort('cliente_id'); ?></th>
			<th><?php echo $this->Paginator->sort('valor'); ?></th>
			<th><?php echo $this->Paginator->sort('data'); ?></th>
			<th><?php echo $this->Paginator->sort('datasolicitacao'); ?></th>
			<th><?php echo $this->Paginator->sort('datarecebimento'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($fretes as $frete): ?>
	<tr>
		<td><?php echo h($frete['Frete']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($frete['Venda']['id'], array('controller' => 'vendas', 'action' => 'view', $frete['Venda']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($frete['Cliente']['id'], array('controller' => 'clientes', 'action' => 'view', $frete['Cliente']['id'])); ?>
		</td>
		<td><?php echo h($frete['Frete']['valor']); ?>&nbsp;</td>
		<td><?php echo h($frete['Frete']['data']); ?>&nbsp;</td>
		<td><?php echo h($frete['Frete']['datasolicitacao']); ?>&nbsp;</td>
		<td><?php echo h($frete['Frete']['datarecebimento']); ?>&nbsp;</td>
		<td><?php echo h($frete['Frete']['status']); ?>&nbsp;</td>
		<td><?php echo h($frete['Frete']['created']); ?>&nbsp;</td>
		<td><?php echo h($frete['Frete']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $frete['Frete']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $frete['Frete']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $frete['Frete']['id']), null, __('Are you sure you want to delete # %s?', $frete['Frete']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Frete'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Vendas'), array('controller' => 'vendas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Venda'), array('controller' => 'vendas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Veiculos'), array('controller' => 'veiculos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Veiculo'), array('controller' => 'veiculos', 'action' => 'add')); ?> </li>
	</ul>
</div>

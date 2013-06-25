<div class="entradaprodutosProdutos index">
	<h2><?php echo __('Entradaprodutos Produtos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('entradaproduto_id'); ?></th>
			<th><?php echo $this->Paginator->sort('produto_id'); ?></th>
			<th><?php echo $this->Paginator->sort('quantidade'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($entradaprodutosProdutos as $entradaprodutosProduto): ?>
	<tr>
		<td><?php echo h($entradaprodutosProduto['EntradaprodutosProduto']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($entradaprodutosProduto['Entradaproduto']['id'], array('controller' => 'entradaprodutos', 'action' => 'view', $entradaprodutosProduto['Entradaproduto']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($entradaprodutosProduto['Produto']['id'], array('controller' => 'produtos', 'action' => 'view', $entradaprodutosProduto['Produto']['id'])); ?>
		</td>
		<td><?php echo h($entradaprodutosProduto['EntradaprodutosProduto']['quantidade']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $entradaprodutosProduto['EntradaprodutosProduto']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $entradaprodutosProduto['EntradaprodutosProduto']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $entradaprodutosProduto['EntradaprodutosProduto']['id']), null, __('Are you sure you want to delete # %s?', $entradaprodutosProduto['EntradaprodutosProduto']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Entradaprodutos Produto'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Entradaprodutos'), array('controller' => 'entradaprodutos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entradaproduto'), array('controller' => 'entradaprodutos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Produtos'), array('controller' => 'produtos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Produto'), array('controller' => 'produtos', 'action' => 'add')); ?> </li>
	</ul>
</div>

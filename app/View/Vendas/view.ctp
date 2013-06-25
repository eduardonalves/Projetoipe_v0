<div class="vendas view">
<h2><?php  echo __('Venda'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($venda['Venda']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cliente'); ?></dt>
		<dd>
			<?php echo $this->Html->link($venda['Cliente']['id'], array('controller' => 'clientes', 'action' => 'view', $venda['Cliente']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valortotal'); ?></dt>
		<dd>
			<?php echo h($venda['Venda']['valortotal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valorfrete'); ?></dt>
		<dd>
			<?php echo h($venda['Venda']['valorfrete']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($venda['Venda']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($venda['Venda']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Venda'), array('action' => 'edit', $venda['Venda']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Venda'), array('action' => 'delete', $venda['Venda']['id']), null, __('Are you sure you want to delete # %s?', $venda['Venda']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Vendas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Venda'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fretes'), array('controller' => 'fretes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Frete'), array('controller' => 'fretes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Itemvendas'), array('controller' => 'itemvendas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Itemvenda'), array('controller' => 'itemvendas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Fretes'); ?></h3>
	<?php if (!empty($venda['Frete'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Venda Id'); ?></th>
		<th><?php echo __('Cliente Id'); ?></th>
		<th><?php echo __('Valor'); ?></th>
		<th><?php echo __('Data'); ?></th>
		<th><?php echo __('Datasolicitacao'); ?></th>
		<th><?php echo __('Datarecebimento'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($venda['Frete'] as $frete): ?>
		<tr>
			<td><?php echo $frete['id']; ?></td>
			<td><?php echo $frete['venda_id']; ?></td>
			<td><?php echo $frete['cliente_id']; ?></td>
			<td><?php echo $frete['valor']; ?></td>
			<td><?php echo $frete['data']; ?></td>
			<td><?php echo $frete['datasolicitacao']; ?></td>
			<td><?php echo $frete['datarecebimento']; ?></td>
			<td><?php echo $frete['status']; ?></td>
			<td><?php echo $frete['created']; ?></td>
			<td><?php echo $frete['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'fretes', 'action' => 'view', $frete['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'fretes', 'action' => 'edit', $frete['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'fretes', 'action' => 'delete', $frete['id']), null, __('Are you sure you want to delete # %s?', $frete['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Frete'), array('controller' => 'fretes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Itemvendas'); ?></h3>
	<?php if (!empty($venda['Itemvenda'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Venda Id'); ?></th>
		<th><?php echo __('Produto Id'); ?></th>
		<th><?php echo __('Quantidade'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($venda['Itemvenda'] as $itemvenda): ?>
		<tr>
			<td><?php echo $itemvenda['id']; ?></td>
			<td><?php echo $itemvenda['venda_id']; ?></td>
			<td><?php echo $itemvenda['produto_id']; ?></td>
			<td><?php echo $itemvenda['quantidade']; ?></td>
			<td><?php echo $itemvenda['created']; ?></td>
			<td><?php echo $itemvenda['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'itemvendas', 'action' => 'view', $itemvenda['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'itemvendas', 'action' => 'edit', $itemvenda['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'itemvendas', 'action' => 'delete', $itemvenda['id']), null, __('Are you sure you want to delete # %s?', $itemvenda['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Itemvenda'), array('controller' => 'itemvendas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

<div class="produtos view">
<h2><?php  echo __('Produto'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($produto['Produto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($produto['Produto']['descricao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo'); ?></dt>
		<dd>
			<?php echo h($produto['Produto']['tipo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usina'); ?></dt>
		<dd>
			<?php echo $this->Html->link($produto['Usina']['id'], array('controller' => 'usinas', 'action' => 'view', $produto['Usina']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valortonelada'); ?></dt>
		<dd>
			<?php echo h($produto['Produto']['valortonelada']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Produto'), array('action' => 'edit', $produto['Produto']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Produto'), array('action' => 'delete', $produto['Produto']['id']), null, __('Are you sure you want to delete # %s?', $produto['Produto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Produtos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Produto'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usinas'), array('controller' => 'usinas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usina'), array('controller' => 'usinas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Itemvendas'), array('controller' => 'itemvendas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Itemvenda'), array('controller' => 'itemvendas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Itemvendas'); ?></h3>
	<?php if (!empty($produto['Itemvenda'])): ?>
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
		foreach ($produto['Itemvenda'] as $itemvenda): ?>
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

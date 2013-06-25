<div class="entradaprodutos view">
<h2><?php  echo __('Entradaproduto'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($entradaproduto['Entradaproduto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usina'); ?></dt>
		<dd>
			<?php echo $this->Html->link($entradaproduto['Usina']['id'], array('controller' => 'usinas', 'action' => 'view', $entradaproduto['Usina']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data'); ?></dt>
		<dd>
			<?php echo h($entradaproduto['Entradaproduto']['data']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($entradaproduto['Entradaproduto']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($entradaproduto['Entradaproduto']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Entradaproduto'), array('action' => 'edit', $entradaproduto['Entradaproduto']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Entradaproduto'), array('action' => 'delete', $entradaproduto['Entradaproduto']['id']), null, __('Are you sure you want to delete # %s?', $entradaproduto['Entradaproduto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Entradaprodutos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entradaproduto'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usinas'), array('controller' => 'usinas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usina'), array('controller' => 'usinas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Produtos'), array('controller' => 'produtos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Produto'), array('controller' => 'produtos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Produtos'); ?></h3>
	<?php if (!empty($entradaproduto['Produto'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Descricao'); ?></th>
		<th><?php echo __('Tipo'); ?></th>
		<th><?php echo __('Usina Id'); ?></th>
		<th><?php echo __('Valortonelada'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($entradaproduto['Produto'] as $produto): ?>
		<tr>
			<td><?php echo $produto['id']; ?></td>
			<td><?php echo $produto['descricao']; ?></td>
			<td><?php echo $produto['tipo']; ?></td>
			<td><?php echo $produto['usina_id']; ?></td>
			<td><?php echo $produto['valortonelada']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'produtos', 'action' => 'view', $produto['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'produtos', 'action' => 'edit', $produto['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'produtos', 'action' => 'delete', $produto['id']), null, __('Are you sure you want to delete # %s?', $produto['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Produto'), array('controller' => 'produtos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

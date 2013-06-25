<div class="itemvendas view">
<h2><?php  echo __('Itemvenda'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($itemvenda['Itemvenda']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Venda'); ?></dt>
		<dd>
			<?php echo $this->Html->link($itemvenda['Venda']['id'], array('controller' => 'vendas', 'action' => 'view', $itemvenda['Venda']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Produto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($itemvenda['Produto']['id'], array('controller' => 'produtos', 'action' => 'view', $itemvenda['Produto']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quantidade'); ?></dt>
		<dd>
			<?php echo h($itemvenda['Itemvenda']['quantidade']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($itemvenda['Itemvenda']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($itemvenda['Itemvenda']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Itemvenda'), array('action' => 'edit', $itemvenda['Itemvenda']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Itemvenda'), array('action' => 'delete', $itemvenda['Itemvenda']['id']), null, __('Are you sure you want to delete # %s?', $itemvenda['Itemvenda']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Itemvendas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Itemvenda'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vendas'), array('controller' => 'vendas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Venda'), array('controller' => 'vendas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Produtos'), array('controller' => 'produtos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Produto'), array('controller' => 'produtos', 'action' => 'add')); ?> </li>
	</ul>
</div>

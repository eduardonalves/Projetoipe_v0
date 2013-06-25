<div class="entradaprodutosProdutos view">
<h2><?php  echo __('Entradaprodutos Produto'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($entradaprodutosProduto['EntradaprodutosProduto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entradaproduto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($entradaprodutosProduto['Entradaproduto']['id'], array('controller' => 'entradaprodutos', 'action' => 'view', $entradaprodutosProduto['Entradaproduto']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Produto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($entradaprodutosProduto['Produto']['id'], array('controller' => 'produtos', 'action' => 'view', $entradaprodutosProduto['Produto']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quantidade'); ?></dt>
		<dd>
			<?php echo h($entradaprodutosProduto['EntradaprodutosProduto']['quantidade']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Entradaprodutos Produto'), array('action' => 'edit', $entradaprodutosProduto['EntradaprodutosProduto']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Entradaprodutos Produto'), array('action' => 'delete', $entradaprodutosProduto['EntradaprodutosProduto']['id']), null, __('Are you sure you want to delete # %s?', $entradaprodutosProduto['EntradaprodutosProduto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Entradaprodutos Produtos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entradaprodutos Produto'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Entradaprodutos'), array('controller' => 'entradaprodutos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entradaproduto'), array('controller' => 'entradaprodutos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Produtos'), array('controller' => 'produtos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Produto'), array('controller' => 'produtos', 'action' => 'add')); ?> </li>
	</ul>
</div>

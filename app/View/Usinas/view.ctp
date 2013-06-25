<div class="usinas view">
<h2><?php  echo __('Usina'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($usina['Usina']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($usina['Usina']['nome']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Usina'), array('action' => 'edit', $usina['Usina']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Usina'), array('action' => 'delete', $usina['Usina']['id']), null, __('Are you sure you want to delete # %s?', $usina['Usina']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Usinas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usina'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Entradaprodutos'), array('controller' => 'entradaprodutos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entradaproduto'), array('controller' => 'entradaprodutos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Funcionarios'), array('controller' => 'funcionarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Funcionario'), array('controller' => 'funcionarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Produtos'), array('controller' => 'produtos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Produto'), array('controller' => 'produtos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Entradaprodutos'); ?></h3>
	<?php if (!empty($usina['Entradaproduto'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Usina Id'); ?></th>
		<th><?php echo __('Data'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($usina['Entradaproduto'] as $entradaproduto): ?>
		<tr>
			<td><?php echo $entradaproduto['id']; ?></td>
			<td><?php echo $entradaproduto['usina_id']; ?></td>
			<td><?php echo $entradaproduto['data']; ?></td>
			<td><?php echo $entradaproduto['created']; ?></td>
			<td><?php echo $entradaproduto['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'entradaprodutos', 'action' => 'view', $entradaproduto['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'entradaprodutos', 'action' => 'edit', $entradaproduto['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'entradaprodutos', 'action' => 'delete', $entradaproduto['id']), null, __('Are you sure you want to delete # %s?', $entradaproduto['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Entradaproduto'), array('controller' => 'entradaprodutos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Funcionarios'); ?></h3>
	<?php if (!empty($usina['Funcionario'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nome'); ?></th>
		<th><?php echo __('Logradouro'); ?></th>
		<th><?php echo __('Complemento'); ?></th>
		<th><?php echo __('Bairro'); ?></th>
		<th><?php echo __('Cidade'); ?></th>
		<th><?php echo __('Cep'); ?></th>
		<th><?php echo __('Telefonefixo'); ?></th>
		<th><?php echo __('Celular'); ?></th>
		<th><?php echo __('Rg'); ?></th>
		<th><?php echo __('Cpf'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Usina Id'); ?></th>
		<th><?php echo __('Funcao'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($usina['Funcionario'] as $funcionario): ?>
		<tr>
			<td><?php echo $funcionario['id']; ?></td>
			<td><?php echo $funcionario['nome']; ?></td>
			<td><?php echo $funcionario['logradouro']; ?></td>
			<td><?php echo $funcionario['complemento']; ?></td>
			<td><?php echo $funcionario['bairro']; ?></td>
			<td><?php echo $funcionario['cidade']; ?></td>
			<td><?php echo $funcionario['cep']; ?></td>
			<td><?php echo $funcionario['telefonefixo']; ?></td>
			<td><?php echo $funcionario['celular']; ?></td>
			<td><?php echo $funcionario['rg']; ?></td>
			<td><?php echo $funcionario['cpf']; ?></td>
			<td><?php echo $funcionario['status']; ?></td>
			<td><?php echo $funcionario['usina_id']; ?></td>
			<td><?php echo $funcionario['funcao']; ?></td>
			<td><?php echo $funcionario['created']; ?></td>
			<td><?php echo $funcionario['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'funcionarios', 'action' => 'view', $funcionario['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'funcionarios', 'action' => 'edit', $funcionario['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'funcionarios', 'action' => 'delete', $funcionario['id']), null, __('Are you sure you want to delete # %s?', $funcionario['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Funcionario'), array('controller' => 'funcionarios', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Produtos'); ?></h3>
	<?php if (!empty($usina['Produto'])): ?>
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
		foreach ($usina['Produto'] as $produto): ?>
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

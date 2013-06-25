<div class="funcionarios view">
<h2><?php  echo __('Funcionario'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($funcionario['Funcionario']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($funcionario['Funcionario']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Logradouro'); ?></dt>
		<dd>
			<?php echo h($funcionario['Funcionario']['logradouro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Complemento'); ?></dt>
		<dd>
			<?php echo h($funcionario['Funcionario']['complemento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bairro'); ?></dt>
		<dd>
			<?php echo h($funcionario['Funcionario']['bairro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cidade'); ?></dt>
		<dd>
			<?php echo h($funcionario['Funcionario']['cidade']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cep'); ?></dt>
		<dd>
			<?php echo h($funcionario['Funcionario']['cep']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefonefixo'); ?></dt>
		<dd>
			<?php echo h($funcionario['Funcionario']['telefonefixo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Celular'); ?></dt>
		<dd>
			<?php echo h($funcionario['Funcionario']['celular']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rg'); ?></dt>
		<dd>
			<?php echo h($funcionario['Funcionario']['rg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cpf'); ?></dt>
		<dd>
			<?php echo h($funcionario['Funcionario']['cpf']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($funcionario['Funcionario']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Origem'); ?></dt>
		<dd>
			<?php echo h($funcionario['Funcionario']['origem']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Acao'); ?></dt>
		<dd>
			<?php echo h($funcionario['Funcionario']['acao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usina'); ?></dt>
		<dd>
			<?php echo $this->Html->link($funcionario['Usina']['id'], array('controller' => 'usinas', 'action' => 'view', $funcionario['Usina']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Funcao'); ?></dt>
		<dd>
			<?php echo h($funcionario['Funcionario']['funcao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($funcionario['Funcionario']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($funcionario['Funcionario']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Funcionario'), array('action' => 'edit', $funcionario['Funcionario']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Funcionario'), array('action' => 'delete', $funcionario['Funcionario']['id']), null, __('Are you sure you want to delete # %s?', $funcionario['Funcionario']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Funcionarios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Funcionario'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usinas'), array('controller' => 'usinas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usina'), array('controller' => 'usinas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Funcionariosmotoristas'), array('controller' => 'funcionariosmotoristas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Funcionariosmotorista'), array('controller' => 'funcionariosmotoristas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Funcionariosmotoristas'); ?></h3>
	<?php if (!empty($funcionario['Funcionariosmotorista'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Funcionario Id'); ?></th>
		<th><?php echo __('Numerodacnh'); ?></th>
		<th><?php echo __('Categoria'); ?></th>
		<th><?php echo __('Expedicaocnh'); ?></th>
		<th><?php echo __('Vencimentocnh'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($funcionario['Funcionariosmotorista'] as $funcionariosmotorista): ?>
		<tr>
			<td><?php echo $funcionariosmotorista['id']; ?></td>
			<td><?php echo $funcionariosmotorista['funcionario_id']; ?></td>
			<td><?php echo $funcionariosmotorista['numerodacnh']; ?></td>
			<td><?php echo $funcionariosmotorista['categoria']; ?></td>
			<td><?php echo $funcionariosmotorista['expedicaocnh']; ?></td>
			<td><?php echo $funcionariosmotorista['vencimentocnh']; ?></td>
			<td><?php echo $funcionariosmotorista['created']; ?></td>
			<td><?php echo $funcionariosmotorista['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'funcionariosmotoristas', 'action' => 'view', $funcionariosmotorista['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'funcionariosmotoristas', 'action' => 'edit', $funcionariosmotorista['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'funcionariosmotoristas', 'action' => 'delete', $funcionariosmotorista['id']), null, __('Are you sure you want to delete # %s?', $funcionariosmotorista['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Funcionariosmotorista'), array('controller' => 'funcionariosmotoristas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

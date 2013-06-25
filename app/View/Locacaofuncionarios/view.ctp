<div class="locacaofuncionarios view">
<h2><?php  echo __('Locacaofuncionario'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($locacaofuncionario['Locacaofuncionario']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datasolicitacao'); ?></dt>
		<dd>
			<?php echo h($locacaofuncionario['Locacaofuncionario']['datasolicitacao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datainicio'); ?></dt>
		<dd>
			<?php echo h($locacaofuncionario['Locacaofuncionario']['datainicio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datafim'); ?></dt>
		<dd>
			<?php echo h($locacaofuncionario['Locacaofuncionario']['datafim']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($locacaofuncionario['Locacaofuncionario']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($locacaofuncionario['Locacaofuncionario']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Locacaofuncionario'), array('action' => 'edit', $locacaofuncionario['Locacaofuncionario']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Locacaofuncionario'), array('action' => 'delete', $locacaofuncionario['Locacaofuncionario']['id']), null, __('Are you sure you want to delete # %s?', $locacaofuncionario['Locacaofuncionario']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Locacaofuncionarios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Locacaofuncionario'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Funcionarios'), array('controller' => 'funcionarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Funcionario'), array('controller' => 'funcionarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projetos'), array('controller' => 'projetos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projeto'), array('controller' => 'projetos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Funcionarios'); ?></h3>
	<?php if (!empty($locacaofuncionario['Funcionario'])): ?>
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
		foreach ($locacaofuncionario['Funcionario'] as $funcionario): ?>
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
	<h3><?php echo __('Related Projetos'); ?></h3>
	<?php if (!empty($locacaofuncionario['Projeto'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nome'); ?></th>
		<th><?php echo __('Cliente Id'); ?></th>
		<th><?php echo __('Valorcomercial'); ?></th>
		<th><?php echo __('Valoreengenharia'); ?></th>
		<th><?php echo __('Custoatual'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Percentualconcluido'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($locacaofuncionario['Projeto'] as $projeto): ?>
		<tr>
			<td><?php echo $projeto['id']; ?></td>
			<td><?php echo $projeto['nome']; ?></td>
			<td><?php echo $projeto['cliente_id']; ?></td>
			<td><?php echo $projeto['valorcomercial']; ?></td>
			<td><?php echo $projeto['valoreengenharia']; ?></td>
			<td><?php echo $projeto['custoatual']; ?></td>
			<td><?php echo $projeto['status']; ?></td>
			<td><?php echo $projeto['percentualconcluido']; ?></td>
			<td><?php echo $projeto['created']; ?></td>
			<td><?php echo $projeto['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'projetos', 'action' => 'view', $projeto['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'projetos', 'action' => 'edit', $projeto['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'projetos', 'action' => 'delete', $projeto['id']), null, __('Are you sure you want to delete # %s?', $projeto['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Projeto'), array('controller' => 'projetos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

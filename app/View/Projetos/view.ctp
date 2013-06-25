<div class="projetos view">
<h2><?php  echo __('Projeto'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($projeto['Projeto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($projeto['Projeto']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cliente'); ?></dt>
		<dd>
			<?php echo $this->Html->link($projeto['Cliente']['nomerazao'], array('controller' => 'clientes', 'action' => 'view', $projeto['Cliente']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valorcomercial'); ?></dt>
		<dd>
			<?php echo h($projeto['Projeto']['valorcomercial']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valoreengenharia'); ?></dt>
		<dd>
			<?php echo h($projeto['Projeto']['valoreengenharia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Custoatual'); ?></dt>
		<dd>
			<?php echo h($projeto['Projeto']['custoatual']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($projeto['Projeto']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Percentualconcluido'); ?></dt>
		<dd>
			<?php echo h($projeto['Projeto']['percentualconcluido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($projeto['Projeto']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($projeto['Projeto']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Projeto'), array('action' => 'edit', $projeto['Projeto']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Projeto'), array('action' => 'delete', $projeto['Projeto']['id']), null, __('Are you sure you want to delete # %s?', $projeto['Projeto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Projetos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projeto'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Alocacaoequipamentos'), array('controller' => 'alocacaoequipamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alocacaoequipamento'), array('controller' => 'alocacaoequipamentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Itensprojetosequipamentos'), array('controller' => 'itensprojetosequipamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Itensprojetosequipamento'), array('controller' => 'itensprojetosequipamentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locacaoequipamentos'), array('controller' => 'locacaoequipamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Locacaoequipamento'), array('controller' => 'locacaoequipamentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Equipamentos'), array('controller' => 'equipamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipamento'), array('controller' => 'equipamentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Funcionarios'), array('controller' => 'funcionarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Funcionario'), array('controller' => 'funcionarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locacaoequips'), array('controller' => 'locacaoequips', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Locacaoequip'), array('controller' => 'locacaoequips', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locacaofuncionarios'), array('controller' => 'locacaofuncionarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Locacaofuncionario'), array('controller' => 'locacaofuncionarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locacaoveiculos'), array('controller' => 'locacaoveiculos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Locacaoveiculo'), array('controller' => 'locacaoveiculos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Veiculos'), array('controller' => 'veiculos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Veiculo'), array('controller' => 'veiculos', 'action' => 'add')); ?> </li>
	</ul>
</div>

<div class="related">
	<h3><?php echo __('Related Itensprojetosequipamentos'); ?></h3>
	<?php if (!empty($projeto['Itensprojetosequipamento'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Projeto Id'); ?></th>
		<th><?php echo __('Equipamento Id'); ?></th>
		<th><?php echo __('Datainicio'); ?></th>
		<th><?php echo __('Datafim'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($projeto['Itensprojetosequipamento'] as $itensprojetosequipamento): ?>
		<tr>
			<td><?php echo $itensprojetosequipamento['id']; ?></td>
			<td><?php echo $itensprojetosequipamento['projeto_id']; ?></td>
			<td><?php echo $itensprojetosequipamento['equipamento_id']; ?></td>
			<td><?php echo $itensprojetosequipamento['datainicio']; ?></td>
			<td><?php echo $itensprojetosequipamento['datafim']; ?></td>
			<td><?php echo $itensprojetosequipamento['status']; ?></td>
			<td><?php echo $itensprojetosequipamento['created']; ?></td>
			<td><?php echo $itensprojetosequipamento['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'itensprojetosequipamentos', 'action' => 'view', $itensprojetosequipamento['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'itensprojetosequipamentos', 'action' => 'edit', $itensprojetosequipamento['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'itensprojetosequipamentos', 'action' => 'delete', $itensprojetosequipamento['id']), null, __('Are you sure you want to delete # %s?', $itensprojetosequipamento['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Itensprojetosequipamento'), array('controller' => 'itensprojetosequipamentos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Locacaoequipamentos'); ?></h3>
	<?php if (!empty($projeto['Locacaoequipamento'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Projeto Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Datasolicitacao'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($projeto['Locacaoequipamento'] as $locacaoequipamento): ?>
		<tr>
			<td><?php echo $locacaoequipamento['id']; ?></td>
			<td><?php echo $locacaoequipamento['projeto_id']; ?></td>
			<td><?php echo $locacaoequipamento['user_id']; ?></td>
			<td><?php echo $locacaoequipamento['datasolicitacao']; ?></td>
			<td><?php echo $locacaoequipamento['status']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'locacaoequipamentos', 'action' => 'view', $locacaoequipamento['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'locacaoequipamentos', 'action' => 'edit', $locacaoequipamento['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'locacaoequipamentos', 'action' => 'delete', $locacaoequipamento['id']), null, __('Are you sure you want to delete # %s?', $locacaoequipamento['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Locacaoequipamento'), array('controller' => 'locacaoequipamentos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Equipamentos'); ?></h3>
	<?php if (!empty($projeto['Equipamento'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Tiposequip Id'); ?></th>
		<th><?php echo __('Modelo'); ?></th>
		<th><?php echo __('Fabricante'); ?></th>
		<th><?php echo __('Urimetrodatainicio'); ?></th>
		<th><?php echo __('Urimetrodatafim'); ?></th>
		<th><?php echo __('Valorhoralocacao'); ?></th>
		<th><?php echo __('Valordialocacao'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($projeto['Equipamento'] as $equipamento): ?>
		<tr>
			<td><?php echo $equipamento['id']; ?></td>
			<td><?php echo $equipamento['tiposequip_id']; ?></td>
			<td><?php echo $equipamento['modelo']; ?></td>
			<td><?php echo $equipamento['fabricante']; ?></td>
			<td><?php echo $equipamento['urimetrodatainicio']; ?></td>
			<td><?php echo $equipamento['urimetrodatafim']; ?></td>
			<td><?php echo $equipamento['valorhoralocacao']; ?></td>
			<td><?php echo $equipamento['valordialocacao']; ?></td>
			<td><?php echo $equipamento['status']; ?></td>
			<td><?php echo $equipamento['created']; ?></td>
			<td><?php echo $equipamento['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'equipamentos', 'action' => 'view', $equipamento['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'equipamentos', 'action' => 'edit', $equipamento['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'equipamentos', 'action' => 'delete', $equipamento['id']), null, __('Are you sure you want to delete # %s?', $equipamento['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Equipamento'), array('controller' => 'equipamentos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Funcionarios'); ?></h3>
	<?php if (!empty($projeto['Funcionario'])): ?>
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
		foreach ($projeto['Funcionario'] as $funcionario): ?>
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
	<h3><?php echo __('Related Locacaoequips'); ?></h3>
	<?php if (!empty($projeto['Locacaoequip'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($projeto['Locacaoequip'] as $locacaoequip): ?>
		<tr>
			<td><?php echo $locacaoequip['id']; ?></td>
			<td><?php echo $locacaoequip['created']; ?></td>
			<td><?php echo $locacaoequip['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'locacaoequips', 'action' => 'view', $locacaoequip['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'locacaoequips', 'action' => 'edit', $locacaoequip['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'locacaoequips', 'action' => 'delete', $locacaoequip['id']), null, __('Are you sure you want to delete # %s?', $locacaoequip['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Locacaoequip'), array('controller' => 'locacaoequips', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Locacaofuncionarios'); ?></h3>
	<?php if (!empty($projeto['Locacaofuncionario'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Datasolicitacao'); ?></th>
		<th><?php echo __('Datainicio'); ?></th>
		<th><?php echo __('Datafim'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($projeto['Locacaofuncionario'] as $locacaofuncionario): ?>
		<tr>
			<td><?php echo $locacaofuncionario['id']; ?></td>
			<td><?php echo $locacaofuncionario['datasolicitacao']; ?></td>
			<td><?php echo $locacaofuncionario['datainicio']; ?></td>
			<td><?php echo $locacaofuncionario['datafim']; ?></td>
			<td><?php echo $locacaofuncionario['created']; ?></td>
			<td><?php echo $locacaofuncionario['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'locacaofuncionarios', 'action' => 'view', $locacaofuncionario['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'locacaofuncionarios', 'action' => 'edit', $locacaofuncionario['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'locacaofuncionarios', 'action' => 'delete', $locacaofuncionario['id']), null, __('Are you sure you want to delete # %s?', $locacaofuncionario['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Locacaofuncionario'), array('controller' => 'locacaofuncionarios', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Locacaoveiculos'); ?></h3>
	<?php if (!empty($projeto['Locacaoveiculo'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Datasolicitacao'); ?></th>
		<th><?php echo __('Datainicio'); ?></th>
		<th><?php echo __('Datafim'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($projeto['Locacaoveiculo'] as $locacaoveiculo): ?>
		<tr>
			<td><?php echo $locacaoveiculo['id']; ?></td>
			<td><?php echo $locacaoveiculo['datasolicitacao']; ?></td>
			<td><?php echo $locacaoveiculo['datainicio']; ?></td>
			<td><?php echo $locacaoveiculo['datafim']; ?></td>
			<td><?php echo $locacaoveiculo['created']; ?></td>
			<td><?php echo $locacaoveiculo['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'locacaoveiculos', 'action' => 'view', $locacaoveiculo['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'locacaoveiculos', 'action' => 'edit', $locacaoveiculo['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'locacaoveiculos', 'action' => 'delete', $locacaoveiculo['id']), null, __('Are you sure you want to delete # %s?', $locacaoveiculo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Locacaoveiculo'), array('controller' => 'locacaoveiculos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Veiculos'); ?></h3>
	<?php if (!empty($projeto['Veiculo'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Modelo'); ?></th>
		<th><?php echo __('Fabricante'); ?></th>
		<th><?php echo __('Quilometragem'); ?></th>
		<th><?php echo __('Valorhoralocacao'); ?></th>
		<th><?php echo __('Valordialocacao'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($projeto['Veiculo'] as $veiculo): ?>
		<tr>
			<td><?php echo $veiculo['id']; ?></td>
			<td><?php echo $veiculo['modelo']; ?></td>
			<td><?php echo $veiculo['fabricante']; ?></td>
			<td><?php echo $veiculo['quilometragem']; ?></td>
			<td><?php echo $veiculo['valorhoralocacao']; ?></td>
			<td><?php echo $veiculo['valordialocacao']; ?></td>
			<td><?php echo $veiculo['status']; ?></td>
			<td><?php echo $veiculo['created']; ?></td>
			<td><?php echo $veiculo['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'veiculos', 'action' => 'view', $veiculo['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'veiculos', 'action' => 'edit', $veiculo['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'veiculos', 'action' => 'delete', $veiculo['id']), null, __('Are you sure you want to delete # %s?', $veiculo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Veiculo'), array('controller' => 'veiculos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

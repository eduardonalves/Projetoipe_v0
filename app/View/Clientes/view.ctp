<div class="clientes view">
<h2><?php  echo __('Cliente'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome / Razão'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['nomerazao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CPF / CNPJ'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['cnpjcpf']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Logradouro'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['logradouro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Complemento'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['complemento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bairro'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['bairro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cidade'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['cidade']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Uf'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['uf']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cep'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['cep']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefone'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['telefone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Cliente'), array('action' => 'edit', $cliente['Cliente']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Apagar Cliente'), array('action' => 'delete', $cliente['Cliente']['id']), null, __('Are you sure you want to delete # %s?', $cliente['Cliente']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Clientes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Cliente'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Contatos'), array('controller' => 'clientecontatos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Contato'), array('controller' => 'clientecontatos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Entregas'), array('controller' => 'clienteenderecoentregas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nova Entrega'), array('controller' => 'clienteenderecoentregas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Fretes'), array('controller' => 'fretes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Frete'), array('controller' => 'fretes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Projetos'), array('controller' => 'projetos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Projeto'), array('controller' => 'projetos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Vendas'), array('controller' => 'vendas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nova Venda'), array('controller' => 'vendas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Lista de Contatos'); ?></h3>
	<?php if (!empty($cliente['Clientecontato'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Cliente Id'); ?></th>
		<th><?php echo __('Nome'); ?></th>
		<th><?php echo __('Telefone'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Departamento'); ?></th>
		<th><?php echo __('Criado em'); ?></th>
		<th><?php echo __('Modificado em'); ?></th>
		<th class="actions"><?php echo __('Ações'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($cliente['Clientecontato'] as $clientecontato): ?>
		<tr>
			<td><?php echo $clientecontato['id']; ?></td>
			<td><?php echo $clientecontato['cliente_id']; ?></td>
			<td><?php echo $clientecontato['nome']; ?></td>
			<td><?php echo $clientecontato['telefone']; ?></td>
			<td><?php echo $clientecontato['email']; ?></td>
			<td><?php echo $clientecontato['departamento']; ?></td>
			<td><?php echo $clientecontato['created']; ?></td>
			<td><?php echo $clientecontato['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Visualizar'), array('controller' => 'clientecontatos', 'action' => 'view', $clientecontato['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'clientecontatos', 'action' => 'edit', $clientecontato['id'])); ?>
				<?php echo $this->Form->postLink(__('Apagar'), array('controller' => 'clientecontatos', 'action' => 'delete', $clientecontato['id']), null, __('Are you sure you want to delete # %s?', $clientecontato['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Novo Contato'), array('controller' => 'clientecontatos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Lista de Entregas'); ?></h3>
	<?php if (!empty($cliente['Clienteenderecoentrega'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Cliente Id'); ?></th>
		<th><?php echo __('Logradouro'); ?></th>
		<th><?php echo __('Complemento'); ?></th>
		<th><?php echo __('Bairro'); ?></th>
		<th><?php echo __('Cidade'); ?></th>
		<th><?php echo __('Uf'); ?></th>
		<th><?php echo __('Cep'); ?></th>
		<th><?php echo __('Telefone'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Ações'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($cliente['Clienteenderecoentrega'] as $clienteenderecoentrega): ?>
		<tr>
			<td><?php echo $clienteenderecoentrega['id']; ?></td>
			<td><?php echo $clienteenderecoentrega['cliente_id']; ?></td>
			<td><?php echo $clienteenderecoentrega['logradouro']; ?></td>
			<td><?php echo $clienteenderecoentrega['complemento']; ?></td>
			<td><?php echo $clienteenderecoentrega['bairro']; ?></td>
			<td><?php echo $clienteenderecoentrega['cidade']; ?></td>
			<td><?php echo $clienteenderecoentrega['uf']; ?></td>
			<td><?php echo $clienteenderecoentrega['cep']; ?></td>
			<td><?php echo $clienteenderecoentrega['telefone']; ?></td>
			<td><?php echo $clienteenderecoentrega['created']; ?></td>
			<td><?php echo $clienteenderecoentrega['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Visualizar'), array('controller' => 'clienteenderecoentregas', 'action' => 'view', $clienteenderecoentrega['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'clienteenderecoentregas', 'action' => 'edit', $clienteenderecoentrega['id'])); ?>
				<?php echo $this->Form->postLink(__('Apagar'), array('controller' => 'clienteenderecoentregas', 'action' => 'delete', $clienteenderecoentrega['id']), null, __('Are you sure you want to delete # %s?', $clienteenderecoentrega['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nova Entrega'), array('controller' => 'clienteenderecoentregas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Lista de Fretes'); ?></h3>
	<?php if (!empty($cliente['Frete'])): ?>
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
		<th class="actions"><?php echo __('Ações'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($cliente['Frete'] as $frete): ?>
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
				<?php echo $this->Html->link(__('Visualizar'), array('controller' => 'fretes', 'action' => 'view', $frete['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'fretes', 'action' => 'edit', $frete['id'])); ?>
				<?php echo $this->Form->postLink(__('Apagar'), array('controller' => 'fretes', 'action' => 'delete', $frete['id']), null, __('Are you sure you want to delete # %s?', $frete['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Novo Frete'), array('controller' => 'fretes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Lista de Projetos'); ?></h3>
	<?php if (!empty($cliente['Projeto'])): ?>
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
		foreach ($cliente['Projeto'] as $projeto): ?>
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
				<?php echo $this->Html->link(__('Visualizar'), array('controller' => 'projetos', 'action' => 'view', $projeto['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'projetos', 'action' => 'edit', $projeto['id'])); ?>
				<?php echo $this->Form->postLink(__('Apagar'), array('controller' => 'projetos', 'action' => 'delete', $projeto['id']), null, __('Are you sure you want to delete # %s?', $projeto['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Novo Projeto'), array('controller' => 'projetos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Lista de Vendas'); ?></h3>
	<?php if (!empty($cliente['Venda'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Cliente Id'); ?></th>
		<th><?php echo __('Valortotal'); ?></th>
		<th><?php echo __('Valorfrete'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($cliente['Venda'] as $venda): ?>
		<tr>
			<td><?php echo $venda['id']; ?></td>
			<td><?php echo $venda['cliente_id']; ?></td>
			<td><?php echo $venda['valortotal']; ?></td>
			<td><?php echo $venda['valorfrete']; ?></td>
			<td><?php echo $venda['created']; ?></td>
			<td><?php echo $venda['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Visualizar'), array('controller' => 'vendas', 'action' => 'view', $venda['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'vendas', 'action' => 'edit', $venda['id'])); ?>
				<?php echo $this->Form->postLink(__('Apagar'), array('controller' => 'vendas', 'action' => 'delete', $venda['id']), null, __('Are you sure you want to delete # %s?', $venda['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nova Venda'), array('controller' => 'vendas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

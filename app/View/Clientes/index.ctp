<div class="clientes index">

	<h2><?php echo __('Clientes'); ?></h2>
		<?php
			echo $this->Search->create();
			echo $this->Search->input('clientesnomerazao',  array('label' => 'Nome / Razão Social'));
			echo $this->Search->end(__('Filtrar', true));
			
			echo $this->Search->create();
			echo $this->Search->input('clientescnpjcpf',  array('label' => 'CPF / CNPJ'));
			echo $this->Search->end(__('Filtrar', true));
		?>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nomerazao'); ?></th>
			<th><?php echo $this->Paginator->sort('cnpjcpf'); ?></th>
			<th><?php echo $this->Paginator->sort('logradouro'); ?></th>
			<th><?php echo $this->Paginator->sort('complemento'); ?></th>
			<th><?php echo $this->Paginator->sort('bairro'); ?></th>
			<th><?php echo $this->Paginator->sort('cidade'); ?></th>
			<th><?php echo $this->Paginator->sort('uf'); ?></th>
			<th><?php echo $this->Paginator->sort('cep'); ?></th>
			<th><?php echo $this->Paginator->sort('telefone'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($clientes as $cliente): ?>
	<tr>
		<td><?php echo h($cliente['Cliente']['id']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['nomerazao']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['cnpjcpf']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['logradouro']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['complemento']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['bairro']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['cidade']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['uf']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['cep']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['telefone']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['email']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['created']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Visualizar'), array('action' => 'view', $cliente['Cliente']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $cliente['Cliente']['id'])); ?>
			<?php echo $this->Form->postLink(__('Apagar'), array('action' => 'delete', $cliente['Cliente']['id']), null, __('Tem certeza que quer deletar o registro # %s?', $cliente['Cliente']['nomerazao'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('próximo') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Novo Cliente'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Contatos'), array('controller' => 'clientecontatos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Contato'), array('controller' => 'clientecontatos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Endereços de Entregas'), array('controller' => 'clienteenderecoentregas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nova Entrega'), array('controller' => 'clienteenderecoentregas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Fretes'), array('controller' => 'fretes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Frete'), array('controller' => 'fretes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Projetos'), array('controller' => 'projetos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Projeto'), array('controller' => 'projetos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Vendas'), array('controller' => 'vendas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nova Venda'), array('controller' => 'vendas', 'action' => 'add')); ?> </li>
	</ul>
</div>

<div class="clientes form">
<?php echo $this->Form->create('Cliente'); ?>
	<fieldset>
		<legend><?php echo __('Edit Cliente'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nomerazao' , array('label'=>'Nome / Razão Social'));
		echo $this->Form->input('cnpjcpf' , array('label'=>'CNPJ / CPF'));
		echo $this->Form->input('logradouro');
		echo $this->Form->input('complemento');
		echo $this->Form->input('bairro');
		echo $this->Form->input('cidade');
		echo $this->Form->input('uf', array('label'=>'UF'));
		echo $this->Form->input('cep');
		echo $this->Form->input('telefone');
		echo $this->Form->input('email');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Açoes'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Apagar'), array('action' => 'delete', $this->Form->value('Cliente.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Cliente.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Clientes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Contatos'), array('controller' => 'clientecontatos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Contato'), array('controller' => 'clientecontatos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Endereços de Entregas'), array('controller' => 'clienteenderecoentregas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Endereço de Entrega'), array('controller' => 'clienteenderecoentregas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Fretes'), array('controller' => 'fretes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Frete'), array('controller' => 'fretes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Projetos'), array('controller' => 'projetos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Projeto'), array('controller' => 'projetos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Vendas'), array('controller' => 'vendas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nova Venda'), array('controller' => 'vendas', 'action' => 'add')); ?> </li>
	</ul>
</div>

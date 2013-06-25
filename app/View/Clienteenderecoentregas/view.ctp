<div class="clienteenderecoentregas view">
<h2><?php  echo __('Clienteenderecoentrega'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($clienteenderecoentrega['Clienteenderecoentrega']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cliente'); ?></dt>
		<dd>
			<?php echo $this->Html->link($clienteenderecoentrega['Cliente']['id'], array('controller' => 'clientes', 'action' => 'view', $clienteenderecoentrega['Cliente']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Logradouro'); ?></dt>
		<dd>
			<?php echo h($clienteenderecoentrega['Clienteenderecoentrega']['logradouro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Complemento'); ?></dt>
		<dd>
			<?php echo h($clienteenderecoentrega['Clienteenderecoentrega']['complemento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bairro'); ?></dt>
		<dd>
			<?php echo h($clienteenderecoentrega['Clienteenderecoentrega']['bairro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cidade'); ?></dt>
		<dd>
			<?php echo h($clienteenderecoentrega['Clienteenderecoentrega']['cidade']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Uf'); ?></dt>
		<dd>
			<?php echo h($clienteenderecoentrega['Clienteenderecoentrega']['uf']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cep'); ?></dt>
		<dd>
			<?php echo h($clienteenderecoentrega['Clienteenderecoentrega']['cep']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefone'); ?></dt>
		<dd>
			<?php echo h($clienteenderecoentrega['Clienteenderecoentrega']['telefone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($clienteenderecoentrega['Clienteenderecoentrega']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($clienteenderecoentrega['Clienteenderecoentrega']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Clienteenderecoentrega'), array('action' => 'edit', $clienteenderecoentrega['Clienteenderecoentrega']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Clienteenderecoentrega'), array('action' => 'delete', $clienteenderecoentrega['Clienteenderecoentrega']['id']), null, __('Are you sure you want to delete # %s?', $clienteenderecoentrega['Clienteenderecoentrega']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Clienteenderecoentregas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Clienteenderecoentrega'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
	</ul>
</div>

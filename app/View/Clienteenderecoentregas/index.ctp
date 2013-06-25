<div class="clienteenderecoentregas index">
	<h2><?php echo __('Clienteenderecoentregas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('cliente_id'); ?></th>
			<th><?php echo $this->Paginator->sort('logradouro'); ?></th>
			<th><?php echo $this->Paginator->sort('complemento'); ?></th>
			<th><?php echo $this->Paginator->sort('bairro'); ?></th>
			<th><?php echo $this->Paginator->sort('cidade'); ?></th>
			<th><?php echo $this->Paginator->sort('uf'); ?></th>
			<th><?php echo $this->Paginator->sort('cep'); ?></th>
			<th><?php echo $this->Paginator->sort('telefone'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($clienteenderecoentregas as $clienteenderecoentrega): ?>
	<tr>
		<td><?php echo h($clienteenderecoentrega['Clienteenderecoentrega']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($clienteenderecoentrega['Cliente']['id'], array('controller' => 'clientes', 'action' => 'view', $clienteenderecoentrega['Cliente']['id'])); ?>
		</td>
		<td><?php echo h($clienteenderecoentrega['Clienteenderecoentrega']['logradouro']); ?>&nbsp;</td>
		<td><?php echo h($clienteenderecoentrega['Clienteenderecoentrega']['complemento']); ?>&nbsp;</td>
		<td><?php echo h($clienteenderecoentrega['Clienteenderecoentrega']['bairro']); ?>&nbsp;</td>
		<td><?php echo h($clienteenderecoentrega['Clienteenderecoentrega']['cidade']); ?>&nbsp;</td>
		<td><?php echo h($clienteenderecoentrega['Clienteenderecoentrega']['uf']); ?>&nbsp;</td>
		<td><?php echo h($clienteenderecoentrega['Clienteenderecoentrega']['cep']); ?>&nbsp;</td>
		<td><?php echo h($clienteenderecoentrega['Clienteenderecoentrega']['telefone']); ?>&nbsp;</td>
		<td><?php echo h($clienteenderecoentrega['Clienteenderecoentrega']['created']); ?>&nbsp;</td>
		<td><?php echo h($clienteenderecoentrega['Clienteenderecoentrega']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $clienteenderecoentrega['Clienteenderecoentrega']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $clienteenderecoentrega['Clienteenderecoentrega']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $clienteenderecoentrega['Clienteenderecoentrega']['id']), null, __('Are you sure you want to delete # %s?', $clienteenderecoentrega['Clienteenderecoentrega']['id'])); ?>
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
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Clienteenderecoentrega'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
	</ul>
</div>

<div class="clientecontatos index">
	<h2><?php echo __('Clientecontatos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('cliente_id'); ?></th>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th><?php echo $this->Paginator->sort('telefone'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('departamento'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($clientecontatos as $clientecontato): ?>
	<tr>
		<td><?php echo h($clientecontato['Clientecontato']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($clientecontato['Cliente']['id'], array('controller' => 'clientes', 'action' => 'view', $clientecontato['Cliente']['id'])); ?>
		</td>
		<td><?php echo h($clientecontato['Clientecontato']['nome']); ?>&nbsp;</td>
		<td><?php echo h($clientecontato['Clientecontato']['telefone']); ?>&nbsp;</td>
		<td><?php echo h($clientecontato['Clientecontato']['email']); ?>&nbsp;</td>
		<td><?php echo h($clientecontato['Clientecontato']['departamento']); ?>&nbsp;</td>
		<td><?php echo h($clientecontato['Clientecontato']['created']); ?>&nbsp;</td>
		<td><?php echo h($clientecontato['Clientecontato']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $clientecontato['Clientecontato']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $clientecontato['Clientecontato']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $clientecontato['Clientecontato']['id']), null, __('Are you sure you want to delete # %s?', $clientecontato['Clientecontato']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Clientecontato'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
	</ul>
</div>

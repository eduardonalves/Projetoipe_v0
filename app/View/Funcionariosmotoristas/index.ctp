<div class="funcionariosmotoristas index">
	<h2><?php echo __('Funcionariosmotoristas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('funcionario_id'); ?></th>
			<th><?php echo $this->Paginator->sort('numerodacnh'); ?></th>
			<th><?php echo $this->Paginator->sort('categoria'); ?></th>
			<th><?php echo $this->Paginator->sort('expedicaocnh'); ?></th>
			<th><?php echo $this->Paginator->sort('vencimentocnh'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($funcionariosmotoristas as $funcionariosmotorista): ?>
	<tr>
		<td><?php echo h($funcionariosmotorista['Funcionariosmotorista']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($funcionariosmotorista['Funcionario']['id'], array('controller' => 'funcionarios', 'action' => 'view', $funcionariosmotorista['Funcionario']['id'])); ?>
		</td>
		<td><?php echo h($funcionariosmotorista['Funcionariosmotorista']['numerodacnh']); ?>&nbsp;</td>
		<td><?php echo h($funcionariosmotorista['Funcionariosmotorista']['categoria']); ?>&nbsp;</td>
		<td><?php echo h($funcionariosmotorista['Funcionariosmotorista']['expedicaocnh']); ?>&nbsp;</td>
		<td><?php echo h($funcionariosmotorista['Funcionariosmotorista']['vencimentocnh']); ?>&nbsp;</td>
		<td><?php echo h($funcionariosmotorista['Funcionariosmotorista']['created']); ?>&nbsp;</td>
		<td><?php echo h($funcionariosmotorista['Funcionariosmotorista']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $funcionariosmotorista['Funcionariosmotorista']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $funcionariosmotorista['Funcionariosmotorista']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $funcionariosmotorista['Funcionariosmotorista']['id']), null, __('Are you sure you want to delete # %s?', $funcionariosmotorista['Funcionariosmotorista']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Funcionariosmotorista'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Funcionarios'), array('controller' => 'funcionarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Funcionario'), array('controller' => 'funcionarios', 'action' => 'add')); ?> </li>
	</ul>
</div>

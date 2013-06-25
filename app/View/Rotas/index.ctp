<div class="rotas index">
	<h2><?php echo __('Rotas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('rotaprincipal'); ?></th>
			<th><?php echo $this->Paginator->sort('distancia'); ?></th>
			<th><?php echo $this->Paginator->sort('tempoestimado'); ?></th>
			<th><?php echo $this->Paginator->sort('tolerancia'); ?></th>
			<th><?php echo $this->Paginator->sort('horariopartida'); ?></th>
			<th><?php echo $this->Paginator->sort('horariochegada'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($rotas as $rota): ?>
	<tr>
		<td><?php echo h($rota['Rota']['id']); ?>&nbsp;</td>
		<td><?php echo h($rota['Rota']['rotaprincipal']); ?>&nbsp;</td>
		<td><?php echo h($rota['Rota']['distancia']); ?>&nbsp;</td>
		<td><?php echo h($rota['Rota']['tempoestimado']); ?>&nbsp;</td>
		<td><?php echo h($rota['Rota']['tolerancia']); ?>&nbsp;</td>
		<td><?php echo h($rota['Rota']['horariopartida']); ?>&nbsp;</td>
		<td><?php echo h($rota['Rota']['horariochegada']); ?>&nbsp;</td>
		<td><?php echo h($rota['Rota']['created']); ?>&nbsp;</td>
		<td><?php echo h($rota['Rota']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $rota['Rota']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $rota['Rota']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $rota['Rota']['id']), null, __('Are you sure you want to delete # %s?', $rota['Rota']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Rota'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Rotashorariostrafegos'), array('controller' => 'rotashorariostrafegos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rotashorariostrafego'), array('controller' => 'rotashorariostrafegos', 'action' => 'add')); ?> </li>
	</ul>
</div>

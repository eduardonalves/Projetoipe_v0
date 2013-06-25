<div class="itenslocas index">
	<h2><?php echo __('Itenslocas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('locacaoequipamento_id'); ?></th>
			<th><?php echo $this->Paginator->sort('tiposequip_id'); ?></th>
			<th><?php echo $this->Paginator->sort('qtd'); ?></th>
			<th><?php echo $this->Paginator->sort('datainicio'); ?></th>
			<th><?php echo $this->Paginator->sort('datafim'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($itenslocas as $itensloca): ?>
	<tr>
		<td><?php echo h($itensloca['Itensloca']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($itensloca['Locacaoequipamento']['id'], array('controller' => 'locacaoequipamentos', 'action' => 'view', $itensloca['Locacaoequipamento']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($itensloca['Tiposequip']['tipo'], array('controller' => 'tiposequips', 'action' => 'view', $itensloca['Tiposequip']['id'])); ?>
		</td>
		<td><?php echo h($itensloca['Itensloca']['qtd']); ?>&nbsp;</td>
		<td><?php echo h($itensloca['Itensloca']['datainicio']); ?>&nbsp;</td>
		<td><?php echo h($itensloca['Itensloca']['datafim']); ?>&nbsp;</td>
		<td><?php echo h($itensloca['Itensloca']['created']); ?>&nbsp;</td>
		<td><?php echo h($itensloca['Itensloca']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $itensloca['Itensloca']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $itensloca['Itensloca']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $itensloca['Itensloca']['id']), null, __('Are you sure you want to delete # %s?', $itensloca['Itensloca']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Itensloca'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Locacaoequipamentos'), array('controller' => 'locacaoequipamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Locacaoequipamento'), array('controller' => 'locacaoequipamentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tiposequips'), array('controller' => 'tiposequips', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tiposequip'), array('controller' => 'tiposequips', 'action' => 'add')); ?> </li>
	</ul>
</div>

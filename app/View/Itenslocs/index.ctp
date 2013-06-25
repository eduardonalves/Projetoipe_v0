<div class="itenslocs index">
	<h2><?php echo __('Itenslocs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('locacaoequipamento_id'); ?></th>
			<th><?php echo $this->Paginator->sort('tiposequip_id'); ?></th>
			<th><?php echo $this->Paginator->sort('qtde'); ?></th>
			<th><?php echo $this->Paginator->sort('datainicio'); ?></th>
			<th><?php echo $this->Paginator->sort('datafim'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($itenslocs as $itensloc): ?>
	<tr>
		<td><?php echo h($itensloc['Itensloc']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($itensloc['Locacaoequipamento']['id'], array('controller' => 'locacaoequipamentos', 'action' => 'view', $itensloc['Locacaoequipamento']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($itensloc['Tiposequip']['id'], array('controller' => 'tiposequips', 'action' => 'view', $itensloc['Tiposequip']['id'])); ?>
		</td>
		<td><?php echo h($itensloc['Itensloc']['qtde']); ?>&nbsp;</td>
		<td><?php echo h($itensloc['Itensloc']['datainicio']); ?>&nbsp;</td>
		<td><?php echo h($itensloc['Itensloc']['datafim']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $itensloc['Itensloc']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $itensloc['Itensloc']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $itensloc['Itensloc']['id']), null, __('Are you sure you want to delete # %s?', $itensloc['Itensloc']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Itensloc'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Locacaoequipamentos'), array('controller' => 'locacaoequipamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Locacaoequipamento'), array('controller' => 'locacaoequipamentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tiposequips'), array('controller' => 'tiposequips', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tiposequip'), array('controller' => 'tiposequips', 'action' => 'add')); ?> </li>
	</ul>
</div>

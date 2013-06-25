<div class="locacaoequipsTiposequips index">
	<h2><?php echo __('Locacaoequips Tiposequips'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('locacaoequip_id'); ?></th>
			<th><?php echo $this->Paginator->sort('tiposequip_id'); ?></th>
			<th><?php echo $this->Paginator->sort('datainicio'); ?></th>
			<th><?php echo $this->Paginator->sort('datafim'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($locacaoequipsTiposequips as $locacaoequipsTiposequip): ?>
	<tr>
		<td><?php echo h($locacaoequipsTiposequip['LocacaoequipsTiposequip']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($locacaoequipsTiposequip['Locacaoequip']['id'], array('controller' => 'locacaoequips', 'action' => 'view', $locacaoequipsTiposequip['Locacaoequip']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($locacaoequipsTiposequip['Tiposequip']['id'], array('controller' => 'tiposequips', 'action' => 'view', $locacaoequipsTiposequip['Tiposequip']['id'])); ?>
		</td>
		<td><?php echo h($locacaoequipsTiposequip['LocacaoequipsTiposequip']['datainicio']); ?>&nbsp;</td>
		<td><?php echo h($locacaoequipsTiposequip['LocacaoequipsTiposequip']['datafim']); ?>&nbsp;</td>
		<td><?php echo h($locacaoequipsTiposequip['LocacaoequipsTiposequip']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $locacaoequipsTiposequip['LocacaoequipsTiposequip']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $locacaoequipsTiposequip['LocacaoequipsTiposequip']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $locacaoequipsTiposequip['LocacaoequipsTiposequip']['id']), null, __('Are you sure you want to delete # %s?', $locacaoequipsTiposequip['LocacaoequipsTiposequip']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Locacaoequips Tiposequip'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Locacaoequips'), array('controller' => 'locacaoequips', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Locacaoequip'), array('controller' => 'locacaoequips', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tiposequips'), array('controller' => 'tiposequips', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tiposequip'), array('controller' => 'tiposequips', 'action' => 'add')); ?> </li>
	</ul>
</div>

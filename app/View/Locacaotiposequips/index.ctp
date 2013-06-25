<div class="locacaotiposequips index">
	<h2><?php echo __('Locacaotiposequips'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('projeto_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($locacaotiposequips as $locacaotiposequip): ?>
	<tr>
		<td><?php echo h($locacaotiposequip['Locacaotiposequip']['id']); ?>&nbsp;</td>
		<td><?php echo h($locacaotiposequip['Locacaotiposequip']['projeto_id']); ?>&nbsp;</td>
		<td><?php echo h($locacaotiposequip['Locacaotiposequip']['user_id']); ?>&nbsp;</td>
		<td><?php echo h($locacaotiposequip['Locacaotiposequip']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $locacaotiposequip['Locacaotiposequip']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $locacaotiposequip['Locacaotiposequip']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $locacaotiposequip['Locacaotiposequip']['id']), null, __('Are you sure you want to delete # %s?', $locacaotiposequip['Locacaotiposequip']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Locacaotiposequip'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Tiposequips'), array('controller' => 'tiposequips', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tiposequip'), array('controller' => 'tiposequips', 'action' => 'add')); ?> </li>
	</ul>
</div>

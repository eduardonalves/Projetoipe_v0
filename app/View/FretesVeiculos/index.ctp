<div class="fretesVeiculos index">
	<h2><?php echo __('Fretes Veiculos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('frete_id'); ?></th>
			<th><?php echo $this->Paginator->sort('veiculo_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($fretesVeiculos as $fretesVeiculo): ?>
	<tr>
		<td><?php echo h($fretesVeiculo['FretesVeiculo']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($fretesVeiculo['Frete']['id'], array('controller' => 'fretes', 'action' => 'view', $fretesVeiculo['Frete']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($fretesVeiculo['Veiculo']['id'], array('controller' => 'veiculos', 'action' => 'view', $fretesVeiculo['Veiculo']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $fretesVeiculo['FretesVeiculo']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $fretesVeiculo['FretesVeiculo']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $fretesVeiculo['FretesVeiculo']['id']), null, __('Are you sure you want to delete # %s?', $fretesVeiculo['FretesVeiculo']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Fretes Veiculo'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Fretes'), array('controller' => 'fretes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Frete'), array('controller' => 'fretes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Veiculos'), array('controller' => 'veiculos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Veiculo'), array('controller' => 'veiculos', 'action' => 'add')); ?> </li>
	</ul>
</div>

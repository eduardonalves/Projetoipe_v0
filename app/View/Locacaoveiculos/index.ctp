<div class="locacaoveiculos index">
	<h2><?php echo __('Locacaoveiculos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('datasolicitacao'); ?></th>
			<th><?php echo $this->Paginator->sort('datainicio'); ?></th>
			<th><?php echo $this->Paginator->sort('datafim'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($locacaoveiculos as $locacaoveiculo): ?>
	<tr>
		<td><?php echo h($locacaoveiculo['Locacaoveiculo']['id']); ?>&nbsp;</td>
		<td><?php echo h($locacaoveiculo['Locacaoveiculo']['datasolicitacao']); ?>&nbsp;</td>
		<td><?php echo h($locacaoveiculo['Locacaoveiculo']['datainicio']); ?>&nbsp;</td>
		<td><?php echo h($locacaoveiculo['Locacaoveiculo']['datafim']); ?>&nbsp;</td>
		<td><?php echo h($locacaoveiculo['Locacaoveiculo']['created']); ?>&nbsp;</td>
		<td><?php echo h($locacaoveiculo['Locacaoveiculo']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $locacaoveiculo['Locacaoveiculo']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $locacaoveiculo['Locacaoveiculo']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $locacaoveiculo['Locacaoveiculo']['id']), null, __('Are you sure you want to delete # %s?', $locacaoveiculo['Locacaoveiculo']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Locacaoveiculo'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Veiculos'), array('controller' => 'veiculos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Veiculo'), array('controller' => 'veiculos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projetos'), array('controller' => 'projetos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projeto'), array('controller' => 'projetos', 'action' => 'add')); ?> </li>
	</ul>
</div>

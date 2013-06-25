<div class="veiculocustos index">
	<h2><?php echo __('Veiculocustos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('veiculo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('id_funcionario'); ?></th>
			<th><?php echo $this->Paginator->sort('descricao'); ?></th>
			<th><?php echo $this->Paginator->sort('valor'); ?></th>
			<th><?php echo $this->Paginator->sort('data'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($veiculocustos as $veiculocusto): ?>
	<tr>
		<td><?php echo h($veiculocusto['Veiculocusto']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($veiculocusto['Veiculo']['id'], array('controller' => 'veiculos', 'action' => 'view', $veiculocusto['Veiculo']['id'])); ?>
		</td>
		<td><?php echo h($veiculocusto['Veiculocusto']['id_funcionario']); ?>&nbsp;</td>
		<td><?php echo h($veiculocusto['Veiculocusto']['descricao']); ?>&nbsp;</td>
		<td><?php echo h($veiculocusto['Veiculocusto']['valor']); ?>&nbsp;</td>
		<td><?php echo h($veiculocusto['Veiculocusto']['data']); ?>&nbsp;</td>
		<td><?php echo h($veiculocusto['Veiculocusto']['created']); ?>&nbsp;</td>
		<td><?php echo h($veiculocusto['Veiculocusto']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $veiculocusto['Veiculocusto']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $veiculocusto['Veiculocusto']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $veiculocusto['Veiculocusto']['id']), null, __('Are you sure you want to delete # %s?', $veiculocusto['Veiculocusto']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Veiculocusto'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Veiculos'), array('controller' => 'veiculos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Veiculo'), array('controller' => 'veiculos', 'action' => 'add')); ?> </li>
	</ul>
</div>

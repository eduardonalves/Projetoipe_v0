<div class="equipamentos index">
	<h2><?php echo __('Equipamentos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('tiposequip_id'); ?></th>
			<th><?php echo $this->Paginator->sort('modelo'); ?></th>
			<th><?php echo $this->Paginator->sort('fabricante'); ?></th>
			<th><?php echo $this->Paginator->sort('urimetrodatainicio'); ?></th>
			<th><?php echo $this->Paginator->sort('urimetrodatafim'); ?></th>
			<th><?php echo $this->Paginator->sort('valorhoralocacao'); ?></th>
			<th><?php echo $this->Paginator->sort('valordialocacao'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('origem'); ?></th>
			<th><?php echo $this->Paginator->sort('acao'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($equipamentos as $equipamento): ?>
	<tr>
		<td><?php echo h($equipamento['Equipamento']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($equipamento['Tiposequip']['id'], array('controller' => 'tiposequips', 'action' => 'view', $equipamento['Tiposequip']['id'])); ?>
		</td>
		<td><?php echo h($equipamento['Equipamento']['modelo']); ?>&nbsp;</td>
		<td><?php echo h($equipamento['Equipamento']['fabricante']); ?>&nbsp;</td>
		<td><?php echo h($equipamento['Equipamento']['urimetrodatainicio']); ?>&nbsp;</td>
		<td><?php echo h($equipamento['Equipamento']['urimetrodatafim']); ?>&nbsp;</td>
		<td><?php echo h($equipamento['Equipamento']['valorhoralocacao']); ?>&nbsp;</td>
		<td><?php echo h($equipamento['Equipamento']['valordialocacao']); ?>&nbsp;</td>
		<td><?php echo h($equipamento['Equipamento']['status']); ?>&nbsp;</td>
		<td><?php echo h($equipamento['Equipamento']['origem']); ?>&nbsp;</td>
		<td><?php echo h($equipamento['Equipamento']['acao']); ?>&nbsp;</td>
		<td><?php echo h($equipamento['Equipamento']['created']); ?>&nbsp;</td>
		<td><?php echo h($equipamento['Equipamento']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $equipamento['Equipamento']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $equipamento['Equipamento']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $equipamento['Equipamento']['id']), null, __('Are you sure you want to delete # %s?', $equipamento['Equipamento']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Equipamento'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Tiposequips'), array('controller' => 'tiposequips', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tiposequip'), array('controller' => 'tiposequips', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Equipamentocustos'), array('controller' => 'equipamentocustos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipamentocusto'), array('controller' => 'equipamentocustos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Equipamentomanutes'), array('controller' => 'equipamentomanutes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipamentomanute'), array('controller' => 'equipamentomanutes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Itensprojetosequipamentos'), array('controller' => 'itensprojetosequipamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Itensprojetosequipamento'), array('controller' => 'itensprojetosequipamentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projetos'), array('controller' => 'projetos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projeto'), array('controller' => 'projetos', 'action' => 'add')); ?> </li>
	</ul>
</div>

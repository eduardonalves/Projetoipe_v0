<div class="locacaoequipsEquipamentos index">
	<h2><?php echo __('Locacaoequips Equipamentos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('locacaoequip_id'); ?></th>
			<th><?php echo $this->Paginator->sort('equipamento_id'); ?></th>
			<th><?php echo $this->Paginator->sort('quantidade'); ?></th>
			<th><?php echo $this->Paginator->sort('datasolicitacao'); ?></th>
			<th><?php echo $this->Paginator->sort('datainicio'); ?></th>
			<th><?php echo $this->Paginator->sort('datafim'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($locacaoequipsEquipamentos as $locacaoequipsEquipamento): ?>
	<tr>
		<td><?php echo h($locacaoequipsEquipamento['LocacaoequipsEquipamento']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($locacaoequipsEquipamento['Locacaoequip']['id'], array('controller' => 'locacaoequips', 'action' => 'view', $locacaoequipsEquipamento['Locacaoequip']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($locacaoequipsEquipamento['Equipamento']['id'], array('controller' => 'equipamentos', 'action' => 'view', $locacaoequipsEquipamento['Equipamento']['id'])); ?>
		</td>
		<td><?php echo h($locacaoequipsEquipamento['LocacaoequipsEquipamento']['quantidade']); ?>&nbsp;</td>
		<td><?php echo h($locacaoequipsEquipamento['LocacaoequipsEquipamento']['datasolicitacao']); ?>&nbsp;</td>
		<td><?php echo h($locacaoequipsEquipamento['LocacaoequipsEquipamento']['datainicio']); ?>&nbsp;</td>
		<td><?php echo h($locacaoequipsEquipamento['LocacaoequipsEquipamento']['datafim']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $locacaoequipsEquipamento['LocacaoequipsEquipamento']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $locacaoequipsEquipamento['LocacaoequipsEquipamento']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $locacaoequipsEquipamento['LocacaoequipsEquipamento']['id']), null, __('Are you sure you want to delete # %s?', $locacaoequipsEquipamento['LocacaoequipsEquipamento']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Locacaoequips Equipamento'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Locacaoequips'), array('controller' => 'locacaoequips', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Locacaoequip'), array('controller' => 'locacaoequips', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Equipamentos'), array('controller' => 'equipamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipamento'), array('controller' => 'equipamentos', 'action' => 'add')); ?> </li>
	</ul>
</div>

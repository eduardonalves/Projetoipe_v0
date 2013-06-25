<div class="projetosEquipamentos index">
	<h2><?php echo __('Projetos Equipamentos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('projeto_id'); ?></th>
			<th><?php echo $this->Paginator->sort('equipamento_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($projetosEquipamentos as $projetosEquipamento): ?>
	<tr>
		<td><?php echo h($projetosEquipamento['ProjetosEquipamento']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($projetosEquipamento['Projeto']['id'], array('controller' => 'projetos', 'action' => 'view', $projetosEquipamento['Projeto']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($projetosEquipamento['Equipamento']['id'], array('controller' => 'equipamentos', 'action' => 'view', $projetosEquipamento['Equipamento']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $projetosEquipamento['ProjetosEquipamento']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $projetosEquipamento['ProjetosEquipamento']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $projetosEquipamento['ProjetosEquipamento']['id']), null, __('Are you sure you want to delete # %s?', $projetosEquipamento['ProjetosEquipamento']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Projetos Equipamento'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Projetos'), array('controller' => 'projetos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projeto'), array('controller' => 'projetos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Equipamentos'), array('controller' => 'equipamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipamento'), array('controller' => 'equipamentos', 'action' => 'add')); ?> </li>
	</ul>
</div>

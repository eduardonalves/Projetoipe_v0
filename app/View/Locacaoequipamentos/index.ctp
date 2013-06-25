<div class="locacaoequipamentos index">
	<h2><?php echo __('Locacaoequipamentos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('projeto_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('datasolicitacao'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($locacaoequipamentos as $locacaoequipamento): ?>
	<tr>
		<td><?php echo h($locacaoequipamento['Locacaoequipamento']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($locacaoequipamento['Projeto']['id'], array('controller' => 'projetos', 'action' => 'view', $locacaoequipamento['Projeto']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($locacaoequipamento['User']['username'], array('controller' => 'users', 'action' => 'view', $locacaoequipamento['User']['id'])); ?>
		</td>
		<td><?php echo h($locacaoequipamento['Locacaoequipamento']['datasolicitacao']); ?>&nbsp;</td>
		<td><?php echo h($locacaoequipamento['Locacaoequipamento']['status']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $locacaoequipamento['Locacaoequipamento']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $locacaoequipamento['Locacaoequipamento']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $locacaoequipamento['Locacaoequipamento']['id']), null, __('Are you sure you want to delete # %s?', $locacaoequipamento['Locacaoequipamento']['id'])); ?>
			<?php echo $this->Html->link(__('Cancelar'), array('action' => 'cancelar', $locacaoequipamento['Locacaoequipamento']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Locacaoequipamento'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Projetos'), array('controller' => 'projetos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projeto'), array('controller' => 'projetos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Itenslocs'), array('controller' => 'itenslocs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Itensloc'), array('controller' => 'itenslocs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tiposequips'), array('controller' => 'tiposequips', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tiposequip'), array('controller' => 'tiposequips', 'action' => 'add')); ?> </li>
	</ul>
</div>

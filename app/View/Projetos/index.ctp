<div class="projetos index">
	<h2><?php echo __('Projetos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th><?php echo $this->Paginator->sort('cliente_id'); ?></th>
			<th><?php echo $this->Paginator->sort('valorcomercial'); ?></th>
			<th><?php echo $this->Paginator->sort('valoreengenharia'); ?></th>
			<th><?php echo $this->Paginator->sort('custoatual'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('percentualconcluido'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($projetos as $projeto): ?>
	<tr>
		<td><?php echo h($projeto['Projeto']['id']); ?>&nbsp;</td>
		<td><?php echo h($projeto['Projeto']['nome']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($projeto['Cliente']['nomerazao'], array('controller' => 'clientes', 'action' => 'view', $projeto['Cliente']['id'])); ?>
		</td>
		<td><?php echo h($projeto['Projeto']['valorcomercial']); ?>&nbsp;</td>
		<td><?php echo h($projeto['Projeto']['valoreengenharia']); ?>&nbsp;</td>
		<td><?php echo h($projeto['Projeto']['custoatual']); ?>&nbsp;</td>
		<td><?php echo h($projeto['Projeto']['status']); ?>&nbsp;</td>
		<td><?php echo h($projeto['Projeto']['percentualconcluido']); ?>&nbsp;</td>
		<td><?php echo h($projeto['Projeto']['created']); ?>&nbsp;</td>
		<td><?php echo h($projeto['Projeto']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $projeto['Projeto']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $projeto['Projeto']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $projeto['Projeto']['id']), null, __('Are you sure you want to delete # %s?', $projeto['Projeto']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Projeto'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Alocacaoequipamentos'), array('controller' => 'alocacaoequipamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alocacaoequipamento'), array('controller' => 'alocacaoequipamentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Itensprojetosequipamentos'), array('controller' => 'itensprojetosequipamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Itensprojetosequipamento'), array('controller' => 'itensprojetosequipamentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locacaoequipamentos'), array('controller' => 'locacaoequipamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Locacaoequipamento'), array('controller' => 'locacaoequipamentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Equipamentos'), array('controller' => 'equipamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipamento'), array('controller' => 'equipamentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Funcionarios'), array('controller' => 'funcionarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Funcionario'), array('controller' => 'funcionarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locacaoequips'), array('controller' => 'locacaoequips', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Locacaoequip'), array('controller' => 'locacaoequips', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locacaofuncionarios'), array('controller' => 'locacaofuncionarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Locacaofuncionario'), array('controller' => 'locacaofuncionarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locacaoveiculos'), array('controller' => 'locacaoveiculos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Locacaoveiculo'), array('controller' => 'locacaoveiculos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Veiculos'), array('controller' => 'veiculos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Veiculo'), array('controller' => 'veiculos', 'action' => 'add')); ?> </li>
	</ul>
</div>

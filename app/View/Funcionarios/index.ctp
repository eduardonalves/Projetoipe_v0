<div class="funcionarios index">
	<h2><?php echo __('Funcionarios'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th><?php echo $this->Paginator->sort('logradouro'); ?></th>
			<th><?php echo $this->Paginator->sort('complemento'); ?></th>
			<th><?php echo $this->Paginator->sort('bairro'); ?></th>
			<th><?php echo $this->Paginator->sort('cidade'); ?></th>
			<th><?php echo $this->Paginator->sort('cep'); ?></th>
			<th><?php echo $this->Paginator->sort('telefonefixo'); ?></th>
			<th><?php echo $this->Paginator->sort('celular'); ?></th>
			<th><?php echo $this->Paginator->sort('rg'); ?></th>
			<th><?php echo $this->Paginator->sort('cpf'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('origem'); ?></th>
			<th><?php echo $this->Paginator->sort('acao'); ?></th>
			<th><?php echo $this->Paginator->sort('usina_id'); ?></th>
			<th><?php echo $this->Paginator->sort('funcao'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($funcionarios as $funcionario): ?>
	<tr>
		<td><?php echo h($funcionario['Funcionario']['id']); ?>&nbsp;</td>
		<td><?php echo h($funcionario['Funcionario']['nome']); ?>&nbsp;</td>
		<td><?php echo h($funcionario['Funcionario']['logradouro']); ?>&nbsp;</td>
		<td><?php echo h($funcionario['Funcionario']['complemento']); ?>&nbsp;</td>
		<td><?php echo h($funcionario['Funcionario']['bairro']); ?>&nbsp;</td>
		<td><?php echo h($funcionario['Funcionario']['cidade']); ?>&nbsp;</td>
		<td><?php echo h($funcionario['Funcionario']['cep']); ?>&nbsp;</td>
		<td><?php echo h($funcionario['Funcionario']['telefonefixo']); ?>&nbsp;</td>
		<td><?php echo h($funcionario['Funcionario']['celular']); ?>&nbsp;</td>
		<td><?php echo h($funcionario['Funcionario']['rg']); ?>&nbsp;</td>
		<td><?php echo h($funcionario['Funcionario']['cpf']); ?>&nbsp;</td>
		<td><?php echo h($funcionario['Funcionario']['status']); ?>&nbsp;</td>
		<td><?php echo h($funcionario['Funcionario']['origem']); ?>&nbsp;</td>
		<td><?php echo h($funcionario['Funcionario']['acao']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($funcionario['Usina']['id'], array('controller' => 'usinas', 'action' => 'view', $funcionario['Usina']['id'])); ?>
		</td>
		<td><?php echo h($funcionario['Funcionario']['funcao']); ?>&nbsp;</td>
		<td><?php echo h($funcionario['Funcionario']['created']); ?>&nbsp;</td>
		<td><?php echo h($funcionario['Funcionario']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $funcionario['Funcionario']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $funcionario['Funcionario']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $funcionario['Funcionario']['id']), null, __('Are you sure you want to delete # %s?', $funcionario['Funcionario']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Funcionario'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Usinas'), array('controller' => 'usinas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usina'), array('controller' => 'usinas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Funcionariosmotoristas'), array('controller' => 'funcionariosmotoristas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Funcionariosmotorista'), array('controller' => 'funcionariosmotoristas', 'action' => 'add')); ?> </li>
	</ul>
</div>

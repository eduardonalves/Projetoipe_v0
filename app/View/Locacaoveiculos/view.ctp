<div class="locacaoveiculos view">
<h2><?php  echo __('Locacaoveiculo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($locacaoveiculo['Locacaoveiculo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datasolicitacao'); ?></dt>
		<dd>
			<?php echo h($locacaoveiculo['Locacaoveiculo']['datasolicitacao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datainicio'); ?></dt>
		<dd>
			<?php echo h($locacaoveiculo['Locacaoveiculo']['datainicio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datafim'); ?></dt>
		<dd>
			<?php echo h($locacaoveiculo['Locacaoveiculo']['datafim']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($locacaoveiculo['Locacaoveiculo']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($locacaoveiculo['Locacaoveiculo']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Locacaoveiculo'), array('action' => 'edit', $locacaoveiculo['Locacaoveiculo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Locacaoveiculo'), array('action' => 'delete', $locacaoveiculo['Locacaoveiculo']['id']), null, __('Are you sure you want to delete # %s?', $locacaoveiculo['Locacaoveiculo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Locacaoveiculos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Locacaoveiculo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Veiculos'), array('controller' => 'veiculos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Veiculo'), array('controller' => 'veiculos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projetos'), array('controller' => 'projetos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projeto'), array('controller' => 'projetos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Veiculos'); ?></h3>
	<?php if (!empty($locacaoveiculo['Veiculo'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Modelo'); ?></th>
		<th><?php echo __('Fabricante'); ?></th>
		<th><?php echo __('Quilometragem'); ?></th>
		<th><?php echo __('Valorhoralocacao'); ?></th>
		<th><?php echo __('Valordialocacao'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Veiculomanute Id'); ?></th>
		<th><?php echo __('Veiculocusto Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($locacaoveiculo['Veiculo'] as $veiculo): ?>
		<tr>
			<td><?php echo $veiculo['id']; ?></td>
			<td><?php echo $veiculo['modelo']; ?></td>
			<td><?php echo $veiculo['fabricante']; ?></td>
			<td><?php echo $veiculo['quilometragem']; ?></td>
			<td><?php echo $veiculo['valorhoralocacao']; ?></td>
			<td><?php echo $veiculo['valordialocacao']; ?></td>
			<td><?php echo $veiculo['status']; ?></td>
			<td><?php echo $veiculo['veiculomanute_id']; ?></td>
			<td><?php echo $veiculo['veiculocusto_id']; ?></td>
			<td><?php echo $veiculo['created']; ?></td>
			<td><?php echo $veiculo['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'veiculos', 'action' => 'view', $veiculo['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'veiculos', 'action' => 'edit', $veiculo['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'veiculos', 'action' => 'delete', $veiculo['id']), null, __('Are you sure you want to delete # %s?', $veiculo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Veiculo'), array('controller' => 'veiculos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Projetos'); ?></h3>
	<?php if (!empty($locacaoveiculo['Projeto'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nome'); ?></th>
		<th><?php echo __('Cliente Id'); ?></th>
		<th><?php echo __('Valorcomercial'); ?></th>
		<th><?php echo __('Valoreengenharia'); ?></th>
		<th><?php echo __('Custoatual'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Percentualconcluido'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($locacaoveiculo['Projeto'] as $projeto): ?>
		<tr>
			<td><?php echo $projeto['id']; ?></td>
			<td><?php echo $projeto['nome']; ?></td>
			<td><?php echo $projeto['cliente_id']; ?></td>
			<td><?php echo $projeto['valorcomercial']; ?></td>
			<td><?php echo $projeto['valoreengenharia']; ?></td>
			<td><?php echo $projeto['custoatual']; ?></td>
			<td><?php echo $projeto['status']; ?></td>
			<td><?php echo $projeto['percentualconcluido']; ?></td>
			<td><?php echo $projeto['created']; ?></td>
			<td><?php echo $projeto['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'projetos', 'action' => 'view', $projeto['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'projetos', 'action' => 'edit', $projeto['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'projetos', 'action' => 'delete', $projeto['id']), null, __('Are you sure you want to delete # %s?', $projeto['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Projeto'), array('controller' => 'projetos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

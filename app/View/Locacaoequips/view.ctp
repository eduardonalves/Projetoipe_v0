<div class="locacaoequips view">
<h2><?php  echo __('Locacaoequip'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($locacaoequip['Locacaoequip']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($locacaoequip['Locacaoequip']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($locacaoequip['Locacaoequip']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Locacaoequip'), array('action' => 'edit', $locacaoequip['Locacaoequip']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Locacaoequip'), array('action' => 'delete', $locacaoequip['Locacaoequip']['id']), null, __('Are you sure you want to delete # %s?', $locacaoequip['Locacaoequip']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Locacaoequips'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Locacaoequip'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Equipamentos'), array('controller' => 'equipamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipamento'), array('controller' => 'equipamentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projetos'), array('controller' => 'projetos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projeto'), array('controller' => 'projetos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Equipamentos'); ?></h3>
	<?php if (!empty($locacaoequip['Equipamento'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Tiposequip Id'); ?></th>
		<th><?php echo __('Modelo'); ?></th>
		<th><?php echo __('Fabricante'); ?></th>
		<th><?php echo __('Urimetrodatainicio'); ?></th>
		<th><?php echo __('Urimetrodatafim'); ?></th>
		<th><?php echo __('Valorhoralocacao'); ?></th>
		<th><?php echo __('Valordialocacao'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($locacaoequip['Equipamento'] as $equipamento): ?>
		<tr>
			<td><?php echo $equipamento['id']; ?></td>
			<td><?php echo $equipamento['tiposequip_id']; ?></td>
			<td><?php echo $equipamento['modelo']; ?></td>
			<td><?php echo $equipamento['fabricante']; ?></td>
			<td><?php echo $equipamento['urimetrodatainicio']; ?></td>
			<td><?php echo $equipamento['urimetrodatafim']; ?></td>
			<td><?php echo $equipamento['valorhoralocacao']; ?></td>
			<td><?php echo $equipamento['valordialocacao']; ?></td>
			<td><?php echo $equipamento['status']; ?></td>
			<td><?php echo $equipamento['created']; ?></td>
			<td><?php echo $equipamento['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'equipamentos', 'action' => 'view', $equipamento['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'equipamentos', 'action' => 'edit', $equipamento['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'equipamentos', 'action' => 'delete', $equipamento['id']), null, __('Are you sure you want to delete # %s?', $equipamento['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Equipamento'), array('controller' => 'equipamentos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Projetos'); ?></h3>
	<?php if (!empty($locacaoequip['Projeto'])): ?>
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
		foreach ($locacaoequip['Projeto'] as $projeto): ?>
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

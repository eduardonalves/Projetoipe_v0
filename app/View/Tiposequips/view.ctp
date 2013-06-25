<div class="tiposequips view">
<h2><?php  echo __('Tiposequip'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tiposequip['Tiposequip']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo'); ?></dt>
		<dd>
			<?php echo h($tiposequip['Tiposequip']['tipo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($tiposequip['Tiposequip']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($tiposequip['Tiposequip']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tiposequip'), array('action' => 'edit', $tiposequip['Tiposequip']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tiposequip'), array('action' => 'delete', $tiposequip['Tiposequip']['id']), null, __('Are you sure you want to delete # %s?', $tiposequip['Tiposequip']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tiposequips'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tiposequip'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Equipamentos'), array('controller' => 'equipamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipamento'), array('controller' => 'equipamentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Itenslocs'), array('controller' => 'itenslocs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Itensloc'), array('controller' => 'itenslocs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locacaoequipamentos'), array('controller' => 'locacaoequipamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Locacaoequipamento'), array('controller' => 'locacaoequipamentos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Equipamentos'); ?></h3>
	<?php if (!empty($tiposequip['Equipamento'])): ?>
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
		foreach ($tiposequip['Equipamento'] as $equipamento): ?>
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
	<h3><?php echo __('Related Itenslocs'); ?></h3>
	<?php if (!empty($tiposequip['Itensloc'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Locacaoequipamento Id'); ?></th>
		<th><?php echo __('Tiposequip Id'); ?></th>
		<th><?php echo __('Qtde'); ?></th>
		<th><?php echo __('Datainicio'); ?></th>
		<th><?php echo __('Datafim'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($tiposequip['Itensloc'] as $itensloc): ?>
		<tr>
			<td><?php echo $itensloc['id']; ?></td>
			<td><?php echo $itensloc['locacaoequipamento_id']; ?></td>
			<td><?php echo $itensloc['tiposequip_id']; ?></td>
			<td><?php echo $itensloc['qtde']; ?></td>
			<td><?php echo $itensloc['datainicio']; ?></td>
			<td><?php echo $itensloc['datafim']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'itenslocs', 'action' => 'view', $itensloc['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'itenslocs', 'action' => 'edit', $itensloc['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'itenslocs', 'action' => 'delete', $itensloc['id']), null, __('Are you sure you want to delete # %s?', $itensloc['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Itensloc'), array('controller' => 'itenslocs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Locacaoequipamentos'); ?></h3>
	<?php if (!empty($tiposequip['Locacaoequipamento'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Projeto Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Datasolicitacao'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($tiposequip['Locacaoequipamento'] as $locacaoequipamento): ?>
		<tr>
			<td><?php echo $locacaoequipamento['id']; ?></td>
			<td><?php echo $locacaoequipamento['projeto_id']; ?></td>
			<td><?php echo $locacaoequipamento['user_id']; ?></td>
			<td><?php echo $locacaoequipamento['datasolicitacao']; ?></td>
			<td><?php echo $locacaoequipamento['status']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'locacaoequipamentos', 'action' => 'view', $locacaoequipamento['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'locacaoequipamentos', 'action' => 'edit', $locacaoequipamento['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'locacaoequipamentos', 'action' => 'delete', $locacaoequipamento['id']), null, __('Are you sure you want to delete # %s?', $locacaoequipamento['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Locacaoequipamento'), array('controller' => 'locacaoequipamentos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

<div class="equipamentomanutes view">
<h2><?php  echo __('Equipamentomanute'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($equipamentomanute['Equipamentomanute']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Equipamento'); ?></dt>
		<dd>
			<?php echo $this->Html->link($equipamentomanute['Equipamento']['id'], array('controller' => 'equipamentos', 'action' => 'view', $equipamentomanute['Equipamento']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($equipamentomanute['Equipamentomanute']['descricao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valor'); ?></dt>
		<dd>
			<?php echo h($equipamentomanute['Equipamentomanute']['valor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datainicio'); ?></dt>
		<dd>
			<?php echo h($equipamentomanute['Equipamentomanute']['datainicio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datafim'); ?></dt>
		<dd>
			<?php echo h($equipamentomanute['Equipamentomanute']['datafim']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($equipamentomanute['Equipamentomanute']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($equipamentomanute['Equipamentomanute']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Equipamentomanute'), array('action' => 'edit', $equipamentomanute['Equipamentomanute']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Equipamentomanute'), array('action' => 'delete', $equipamentomanute['Equipamentomanute']['id']), null, __('Are you sure you want to delete # %s?', $equipamentomanute['Equipamentomanute']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Equipamentomanutes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipamentomanute'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Equipamentos'), array('controller' => 'equipamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipamento'), array('controller' => 'equipamentos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Equipamentos'); ?></h3>
	<?php if (!empty($equipamentomanute['Equipamento'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nomerazao'); ?></th>
		<th><?php echo __('Modelo'); ?></th>
		<th><?php echo __('Urimetrodatainicio'); ?></th>
		<th><?php echo __('Urimetrodatafim'); ?></th>
		<th><?php echo __('Valorhoralocacao'); ?></th>
		<th><?php echo __('Valordialocacao'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Equipamentomanute Id'); ?></th>
		<th><?php echo __('Equipamentocusto Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($equipamentomanute['Equipamento'] as $equipamento): ?>
		<tr>
			<td><?php echo $equipamento['id']; ?></td>
			<td><?php echo $equipamento['nomerazao']; ?></td>
			<td><?php echo $equipamento['modelo']; ?></td>
			<td><?php echo $equipamento['urimetrodatainicio']; ?></td>
			<td><?php echo $equipamento['urimetrodatafim']; ?></td>
			<td><?php echo $equipamento['valorhoralocacao']; ?></td>
			<td><?php echo $equipamento['valordialocacao']; ?></td>
			<td><?php echo $equipamento['status']; ?></td>
			<td><?php echo $equipamento['equipamentomanute_id']; ?></td>
			<td><?php echo $equipamento['equipamentocusto_id']; ?></td>
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

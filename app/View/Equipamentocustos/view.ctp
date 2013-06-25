<div class="equipamentocustos view">
<h2><?php  echo __('Equipamentocusto'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($equipamentocusto['Equipamentocusto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Equipamento'); ?></dt>
		<dd>
			<?php echo $this->Html->link($equipamentocusto['Equipamento']['id'], array('controller' => 'equipamentos', 'action' => 'view', $equipamentocusto['Equipamento']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($equipamentocusto['Equipamentocusto']['descricao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data'); ?></dt>
		<dd>
			<?php echo h($equipamentocusto['Equipamentocusto']['data']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($equipamentocusto['Equipamentocusto']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($equipamentocusto['Equipamentocusto']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Equipamentocusto'), array('action' => 'edit', $equipamentocusto['Equipamentocusto']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Equipamentocusto'), array('action' => 'delete', $equipamentocusto['Equipamentocusto']['id']), null, __('Are you sure you want to delete # %s?', $equipamentocusto['Equipamentocusto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Equipamentocustos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipamentocusto'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Equipamentos'), array('controller' => 'equipamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipamento'), array('controller' => 'equipamentos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Equipamentos'); ?></h3>
	<?php if (!empty($equipamentocusto['Equipamento'])): ?>
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
		foreach ($equipamentocusto['Equipamento'] as $equipamento): ?>
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

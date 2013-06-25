<div class="locacaotiposequips view">
<h2><?php  echo __('Locacaotiposequip'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($locacaotiposequip['Locacaotiposequip']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Projeto Id'); ?></dt>
		<dd>
			<?php echo h($locacaotiposequip['Locacaotiposequip']['projeto_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($locacaotiposequip['Locacaotiposequip']['user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($locacaotiposequip['Locacaotiposequip']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Locacaotiposequip'), array('action' => 'edit', $locacaotiposequip['Locacaotiposequip']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Locacaotiposequip'), array('action' => 'delete', $locacaotiposequip['Locacaotiposequip']['id']), null, __('Are you sure you want to delete # %s?', $locacaotiposequip['Locacaotiposequip']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Locacaotiposequips'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Locacaotiposequip'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tiposequips'), array('controller' => 'tiposequips', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tiposequip'), array('controller' => 'tiposequips', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Tiposequips'); ?></h3>
	<?php if (!empty($locacaotiposequip['Tiposequip'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Tipo'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($locacaotiposequip['Tiposequip'] as $tiposequip): ?>
		<tr>
			<td><?php echo $tiposequip['id']; ?></td>
			<td><?php echo $tiposequip['tipo']; ?></td>
			<td><?php echo $tiposequip['created']; ?></td>
			<td><?php echo $tiposequip['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'tiposequips', 'action' => 'view', $tiposequip['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'tiposequips', 'action' => 'edit', $tiposequip['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tiposequips', 'action' => 'delete', $tiposequip['id']), null, __('Are you sure you want to delete # %s?', $tiposequip['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Tiposequip'), array('controller' => 'tiposequips', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

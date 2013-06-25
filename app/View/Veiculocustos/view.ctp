<div class="veiculocustos view">
<h2><?php  echo __('Veiculocusto'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($veiculocusto['Veiculocusto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Veiculo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($veiculocusto['Veiculo']['id'], array('controller' => 'veiculos', 'action' => 'view', $veiculocusto['Veiculo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Funcionario'); ?></dt>
		<dd>
			<?php echo h($veiculocusto['Veiculocusto']['id_funcionario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($veiculocusto['Veiculocusto']['descricao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valor'); ?></dt>
		<dd>
			<?php echo h($veiculocusto['Veiculocusto']['valor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data'); ?></dt>
		<dd>
			<?php echo h($veiculocusto['Veiculocusto']['data']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($veiculocusto['Veiculocusto']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($veiculocusto['Veiculocusto']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Veiculocusto'), array('action' => 'edit', $veiculocusto['Veiculocusto']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Veiculocusto'), array('action' => 'delete', $veiculocusto['Veiculocusto']['id']), null, __('Are you sure you want to delete # %s?', $veiculocusto['Veiculocusto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Veiculocustos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Veiculocusto'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Veiculos'), array('controller' => 'veiculos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Veiculo'), array('controller' => 'veiculos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Veiculos'); ?></h3>
	<?php if (!empty($veiculocusto['Veiculo'])): ?>
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
		foreach ($veiculocusto['Veiculo'] as $veiculo): ?>
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

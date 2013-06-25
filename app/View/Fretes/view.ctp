<div class="fretes view">
<h2><?php  echo __('Frete'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($frete['Frete']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Venda'); ?></dt>
		<dd>
			<?php echo $this->Html->link($frete['Venda']['id'], array('controller' => 'vendas', 'action' => 'view', $frete['Venda']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cliente'); ?></dt>
		<dd>
			<?php echo $this->Html->link($frete['Cliente']['id'], array('controller' => 'clientes', 'action' => 'view', $frete['Cliente']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valor'); ?></dt>
		<dd>
			<?php echo h($frete['Frete']['valor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data'); ?></dt>
		<dd>
			<?php echo h($frete['Frete']['data']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datasolicitacao'); ?></dt>
		<dd>
			<?php echo h($frete['Frete']['datasolicitacao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datarecebimento'); ?></dt>
		<dd>
			<?php echo h($frete['Frete']['datarecebimento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($frete['Frete']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($frete['Frete']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($frete['Frete']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Frete'), array('action' => 'edit', $frete['Frete']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Frete'), array('action' => 'delete', $frete['Frete']['id']), null, __('Are you sure you want to delete # %s?', $frete['Frete']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Fretes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Frete'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vendas'), array('controller' => 'vendas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Venda'), array('controller' => 'vendas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Veiculos'), array('controller' => 'veiculos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Veiculo'), array('controller' => 'veiculos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Veiculos'); ?></h3>
	<?php if (!empty($frete['Veiculo'])): ?>
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
		foreach ($frete['Veiculo'] as $veiculo): ?>
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

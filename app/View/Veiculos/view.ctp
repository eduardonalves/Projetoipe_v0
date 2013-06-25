<div class="veiculos view">
<h2><?php  echo __('Veiculo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($veiculo['Veiculo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modelo'); ?></dt>
		<dd>
			<?php echo h($veiculo['Veiculo']['modelo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fabricante'); ?></dt>
		<dd>
			<?php echo h($veiculo['Veiculo']['fabricante']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quilometragem'); ?></dt>
		<dd>
			<?php echo h($veiculo['Veiculo']['quilometragem']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valorhoralocacao'); ?></dt>
		<dd>
			<?php echo h($veiculo['Veiculo']['valorhoralocacao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valordialocacao'); ?></dt>
		<dd>
			<?php echo h($veiculo['Veiculo']['valordialocacao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($veiculo['Veiculo']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Origem'); ?></dt>
		<dd>
			<?php echo h($veiculo['Veiculo']['origem']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Acao'); ?></dt>
		<dd>
			<?php echo h($veiculo['Veiculo']['acao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($veiculo['Veiculo']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($veiculo['Veiculo']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Veiculo'), array('action' => 'edit', $veiculo['Veiculo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Veiculo'), array('action' => 'delete', $veiculo['Veiculo']['id']), null, __('Are you sure you want to delete # %s?', $veiculo['Veiculo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Veiculos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Veiculo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Veiculocustos'), array('controller' => 'veiculocustos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Veiculocusto'), array('controller' => 'veiculocustos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Veiculomanutes'), array('controller' => 'veiculomanutes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Veiculomanute'), array('controller' => 'veiculomanutes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fretes'), array('controller' => 'fretes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Frete'), array('controller' => 'fretes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projetos'), array('controller' => 'projetos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projeto'), array('controller' => 'projetos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Veiculocustos'); ?></h3>
	<?php if (!empty($veiculo['Veiculocusto'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Veiculo Id'); ?></th>
		<th><?php echo __('Id Funcionario'); ?></th>
		<th><?php echo __('Descricao'); ?></th>
		<th><?php echo __('Valor'); ?></th>
		<th><?php echo __('Data'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($veiculo['Veiculocusto'] as $veiculocusto): ?>
		<tr>
			<td><?php echo $veiculocusto['id']; ?></td>
			<td><?php echo $veiculocusto['veiculo_id']; ?></td>
			<td><?php echo $veiculocusto['id_funcionario']; ?></td>
			<td><?php echo $veiculocusto['descricao']; ?></td>
			<td><?php echo $veiculocusto['valor']; ?></td>
			<td><?php echo $veiculocusto['data']; ?></td>
			<td><?php echo $veiculocusto['created']; ?></td>
			<td><?php echo $veiculocusto['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'veiculocustos', 'action' => 'view', $veiculocusto['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'veiculocustos', 'action' => 'edit', $veiculocusto['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'veiculocustos', 'action' => 'delete', $veiculocusto['id']), null, __('Are you sure you want to delete # %s?', $veiculocusto['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Veiculocusto'), array('controller' => 'veiculocustos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Veiculomanutes'); ?></h3>
	<?php if (!empty($veiculo['Veiculomanute'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Veiculo Id'); ?></th>
		<th><?php echo __('Descricao'); ?></th>
		<th><?php echo __('Valor'); ?></th>
		<th><?php echo __('Datainicio'); ?></th>
		<th><?php echo __('Datafim'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($veiculo['Veiculomanute'] as $veiculomanute): ?>
		<tr>
			<td><?php echo $veiculomanute['id']; ?></td>
			<td><?php echo $veiculomanute['veiculo_id']; ?></td>
			<td><?php echo $veiculomanute['descricao']; ?></td>
			<td><?php echo $veiculomanute['valor']; ?></td>
			<td><?php echo $veiculomanute['datainicio']; ?></td>
			<td><?php echo $veiculomanute['datafim']; ?></td>
			<td><?php echo $veiculomanute['created']; ?></td>
			<td><?php echo $veiculomanute['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'veiculomanutes', 'action' => 'view', $veiculomanute['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'veiculomanutes', 'action' => 'edit', $veiculomanute['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'veiculomanutes', 'action' => 'delete', $veiculomanute['id']), null, __('Are you sure you want to delete # %s?', $veiculomanute['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Veiculomanute'), array('controller' => 'veiculomanutes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Fretes'); ?></h3>
	<?php if (!empty($veiculo['Frete'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Venda Id'); ?></th>
		<th><?php echo __('Cliente Id'); ?></th>
		<th><?php echo __('Valor'); ?></th>
		<th><?php echo __('Data'); ?></th>
		<th><?php echo __('Datasolicitacao'); ?></th>
		<th><?php echo __('Datarecebimento'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($veiculo['Frete'] as $frete): ?>
		<tr>
			<td><?php echo $frete['id']; ?></td>
			<td><?php echo $frete['venda_id']; ?></td>
			<td><?php echo $frete['cliente_id']; ?></td>
			<td><?php echo $frete['valor']; ?></td>
			<td><?php echo $frete['data']; ?></td>
			<td><?php echo $frete['datasolicitacao']; ?></td>
			<td><?php echo $frete['datarecebimento']; ?></td>
			<td><?php echo $frete['status']; ?></td>
			<td><?php echo $frete['created']; ?></td>
			<td><?php echo $frete['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'fretes', 'action' => 'view', $frete['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'fretes', 'action' => 'edit', $frete['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'fretes', 'action' => 'delete', $frete['id']), null, __('Are you sure you want to delete # %s?', $frete['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Frete'), array('controller' => 'fretes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Projetos'); ?></h3>
	<?php if (!empty($veiculo['Projeto'])): ?>
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
		foreach ($veiculo['Projeto'] as $projeto): ?>
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

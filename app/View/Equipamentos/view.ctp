<div class="equipamentos view">
<h2><?php  echo __('Equipamento'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($equipamento['Equipamento']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tiposequip'); ?></dt>
		<dd>
			<?php echo $this->Html->link($equipamento['Tiposequip']['id'], array('controller' => 'tiposequips', 'action' => 'view', $equipamento['Tiposequip']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modelo'); ?></dt>
		<dd>
			<?php echo h($equipamento['Equipamento']['modelo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fabricante'); ?></dt>
		<dd>
			<?php echo h($equipamento['Equipamento']['fabricante']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Urimetrodatainicio'); ?></dt>
		<dd>
			<?php echo h($equipamento['Equipamento']['urimetrodatainicio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Urimetrodatafim'); ?></dt>
		<dd>
			<?php echo h($equipamento['Equipamento']['urimetrodatafim']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valorhoralocacao'); ?></dt>
		<dd>
			<?php echo h($equipamento['Equipamento']['valorhoralocacao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valordialocacao'); ?></dt>
		<dd>
			<?php echo h($equipamento['Equipamento']['valordialocacao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($equipamento['Equipamento']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Origem'); ?></dt>
		<dd>
			<?php echo h($equipamento['Equipamento']['origem']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Acao'); ?></dt>
		<dd>
			<?php echo h($equipamento['Equipamento']['acao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($equipamento['Equipamento']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($equipamento['Equipamento']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Equipamento'), array('action' => 'edit', $equipamento['Equipamento']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Equipamento'), array('action' => 'delete', $equipamento['Equipamento']['id']), null, __('Are you sure you want to delete # %s?', $equipamento['Equipamento']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Equipamentos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipamento'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tiposequips'), array('controller' => 'tiposequips', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tiposequip'), array('controller' => 'tiposequips', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Equipamentocustos'), array('controller' => 'equipamentocustos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipamentocusto'), array('controller' => 'equipamentocustos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Equipamentomanutes'), array('controller' => 'equipamentomanutes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipamentomanute'), array('controller' => 'equipamentomanutes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Itensprojetosequipamentos'), array('controller' => 'itensprojetosequipamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Itensprojetosequipamento'), array('controller' => 'itensprojetosequipamentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projetos'), array('controller' => 'projetos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projeto'), array('controller' => 'projetos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Equipamentocustos'); ?></h3>
	<?php if (!empty($equipamento['Equipamentocusto'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Equipamento Id'); ?></th>
		<th><?php echo __('Descricao'); ?></th>
		<th><?php echo __('Data'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($equipamento['Equipamentocusto'] as $equipamentocusto): ?>
		<tr>
			<td><?php echo $equipamentocusto['id']; ?></td>
			<td><?php echo $equipamentocusto['equipamento_id']; ?></td>
			<td><?php echo $equipamentocusto['descricao']; ?></td>
			<td><?php echo $equipamentocusto['data']; ?></td>
			<td><?php echo $equipamentocusto['created']; ?></td>
			<td><?php echo $equipamentocusto['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'equipamentocustos', 'action' => 'view', $equipamentocusto['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'equipamentocustos', 'action' => 'edit', $equipamentocusto['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'equipamentocustos', 'action' => 'delete', $equipamentocusto['id']), null, __('Are you sure you want to delete # %s?', $equipamentocusto['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Equipamentocusto'), array('controller' => 'equipamentocustos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Equipamentomanutes'); ?></h3>
	<?php if (!empty($equipamento['Equipamentomanute'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Equipamento Id'); ?></th>
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
		foreach ($equipamento['Equipamentomanute'] as $equipamentomanute): ?>
		<tr>
			<td><?php echo $equipamentomanute['id']; ?></td>
			<td><?php echo $equipamentomanute['equipamento_id']; ?></td>
			<td><?php echo $equipamentomanute['descricao']; ?></td>
			<td><?php echo $equipamentomanute['valor']; ?></td>
			<td><?php echo $equipamentomanute['datainicio']; ?></td>
			<td><?php echo $equipamentomanute['datafim']; ?></td>
			<td><?php echo $equipamentomanute['created']; ?></td>
			<td><?php echo $equipamentomanute['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'equipamentomanutes', 'action' => 'view', $equipamentomanute['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'equipamentomanutes', 'action' => 'edit', $equipamentomanute['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'equipamentomanutes', 'action' => 'delete', $equipamentomanute['id']), null, __('Are you sure you want to delete # %s?', $equipamentomanute['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Equipamentomanute'), array('controller' => 'equipamentomanutes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Itensprojetosequipamentos'); ?></h3>
	<?php if (!empty($equipamento['Itensprojetosequipamento'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Projeto Id'); ?></th>
		<th><?php echo __('Equipamento Id'); ?></th>
		<th><?php echo __('Datainicio'); ?></th>
		<th><?php echo __('Datafim'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($equipamento['Itensprojetosequipamento'] as $itensprojetosequipamento): ?>
		<tr>
			<td><?php echo $itensprojetosequipamento['id']; ?></td>
			<td><?php echo $itensprojetosequipamento['projeto_id']; ?></td>
			<td><?php echo $itensprojetosequipamento['equipamento_id']; ?></td>
			<td><?php echo $itensprojetosequipamento['datainicio']; ?></td>
			<td><?php echo $itensprojetosequipamento['datafim']; ?></td>
			<td><?php echo $itensprojetosequipamento['created']; ?></td>
			<td><?php echo $itensprojetosequipamento['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'itensprojetosequipamentos', 'action' => 'view', $itensprojetosequipamento['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'itensprojetosequipamentos', 'action' => 'edit', $itensprojetosequipamento['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'itensprojetosequipamentos', 'action' => 'delete', $itensprojetosequipamento['id']), null, __('Are you sure you want to delete # %s?', $itensprojetosequipamento['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Itensprojetosequipamento'), array('controller' => 'itensprojetosequipamentos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Projetos'); ?></h3>
	<?php if (!empty($equipamento['Projeto'])): ?>
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
		foreach ($equipamento['Projeto'] as $projeto): ?>
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

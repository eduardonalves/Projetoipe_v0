<div class="rotas view">
<h2><?php  echo __('Rota'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($rota['Rota']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rotaprincipal'); ?></dt>
		<dd>
			<?php echo h($rota['Rota']['rotaprincipal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Distancia'); ?></dt>
		<dd>
			<?php echo h($rota['Rota']['distancia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tempoestimado'); ?></dt>
		<dd>
			<?php echo h($rota['Rota']['tempoestimado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tolerancia'); ?></dt>
		<dd>
			<?php echo h($rota['Rota']['tolerancia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Horariopartida'); ?></dt>
		<dd>
			<?php echo h($rota['Rota']['horariopartida']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Horariochegada'); ?></dt>
		<dd>
			<?php echo h($rota['Rota']['horariochegada']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($rota['Rota']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($rota['Rota']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Rota'), array('action' => 'edit', $rota['Rota']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Rota'), array('action' => 'delete', $rota['Rota']['id']), null, __('Are you sure you want to delete # %s?', $rota['Rota']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Rotas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rota'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rotashorariostrafegos'), array('controller' => 'rotashorariostrafegos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rotashorariostrafego'), array('controller' => 'rotashorariostrafegos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Rotashorariostrafegos'); ?></h3>
	<?php if (!empty($rota['Rotashorariostrafego'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Rota Id'); ?></th>
		<th><?php echo __('Horarioinicio'); ?></th>
		<th><?php echo __('Horariofim'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($rota['Rotashorariostrafego'] as $rotashorariostrafego): ?>
		<tr>
			<td><?php echo $rotashorariostrafego['id']; ?></td>
			<td><?php echo $rotashorariostrafego['rota_id']; ?></td>
			<td><?php echo $rotashorariostrafego['horarioinicio']; ?></td>
			<td><?php echo $rotashorariostrafego['horariofim']; ?></td>
			<td><?php echo $rotashorariostrafego['created']; ?></td>
			<td><?php echo $rotashorariostrafego['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'rotashorariostrafegos', 'action' => 'view', $rotashorariostrafego['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'rotashorariostrafegos', 'action' => 'edit', $rotashorariostrafego['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'rotashorariostrafegos', 'action' => 'delete', $rotashorariostrafego['id']), null, __('Are you sure you want to delete # %s?', $rotashorariostrafego['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Rotashorariostrafego'), array('controller' => 'rotashorariostrafegos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

<div class="rotashorariostrafegos view">
<h2><?php  echo __('Rotashorariostrafego'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($rotashorariostrafego['Rotashorariostrafego']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rota'); ?></dt>
		<dd>
			<?php echo $this->Html->link($rotashorariostrafego['Rota']['id'], array('controller' => 'rotas', 'action' => 'view', $rotashorariostrafego['Rota']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Horarioinicio'); ?></dt>
		<dd>
			<?php echo h($rotashorariostrafego['Rotashorariostrafego']['horarioinicio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Horariofim'); ?></dt>
		<dd>
			<?php echo h($rotashorariostrafego['Rotashorariostrafego']['horariofim']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($rotashorariostrafego['Rotashorariostrafego']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($rotashorariostrafego['Rotashorariostrafego']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Rotashorariostrafego'), array('action' => 'edit', $rotashorariostrafego['Rotashorariostrafego']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Rotashorariostrafego'), array('action' => 'delete', $rotashorariostrafego['Rotashorariostrafego']['id']), null, __('Are you sure you want to delete # %s?', $rotashorariostrafego['Rotashorariostrafego']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Rotashorariostrafegos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rotashorariostrafego'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rotas'), array('controller' => 'rotas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rota'), array('controller' => 'rotas', 'action' => 'add')); ?> </li>
	</ul>
</div>

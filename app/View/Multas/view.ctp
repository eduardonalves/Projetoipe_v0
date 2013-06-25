<div class="multas view">
<h2><?php  echo __('Multa'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($multa['Multa']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($multa['Multa']['descricao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo'); ?></dt>
		<dd>
			<?php echo h($multa['Multa']['tipo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valor'); ?></dt>
		<dd>
			<?php echo h($multa['Multa']['valor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data'); ?></dt>
		<dd>
			<?php echo h($multa['Multa']['data']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Local'); ?></dt>
		<dd>
			<?php echo h($multa['Multa']['local']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vencimento'); ?></dt>
		<dd>
			<?php echo h($multa['Multa']['vencimento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($multa['Multa']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($multa['Multa']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Multa'), array('action' => 'edit', $multa['Multa']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Multa'), array('action' => 'delete', $multa['Multa']['id']), null, __('Are you sure you want to delete # %s?', $multa['Multa']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Multas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Multa'), array('action' => 'add')); ?> </li>
	</ul>
</div>

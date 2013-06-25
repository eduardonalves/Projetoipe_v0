<div class="itenslocas view">
<h2><?php  echo __('Itensloca'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($itensloca['Itensloca']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Locacaoequipamento'); ?></dt>
		<dd>
			<?php echo $this->Html->link($itensloca['Locacaoequipamento']['id'], array('controller' => 'locacaoequipamentos', 'action' => 'view', $itensloca['Locacaoequipamento']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tiposequip'); ?></dt>
		<dd>
			<?php echo $this->Html->link($itensloca['Tiposequip']['tipo'], array('controller' => 'tiposequips', 'action' => 'view', $itensloca['Tiposequip']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qtd'); ?></dt>
		<dd>
			<?php echo h($itensloca['Itensloca']['qtd']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datainicio'); ?></dt>
		<dd>
			<?php echo h($itensloca['Itensloca']['datainicio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datafim'); ?></dt>
		<dd>
			<?php echo h($itensloca['Itensloca']['datafim']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($itensloca['Itensloca']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($itensloca['Itensloca']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Itensloca'), array('action' => 'edit', $itensloca['Itensloca']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Itensloca'), array('action' => 'delete', $itensloca['Itensloca']['id']), null, __('Are you sure you want to delete # %s?', $itensloca['Itensloca']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Itenslocas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Itensloca'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locacaoequipamentos'), array('controller' => 'locacaoequipamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Locacaoequipamento'), array('controller' => 'locacaoequipamentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tiposequips'), array('controller' => 'tiposequips', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tiposequip'), array('controller' => 'tiposequips', 'action' => 'add')); ?> </li>
	</ul>
</div>

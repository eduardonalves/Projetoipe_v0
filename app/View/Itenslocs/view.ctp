<div class="itenslocs view">
<h2><?php  echo __('Itensloc'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($itensloc['Itensloc']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Locacaoequipamento'); ?></dt>
		<dd>
			<?php echo $this->Html->link($itensloc['Locacaoequipamento']['id'], array('controller' => 'locacaoequipamentos', 'action' => 'view', $itensloc['Locacaoequipamento']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tiposequip'); ?></dt>
		<dd>
			<?php echo $this->Html->link($itensloc['Tiposequip']['id'], array('controller' => 'tiposequips', 'action' => 'view', $itensloc['Tiposequip']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qtde'); ?></dt>
		<dd>
			<?php echo h($itensloc['Itensloc']['qtde']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datainicio'); ?></dt>
		<dd>
			<?php echo h($itensloc['Itensloc']['datainicio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datafim'); ?></dt>
		<dd>
			<?php echo h($itensloc['Itensloc']['datafim']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Itensloc'), array('action' => 'edit', $itensloc['Itensloc']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Itensloc'), array('action' => 'delete', $itensloc['Itensloc']['id']), null, __('Are you sure you want to delete # %s?', $itensloc['Itensloc']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Itenslocs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Itensloc'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locacaoequipamentos'), array('controller' => 'locacaoequipamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Locacaoequipamento'), array('controller' => 'locacaoequipamentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tiposequips'), array('controller' => 'tiposequips', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tiposequip'), array('controller' => 'tiposequips', 'action' => 'add')); ?> </li>
	</ul>
</div>

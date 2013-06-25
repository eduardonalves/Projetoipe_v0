<div class="locacaoequipamentosTiposequips view">
<h2><?php  echo __('Locacaoequipamentos Tiposequip'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($locacaoequipamentosTiposequip['LocacaoequipamentosTiposequip']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Locacaoequipamento'); ?></dt>
		<dd>
			<?php echo $this->Html->link($locacaoequipamentosTiposequip['Locacaoequipamento']['id'], array('controller' => 'locacaoequipamentos', 'action' => 'view', $locacaoequipamentosTiposequip['Locacaoequipamento']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tiposequip'); ?></dt>
		<dd>
			<?php echo $this->Html->link($locacaoequipamentosTiposequip['Tiposequip']['id'], array('controller' => 'tiposequips', 'action' => 'view', $locacaoequipamentosTiposequip['Tiposequip']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Locacaoequipamentos Tiposequip'), array('action' => 'edit', $locacaoequipamentosTiposequip['LocacaoequipamentosTiposequip']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Locacaoequipamentos Tiposequip'), array('action' => 'delete', $locacaoequipamentosTiposequip['LocacaoequipamentosTiposequip']['id']), null, __('Are you sure you want to delete # %s?', $locacaoequipamentosTiposequip['LocacaoequipamentosTiposequip']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Locacaoequipamentos Tiposequips'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Locacaoequipamentos Tiposequip'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locacaoequipamentos'), array('controller' => 'locacaoequipamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Locacaoequipamento'), array('controller' => 'locacaoequipamentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tiposequips'), array('controller' => 'tiposequips', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tiposequip'), array('controller' => 'tiposequips', 'action' => 'add')); ?> </li>
	</ul>
</div>

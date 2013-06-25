<div class="locacaoequipsTiposequips view">
<h2><?php  echo __('Locacaoequips Tiposequip'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($locacaoequipsTiposequip['LocacaoequipsTiposequip']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Locacaoequip'); ?></dt>
		<dd>
			<?php echo $this->Html->link($locacaoequipsTiposequip['Locacaoequip']['id'], array('controller' => 'locacaoequips', 'action' => 'view', $locacaoequipsTiposequip['Locacaoequip']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tiposequip'); ?></dt>
		<dd>
			<?php echo $this->Html->link($locacaoequipsTiposequip['Tiposequip']['id'], array('controller' => 'tiposequips', 'action' => 'view', $locacaoequipsTiposequip['Tiposequip']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datainicio'); ?></dt>
		<dd>
			<?php echo h($locacaoequipsTiposequip['LocacaoequipsTiposequip']['datainicio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datafim'); ?></dt>
		<dd>
			<?php echo h($locacaoequipsTiposequip['LocacaoequipsTiposequip']['datafim']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($locacaoequipsTiposequip['LocacaoequipsTiposequip']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Locacaoequips Tiposequip'), array('action' => 'edit', $locacaoequipsTiposequip['LocacaoequipsTiposequip']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Locacaoequips Tiposequip'), array('action' => 'delete', $locacaoequipsTiposequip['LocacaoequipsTiposequip']['id']), null, __('Are you sure you want to delete # %s?', $locacaoequipsTiposequip['LocacaoequipsTiposequip']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Locacaoequips Tiposequips'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Locacaoequips Tiposequip'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locacaoequips'), array('controller' => 'locacaoequips', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Locacaoequip'), array('controller' => 'locacaoequips', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tiposequips'), array('controller' => 'tiposequips', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tiposequip'), array('controller' => 'tiposequips', 'action' => 'add')); ?> </li>
	</ul>
</div>

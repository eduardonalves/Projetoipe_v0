<div class="locacaotiposequipsTiposequips view">
<h2><?php  echo __('Locacaotiposequips Tiposequip'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($locacaotiposequipsTiposequip['LocacaotiposequipsTiposequip']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Locacaotiposequip'); ?></dt>
		<dd>
			<?php echo $this->Html->link($locacaotiposequipsTiposequip['Locacaotiposequip']['id'], array('controller' => 'locacaotiposequips', 'action' => 'view', $locacaotiposequipsTiposequip['Locacaotiposequip']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tiposequip'); ?></dt>
		<dd>
			<?php echo $this->Html->link($locacaotiposequipsTiposequip['Tiposequip']['id'], array('controller' => 'tiposequips', 'action' => 'view', $locacaotiposequipsTiposequip['Tiposequip']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datainicio'); ?></dt>
		<dd>
			<?php echo h($locacaotiposequipsTiposequip['LocacaotiposequipsTiposequip']['datainicio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datafim'); ?></dt>
		<dd>
			<?php echo h($locacaotiposequipsTiposequip['LocacaotiposequipsTiposequip']['datafim']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($locacaotiposequipsTiposequip['LocacaotiposequipsTiposequip']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($locacaotiposequipsTiposequip['LocacaotiposequipsTiposequip']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Solicitante'); ?></dt>
		<dd>
			<?php echo h($locacaotiposequipsTiposequip['LocacaotiposequipsTiposequip']['solicitante']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Locacaotiposequips Tiposequip'), array('action' => 'edit', $locacaotiposequipsTiposequip['LocacaotiposequipsTiposequip']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Locacaotiposequips Tiposequip'), array('action' => 'delete', $locacaotiposequipsTiposequip['LocacaotiposequipsTiposequip']['id']), null, __('Are you sure you want to delete # %s?', $locacaotiposequipsTiposequip['LocacaotiposequipsTiposequip']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Locacaotiposequips Tiposequips'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Locacaotiposequips Tiposequip'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locacaotiposequips'), array('controller' => 'locacaotiposequips', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Locacaotiposequip'), array('controller' => 'locacaotiposequips', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tiposequips'), array('controller' => 'tiposequips', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tiposequip'), array('controller' => 'tiposequips', 'action' => 'add')); ?> </li>
	</ul>
</div>

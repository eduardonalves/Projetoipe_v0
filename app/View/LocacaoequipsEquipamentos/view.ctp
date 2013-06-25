<div class="locacaoequipsEquipamentos view">
<h2><?php  echo __('Locacaoequips Equipamento'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($locacaoequipsEquipamento['LocacaoequipsEquipamento']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Locacaoequip'); ?></dt>
		<dd>
			<?php echo $this->Html->link($locacaoequipsEquipamento['Locacaoequip']['id'], array('controller' => 'locacaoequips', 'action' => 'view', $locacaoequipsEquipamento['Locacaoequip']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Equipamento'); ?></dt>
		<dd>
			<?php echo $this->Html->link($locacaoequipsEquipamento['Equipamento']['id'], array('controller' => 'equipamentos', 'action' => 'view', $locacaoequipsEquipamento['Equipamento']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quantidade'); ?></dt>
		<dd>
			<?php echo h($locacaoequipsEquipamento['LocacaoequipsEquipamento']['quantidade']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datasolicitacao'); ?></dt>
		<dd>
			<?php echo h($locacaoequipsEquipamento['LocacaoequipsEquipamento']['datasolicitacao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datainicio'); ?></dt>
		<dd>
			<?php echo h($locacaoequipsEquipamento['LocacaoequipsEquipamento']['datainicio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datafim'); ?></dt>
		<dd>
			<?php echo h($locacaoequipsEquipamento['LocacaoequipsEquipamento']['datafim']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Locacaoequips Equipamento'), array('action' => 'edit', $locacaoequipsEquipamento['LocacaoequipsEquipamento']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Locacaoequips Equipamento'), array('action' => 'delete', $locacaoequipsEquipamento['LocacaoequipsEquipamento']['id']), null, __('Are you sure you want to delete # %s?', $locacaoequipsEquipamento['LocacaoequipsEquipamento']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Locacaoequips Equipamentos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Locacaoequips Equipamento'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locacaoequips'), array('controller' => 'locacaoequips', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Locacaoequip'), array('controller' => 'locacaoequips', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Equipamentos'), array('controller' => 'equipamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipamento'), array('controller' => 'equipamentos', 'action' => 'add')); ?> </li>
	</ul>
</div>

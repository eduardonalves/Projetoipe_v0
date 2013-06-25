<div class="fretesVeiculos view">
<h2><?php  echo __('Fretes Veiculo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($fretesVeiculo['FretesVeiculo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Frete'); ?></dt>
		<dd>
			<?php echo $this->Html->link($fretesVeiculo['Frete']['id'], array('controller' => 'fretes', 'action' => 'view', $fretesVeiculo['Frete']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Veiculo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($fretesVeiculo['Veiculo']['id'], array('controller' => 'veiculos', 'action' => 'view', $fretesVeiculo['Veiculo']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Fretes Veiculo'), array('action' => 'edit', $fretesVeiculo['FretesVeiculo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Fretes Veiculo'), array('action' => 'delete', $fretesVeiculo['FretesVeiculo']['id']), null, __('Are you sure you want to delete # %s?', $fretesVeiculo['FretesVeiculo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Fretes Veiculos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fretes Veiculo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fretes'), array('controller' => 'fretes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Frete'), array('controller' => 'fretes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Veiculos'), array('controller' => 'veiculos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Veiculo'), array('controller' => 'veiculos', 'action' => 'add')); ?> </li>
	</ul>
</div>

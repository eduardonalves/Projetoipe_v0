<div class="funcionariosmotoristas view">
<h2><?php  echo __('Funcionariosmotorista'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($funcionariosmotorista['Funcionariosmotorista']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Funcionario'); ?></dt>
		<dd>
			<?php echo $this->Html->link($funcionariosmotorista['Funcionario']['id'], array('controller' => 'funcionarios', 'action' => 'view', $funcionariosmotorista['Funcionario']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numerodacnh'); ?></dt>
		<dd>
			<?php echo h($funcionariosmotorista['Funcionariosmotorista']['numerodacnh']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Categoria'); ?></dt>
		<dd>
			<?php echo h($funcionariosmotorista['Funcionariosmotorista']['categoria']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expedicaocnh'); ?></dt>
		<dd>
			<?php echo h($funcionariosmotorista['Funcionariosmotorista']['expedicaocnh']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vencimentocnh'); ?></dt>
		<dd>
			<?php echo h($funcionariosmotorista['Funcionariosmotorista']['vencimentocnh']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($funcionariosmotorista['Funcionariosmotorista']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($funcionariosmotorista['Funcionariosmotorista']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Funcionariosmotorista'), array('action' => 'edit', $funcionariosmotorista['Funcionariosmotorista']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Funcionariosmotorista'), array('action' => 'delete', $funcionariosmotorista['Funcionariosmotorista']['id']), null, __('Are you sure you want to delete # %s?', $funcionariosmotorista['Funcionariosmotorista']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Funcionariosmotoristas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Funcionariosmotorista'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Funcionarios'), array('controller' => 'funcionarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Funcionario'), array('controller' => 'funcionarios', 'action' => 'add')); ?> </li>
	</ul>
</div>

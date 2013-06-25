<div class="funcionariosmotoristas form">
<?php echo $this->Form->create('Funcionariosmotorista'); ?>
	<fieldset>
		<legend><?php echo __('Add Funcionariosmotorista'); ?></legend>
	<?php
		echo $this->Form->input('funcionario_id');
		echo $this->Form->input('numerodacnh');
		echo $this->Form->input('categoria');
		echo $this->Form->input('expedicaocnh');
		echo $this->Form->input('vencimentocnh');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Funcionariosmotoristas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Funcionarios'), array('controller' => 'funcionarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Funcionario'), array('controller' => 'funcionarios', 'action' => 'add')); ?> </li>
	</ul>
</div>

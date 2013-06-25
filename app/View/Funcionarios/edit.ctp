<div class="funcionarios form">
<?php echo $this->Form->create('Funcionario'); ?>
	<fieldset>
		<legend><?php echo __('Edit Funcionario'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nome');
		echo $this->Form->input('logradouro');
		echo $this->Form->input('complemento');
		echo $this->Form->input('bairro');
		echo $this->Form->input('cidade');
		echo $this->Form->input('cep');
		echo $this->Form->input('telefonefixo');
		echo $this->Form->input('celular');
		echo $this->Form->input('rg');
		echo $this->Form->input('cpf');
		echo $this->Form->input('status');
		echo $this->Form->input('origem');
		echo $this->Form->input('acao');
		echo $this->Form->input('usina_id');
		echo $this->Form->input('funcao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Funcionario.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Funcionario.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Funcionarios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Usinas'), array('controller' => 'usinas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usina'), array('controller' => 'usinas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Funcionariosmotoristas'), array('controller' => 'funcionariosmotoristas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Funcionariosmotorista'), array('controller' => 'funcionariosmotoristas', 'action' => 'add')); ?> </li>
	</ul>
</div>

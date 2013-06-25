<div class="locacaoequipamentos form">
<?php echo $this->Form->create('Locacaoequipamento'); ?>
	<fieldset>
		<legend><?php echo __('Add Locacaoequipamento'); ?></legend>
	<?php
		echo $this->Form->input('projeto_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('datasolicitacao');
		echo $this->Form->input('status', array('value' => 'Pendente', 'type' => 'hidden'));
		
	?>
	<?php
		$count=1;
		for($i=0; $i < $count; $i+=1){
		echo "<hr/> <br/>  ";
		echo $this->Form->input("Tiposequip.'$i'.tiposequip_id", array('class'=>'tiposequip'));
		echo $this->Form->input("Itensloc.'$i'.tiposequip_id", array('class'=>'tiposequip2'));
		echo $this->Form->input("Itensloc.'$i'.qtde", array('class'=>'qtde'));
		echo $this->Form->input("Itensloc.'$i'.datainicio", array('class'=>'datainicio'));
		echo $this->Form->input("Itensloc.'$i'.datafim", array('class'=>'datafim'));
		echo $this->Form->input("Itensloc.'$i'.status", array('class'=>'datafim', 'value' =>'Pendente', 'type' =>'hidden'));
		}
	?>
	<?php echo "<a href='#' class='addlink'>Adicionar Novo Equipamento+</a> <br/>  <br/>  <br/> ";?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Locacaoequipamentos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Projetos'), array('controller' => 'projetos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projeto'), array('controller' => 'projetos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Itenslocs'), array('controller' => 'itenslocs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Itensloc'), array('controller' => 'itenslocs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tiposequips'), array('controller' => 'tiposequips', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tiposequip'), array('controller' => 'tiposequips', 'action' => 'add')); ?> </li>
	</ul>
</div>

<div class="multas form">
<?php echo $this->Form->create('Multa'); ?>
	<fieldset>
		<legend><?php echo __('Edit Multa'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('descricao');
		echo $this->Form->input('tipo');
		echo $this->Form->input('valor');
		echo $this->Form->input('data');
		echo $this->Form->input('local');
		echo $this->Form->input('vencimento');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Multa.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Multa.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Multas'), array('action' => 'index')); ?></li>
	</ul>
</div>

	<div class="locacaoequipamentos view">
<h2><?php  echo __('Locacaoequipamento'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($locacaoequipamento['Locacaoequipamento']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Projeto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($locacaoequipamento['Projeto']['id'], array('controller' => 'projetos', 'action' => 'view', $locacaoequipamento['Projeto']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($locacaoequipamento['User']['username'], array('controller' => 'users', 'action' => 'view', $locacaoequipamento['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datasolicitacao'); ?></dt>
		<dd>
			<?php echo h($locacaoequipamento['Locacaoequipamento']['datasolicitacao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($locacaoequipamento['Locacaoequipamento']['status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Locacaoequipamento'), array('action' => 'edit', $locacaoequipamento['Locacaoequipamento']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Locacaoequipamento'), array('action' => 'delete', $locacaoequipamento['Locacaoequipamento']['id']), null, __('Are you sure you want to delete # %s?', $locacaoequipamento['Locacaoequipamento']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Locacaoequipamentos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Locacaoequipamento'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Equipamentos solicitados pela O.S'); ?></h3>
	<?php if (!empty($locacaoequipamento['Itensloc'])): ?>
		<table cellpadding = "0" cellspacing = "0">
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('Número da O.S'); ?></th>
				<th><?php echo __('Tiposequip Id'); ?></th>
				<th><?php echo __('Qtde'); ?></th>
				<th><?php echo __('Datainicio'); ?></th>
				<th><?php echo __('Datafim'); ?></th>
				<th><?php echo __('Status'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
			<?php
				$i = 0;
				foreach ($locacaoequipamento['Itensloc'] as $itensloc): ?>
						<tr>
							<td><?php echo $itensloc['id']; ?></td>
							<td><?php echo $itensloc['locacaoequipamento_id']; ?></td>
							<td><?php echo $itensloc['tiposequip_id']; ?></td>
							<td><?php echo $itensloc['qtde']; ?></td>
							<td><?php echo $itensloc['datainicio']; ?></td>
							<td><?php echo $itensloc['datafim']; ?></td>
							<td><?php echo $itensloc['status']; ?></td>
							<td class="actions">
								<?php echo $this->Html->link(__('View'), array('controller' => 'itenslocs', 'action' => 'view', $itensloc['id'])); ?>
								<?php echo $this->Html->link(__('Edit'), array('controller' => 'itenslocs', 'action' => 'edit', $itensloc['id'])); ?>
								<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'itenslocs', 'action' => 'delete', $itensloc['id']), null, __('Are you sure you want to delete # %s?', $itensloc['id'])); ?>
							</td>
						</tr>
				<?php endforeach; ?>
		</table>
	<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Itensloc'), array('controller' => 'itenslocs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Equipamentos Disponíveis para Locação'); ?></h3>
	<?php if (!empty($locacaoequipamento['Itensloc'])): ?>
		<table cellpadding = "0" cellspacing = "0">
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('Tipo de Equipamento Id'); ?></th>
				<th><?php echo __('Modelo'); ?></th>
				<th><?php echo __('Fabricante'); ?></th>
				<th><?php echo __('Status'); ?></th>
				<th><?php echo __('Valor dia Locacao'); ?></th>
				<th><?php echo __('Actions'); ?></th>
				<th class="actions"><?php echo __('Alocar'); ?></th>
				
			</tr>
			<?php $count = 0; ?>
			<?php foreach($equipamentos as $equipamento): ?>
				
				<?php foreach($itenslocs as $itensloc): ?>
				<?php $count+=1; 
				$aux = $count%2;
				?>
					<?php if($aux == 0){?>
						<tr>
							<td><?php echo h($equipamento['Equipamento']['id']); ?></td>
							<td><?php echo h($equipamento['Equipamento']['tiposequip_id']); ?></td>
							<td><?php echo h($equipamento['Equipamento']['modelo']); ?></td>
							<td><?php echo h($equipamento['Equipamento']['fabricante']); ?></td>
							<td><?php echo h($equipamento['Equipamento']['status']); ?></td>
							<td><?php echo h($equipamento['Equipamento']['valordialocacao']); ?></td>
							<td class="actions">
								<?php echo $this->Html->link(__('View'), array('controller' => 'equipamentos', 'action' => 'view', $equipamento['Equipamento']['id'])); ?>
								<?php echo $this->Html->link(__('Edit'), array('controller' => 'equipamentos', 'action' => 'edit', $equipamento['Equipamento']['id'])); ?>
								<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'equipamentos', 'action' => 'delete', $equipamento['Equipamento']['id']), null, __('Are you sure you want to delete # %s?', $equipamento['Equipamento']['id'])); ?>
								<?php echo $this->Form->create('Itensprojetosequipamento', array('action' => 'addprojetoequip')); ?>
								<?php echo $this->Form->text("Itensprojetosequipamento.equipamento_id", array ('value' => $equipamento['Equipamento']['id'], 'type' => 'hidden')); ?>
								</td>
								<?php
									echo $this->Form->text("Itensprojetosequipamento.projeto_id", array ('value' => $itensloc['Locacaoequipamento']['projeto_id'], 'type' => 'hidden' ));
									echo $this->Form->text("Itensprojetosequipamento.tiposequip_id", array ('value' => $equipamento['Equipamento']['tiposequip_id'] ,'type' => 'hidden' ));
									echo $this->Form->text("Itensprojetosequipamento.datainicio", array('value' => $itensloc['Itensloc']['datainicio'], 'type' => 'hidden'));
									echo $this->Form->text("Itensprojetosequipamento.datafim", array('value' => $itensloc['Itensloc']['datafim'], 'type' => 'hidden') );
									echo $this->Form->text("Itensprojetosequipamento.status", array('value' => "Alocado", 'type' => 'hidden') );
									echo $this->Form->text("Itensprojetosequipamento.locacaoequipamento_id", array('value' => $locacaoequipamento['Locacaoequipamento']['id'], 'type' => 'hidden') );
								?>
								<td><?php echo $this->Form->end('Alocar'); ?></td>
					<?php } ?>	
						</tr>
				<?php endforeach; ?>

			<?php endforeach; ?>
		</table>
	<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Itensloc'), array('controller' => 'itenslocs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

<div class="related">
	<h3><?php echo __('Relação de Equipamentos Locados'); ?></h3>
	<?php if (!empty($itensprojetosequipamentos)): ?>
			<table cellpadding = "0" cellspacing = "0">
				<tr>
					<th><?php echo __('id'); ?></th>
					<th><?php echo __('Numero da O.S'); ?></th>
					<th><?php echo __('Equipamento'); ?></th>
					<th><?php echo __('Tipo de Equipamento'); ?></th>
					<th><?php echo __('Data Inicio'); ?></th>
					<th><?php echo __('Data Fim'); ?></th>
					<th><?php echo __('Status'); ?></th>
					<th class="actions"><?php echo __('Actions'); ?></th>
				</tr>
				<?php
					$i = 0;
					foreach ($itensprojetosequipamentos as $itensprojetosequipamento): ?>
					<tr>
						<td><?php echo h ($itensprojetosequipamento['Itensprojetosequipamentos']['id']); ?></td>
						<td><?php echo h ($itensprojetosequipamento['Itensprojetosequipamentos']['locacaoequipamento_id']); ?></td>
						<td><?php echo h ($itensprojetosequipamento['Itensprojetosequipamentos']['equipamento_id']); ?></td>
						<td><?php echo h ($itensprojetosequipamento['Itensprojetosequipamentos']['tiposequip_id']); ?></td>
						<td><?php echo h($itensprojetosequipamento['Itensprojetosequipamentos']['datainicio']); ?></td>
						<td><?php echo h ($itensprojetosequipamento['Itensprojetosequipamentos']['datafim']); ?></td>
						<td><?php echo h ($itensprojetosequipamento['Itensprojetosequipamentos']['status']); ?></td>
						<td class="actions">
							<?php echo $this->Html->link(__('View'), array('controller' => 'Itensprojetosequipamentos', 'action' => 'view', $itensprojetosequipamento['Itensprojetosequipamentos']['id'])); ?>
							<?php echo $this->Html->link(__('Edit'), array('controller' => 'Itensprojetosequipamentos', 'action' => 'edit', $itensprojetosequipamento['Itensprojetosequipamentos']['id'])); ?>
							<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'Itensprojetosequipamentos', 'action' => 'delete', $itensprojetosequipamento['Itensprojetosequipamentos']['id']), null, __('Are you sure you want to delete # %s?', $itensprojetosequipamento['Itensprojetosequipamentos']['id'])); ?>
							<?php echo $this->Html->link(__('Desalocar'), array('controller' => 'Itensprojetosequipamentos', 'action' => 'desalocar', $itensprojetosequipamento['Itensprojetosequipamentos']['id'])); ?>
							<?php echo $this->Html->link(__('Cancelar'), array('controller' => 'Itensprojetosequipamentos', 'action' => 'cancelar', $itensprojetosequipamento['Itensprojetosequipamentos']['id'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
			</table>
	<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Tiposequip'), array('controller' => 'tiposequips', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>




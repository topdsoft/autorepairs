<div class="vehicles index">
	<h2><?php echo __('Vehicles');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('year');?></th>
			<th><?php echo $this->Paginator->sort('make_id');?></th>
			<th><?php echo $this->Paginator->sort('automodel_id');?></th>
			<th><?php echo $this->Paginator->sort('trim');?></th>
			<th><?php echo $this->Paginator->sort('engine_id');?></th>
			<th><?php echo $this->Paginator->sort('vin');?></th>
			<th><?php echo $this->Paginator->sort('color');?></th>
			<th><?php echo $this->Paginator->sort('notes');?></th>
			<th><?php echo $this->Paginator->sort('purchaseDate');?></th>
			<th><?php echo $this->Paginator->sort('saleDate');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($vehicles as $vehicle): ?>
	<tr>
		<td><?php echo h($vehicle['Vehicle']['id']); ?>&nbsp;</td>
		<td><?php echo h($vehicle['Vehicle']['year']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($vehicle['Make']['name'], array('controller' => 'makes', 'action' => 'view', $vehicle['Make']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($vehicle['Automodel']['name'], array('controller' => 'automodels', 'action' => 'view', $vehicle['Automodel']['id'])); ?>
		</td>
		<td><?php echo h($vehicle['Vehicle']['trim']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($vehicle['Engine']['name'], array('controller' => 'engines', 'action' => 'view', $vehicle['Engine']['id'])); ?>
		</td>
		<td><?php echo h($vehicle['Vehicle']['vin']); ?>&nbsp;</td>
		<td><?php echo h($vehicle['Vehicle']['color']); ?>&nbsp;</td>
		<td><?php echo h($vehicle['Vehicle']['notes']); ?>&nbsp;</td>
		<td><?php echo h($vehicle['Vehicle']['purchaseDate']); ?>&nbsp;</td>
		<td><?php echo h($vehicle['Vehicle']['saleDate']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $vehicle['Vehicle']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $vehicle['Vehicle']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $vehicle['Vehicle']['id']), null, __('Are you sure you want to delete # %s?', $vehicle['Vehicle']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Vehicle'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Makes'), array('controller' => 'makes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Make'), array('controller' => 'makes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Automodels'), array('controller' => 'automodels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Automodel'), array('controller' => 'automodels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Engines'), array('controller' => 'engines', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Engine'), array('controller' => 'engines', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mileages'), array('controller' => 'mileages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mileage'), array('controller' => 'mileages', 'action' => 'add')); ?> </li>
	</ul>
</div>

<div class="repairs index">
	<h2><?php echo __('Repairs');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('vehicle_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('finished');?></th>
			<th><?php echo $this->Paginator->sort('cost');?></th>
			<th><?php echo $this->Paginator->sort('notes');?></th>
			<th><?php echo $this->Paginator->sort('repairtype_id');?></th>
			<th><?php echo $this->Paginator->sort('mileage');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($repairs as $repair): ?>
	<tr>
		<td><?php echo h($repair['Repair']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($repair['Vehicle']['id'], array('controller' => 'vehicles', 'action' => 'view', $repair['Vehicle']['id'])); ?>
		</td>
		<td><?php echo h($repair['Repair']['created']); ?>&nbsp;</td>
		<td><?php echo h($repair['Repair']['finished']); ?>&nbsp;</td>
		<td><?php echo h($repair['Repair']['cost']); ?>&nbsp;</td>
		<td><?php echo h($repair['Repair']['notes']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($repair['Repairtype']['name'], array('controller' => 'repairtypes', 'action' => 'view', $repair['Repairtype']['id'])); ?>
		</td>
		<td><?php echo h($repair['Repair']['mileage']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $repair['Repair']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $repair['Repair']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $repair['Repair']['id']), null, __('Are you sure you want to delete # %s?', $repair['Repair']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Repair'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Vehicles'), array('controller' => 'vehicles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle'), array('controller' => 'vehicles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Repairtypes'), array('controller' => 'repairtypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Repairtype'), array('controller' => 'repairtypes', 'action' => 'add')); ?> </li>
	</ul>
</div>

<div class="repairtypes view">
<h2><?php  echo __('Repairtype');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($repairtype['Repairtype']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($repairtype['Repairtype']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Repairtype'), array('action' => 'edit', $repairtype['Repairtype']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Repairtype'), array('action' => 'delete', $repairtype['Repairtype']['id']), null, __('Are you sure you want to delete # %s?', $repairtype['Repairtype']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Repairtypes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Repairtype'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Repairs'), array('controller' => 'repairs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Repair'), array('controller' => 'repairs', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Repairs');?></h3>
	<?php if (!empty($repairtype['Repair'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Vehicle Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Finished'); ?></th>
		<th><?php echo __('Cost'); ?></th>
		<th><?php echo __('Notes'); ?></th>
		<th><?php echo __('Repairtype Id'); ?></th>
		<th><?php echo __('Mileage'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($repairtype['Repair'] as $repair): ?>
		<tr>
			<td><?php echo $repair['id'];?></td>
			<td><?php echo $repair['vehicle_id'];?></td>
			<td><?php echo $repair['created'];?></td>
			<td><?php echo $repair['finished'];?></td>
			<td><?php echo $repair['cost'];?></td>
			<td><?php echo $repair['notes'];?></td>
			<td><?php echo $repair['repairtype_id'];?></td>
			<td><?php echo $repair['mileage'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'repairs', 'action' => 'view', $repair['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'repairs', 'action' => 'edit', $repair['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'repairs', 'action' => 'delete', $repair['id']), null, __('Are you sure you want to delete # %s?', $repair['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Repair'), array('controller' => 'repairs', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>

<div class="repairtypes index">
	<h2><?php echo __('Repairtypes');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($repairtypes as $repairtype): ?>
	<tr>
		<td><?php echo h($repairtype['Repairtype']['id']); ?>&nbsp;</td>
		<td><?php echo h($repairtype['Repairtype']['name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $repairtype['Repairtype']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $repairtype['Repairtype']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $repairtype['Repairtype']['id']), null, __('Are you sure you want to delete # %s?', $repairtype['Repairtype']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Repairtype'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Repairs'), array('controller' => 'repairs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Repair'), array('controller' => 'repairs', 'action' => 'add')); ?> </li>
	</ul>
</div>

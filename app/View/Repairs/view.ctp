<div class="repairs view">
<h2><?php  echo __('Repair');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($repair['Repair']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vehicle'); ?></dt>
		<dd>
			<?php echo $this->Html->link($repair['Vehicle']['id'], array('controller' => 'vehicles', 'action' => 'view', $repair['Vehicle']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($repair['Repair']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Finished'); ?></dt>
		<dd>
			<?php echo h($repair['Repair']['finished']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cost'); ?></dt>
		<dd>
			<?php echo h($repair['Repair']['cost']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Notes'); ?></dt>
		<dd>
			<?php echo h($repair['Repair']['notes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Repairtype'); ?></dt>
		<dd>
			<?php echo $this->Html->link($repair['Repairtype']['name'], array('controller' => 'repairtypes', 'action' => 'view', $repair['Repairtype']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mileage'); ?></dt>
		<dd>
			<?php echo h($repair['Repair']['mileage']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Repair'), array('action' => 'edit', $repair['Repair']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Repair'), array('action' => 'delete', $repair['Repair']['id']), null, __('Are you sure you want to delete # %s?', $repair['Repair']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Repairs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Repair'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vehicles'), array('controller' => 'vehicles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle'), array('controller' => 'vehicles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Repairtypes'), array('controller' => 'repairtypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Repairtype'), array('controller' => 'repairtypes', 'action' => 'add')); ?> </li>
	</ul>
</div>

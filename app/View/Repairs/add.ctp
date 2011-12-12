<div class="repairs form">
<?php echo $this->Form->create('Repair');?>
	<fieldset>
		<legend><?php echo __('Add Repair'); ?></legend>
	<?php
		echo $this->Form->input('vehicle_id');
		echo $this->Form->input('finished');
		echo $this->Form->input('cost');
		echo $this->Form->input('notes');
		echo $this->Form->input('repairtype_id');
		echo $this->Form->input('mileage');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Repairs'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Vehicles'), array('controller' => 'vehicles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle'), array('controller' => 'vehicles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Repairtypes'), array('controller' => 'repairtypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Repairtype'), array('controller' => 'repairtypes', 'action' => 'add')); ?> </li>
	</ul>
</div>

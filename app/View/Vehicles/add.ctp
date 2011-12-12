<div class="vehicles form">
<?php echo $this->Form->create('Vehicle');?>
	<fieldset>
		<legend><?php echo __('Add Vehicle'); ?></legend>
	<?php
		echo $this->Form->input('year');
		echo $this->Form->input('make_id');
		echo $this->Form->input('automodel_id');
		echo $this->Form->input('trim');
		echo $this->Form->input('engine_id');
		echo $this->Form->input('vin');
		echo $this->Form->input('color');
		echo $this->Form->input('notes');
		echo $this->Form->input('purchaseDate');
		echo $this->Form->input('saleDate');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Vehicles'), array('action' => 'index'));?></li>
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

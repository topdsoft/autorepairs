<div class="automodels form">
<?php echo $this->Form->create('Automodel');?>
	<fieldset>
		<legend><?php echo __('Edit Automodel'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Automodel.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Automodel.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Automodels'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Vehicles'), array('controller' => 'vehicles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle'), array('controller' => 'vehicles', 'action' => 'add')); ?> </li>
	</ul>
</div>

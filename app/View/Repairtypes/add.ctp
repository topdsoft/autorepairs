<div class="repairtypes form">
<?php echo $this->Form->create('Repairtype');?>
	<fieldset>
		<legend><?php echo __('Add Repairtype'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Repairtypes'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Repairs'), array('controller' => 'repairs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Repair'), array('controller' => 'repairs', 'action' => 'add')); ?> </li>
	</ul>
</div>

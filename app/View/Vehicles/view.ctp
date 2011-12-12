<div class="vehicles view">
<h2><?php  echo __('Vehicle');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($vehicle['Vehicle']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Year'); ?></dt>
		<dd>
			<?php echo h($vehicle['Vehicle']['year']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Make'); ?></dt>
		<dd>
			<?php echo $this->Html->link($vehicle['Make']['name'], array('controller' => 'makes', 'action' => 'view', $vehicle['Make']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Automodel'); ?></dt>
		<dd>
			<?php echo $this->Html->link($vehicle['Automodel']['name'], array('controller' => 'automodels', 'action' => 'view', $vehicle['Automodel']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trim'); ?></dt>
		<dd>
			<?php echo h($vehicle['Vehicle']['trim']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Engine'); ?></dt>
		<dd>
			<?php echo $this->Html->link($vehicle['Engine']['name'], array('controller' => 'engines', 'action' => 'view', $vehicle['Engine']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vin'); ?></dt>
		<dd>
			<?php echo h($vehicle['Vehicle']['vin']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Color'); ?></dt>
		<dd>
			<?php echo h($vehicle['Vehicle']['color']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Notes'); ?></dt>
		<dd>
			<?php echo h($vehicle['Vehicle']['notes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PurchaseDate'); ?></dt>
		<dd>
			<?php echo h($vehicle['Vehicle']['purchaseDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('SaleDate'); ?></dt>
		<dd>
			<?php echo h($vehicle['Vehicle']['saleDate']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Vehicle'), array('action' => 'edit', $vehicle['Vehicle']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Vehicle'), array('action' => 'delete', $vehicle['Vehicle']['id']), null, __('Are you sure you want to delete # %s?', $vehicle['Vehicle']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Vehicles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Mileages');?></h3>
	<?php if (!empty($vehicle['Mileage'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Miles'); ?></th>
		<th><?php echo __('Vehicle Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($vehicle['Mileage'] as $mileage): ?>
		<tr>
			<td><?php echo $mileage['id'];?></td>
			<td><?php echo $mileage['miles'];?></td>
			<td><?php echo $mileage['vehicle_id'];?></td>
			<td><?php echo $mileage['created'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'mileages', 'action' => 'view', $mileage['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'mileages', 'action' => 'edit', $mileage['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'mileages', 'action' => 'delete', $mileage['id']), null, __('Are you sure you want to delete # %s?', $mileage['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Mileage'), array('controller' => 'mileages', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>

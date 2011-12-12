<div class="makes view">
<h2><?php  echo __('Make');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($make['Make']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($make['Make']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Make'), array('action' => 'edit', $make['Make']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Make'), array('action' => 'delete', $make['Make']['id']), null, __('Are you sure you want to delete # %s?', $make['Make']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Makes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Make'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Engines'), array('controller' => 'engines', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Engine'), array('controller' => 'engines', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vehicles'), array('controller' => 'vehicles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle'), array('controller' => 'vehicles', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Engines');?></h3>
	<?php if (!empty($make['Engine'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Make Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($make['Engine'] as $engine): ?>
		<tr>
			<td><?php echo $engine['id'];?></td>
			<td><?php echo $engine['name'];?></td>
			<td><?php echo $engine['make_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'engines', 'action' => 'view', $engine['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'engines', 'action' => 'edit', $engine['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'engines', 'action' => 'delete', $engine['id']), null, __('Are you sure you want to delete # %s?', $engine['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Engine'), array('controller' => 'engines', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Vehicles');?></h3>
	<?php if (!empty($make['Vehicle'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Year'); ?></th>
		<th><?php echo __('Make Id'); ?></th>
		<th><?php echo __('Automodel Id'); ?></th>
		<th><?php echo __('Trim'); ?></th>
		<th><?php echo __('Engine Id'); ?></th>
		<th><?php echo __('Vin'); ?></th>
		<th><?php echo __('Color'); ?></th>
		<th><?php echo __('Notes'); ?></th>
		<th><?php echo __('PurchaseDate'); ?></th>
		<th><?php echo __('SaleDate'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($make['Vehicle'] as $vehicle): ?>
		<tr>
			<td><?php echo $vehicle['id'];?></td>
			<td><?php echo $vehicle['year'];?></td>
			<td><?php echo $vehicle['make_id'];?></td>
			<td><?php echo $vehicle['automodel_id'];?></td>
			<td><?php echo $vehicle['trim'];?></td>
			<td><?php echo $vehicle['engine_id'];?></td>
			<td><?php echo $vehicle['vin'];?></td>
			<td><?php echo $vehicle['color'];?></td>
			<td><?php echo $vehicle['notes'];?></td>
			<td><?php echo $vehicle['purchaseDate'];?></td>
			<td><?php echo $vehicle['saleDate'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'vehicles', 'action' => 'view', $vehicle['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'vehicles', 'action' => 'edit', $vehicle['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'vehicles', 'action' => 'delete', $vehicle['id']), null, __('Are you sure you want to delete # %s?', $vehicle['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Vehicle'), array('controller' => 'vehicles', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>

<div class="people view">
<h2><?php echo __('Person'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($person['Person']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($person['Person']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($person['Person']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sex'); ?></dt>
		<dd>
			<?php echo h($person['Person']['sex']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($person['Person']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($person['Person']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Person'), array('action' => 'edit', $person['Person']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Person'), array('action' => 'delete', $person['Person']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $person['Person']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Users'); ?></h3>
	<?php if (!empty($person['User'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Group Id'); ?></th>
		<th><?php echo __('Person Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($person['User'] as $user): ?>
		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['username']; ?></td>
			<td><?php echo $user['password']; ?></td>
			<td><?php echo $user['email']; ?></td>
			<td><?php echo $user['group_id']; ?></td>
			<td><?php echo $user['person_id']; ?></td>
			<td><?php echo $user['created']; ?></td>
			<td><?php echo $user['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['id']), array('confirm' => __('Are you sure you want to delete # %s?', $user['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

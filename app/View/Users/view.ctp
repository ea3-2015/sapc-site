<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Group'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Person'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['Person']['name'], array('controller' => 'people', 'action' => 'view', $user['Person']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $user['User']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Noticias'), array('controller' => 'noticias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Noticia'), array('controller' => 'noticias', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Noticias'); ?></h3>
	<?php if (!empty($user['Noticia'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Content'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Noticia'] as $noticia): ?>
		<tr>
			<td><?php echo $noticia['id']; ?></td>
			<td><?php echo $noticia['title']; ?></td>
			<td><?php echo $noticia['content']; ?></td>
			<td><?php echo $noticia['user_id']; ?></td>
			<td><?php echo $noticia['created']; ?></td>
			<td><?php echo $noticia['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'noticias', 'action' => 'view', $noticia['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'noticias', 'action' => 'edit', $noticia['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'noticias', 'action' => 'delete', $noticia['id']), array('confirm' => __('Are you sure you want to delete # %s?', $noticia['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Noticia'), array('controller' => 'noticias', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related People'); ?></h3>
	<?php if (!empty($user['Person'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Sex'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Person'] as $person): ?>
		<tr>
			<td><?php echo $person['id']; ?></td>
			<td><?php echo $person['name']; ?></td>
			<td><?php echo $person['last_name']; ?></td>
			<td><?php echo $person['sex']; ?></td>
			<td><?php echo $person['created']; ?></td>
			<td><?php echo $person['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'people', 'action' => 'view', $person['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'people', 'action' => 'edit', $person['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'people', 'action' => 'delete', $person['id']), array('confirm' => __('Are you sure you want to delete # %s?', $person['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

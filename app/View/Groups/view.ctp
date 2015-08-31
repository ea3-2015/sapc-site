<!-- View baked using a 'pretty_cake' template: http://nelson6e65.github.io/pretty_cake -->
<h2><?php echo __('Group'); ?></h2>

<div id="groups-view" class="panel panel-default">

	<div class="panel-heading">
		<h3 class="panel-title"><?php echo __('Group' . ' data'); ?></h3>
	</div>

<!--
	<div class="panel-body">
		Here you can add some description of this view.
	</div>
-->

	<div class="list-group">

		<div class="list-group-item">
			<h4 class="list-group-item-heading"><?php echo __('Id'); ?></h4>
			<p class="list-group-item-text">
				<?php echo h($group['Group']['id']); ?>
			</p>
		</div>

		<div class="list-group-item">
			<h4 class="list-group-item-heading"><?php echo __('Name'); ?></h4>
			<p class="list-group-item-text">
				<?php echo h($group['Group']['name']); ?>
			</p>
		</div>

		<div class="list-group-item">
			<h4 class="list-group-item-heading"><?php echo __('Created'); ?></h4>
			<p class="list-group-item-text">
				<?php echo h($group['Group']['created']); ?>
			</p>
		</div>

		<div class="list-group-item">
			<h4 class="list-group-item-heading"><?php echo __('Modified'); ?></h4>
			<p class="list-group-item-text">
				<?php echo h($group['Group']['modified']); ?>
			</p>
		</div>
	</div>


	<div class="panel-footer">
		<div class="btn-toolbar" role="toolbar">

			<div class="btn-group" role="group">
				<?php echo $this->Html->link(__('Edit Group'), array('action' => 'edit', $group['Group']['id']), array('class' => 'btn btn-warning')); ?>
				<?php echo $this->Form->postLink(__('Delete Group'), array('action' => 'delete', $group['Group']['id']), array('class' => 'btn btn-danger'), __('Are you sure you want to delete # %s?', $group['Group']['id'])); ?>
			</div>

			<div class="btn-group dropup" role="group">

				<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
					<?php echo __('Other actions'); ?> <span class="caret"></span>
				</button>

				<ul class="dropdown-menu" role="menu">
					<li><?php echo $this->Html->link(__('List Groups'), array('action' => 'index')); ?></li>
					<li><?php echo $this->Html->link(__('New Group'), array('action' => 'add')); ?></li>
					<li class="divider"></li>

					<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
				</ul>
			</div>

		</div>
	</div>

</div><!-- END -view -->




<div id="groups-related" class="panel panel-default">

	<div class="panel-heading">
		<h3 class="panel-title"><?php echo __('Related data'); ?></h2>
	</div>


	<div class="panel-body">

		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title"><?php echo __('Related Users'); ?></h4>
			</div>

			<div class="panel-body" style="overflow: auto;">
<?php if (!empty($group['User'])): ?>
				<table class="table table-bordered">
				<thead>
					<tr>
						<th><?php echo __('Id'); ?></th>
						<th><?php echo __('Username'); ?></th>
						<th><?php echo __('Password'); ?></th>
						<th><?php echo __('Email'); ?></th>
						<th><?php echo __('Group Id'); ?></th>
						<th><?php echo __('Person Id'); ?></th>
						<th><?php echo __('Created'); ?></th>
						<th><?php echo __('Modified'); ?></th>
						<th style="border-collapse: collapse; white-space: nowrap; width: 1px;"><?php echo __('Actions'); ?></th>
					</tr>
				</thead>

				<tbody>
	<?php foreach ($group['User'] as $user): ?>
					<tr>
						<td><?php echo $user['id']; ?></td>
						<td><?php echo $user['username']; ?></td>
						<td><?php echo $user['password']; ?></td>
						<td><?php echo $user['email']; ?></td>
						<td><?php echo $user['group_id']; ?></td>
						<td><?php echo $user['person_id']; ?></td>
						<td><?php echo $user['created']; ?></td>
						<td><?php echo $user['modified']; ?></td>
						<td class="text-center" style="min-width: 8em;">
							<div class="btn-group" role="group">
								<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id']), array('class' => 'btn btn-default btn-sm')); ?>
								<a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<span class="fa fa-caret-down"></span>
									<span class="sr-only">Toggle Dropdown</span>
								</a>
								<ul class="dropdown-menu" role="menu">
									<li><?php echo $this->Html->link('<i class="fa fa-edit fa-fw"></i> ' . __('Edit'), array('controller' => 'users', 'action' => 'edit', $user['id']), array('escape' => false)); ?></li>
									<li><?php echo $this->Form->postLink('<i class="fa fa-trash-o fa-fw"></i> ' . __('Delete'), array('controller' => 'users', 'action' => 'delete', $user['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $user['id'])); ?></li>
								</ul>
							</div>
						</td>
					</tr>
	<?php endforeach; ?>
				</tbody>
				</table>
<?php endif; ?>


				<div class="btn-group" role="group">
				<?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add'), array('class' => 'btn btn-primary')); ?>
				</div>


			</div>


		</div>

	</div> <!-- END -related panel-body -->

</div><!-- END -related -->

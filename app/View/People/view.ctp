<!-- View baked using a 'pretty_cake' template: http://nelson6e65.github.io/pretty_cake -->
<?php
        echo $this->Html->css(array('styles'));
        echo $this->Html->css(array('bootstrap.min'));

        echo $this->Html->css('/assets/font-awesome/4.4.0/css/font-awesome.min');

        echo $this->Html->script(array('jquery-2.1.3'));
        echo $this->Html->script(array('scripts'));
        echo $this->Html->script(array('bootstrap.min'));
    ?>

<h2><?php echo __('Person'); ?></h2>

<div id="people-view" class="panel panel-default">

	<div class="panel-heading">
		<h3 class="panel-title"><?php echo __('Person' . ' data'); ?></h3>
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
				<?php echo h($person['Person']['id']); ?>
			</p>
		</div>

		<div class="list-group-item">
			<h4 class="list-group-item-heading"><?php echo __('Name'); ?></h4>
			<p class="list-group-item-text">
				<?php echo h($person['Person']['name']); ?>
			</p>
		</div>

		<div class="list-group-item">
			<h4 class="list-group-item-heading"><?php echo __('Last Name'); ?></h4>
			<p class="list-group-item-text">
				<?php echo h($person['Person']['last_name']); ?>
			</p>
		</div>

		<div class="list-group-item">
			<h4 class="list-group-item-heading"><?php echo __('Genre'); ?></h4>
			<?php echo $this->Html->link($person['Genre']['name'], array('controller' => 'genres', 'action' => 'view', $person['Genre']['id']), array('class' => 'list-group-item-text')); ?>
		</div>

		<div class="list-group-item">
			<h4 class="list-group-item-heading"><?php echo __('Created'); ?></h4>
			<p class="list-group-item-text">
				<?php echo h($person['Person']['created']); ?>
			</p>
		</div>

		<div class="list-group-item">
			<h4 class="list-group-item-heading"><?php echo __('Modified'); ?></h4>
			<p class="list-group-item-text">
				<?php echo h($person['Person']['modified']); ?>
			</p>
		</div>
	</div>


	<div class="panel-footer">
		<div class="btn-toolbar" role="toolbar">

			<div class="btn-group" role="group">
				<?php echo $this->Html->link(__('Edit Person'), array('action' => 'edit', $person['Person']['id']), array('class' => 'btn btn-warning')); ?>
				<?php echo $this->Form->postLink(__('Delete Person'), array('action' => 'delete', $person['Person']['id']), array('class' => 'btn btn-danger'), __('Are you sure you want to delete # %s?', $person['Person']['id'])); ?>
			</div>

			<div class="btn-group dropup" role="group">

				<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
					<?php echo __('Other actions'); ?> <span class="caret"></span>
				</button>

				<ul class="dropdown-menu" role="menu">
					<li><?php echo $this->Html->link(__('List People'), array('action' => 'index')); ?></li>
					<li><?php echo $this->Html->link(__('New Person'), array('action' => 'add')); ?></li>
					<li class="divider"></li>

					<li><?php echo $this->Html->link(__('List Genres'), array('controller' => 'genres', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('New Genre'), array('controller' => 'genres', 'action' => 'add')); ?> </li>

					<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
				</ul>
			</div>

		</div>
	</div>

</div><!-- END -view -->




<div id="people-related" class="panel panel-default">

	<div class="panel-heading">
		<h3 class="panel-title"><?php echo __('Related data'); ?></h2>
	</div>


	<div class="panel-body">

		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title"><?php echo __('Related Users'); ?></h4>
			</div>

			<div class="panel-body" style="overflow: auto;">
<?php if (!empty($person['User'])): ?>
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

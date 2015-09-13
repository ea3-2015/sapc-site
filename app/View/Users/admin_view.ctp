<!-- View baked using a 'pretty_cake' template: http://nelson6e65.github.io/pretty_cake -->


<h2><?php echo __('User'); ?></h2>

<div id="users-view" class="panel panel-default">

	<div class="panel-heading">
		<h3 class="panel-title"><?php echo __('User' . ' data'); ?></h3>
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
				<?php echo h($user['User']['id']); ?>
			</p>
		</div>

		<div class="list-group-item">
			<h4 class="list-group-item-heading"><?php echo __('Username'); ?></h4>
			<p class="list-group-item-text">
				<?php echo h($user['User']['username']); ?>
			</p>
		</div>

		<div class="list-group-item">
			<h4 class="list-group-item-heading"><?php echo __('Password'); ?></h4>
			<p class="list-group-item-text">
				<?php echo h($user['User']['password']); ?>
			</p>
		</div>

		<div class="list-group-item">
			<h4 class="list-group-item-heading"><?php echo __('Email'); ?></h4>
			<p class="list-group-item-text">
				<?php echo h($user['User']['email']); ?>
			</p>
		</div>

		<div class="list-group-item">
			<h4 class="list-group-item-heading"><?php echo __('Group'); ?></h4>
			<?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id']), array('class' => 'list-group-item-text')); ?>
		</div>

		<div class="list-group-item">
			<h4 class="list-group-item-heading"><?php echo __('Person'); ?></h4>
			<?php echo $this->Html->link($user['Person']['name'], array('controller' => 'people', 'action' => 'view', $user['Person']['id']), array('class' => 'list-group-item-text')); ?>
		</div>

		<div class="list-group-item">
			<h4 class="list-group-item-heading"><?php echo __('Created'); ?></h4>
			<p class="list-group-item-text">
				<?php echo h($user['User']['created']); ?>
			</p>
		</div>

		<div class="list-group-item">
			<h4 class="list-group-item-heading"><?php echo __('Modified'); ?></h4>
			<p class="list-group-item-text">
				<?php echo h($user['User']['modified']); ?>
			</p>
		</div>
	</div>


	<div class="panel-footer">
		<div class="btn-toolbar" role="toolbar">

			<div class="btn-group" role="group">
				<?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id']), array('class' => 'btn btn-warning')); ?>
				<?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), array('class' => 'btn btn-danger'), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
			</div>

			<div class="btn-group dropup" role="group">

				<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
					<?php echo __('Other actions'); ?> <span class="caret"></span>
				</button>

				<ul class="dropdown-menu" role="menu">
					<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
					<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?></li>
					<li class="divider"></li>

					<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>

					<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>

					<li><?php echo $this->Html->link(__('List Noticias'), array('controller' => 'noticias', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('New Noticia'), array('controller' => 'noticias', 'action' => 'add')); ?> </li>
				</ul>
			</div>

		</div>
	</div>

</div><!-- END -view -->




<div id="users-related" class="panel panel-default">

	<div class="panel-heading">
		<h3 class="panel-title"><?php echo __('Related data'); ?></h2>
	</div>


	<div class="panel-body">

		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title"><?php echo __('Related Noticias'); ?></h4>
			</div>

			<div class="panel-body" style="overflow: auto;">
<?php if (!empty($user['Noticia'])): ?>
				<table class="table table-bordered">
				<thead>
					<tr>
						<th><?php echo __('Id'); ?></th>
						<th><?php echo __('Title'); ?></th>
						<th><?php echo __('Content'); ?></th>
						<th><?php echo __('User Id'); ?></th>
						<th><?php echo __('Created'); ?></th>
						<th><?php echo __('Modified'); ?></th>
						<th style="border-collapse: collapse; white-space: nowrap; width: 1px;"><?php echo __('Actions'); ?></th>
					</tr>
				</thead>

				<tbody>
	<?php foreach ($user['Noticia'] as $noticia): ?>
					<tr>
						<td><?php echo $noticia['id']; ?></td>
						<td><?php echo $noticia['title']; ?></td>
						<td><?php echo $noticia['content']; ?></td>
						<td><?php echo $noticia['user_id']; ?></td>
						<td><?php echo $noticia['created']; ?></td>
						<td><?php echo $noticia['modified']; ?></td>
						<td class="text-center" style="min-width: 8em;">
							<div class="btn-group" role="group">
								<?php echo $this->Html->link(__('View'), array('controller' => 'noticias', 'action' => 'view', $noticia['id']), array('class' => 'btn btn-default btn-sm')); ?>
								<a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<span class="fa fa-caret-down"></span>
									<span class="sr-only">Toggle Dropdown</span>
								</a>
								<ul class="dropdown-menu" role="menu">
									<li><?php echo $this->Html->link('<i class="fa fa-edit fa-fw"></i> ' . __('Edit'), array('controller' => 'noticias', 'action' => 'edit', $noticia['id']), array('escape' => false)); ?></li>
									<li><?php echo $this->Form->postLink('<i class="fa fa-trash-o fa-fw"></i> ' . __('Delete'), array('controller' => 'noticias', 'action' => 'delete', $noticia['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $noticia['id'])); ?></li>
								</ul>
							</div>
						</td>
					</tr>
	<?php endforeach; ?>
				</tbody>
				</table>
<?php endif; ?>


				<div class="btn-group" role="group">
				<?php echo $this->Html->link(__('New Noticia'), array('controller' => 'noticias', 'action' => 'add'), array('class' => 'btn btn-primary')); ?>
				</div>


			</div>


		</div>

	</div> <!-- END -related panel-body -->

</div><!-- END -related -->

<!-- View baked using a 'pretty_cake' template (http://git.io/NtTU). -->
<h2><?php echo __('Genre'); ?></h2>

<div id="genres-view" class="panel panel-default">

	<div class="panel-heading">
		<h3 class="panel-title"><?php echo __('Genre' . ' data'); ?></h3>
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
				<?php echo h($genre['Genre']['id']); ?>
			</p>
		</div>

		<div class="list-group-item">
			<h4 class="list-group-item-heading"><?php echo __('Name'); ?></h4>
			<p class="list-group-item-text">
				<?php echo h($genre['Genre']['name']); ?>
			</p>
		</div>
	</div>


	<div class="panel-footer">
		<div class="btn-toolbar" role="toolbar">

			<div class="btn-group" role="group">
				<?php echo $this->Html->link(__('Edit Genre'), array('action' => 'edit', $genre['Genre']['id']), array('class' => 'btn btn-warning')); ?>
				<?php echo $this->Form->postLink(__('Delete Genre'), array('action' => 'delete', $genre['Genre']['id']), array('class' => 'btn btn-danger'), __('Are you sure you want to delete # %s?', $genre['Genre']['id'])); ?>
			</div>

			<div class="btn-group dropup" role="group">

				<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
					<?php echo __('Other actions'); ?> <span class="caret"></span>
				</button>

				<ul class="dropdown-menu" role="menu">
					<li><?php echo $this->Html->link(__('List Genres'), array('action' => 'index')); ?></li>
					<li><?php echo $this->Html->link(__('New Genre'), array('action' => 'add')); ?></li>
					<li class="divider"></li>

					<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
				</ul>
			</div>

		</div>
	</div>

</div><!-- END -view -->




<div id="genres-related" class="panel panel-default">

	<div class="panel-heading">
		<h3 class="panel-title"><?php echo __('Related data'); ?></h2>
	</div>


	<div class="panel-body">

		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title"><?php echo __('Related People'); ?></h4>
			</div>

			<div class="panel-body" style="overflow: auto;">
<?php if (!empty($genre['Person'])): ?>
				<table class="table table-bordered">
				<thead>
					<tr>
						<th><?php echo __('Id'); ?></th>
						<th><?php echo __('Name'); ?></th>
						<th><?php echo __('Last Name'); ?></th>
						<th><?php echo __('Genre Id'); ?></th>
						<th><?php echo __('Created'); ?></th>
						<th><?php echo __('Modified'); ?></th>
						<th style="border-collapse: collapse; white-space: nowrap; width: 1px;"><?php echo __('Actions'); ?></th>
					</tr>
				</thead>

				<tbody>
	<?php foreach ($genre['Person'] as $person): ?>
					<tr>
						<td><?php echo $person['id']; ?></td>
						<td><?php echo $person['name']; ?></td>
						<td><?php echo $person['last_name']; ?></td>
						<td><?php echo $person['genre_id']; ?></td>
						<td><?php echo $person['created']; ?></td>
						<td><?php echo $person['modified']; ?></td>
						<td class="text-center" style="min-width: 8em;">
							<div class="btn-group" role="group">
								<?php echo $this->Html->link(__('View'), array('controller' => 'people', 'action' => 'view', $person['id']), array('class' => 'btn btn-default btn-sm')); ?>
								<a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<span class="fa fa-caret-down"></span>
									<span class="sr-only">Toggle Dropdown</span>
								</a>
								<ul class="dropdown-menu" role="menu">
									<li><?php echo $this->Html->link('<i class="fa fa-edit fa-fw"></i> ' . __('Edit'), array('controller' => 'people', 'action' => 'edit', $person['id']), array('escape' => false)); ?></li>
									<li><?php echo $this->Form->postLink('<i class="fa fa-trash-o fa-fw"></i> ' . __('Delete'), array('controller' => 'people', 'action' => 'delete', $person['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $person['id'])); ?></li>
								</ul>
							</div>
						</td>
					</tr>
	<?php endforeach; ?>
				</tbody>
				</table>
<?php endif; ?>


				<div class="btn-group" role="group">
				<?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add'), array('class' => 'btn btn-primary')); ?>
				</div>


			</div>


		</div>

	</div> <!-- END -related panel-body -->

</div><!-- END -related -->

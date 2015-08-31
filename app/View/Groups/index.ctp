<!-- View baked using a 'pretty_cake' template: http://nelson6e65.github.io/pretty_cake -->
<h2><?php echo __('Groups'); ?></h2>

<div id="groups-index" class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title"><?php echo __('Groups' . ' list'); ?></h3>
	</div>

	<div class="panel-body" style="overflow: auto;">

		<table class="table table-bordered">
			<thead>
				<tr>
					<th><?php echo $this->Paginator->sort('id'); ?></th>
					<th><?php echo $this->Paginator->sort('name'); ?></th>
					<th><?php echo $this->Paginator->sort('created'); ?></th>
					<th><?php echo $this->Paginator->sort('modified'); ?></th>
					<th style="border-collapse: collapse; white-space: nowrap; width: 1px;"><?php echo __('Actions'); ?></th>
				</tr>
			</thead>

			<tbody>
	<?php foreach ($groups as $group): ?>
				<tr>
					<td><?php echo h($group['Group']['id']); ?></td>
					<td><?php echo h($group['Group']['name']); ?></td>
					<td><?php echo h($group['Group']['created']); ?></td>
					<td><?php echo h($group['Group']['modified']); ?></td>
					<td class="text-center" style="min-width: 8em;">
						<div class="btn-group" role="group">

							<?php echo $this->Html->link(__('View'), array('action' => 'view', $group['Group']['id']), array('class' => 'btn btn-default btn-sm')); ?>
							<a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<span class="fa fa-caret-down"></span>
								<span class="sr-only">Toggle Dropdown</span>
							</a>

							<ul class="dropdown-menu" role="menu">
								<li><?php echo $this->Html->link('<i class="fa fa-edit fa-fw"></i> ' . __('Edit'), array('action' => 'edit', $group['Group']['id']), array('escape' => false)); ?></li>

								<li><?php echo $this->Form->postLink('<i class="fa fa-trash-o fa-fw"></i> ' . __('Delete'), array('action' => 'delete', $group['Group']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $group['Group']['id'])); ?></li>
							</ul>

						</div>
					</td>
				</tr>
	<?php endforeach; ?>
			</tbody>
		</table>

		<p>
<?php
			echo $this->Paginator->counter(array(
				'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
			));
?>		</p>

		<nav>
			<ul class="pagination">
<?php
			echo $this->Paginator->prev(
				'<i class="fa fa-chevron-left fa-fw"></i>',
				array(
					'tag' => 'li',
					'escape' => false,
					'disabledTag' => 'span',
				),
				null,
				array(
					'tag' => 'li',
					'escape' => false,
					'class' => 'disabled',
					'disabledTag' => 'span',
				)
			);

			echo $this->Paginator->first(
				'<i class="fa  fa-angle-double-left fa-fw"></i>',
				array(
					'tag' => 'li',
					'escape' => false,
				)
			);

			echo $this->Paginator->numbers(array(
				'separator' => '',
				'tag' => 'li',
				'currentTag' => 'span',
				'currentClass' => 'active'
			));

			echo $this->Paginator->last(
				'<i class="fa  fa-angle-double-right fa-fw"></i>',
				array(
					'tag' => 'li',
					'escape' => false,
				)
			);

			echo $this->Paginator->next(
				'<i class="fa fa-chevron-right fa-fw"></i>',
				array(
					'tag' => 'li',
					'escape' => false,
					'disabledTag' => 'span',
				),
				null,
				array(
					'tag' => 'li',
					'escape' => false,
					'class' => 'disabled',
					'disabledTag' => 'span',
				)
			);
?>
			</ul>
		</nav>
	</div>

	<div class="panel-footer">
		<div class="btn-toolbar" role="toolbar">
			<div class="btn-group" role="group">
				<?php echo $this->Html->link(__('New Group'), array('action' => 'add'), array('class' => 'btn btn-primary')); ?>
			</div>

			<div class="btn-group dropup" role="group">
				<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
					<?php echo __('Other actions'); ?> <span class="caret"></span>
				</button>

				<ul class="dropdown-menu" role="menu">
					<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
				</ul>
			</div>
		</div>
	</div>
</div>

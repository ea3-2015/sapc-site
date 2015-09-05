<!-- View baked using a 'pretty_cake' template: http://nelson6e65.github.io/pretty_cake -->

<h2><?php echo __('Personas'); ?></h2>

<div id="people-index" class="panel panel-default">
	
	<div class="panel-body" style="overflow: auto;">

		<table class="table table-bordered">
			<thead>
				<tr>
					
					<th><?php echo $this->Paginator->sort('Nombres'); ?></th>
					<th><?php echo $this->Paginator->sort('Apellidos'); ?></th>
					<th><?php echo $this->Paginator->sort('Generos'); ?></th>
					<th><?php echo $this->Paginator->sort('Creado'); ?></th>
					<th><?php echo $this->Paginator->sort('Modificado')?></th>
					
					<th ><?php echo __('Actions'); ?></th>
				</tr>
			</thead>

			<tbody>
	<?php foreach ($people as $person): ?>
				<tr>
					
					<td><?php echo h($person['Person']['name']); ?></td>
					<td><?php echo h($person['Person']['last_name']); ?></td>
					<td>
						<?php echo $this->Html->link($person['Genre']['name'], array('controller' => 'genres', 'action' => 'view', $person['Genre']['id'])); ?>
					</td>
					<td><?php echo h($person['Person']['created']); ?></td>
					<td><?php echo h($person['Person']['modified']); ?></td>
					
					<td class="actions" >
						

							<?php echo $this->Html->link(__(''), array('action' => 'view', $person['Person']['id']), array('class' => 'glyphicon glyphicon-search')); ?>
							

						<?php echo $this->Html->link(__(''), array('action' => 'edit', $person['Person']['id']), array('class' => 'glyphicon glyphicon-edit')); ?>

								<?php echo $this->Form->postLink('<i class="fa fa-trash-o fa-fw"></i> ' . __(''), array('action' => 'delete', $person['Person']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $person['Person']['id'])); ?>
							

						
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
				<?php echo $this->Html->link(__('New Person'), array('action' => 'add'), array('class' => 'btn btn-primary')); ?>
			</div>

			<div class="btn-group dropup" role="group">
				<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
					<?php echo __('Other actions'); ?> <span class="caret"></span>
				</button>

				<ul class="dropdown-menu" role="menu">
					<li><?php echo $this->Html->link(__('List Genres'), array('controller' => 'genres', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('New Genre'), array('controller' => 'genres', 'action' => 'add')); ?> </li>
					<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
				</ul>
			</div>
		</div>
	</div>
</div>

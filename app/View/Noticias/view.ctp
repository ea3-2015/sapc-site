<!-- View baked using a 'pretty_cake' template: http://nelson6e65.github.io/pretty_cake -->
<h2><?php echo __('Noticia'); ?></h2>

<div id="noticias-view" class="panel panel-default">

	<div class="panel-heading">
		<h3 class="panel-title"><?php echo __('Noticia' . ' data'); ?></h3>
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
				<?php echo h($noticia['Noticia']['id']); ?>
			</p>
		</div>

		<div class="list-group-item">
			<h4 class="list-group-item-heading"><?php echo __('Title'); ?></h4>
			<p class="list-group-item-text">
				<?php echo h($noticia['Noticia']['title']); ?>
			</p>
		</div>

		<div class="list-group-item">
			<h4 class="list-group-item-heading"><?php echo __('Content'); ?></h4>
			<p class="list-group-item-text">
				<?php echo h($noticia['Noticia']['content']); ?>
			</p>
		</div>

		<div class="list-group-item">
			<h4 class="list-group-item-heading"><?php echo __('User'); ?></h4>
			<?php echo $this->Html->link($noticia['User']['id'], array('controller' => 'users', 'action' => 'view', $noticia['User']['id']), array('class' => 'list-group-item-text')); ?>
		</div>

		<div class="list-group-item">
			<h4 class="list-group-item-heading"><?php echo __('Created'); ?></h4>
			<p class="list-group-item-text">
				<?php echo h($noticia['Noticia']['created']); ?>
			</p>
		</div>

		<div class="list-group-item">
			<h4 class="list-group-item-heading"><?php echo __('Modified'); ?></h4>
			<p class="list-group-item-text">
				<?php echo h($noticia['Noticia']['modified']); ?>
			</p>
		</div>
	</div>


	<div class="panel-footer">
		<div class="btn-toolbar" role="toolbar">

			<div class="btn-group" role="group">
				<?php echo $this->Html->link(__('Edit Noticia'), array('action' => 'edit', $noticia['Noticia']['id']), array('class' => 'btn btn-warning')); ?>
				<?php echo $this->Form->postLink(__('Delete Noticia'), array('action' => 'delete', $noticia['Noticia']['id']), array('class' => 'btn btn-danger'), __('Are you sure you want to delete # %s?', $noticia['Noticia']['id'])); ?>
			</div>

			<div class="btn-group dropup" role="group">

				<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
					<?php echo __('Other actions'); ?> <span class="caret"></span>
				</button>

				<ul class="dropdown-menu" role="menu">
					<li><?php echo $this->Html->link(__('List Noticias'), array('action' => 'index')); ?></li>
					<li><?php echo $this->Html->link(__('New Noticia'), array('action' => 'add')); ?></li>
					<li class="divider"></li>

					<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
				</ul>
			</div>

		</div>
	</div>

</div><!-- END -view -->




<div id="noticias-related" class="panel panel-default">

	<div class="panel-heading">
		<h3 class="panel-title"><?php echo __('Related data'); ?></h2>
	</div>


	<div class="panel-body">


	</div> <!-- END -related panel-body -->

</div><!-- END -related -->

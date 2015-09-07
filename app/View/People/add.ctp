<!-- View baked using a 'pretty_cake' template: http://nelson6e65.github.io/pretty_cake -->

<h2><?php echo __('Personas'); ?></h2>

<div id="people-add" class="panel panel-default">

	<div class="panel-heading">
		<h3 class="panel-title"><?php echo __('Añadir Persona'); ?></h3>
	</div>

	<div class="panel-body" style="overflow: auto;">

<?php
	echo $this->Form->create('Person', array(
		'inputDefaults' => array(
			'label' => array('class' => 'control-label'),
			'div' => 'form-group',
			'class' => 'form-control',
		)
	)); ?>

	<fieldset>
	<?php
			echo $this->Form->input('name');
			echo $this->Form->input('last_name');
			echo $this->Form->input('genre_id');
	?>
	</fieldset>
<?php
	echo $this->Form->end(array(
		'label' => __('Create'),
		'div' => array(
			'class' => 'form-group'
		),
		'class' => 'btn btn-success'
	 ));
?>
	</div>

	<div class="panel-footer">
		<div class="btn-toolbar" role="toolbar">

			<div class="btn-group" role="group">
				<?php echo $this->Html->link(__('List People'), array('action' => 'index'), array('class' => 'btn btn-primary')); ?>
			</div>

			<div class="btn-group dropup" role="group">
				<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
					<?php echo __('Related actions'); ?> <span class="caret"></span>
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

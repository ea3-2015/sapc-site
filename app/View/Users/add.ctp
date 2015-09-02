<!-- View baked using a 'pretty_cake' template: http://nelson6e65.github.io/pretty_cake -->


<h2><?php echo __('User'); ?></h2>

<div id="users-add" class="panel panel-default">

	<div class="panel-heading">
		<h3 class="panel-title"><?php echo __('Add User'); ?></h3>
	</div>

	<div class="panel-body" style="overflow: auto;">

<?php
	echo $this->Form->create('User', array(
		'inputDefaults' => array(
			'label' => array('class' => 'control-label'),
			'div' => 'form-group',
			'class' => 'form-control',
		)
	)); ?>

	<fieldset>
	<?php
			echo $this->Form->input('username');
			echo $this->Form->input('password');
			echo $this->Form->input('email');
			echo $this->Form->input('group_id');
			echo $this->Form->input('person_id');
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
				<?php echo $this->Html->link(__('List Users'), array('action' => 'index'), array('class' => 'btn btn-primary')); ?>
			</div>

			<div class="btn-group dropup" role="group">
				<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
					<?php echo __('Related actions'); ?> <span class="caret"></span>
				</button>

				<ul class="dropdown-menu" role="menu">
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


</div>

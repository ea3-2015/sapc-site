<!-- View baked using a 'pretty_cake' template: http://nelson6e65.github.io/pretty_cake -->

<h2><?php echo __('Noticia'); ?></h2>

<div id="noticias-edit" class="panel panel-default">

	<div class="panel-heading">
		<h3 class="panel-title"><?php echo __('Edit Noticia'); ?></h3>
	</div>

	<div class="panel-body" style="overflow: auto;">

<?php
	echo $this->Form->create('Noticia', array(
		'inputDefaults' => array(
			'label' => array('class' => 'control-label'),
			'div' => 'form-group',
			'class' => 'form-control',
		)
	)); ?>

	<fieldset>
	<?php
			echo $this->Form->input('id');
			echo $this->Form->input('title');
			echo $this->Form->input('content');
			echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php
	echo $this->Form->end(array(
		'label' => __('Update'),
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
				<?php echo $this->Html->link(__('List Noticias'), array('action' => 'index'), array('class' => 'btn btn-primary')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Noticia.id')), array('class' => 'btn btn-danger'), __('Are you sure you want to delete # %s?', $this->Form->value('Noticia.id'))); ?>
			</div>

			<div class="btn-group dropup" role="group">
				<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
					<?php echo __('Related actions'); ?> <span class="caret"></span>
				</button>

				<ul class="dropdown-menu" role="menu">
					<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
				</ul>
			</div>

		</div>



	</div>


</div>

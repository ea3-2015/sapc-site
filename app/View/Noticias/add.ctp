<!-- View baked using a 'pretty_cake' template: http://nelson6e65.github.io/pretty_cake -->

<h2><?php echo __('Noticias'); ?></h2>

<div id="noticias-add" class="panel panel-default">

	

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
			echo $this->Form->input('title',array(
					'label'=>'Titulo','class'=>'form-control'));
			echo $this->Form->input('content',array(
					'label'=>'Contenido','class'=>'form-control'));
			echo $this->Form->input('user_id',array(
					'label'=>'Usuario','class'=>'form-control'));
	?>
	</fieldset>
<?php
	echo $this->Form->end(array(
		'label' => __('Crear'),
		'div' => array(
			'class' => 'form-group'
		),
		'class' => 'btn btn-success'
	 ));
?>
	</div>

	<div class="panel-footer">
		<div class="btn-group btn-group-justified" >
			
			<div class="btn-group" role="group">
				<?php echo $this->Html->link(__('Lista de Noticias'), array('action' => 'index'), array('class' => 'btn btn-primary')); ?>
			</div>
			<div class="btn-group" role="group">
				<?php echo $this->Html->link(__('Lista de Usuarios'), array('controller'=>'users','action' => 'index'), array('class' => 'btn btn-danger')); ?>
			</div>
			<div class="btn-group" role="group">
				<?php echo $this->Html->link(__('Nuevo Usuario'), array('controller' => 'users', 'action' => 'add'), array('class' => 'btn btn-info')); ?>
			</div>
			
			
		</div>



	</div>


</div>

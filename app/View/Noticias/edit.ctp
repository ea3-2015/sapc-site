<!-- View baked using a 'pretty_cake' template: http://nelson6e65.github.io/pretty_cake -->
<?php
        echo $this->Html->css(array('styles'));
        echo $this->Html->css(array('bootstrap.min'));

        echo $this->Html->css('/assets/font-awesome/4.4.0/css/font-awesome.min');

        echo $this->Html->script(array('jquery-2.1.3'));
        echo $this->Html->script(array('scripts'));
        echo $this->Html->script(array('bootstrap.min'));
    ?>

<h2><?php echo __('Editar Noticia'); ?></h2>

<div id="noticias-edit" class="panel panel-default">

	
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
			echo $this->Form->input('title',array(
					'label'=>'Titulo','class'=>'form-control'));
			echo $this->Form->input('content',array(
					'label'=>'Contenido','class'=>'form-control'));
			echo $this->Form->input('user_id',array(
					'label'=>'Autor','class'=>'form-control'));
	?>
	</fieldset>
<?php
	echo $this->Form->end(array(
		'label' => __('Actualizar'),
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
				<?php echo $this->Html->link(__('Nueva Noticia'), array('action' => 'add'), array('class' => 'btn btn-info')); ?>
			</div>
				
			

			

		</div>



	</div>


</div>

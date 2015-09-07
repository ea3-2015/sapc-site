<!-- View baked using a 'pretty_cake' template: http://nelson6e65.github.io/pretty_cake -->
<?php
        echo $this->Html->css(array('styles'));
        echo $this->Html->css(array('bootstrap.min'));

        echo $this->Html->css('/assets/font-awesome/4.4.0/css/font-awesome.min');

        echo $this->Html->script(array('jquery-2.1.3'));
        echo $this->Html->script(array('scripts'));
        echo $this->Html->script(array('bootstrap.min'));
    ?>

<h2><?php echo __('Detalle Noticia'); ?></h2>

<div id="noticias-view" class="panel panel-default">

	
<!--
	<div class="panel-body">
		Here you can add some description of this view.
	</div>
-->

	<div class="list-group">

		

		<div class="list-group-item">
			<h4 class="list-group-item-heading"><?php echo __('Titulo'); ?></h4>
			<p class="list-group-item-text">
				<?php echo h($noticia['Noticia']['title']); ?>
			</p>
		</div>

		

		<div class="list-group-item">
			<h4 class="list-group-item-heading"><?php echo __('Autor'); ?></h4>
			<?php echo $this->Html->link($noticia['User']['username'], array('controller' => 'users', 'action' => 'view', $noticia['User']['id']), array('class' => 'list-group-item-text')); ?>
		</div>

		<div class="list-group-item">
			<h4 class="list-group-item-heading"><?php echo __('Creado'); ?></h4>
			<p class="list-group-item-text">
				<?php echo h($noticia['Noticia']['created']); ?>
			</p>
		</div>

		<div class="list-group-item">
			<h4 class="list-group-item-heading"><?php echo __('Modificado'); ?></h4>
			<p class="list-group-item-text">
				<?php echo h($noticia['Noticia']['modified']); ?>
			</p>
		</div>
		<div class="list-group-item">
			<h4 class="list-group-item-heading"><?php echo __('Contenido'); ?></h4>
			<p class="list-group-item-text">
				<?php echo h($noticia['Noticia']['content']); ?>
			</p>
		</div>
	</div>


	<div class="panel-footer">
		<div class="btn-toolbar" role="toolbar">

			<div class="btn-group" role="group">
				<?php echo $this->Html->link(__('Editar Noticia'), array('action' => 'edit', $noticia['Noticia']['id']), array('class' => 'btn btn-warning')); ?>
				<?php echo $this->Form->postLink(__('Eliminar Noticia'), array('action' => 'delete', $noticia['Noticia']['id']), array('class' => 'btn btn-danger'), __('Are you sure you want to delete # %s?', $noticia['Noticia']['id'])); ?>
			</div>

			

		</div>
	</div>

</div><!-- END -view -->




<div id="noticias-related" class="panel panel-default">

	


	<div class="panel-body">


	</div> <!-- END -related panel-body -->

</div><!-- END -related -->

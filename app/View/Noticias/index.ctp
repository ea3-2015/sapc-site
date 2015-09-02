<!-- View baked using a 'pretty_cake' template: http://nelson6e65.github.io/pretty_cake -->
<?php
        echo $this->Html->css(array('styles'));
        echo $this->Html->css(array('bootstrap.min'));

        echo $this->Html->css('/assets/font-awesome/4.4.0/css/font-awesome.min');

        echo $this->Html->script(array('jquery-2.1.3'));
        echo $this->Html->script(array('scripts'));
        echo $this->Html->script(array('bootstrap.min'));
    ?>

<h2><?php echo __('Lista de Noticias'); ?></h2>

<div id="noticias-index" class="panel panel-default">
	
	<div class="panel-body" style="overflow: auto;">

		<table class="table table-bordered">
			<thead>
				<tr>
					
					<th><?php echo $this->Paginator->sort('Titulo'); ?></th>
					
					<th><?php echo $this->Paginator->sort('Usuario'); ?></th>
					<th><?php echo $this->Paginator->sort('Creado'); ?></th>
					
					<th style="border-collapse: collapse; white-space: nowrap; width: 1px;"><?php echo __('Acciones'); ?></th>
				</tr>
			</thead>

			<tbody>
	<?php foreach ($noticias as $noticia): ?>
				<tr>
					
					<td><?php echo h($noticia['Noticia']['title']); ?></td>
					
					<td>
						<?php echo $this->Html->link($noticia['User']['id'], array('controller' => 'users', 'action' => 'view', $noticia['User']['id'])); ?>
					</td>
					<td><?php echo h($noticia['Noticia']['created']); ?></td>
					
					<td class="actions">
						

							<?php echo $this->Html->link(__(''), array('action' => 'view', $noticia['Noticia']['id']), array('class' => 'glyphicon glyphicon-search')); ?>
							
							
							<?php echo $this->Html->link('<i class="fa fa-edit fa-fw"></i> ' . __(''), array('action' => 'edit', $noticia['Noticia']['id']), array('escape' => false)); ?>

								<?php echo $this->Form->postLink('<i class="fa fa-trash-o fa-fw"></i> ' . __(''), array('action' => 'delete', $noticia['Noticia']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $noticia['Noticia']['id'])); ?>
							</ul>

						
					</td>
				</tr>
	<?php endforeach; ?>
			</tbody>
		</table>

	</div>
		<center>
			<paginador><!-- etiqueta personalidad-->
				<?php echo $this->element('paginador');?>
			</paginador>
			</center>
	<div class="panel-footer">
		<div class="btn-group btn-group-justified" >
			
			<div class="btn-group" role="group">
				<?php echo $this->Html->link(__('Nueva Noticia'), array('action' => 'add'), array('class' => 'btn btn-primary')); ?>
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

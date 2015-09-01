<!-- View baked using a 'pretty_cake' template: http://nelson6e65.github.io/pretty_cake -->
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
					
					<td class="text-center" style="min-width: 8em;">
						<div class="btn-group" role="group">

							<?php echo $this->Html->link(__('View'), array('action' => 'view', $noticia['Noticia']['id']), array('class' => 'btn btn-default btn-sm')); ?>
							<a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<span class="fa fa-caret-down"></span>
								<span class="sr-only">Toggle Dropdown</span>
							</a>

							<ul class="dropdown-menu" role="menu">
								<li><?php echo $this->Html->link('<i class="fa fa-edit fa-fw"></i> ' . __('Edit'), array('action' => 'edit', $noticia['Noticia']['id']), array('escape' => false)); ?></li>

								<li><?php echo $this->Form->postLink('<i class="fa fa-trash-o fa-fw"></i> ' . __('Delete'), array('action' => 'delete', $noticia['Noticia']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $noticia['Noticia']['id'])); ?></li>
							</ul>

						</div>
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
		<div class="btn-toolbar" role="toolbar">
			<div class="btn-group" role="group">
				<?php echo $this->Html->link(__('New Noticia'), array('action' => 'add'), array('class' => 'btn btn-primary')); ?>
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

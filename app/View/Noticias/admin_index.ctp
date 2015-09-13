<!-- View baked using a 'pretty_cake' template: http://nelson6e65.github.io/pretty_cake -->

<h2><?php echo __('Lista de Noticias'); ?></h2>

<div id="people-index" class="panel panel-default">
    
    <div class="panel-body" style="overflow: auto;">

        <table class="table table-bordered">
            <thead>
                <tr>
                    
                    <th><?php echo $this->Paginator->sort('Title'); ?></th>
                    <th><?php echo $this->Paginator->sort('Creado'); ?></th>
                    <th><?php echo $this->Paginator->sort('Modificado')?></th>
                    
                    <th ><?php echo __('Actions'); ?></th>
                </tr>
            </thead>

            <tbody>
    <?php foreach ($noticias as $noticia): ?>
                <tr>
                    
                    <td><?php echo h($noticia['Noticia']['title']); ?></td>
                    <td><?php echo h($noticia['Noticia']['created']); ?></td>
                    
                    <td><?php echo h($noticia['Noticia']['modified']); ?></td>
                    
                    <td class="actions" >
                        

                            <?php echo $this->Html->link(__(''), array('action' => 'view', $noticia['Noticia']['id']), array('class' => 'glyphicon glyphicon-search')); ?>
                            

                        <?php echo $this->Html->link(__(''), array('action' => 'edit', $noticia['Noticia']['id']), array('class' => 'glyphicon glyphicon-edit')); ?>

                                <?php echo $this->Form->postLink('<i class="fa fa-trash-o fa-fw"></i> ' . __(''), array('action' => 'delete', $noticia['Noticia']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $noticia['Noticia']['id'])); ?>
                            

                        
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
        </div>
    <div class="btn-group btn-group-justified">
        
            <?php echo $this->Html->link(__('Nueva Noticia'), array('action' => 'add'), array('class' => 'btn btn-info')); ?>
            <?php echo $this->Html->link(__('Vista Publica'), array('action' => 'npublic'), array('class' => 'btn btn-danger')); ?> 
            <?php echo $this->Html->link(__('Nuevo Documento'), array('controller' => 'documents', 'action' => 'add'), array('class' => 'btn btn-primary')); ?> 
        
    </div>
</div>





				<!-- Titulo -->
                <?php foreach ($noticias as $noticia): ?>
                <h1><?php echo h($noticia['Noticia']['title']); ?></h1>

                
                <hr>

                <!-- FECHA -->
                <p><span class="glyphicon glyphicon-time"></span> 
							<?php echo h($noticia['Noticia']['modified']); ?></p>

                <hr>

                <!-- IMAGEN  PUGLIN UPLOAD REVISAR  -->
                <?php 
                    //debug($noticia);

                echo $this->Html->image('/files/image/attachment/'.$noticia['Image'][0]['dir'].'/'.'vga_'.$noticia['Image'][0]['attachment'],array('class'=>'img-noticias')); ?>
               

                <!-- CONTENIDO -->
                <p class="lead">
                	
							<?php $contenido = h($noticia['Noticia']['content']); 
                                    App::uses('String', 'Utility');

                                        echo String::truncate(
                                            $contenido,
                                            200,
                                            array(
                                                'ellipsis' => '...',
                                                'exact' => false
                                            ))
                            ?>
                </p>
           <?php echo $this->Html->link(__('Seguir Leyendo'), array('action' => 'view', $noticia['Noticia']['id']), array('class' => 'btn btn-info')); ?>
                <br />
                

                <!-- Posted Comments -->

                <!-- Comment -->
                

            	
			
		
			<?php endforeach; ?>
					


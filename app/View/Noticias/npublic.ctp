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

                echo $this->Html->image('/files/image/attachment/'.$noticia['Image'][0]['dir'].'/'.'vga_'.$noticia['Image'][0]['attachment']); ?>
               

                <!-- CONTENIDO -->
                <p class="lead">
                	
							<?php echo h($noticia['Noticia']['content']); ?>
                </p>

                

                <!-- Posted Comments -->

                <!-- Comment -->
                

            	
			
		
			<?php endforeach; ?>
					


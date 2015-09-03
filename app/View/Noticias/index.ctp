				<!-- Titulo -->
                <?php foreach ($noticias as $noticia): ?>
                <h1><?php echo h($noticia['Noticia']['title']); ?></h1>

                
                <hr>

                <!-- FECHA -->
                <p><span class="glyphicon glyphicon-time"></span> 
							<?php echo h($noticia['Noticia']['modified']); ?></p>

                <hr>

                <!-- IMAGEN -->
                <?php echo $this->Html->image('../files/noticia/foto/'. $noticia['Noticia']['foto_dir'].'/'.'vga_'.$noticia['Noticia']['foto']); ?>

                <hr>

                <!-- CONTENIDO -->
                <p class="lead">
                	
							<?php echo h($noticia['Noticia']['content']); ?>
                </p>

                

                <!-- Posted Comments -->

                <!-- Comment -->
                

            	
			
		
			<?php endforeach; ?>
					


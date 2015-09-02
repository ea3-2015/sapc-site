<!-- View baked using a 'pretty_cake' template: http://nelson6e65.github.io/pretty_cake -->
<?php
        echo $this->Html->css(array('styles'));
        echo $this->Html->css(array('bootstrap.min'));

        echo $this->Html->css('/assets/font-awesome/4.4.0/css/font-awesome.min');

        echo $this->Html->script(array('jquery-2.1.3'));
        echo $this->Html->script(array('scripts'));
        echo $this->Html->script(array('bootstrap.min'));
    ?>



<div id="noticias-index" >
		<div class="area_principal">
			
			<table>
			<?php foreach ($noticias as $noticia): ?>
				<thead>
				<tr>
					<th>
						<div class="titulo_noticia"><?php echo h($noticia['Noticia']['title']); ?></div>
						<br>
					</th>
				</tr>
					<tr>
						<th rowspan="2">
							dfsdfs
						</th>
						
						<th valign="top">
							<div class="resumen_noticia">
							<th><?php echo h($noticia['Noticia']['content']); ?></th>	
							
							</div>
						</th>
					</tr>
				</thead>
			
		<tbody>
			
						<tr>
							
							<td>
							<td>
								
							</td>
							<td></td>
							
							
						</tr>
			<?php endforeach; ?>
					</tbody>

			</table>
		</div>
	<div class="panel-body" style="overflow: auto;">

		

	</div>
		
	<div class="panel-footer">
		
			
		</div>

		
	</div>
</div>
